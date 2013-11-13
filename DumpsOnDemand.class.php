<?php
/**
 * A class for generating database dump on user's request.
 *
 * Originally used mysqldump, but then I realized it's a security issue due to
 * revision.rev_deleted so I had to switch to XML format...sucks, but whatcha
 * gonna do?
 *
 * Based on Krzysztof Krzyżaniak's work and changed quite radically for
 * ShoutWiki by Jack Phoenix <jack@shoutwiki.com>.
 * Original code portions written by Jack are in the public domain.
 *
 * @file
 * @ingroup Extensions
 */
ini_set('memory_limit', '256M');

class DumpsOnDemand {

	const BASEURL = 'http://www.shoutwiki.com/dumps';
	const DUMPDIR = '/var/www/live/dumps';

	/**
	 * Adds the "request a database dump" button to the Special:Statistics page
	 *
	 * @param $specialPage SpecialStatistics
	 * @param $text String: HTML
	 * @return Boolean: true
	 */
	public static function customSpecialStatistics( &$specialPage, &$text ) {
		global $wgDBname, $wgContLang, $wgRequest, $wgUser, $wgDumpsOnDemandDisabledWikis;

		$dumpFile = self::getDirectory( $wgDBname ) . '.xml.tar.gz'; // '.sql.gz';
		$dumpFileExists = file_exists( $dumpFile );
		// If there is a dump file for this database, get its modification time
		// and the MediaWikified version of it (for GUI display)
		// If not...hello dummy values.
		if ( $dumpFileExists ) {
			$dumpTimestamp = filemtime( $dumpFile );
			$mwTimestamp = $wgContLang->timeanddate( $dumpTimestamp );
		} else {
			$dumpTimestamp = 00000000000000; // yeah, 14 zeros, what were you expecting?
			$mwTimestamp = wfMsg( 'dump-database-unknown' );
		}

		// Can we create a new database dump? Let's do some voodoo to find out!
		$week = 7 * 24 * 60 * 60;
		// wfTimestampNow() returns something like 20110317145501, while
		// strtotime returns something like 1300398901
		//
		// Jack's note: I'm not sure if the original Wikia strtotime() magic
		// works with my code, hence this shortcut here.
		if( $dumpTimestamp == 00000000000000 ) {
			$available = true;
		} elseif( strtotime( wfTimestampNow() ) - $dumpTimestamp > $week ) {
			$available = true;
		} else {
			$available = false;
		}

		$fullDumpURL = self::getURL( $wgDBname );
		$fullDumpTimestamp = $mwTimestamp;
		$dumpLink = $mwTimestamp; // show something ("unknown") even if a DB dump file doesn't exist
		if ( $dumpFileExists ) {
			$dumpLink = '<a href="' . $fullDumpURL . '">' .
				$fullDumpTimestamp . '</a>';
		}

		$text .= '<br />
<h2>' . wfMsg( 'dump-database' ) . '</h2>' .
wfMsg( 'dump-database-info' ) .
'<form action="' . $specialPage->getTitle()->getFullURL() .'" method="post">
<table class="mw-statistics-table">
	<tr>
		<td style="border-right: 0">' .
			wfMsg( 'dump-database-full-pages' ) .
			'<div class="small">' .
			wfMsg( 'dump-database-full-pages-info' ) .
			'</div>
		</td>
		<td style="border-left: 0">
			&nbsp;' . $dumpLink .
		'</td>
	</tr>';

		// Only privileged users may generate a new database dump
		if( $wgUser->isAllowed( 'generatedump' ) && !in_array( $wgDBname, $wgDumpsOnDemandDisabledWikis ) ) {
			$text .= '<tr>
		<td style="border-right: 0">' .
			wfMsg( 'dump-database-request' ) .
			'<div class="small">' .
				wfMsg( 'dump-database-request-info' ) .
			'</div>
		</td>
		<td style="border-left: 0">
			<form>';
			if ( $available ) {
				$text .= '<input type="submit" value="' . wfMsg( 'dump-database-request-submit' ) . '" />';
			} else {
				$text .= '<input type="submit" value="' . wfMsg( 'dump-database-request-already-submitted' ) . '" disabled="disabled" />';
			}
			$text .= '</form>
		</td>
	</tr>';
		}
		$text .= '</table>
</form>
<div class="right">' . wfMessage( 'dump-database-info-more' )->parse() . '</div>';

		if( $wgRequest->wasPosted() && $wgUser->isAllowed( 'generatedump' ) ) {
			wfDebugLog( 'DumpsOnDemand', 'request for database dump was posted, about to call the dumper function' );
			$dump = self::runDumpBackup();
			wfDebugLog( 'DumpsOnDemand', 'dumper function finished, theoretically anyway, return value is:' . print_r( $dump, true ) );
			$error = $dump['error'];
			if ( empty( $error ) ) { // error is empty -> everything went well
				$dirParts = self::getDirectoryParts( $wgDBname );
				$text = '<div class="successbox" style="margin: 0; margin-bottom: 1em;">' .
					wfMsg( 'dump-database-dump-complete',
						self::BASEURL, $dirParts[0], $dirParts[1], $wgDBname
					) .
					'</div><br style="clear: both;" />' . $text;
			} elseif ( !empty( $error ) ) { // shit happened...
				$text = '<div class="errorbox" style="margin: 0; margin-bottom: 1em;">' .
					wfMsg( 'dump-database-error-happened', $error ) .
					'</div><br style="clear: both;" />' . $text;
			}
		}

		return true;
	}

