<?php
/**
 * Simple hook for displaying additional information in Special:Statistics
 * (a "generate a database dump" button, to be exact)
 *
 * @file
 * @ingroup Extensions
 * @version 1.2.1
 * @date 11 August 2013
 * @author Krzysztof Krzyżaniak <eloy@wikia-inc.com>
 * @author Jack Phoenix <jack@shoutwiki.com>
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is not a valid entry point to MediaWiki.' );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['other'][] = array(
	'name' => 'DumpsOnDemand',
	'author' => array( 'Krzysztof Krzyżaniak', 'Jack Phoenix' ),
	'version' => '1.2.1',
	'description' => 'Creates a database dump on user\'s request',
	'url' => 'http://www.mediawiki.org/wiki/Extension:DumpsOnDemand',
);

// Set up the hook and i18n file and autoload the class
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['DumpsOnDemand'] = $dir . 'DumpsOnDemand.i18n.php';
$wgAutoloadClasses['DumpsOnDemand'] = $dir . 'DumpsOnDemand.class.php';
$wgHooks['CustomSpecialStatistics'][] = 'DumpsOnDemand::customSpecialStatistics';

// New user right, required to use the system, as per Jedimca0
$wgAvailableRights[] = 'generatedump';
$wgGroupPermissions['steward']['generatedump'] = true;

// Array of database names for which the "generate a dump" button will never be available
$wgDumpsOnDemandDisabledWikis = array();