	/**
	 * Run dumpBackup.php to generate a database dump of the current wiki's
	 * database, but only if no other mysqldump processes are running.
	 *
	 * @return Array: the 'error' key contains the error message, if any
	 */
	public static function runDumpBackup() {
		global $wgDBserver, $wgDBuser, $wgDBpassword, $wgDBname, $wgMemc;
		global $wgDumpsOnDemandDisabledWikis;

		if ( in_array( $wgDBname, $wgDumpsOnDemandDisabledWikis ) ) {
			return array(
				'error' => wfMsg( 'dump-database-error' )
			);
		}

		$key = wfMemcKey( 'dumps-on-demand', 'wiki-db', $wgDBname );
		$data = $wgMemc->get( $key );

		// found a memcached entry -> dump was requested (too) recently
		if ( !empty( $data ) ) {
			return array(
				'error' => wfMsg( 'dump-database-error' )
			);
		} elseif ( empty( $data ) ) {
			// no memcached record of a pre-existing dump, so let's generate
			// a new database dump

			// Create the directories if they don't exist already, because we
			// can't put the output into a dir that doesn't exist
			// (as per Lewis) -- apparently directory creation isn't as
			// automatic as it should be...
			$dirParts = self::getDirectoryParts( $wgDBname );
			if ( !is_dir( self::DUMPDIR . '/' . $dirParts[0] ) ) {
				mkdir( self::DUMPDIR . '/' . $dirParts[0] );
				mkdir( self::DUMPDIR . '/' . $dirParts[0] . '/' . $dirParts[1] );
			} elseif ( is_dir( self::DUMPDIR . '/' . $dirParts[0] ) && !is_dir( self::DUMPDIR . '/' . $dirParts[0] . '/' . $dirParts[1] ) ) {
				mkdir( self::DUMPDIR . '/' . $dirParts[0] . '/' . $dirParts[1] );
			}

			// This originally used wfShellExec to call dumpBackup.php, but
			// whaddya know, it failed epicly.
			//
			// 10:12 <Skizzerz> don't use wfShellExec
			// 10:12 <Skizzerz> it's a "pass and pray" function
			// 10:12 <Skizzerz> meaning you can't hook into it and see if/why it fails

			// generate a dump and then gzip it to save some space
			// fucking like this with output buffering is not nice, but
			// necessary
			// Well, that's a minor evil, considering that the code actually
			// works and all ;-)
			ob_start();
			self::generateXMLdump( WikiExporter::FULL, WikiExporter::TEXT );
			$dumpContents = ob_get_contents();
			ob_end_clean();
			// and gzip it
			$gz = gzopen( self::getDirectory( $wgDBname ) . '.xml.tar.gz', 'w9' );
			// http://php.net/manual/en/function.gzwrite.php says that the
			// function returns the number of (uncompressed) bytes written to
			// the given gz-file stream
			$bytes = gzwrite( $gz, $dumpContents );
			gzclose( $gz );

			if ( $bytes > 0 ) {
				// everything's OK, so set a memcached key so that users can't
				// overload the server by requesting new dumps constantly
				$wgMemc->set( $key, $wgDBname, 60 * 60 * 24 * 7 /* a week */ );
				return array(
					'error' => null // means that there was no error
				);
			} else {
				wfDebugLog( 'DumpsOnDemand', 'error writing the gz file!' );
				error_log( 'DumpsOnDemand: error writing the gz file!' );
				return array(
					'error' => wfMsg( 'dump-database-error' )
				);
			}
		}
	}

	/**
	 * Run mysqldump to generate a database dump of the current wiki's
	 * database, but only if no other mysqldump processes are running.
	 *
	 * @return Array: the 'error' key contains the error message, if any
	 */
	public static function runDumper() {
		global $wgDBserver, $wgDBuser, $wgDBpassword, $wgDBname, $wgMemc;
		global $wgDumpsOnDemandDisabledWikis;

		if ( in_array( $wgDBname, $wgDumpsOnDemandDisabledWikis ) ) {
			return array(
				'error' => wfMsg( 'dump-database-error' )
			);
		}

		$key = wfMemcKey( 'dumps-on-demand', 'wiki-db', $wgDBname );
		$data = $wgMemc->get( $key );

		// found a memcached entry -> dump was requested (too) recently
		if ( !empty( $data ) ) {
			return array(
				'error' => wfMsg( 'dump-database-error' )
			);
		} elseif ( empty( $data ) ) {
			// no memcached record of a pre-existing dump, so let's generate
			// a new database dump

			// Check if there already is a mysqldump process running
			// (it doesn't matter if it's dumping a different database, we
			// allow only one mysqldump to run at a time because it's fucking
			// expensive)
			$existingProcess = wfShellExec( '/bin/ps -A | grep mysqldump', $error );

			// error code 1 in reality means that there was no error, but the
			// grep command returned nothing because there are no concurrent
			// mysqldump processes running, which is why we ignore it here...
			if ( $error !== 1 ) { // error happened
				wfDebugLog( 'DumpsOnDemand', 'error while using ps + grep to find existing mysqldump processes, error was: ' . $error );
				error_log( 'DumpsOnDemand: error while using ps + grep to find existing mysqldump processes, error was: ' . $error );
				return array(
					'error' => wfMsg( 'dump-database-error-grep' )
				);
			} elseif ( !empty( $existingProcess ) ) {
				// signal to the user that there already is a mysqldump running and
				// that they can't start a new one before the old one has completed
				return array(
					'error' => wfMsg( 'dump-database-mysqldump-already-running' )
				);
			}

			// Array of tables that should be dumped
			// This array must NOT contain any tables which contain private
			// user information, such as: cu_changes, cu_log (CheckUser ext.),
			// user (self-explanatory), watchlist
			$tables = array(
				'categorylinks',
				'externallinks',
				'image',
				'imagelinks',
				'langlinks',
				'page',
				'page_restrictions',
				'pagelinks',
				'revision',
				'templatelinks',
				'text'
			);

			// Connect to the database that we're about to dump
			$dbr = wfGetDB( DB_SLAVE, array(), $wgDBname );

			// An array of tables that may or may not exist, including all
			// tables created by social tools and other opt-in extensions
			// (such as WikiForum) and custom stuff.
			//
			// @todo FIXME: This looks quite slow to me but who knows...I'm not aware
			// of a better method though. --JP 19 March 2011
			$optionalTables = array(
				'ajaxpoll_info',// 'ajaxpoll_vote', // AJAX Poll (Datrio) extension -- ajaxpoll_vote contains an IP column, so it's a no-go
				//'Comments', 'Comments_block',
				'Comments_Vote', // Comments ext. -- first two tables have IP columns, so they're a big no-no
				'fantag', 'user_fantag', // FanBoxes extension
				'link', // LinkFilter extension
				'picturegame_images', 'picturegame_votes', // PictureGame ext.
				'poll_choice', 'poll_question', 'poll_user_vote', // PollNY ext.
				'quizgame_questions', 'quizgame_answers', 'quizgame_choice', 'quizgame_user_view', // QuizGame ext.
				'user_points_archive', 'user_points_monthly', 'user_points_weekly', // RandomFeaturedUser ext. / core social tools
				// CORE SOCIAL TOOLS (SocialProfile) BEGIN
				'user_system_gift', 'system_gift', // SystemGifts
				//'user_board', // UserBoard -- contains private messages too, so better not to dump that
				'user_gift', 'gift', // UserGifts
				'user_profile', // UserProfile
				'user_relationship',// 'user_relationship_request', // UserRelationship -- request table contains private data (messages)
				'user_stats', // UserStats
				'user_system_messages', // UserSystemMessages
				// CORE SOCIAL TOOLS (SocialProfile) END
				'oldvideo', 'video', // Video extension
				//'Vote', // VoteNY extension -- has an IP column, so can't dump it
				'wikiforum_category', 'wikiforum_forums', 'wikiforum_threads', 'wikiforum_replies' // WikiForum extension
			);
			foreach ( $optionalTables as $optionalTable ) {
				if ( $dbr->tableExists( $optionalTable ) ) {
					$tables[] = $optionalTable;
				}
			}

			$tablesAsString = implode( ' ', $tables );

			// Create the directories if they don't exist already, because we
			// can't put the output of mysqldump into a dir that doesn't exist
			// (as per Lewis) -- apparently directory creation isn't as
			// automatic as it should be...
			$dirParts = self::getDirectoryParts( $wgDBname );
			if ( !is_dir( self::DUMPDIR . '/' . $dirParts[0] ) ) {
				mkdir( self::DUMPDIR . '/' . $dirParts[0] );
				mkdir( self::DUMPDIR . '/' . $dirParts[0] . '/' . $dirParts[1] );
			} elseif ( is_dir( self::DUMPDIR . '/' . $dirParts[0] ) && !is_dir( self::DUMPDIR . '/' . $dirParts[0] . '/' . $dirParts[1] ) ) {
				mkdir( self::DUMPDIR . '/' . $dirParts[0] . '/' . $dirParts[1] );
			}

			// use mysqldump to generate a dump and then gzip it to save some space
			$cmd = sprintf(
				"%s -h%s -u%s -p\"%s\" %s %s | /bin/gzip -cf > %s.sql.gz",
				'/usr/bin/mysqldump',
				$wgDBserver,
				$wgDBuser,
				$wgDBpassword,
				$wgDBname,
				$tablesAsString,
				self::getDirectory( $wgDBname )
			);

			wfShellExec( $cmd, $retval );

			if ( $retval ) { // error happened
				wfDebugLog( 'DumpsOnDemand', 'error in runDumper, error was: ' . $retval );
				error_log( 'DumpsOnDemand: error in runDumper, error was: ' . $retval );
				return array(
					'error' => $retval // @todo FIXME: is this safe to display to the end-user?
				);
			} else {
				// everything's OK, so set a memcached key so that users can't
				// overload the server by requesting new dumps constantly
				$wgMemc->set( $key, $wgDBname, 60 * 60 * 24 * 7 /* a week */ );
				return array(
					'error' => null // means that there was no error
				);
			}
		}
	}

	/**
	 * Get the URL to the place where dumps are stored.
	 *
	 * @param $database String: database name
	 * @param $file String: DB dump file name; if not given, defaults to
	 *                      database name.xml.gz
	 * @param $baseURL String: optional override of the base dump server URL
	 *                         (www.shoutwiki.com/dumps)
	 * @return String
	 */
	public static function getURL( $database, $file = false, $baseURL = false ) {
		$database = strtolower( $database );

		return sprintf(
			'%s/%s/%s/%s',
			( $baseURL === false ) ? self::BASEURL : $baseURL,
			substr( $database, 0, 1 ),
			substr( $database, 0, 2 ),
			$database . '.xml.gz' //'.sql.gz'
		);
	}

	/**
	 * Get the filesystem path to the place where dumps are stored.
	 *
	 * @param $database String: database name
	 * @return String: full filesystem path without the file extension, such as
	 *                 /home/shout/public_html/dumps/2/24/24_fiwiki
	 */
	public static function getDirectory( $database ) {
		return sprintf(
			'%s/%s/%s/%s',
			self::DUMPDIR,
			substr( $database, 0, 1 ),
			substr( $database, 0, 2 ),
			$database
		);
	}

	/**
	 * Get the filesystem path to the place where dumps are stored.
	 *
	 * @param $database String: database name
	 * @return Array: array( '2', '24' ) if $database is 24_fiwiki
	 */
	public static function getDirectoryParts( $database ) {
		return array(
			substr( $database, 0, 1 ),
			substr( $database, 0, 2 )
		);
	}

	/**
	 * from maintenance/backup.inc
	 */
	public static function generateXMLdump( $history = WikiExporter::FULL, $text = WikiExporter::TEXT ) {
		global $wgDBname;

		# Notice messages will foul up your XML output even if they're
		# relatively harmless.
		if ( ini_get( 'display_errors' ) ) {
			ini_set( 'display_errors', wfGetNull() );
		}

		$db = wfGetLBFactory()->newMainLB()->getConnection( DB_SLAVE, 'backup', $wgDBname );

		// Discourage the server from disconnecting us if it takes a long time
		// to read out the big ol' batch query.
		$db->setSessionOptions( array( 'connTimeout' => 3600 * 24 ) );

		$exporter = new WikiExporter( $db, $history, WikiExporter::BUFFER /*STREAM*/, $text );
		$exporter->dumpUploads = true;
		$exporter->dumpUploadFileContents = false; // for now

		$wrapper = new DumpFilter( new DumpOutput() );
		$exporter->setOutputSink( $wrapper );

		$retVal = $exporter->openStream();

		# Log item dumps: all or by range
		//if ( $history & WikiExporter::LOGS ) {
			//$exporter->allLogs();
			# Page dumps: all or by page ID range
		//} else {
			$retVal .= $exporter->allPages();
		//}

		$retVal .= $exporter->closeStream();

		return $retVal;
	}
}
