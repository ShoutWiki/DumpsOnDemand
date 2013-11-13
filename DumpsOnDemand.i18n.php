<?php
/**
 * Internationalisation file for DumpsOnDemand extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English */
$messages['en'] = array(
	'dump-database' => 'Database dumps',
	'dump-database-info' => 'Database dumps can be used as a personal backup (ShoutWiki produces separate backups of all wikis automatically) or for maintenance bots',
	//'dump-database-curr-pages' => 'Current pages',
	//'dump-database-curr-pages-info' => '(This version is usually best for bot use)',
	'dump-database-full-pages' => 'Current pages and history',
	'dump-database-full-pages-info' => '(Warning: this file may be very large)',
	'dump-database-request' => 'Update',
	'dump-database-request-info' => '(Dumps are usually generated weekly)',
	'dump-database-request-submit' => 'Generate a new dump',
	'dump-database-request-already-submitted' => 'Dump has been generated recently (less than 7 days ago)',
	'dump-database-info-more' => 'See the [[s:Help:Database download|help page]] for more info.',
	'dump-database-unknown' => 'unknown',
	'dump-database-dump-complete' => 'The database dump was completed successfully.
You can download it from <a href="$1/$2/$3/$4.xml.tar.gz">our database dump site</a>.',
	'dump-database-error-happened' => 'There was an error while processing your request.
Returned error message was: $1',
	'dump-database-error-grep' => 'Could not get information about currently running dump processes',
	'dump-database-mysqldump-already-running' => 'There is already a database dump process running; please wait until it is complete.',
	'action-generatedump' => 'generate a database dump',
	'right-generatedump' => 'Generate database dumps by pressing a button on [[Special:Statistics|the statistics page]]',
	//'dump-database-info-more' => 'Please <a href="http://community.wikia.com/wiki/Help:Database_download">see</a> for more info'
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'dump-database' => 'Databasis-dumps',
	'dump-database-info' => "Databasisdumps kan gebruik word as persoonlike rugsteun (back-up) of vir onderhoudsrobotte.
ShoutWiki maak outomaties rugsteunkopieë van alle wiki's.",
	//'dump-database-curr-pages' => 'Huidige bladsye',
	//'dump-database-curr-pages-info' => '(Hierdie weergawe is gewoonlik die beste vir robotte)',
	'dump-database-full-pages' => 'Huidige bladsye en geskiedenis',
	'dump-database-full-pages-info' => '(Waarskuwing: hierdie lêer mag moontlik baie groot wees)',
	#'dump-database-request' => "Versoek 'n opdatering",
	'dump-database-request-info' => '(Dumps word gewoonlik weekliks gegenereer)',
	#'dump-database-request-submit' => 'Stuur versoek',
	//'dump-database-info-more' => '<a href="http://community.wikia.com/wiki/Help:Database_download">Meer inligting</a>.',
);

/** Arabic (العربية)
 * @author Achraf94
 */
$messages['ar'] = array(
	'dump-database' => 'مقالب قاعدة البيانات',
	//'dump-database-info' => 'يمكن استخدام مقالب قاعدة البيانات على سبيل الإحتياط الشخصي (ويكيا تنتج نسخا احطياطية منفصلة لكل الويكيات تلقائيا) أو للصيانة عبر البوتات.', // contains a Wikia reference in a non-Latin script
	//'dump-database-curr-pages' => 'الصفحات الحالية',
	//'dump-database-curr-pages-info' => '(من الأفضل إستعمال بوت لهذه النسخة)',
	'dump-database-full-pages' => 'الصفحات الحالية و التاريخ',
	'dump-database-full-pages-info' => '(تحذير: هذا الملف كبير جدا)',
	#'dump-database-request' => 'طلب تحديث',
	'dump-database-request-info' => '(يتم التحديث أسبوعيا عادة)',
	#'dump-database-request-submit' => 'إرسال طلب',
	//'dump-database-info-more' => 'الرجاء <a href="http://community.wikia.com/wiki/Help:Database_download">قراءة هذا</a> لمزيد من المعلومات',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'dump-database' => 'Копіі базы зьвестак',
	'dump-database-info' => 'Копіі базы зьвестак могуць выкарыстоўвацца ў якасьці асабістай рэзэрвовай копіі (ShoutWiki стварае асобныя рэзэрвовая копіі для ўсіх вікі аўтаматычна) альбо для робатаў падтрымкі',
	//'dump-database-curr-pages' => 'Цяперашнія старонкі',
	//'dump-database-curr-pages-info' => '(Гэтая вэрсія, звычайна, лепшая для выкарыстаньня робатамі)',
	'dump-database-full-pages' => 'Цяперашнія старонкі і гісторыя',
	'dump-database-full-pages-info' => '(Папярэджаньне: гэты файл можа быць занадта вялікім)',
	#'dump-database-request' => 'Запытаць абнаўленьне',
	'dump-database-request-info' => '(Копіі звычайна ствараюцца штотыдзень)',
	#'dump-database-request-submit' => 'Даслаць запыт',
	#'dump-database-request-already-submitted' => 'Копія была запытаная нядаўна (меней 7 дзён таму)',
	//'dump-database-info-more' => 'Калі ласка, глядзіце дадатковую інфармацыю <a href="http://community.wikia.com/wiki/Help:Database_download">тут</a>',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'dump-database' => 'Дъмпове на базата данни',
	//'dump-database-curr-pages' => 'Текущи страници',
);

/** Bahasa Banjar (Bahasa Banjar)
 * @author Ezagren
 */
$messages['bjn'] = array(
	//'dump-database-curr-pages' => 'Tungkaran wayahini',
	'dump-database-full-pages' => 'Tungkaran wayahini wan sajarah',
	#'dump-database-request' => 'Maminta pamugaan',
	#'dump-database-request-submit' => 'Kirim parmintaan',
);

/** Breton (Brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'dump-database' => 'Tumpoù an diaz roadennoù',
	'dump-database-info' => "Gallout a ra dilerc'hioù ar bank roadennoù bezañ implijet da eilenn savete personel (ent emgefre e sav ShoutWiki eilennoù savete diforc'h evit an holl wikioù) pe evit ar botoù trezalc'h",
	//'dump-database-curr-pages' => 'Pajennoù red',
	//'dump-database-curr-pages-info' => "(Gwelloc'h eo ar stumm-se evit implijoù ur bot)",
	'dump-database-full-pages' => 'Pajennoù a-vremañ hag istor',
	'dump-database-full-pages-info' => '(Diwallit : marteze eo bras-tre ar restr-mañ)',
	#'dump-database-request' => 'Goulenn un hizivadenn',
	'dump-database-request-info' => '(Graet e vez an tumpoù dre sizhun dre vras)',
	#'dump-database-request-submit' => 'Kas ar reked',
	#'dump-database-request-already-submitted' => "Goulennet ez eus bet krouiñ un diell nevez zo (nebetoc'h eget 7 devezh zo)",
	//'dump-database-info-more' => 'Mar plij lennit <a href="http://community.wikia.com/wiki/Help:Database_download">amañ</a> evit muioc\'h a ditouroù',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
#$messages['bs'] = array(
	//'dump-database-curr-pages' => 'Trenutne stranice',
	#'dump-database-request' => 'Zahtjevaj ažuriranje',
	#'dump-database-request-submit' => 'Pošalji zahtjev',
#);

/** Czech (Česky)
 * @author Dontlietome7
 * @author Mr. Richard Bolla
 */
$messages['cs'] = array(
	'dump-database' => 'Výstupy databáze',
	'dump-database-info' => 'Výstupy z databáze mohou být využity pro osobní zálohování (ShoutWiki automaticky produkuje odděléné zálohy všech wiki) nebo pro obsluhu botů',
	//'dump-database-curr-pages' => 'Aktuální stránky',
	//'dump-database-curr-pages-info' => '(Tato verze je obvykle nejlepší pro použití bota)',
	'dump-database-full-pages' => 'Aktuální stránky a historie',
	'dump-database-full-pages-info' => '(Upozornění: tento soubor může být velmi velký)',
	#'dump-database-request' => 'Požádat o aktualizaci',
	'dump-database-request-info' => '(Výstupy jsou obvykle generovány každý týden)',
	#'dump-database-request-submit' => 'Odeslat požadavek',
	#'dump-database-request-already-submitted' => 'O výstup z databáze bylo požádáno nedávno (před méně než 7 dny)',
	//'dump-database-info-more' => 'Více informací <a href="http://community.wikia.com/wiki/Help:Database_download">zde</a>',
);

/** Danish (Dansk)
 * @author Emilkris33
 */
$messages['da'] = array(
	'dump-database' => 'Database dumps',
	'dump-database-info' => 'Database dumps kan bruges som en personlig backup (ShoutWiki laver separate backups af alle wikier automatisk) eller til vedligeholdelses bots',
	//'dump-database-curr-pages' => 'Nuværende sider',
	//'dump-database-curr-pages-info' => '(Denne version er normalt bedst til bot brug)',
	'dump-database-full-pages' => ' Nuværende sider og historie',
	'dump-database-full-pages-info' => '(Advarsel: Denne fil kan være meget stor)',
	#'dump-database-request' => 'Anmod om en opdatering',
	'dump-database-request-info' => '(Dumps genereres normalt ugentligt)',
	#'dump-database-request-submit' => 'Send forespørgsel',
	//'dump-database-info-more' => '<a href="http://community.wikia.com/wiki/Help:Database_download">Se</a> venligst for mere info',
);

/** German (Deutsch)
 * @author LWChris
 * @author MtaÄ
 * @author The Evil IP address
 */
$messages['de'] = array(
	'dump-database' => 'Datenbank-Dumps',
	'dump-database-info' => 'Datenbank-Dumps können als persönliches Backup (ShoutWiki produziert automatisch separate Backups aller Wikis) oder für Wartungsbots genutzt werden',
	//'dump-database-curr-pages' => 'Aktuelle Seiten',
	//'dump-database-curr-pages-info' => '(Diese Version eignet sich normalerweise am besten für Bots)',
	'dump-database-full-pages' => 'Aktuelle Seiten und Versionsgeschichte',
	'dump-database-full-pages-info' => '(Warnung: Diese Datei könnte sehr groß sein)',
	#'dump-database-request' => 'Ein Update beantragen',
	'dump-database-request-info' => '(Dumps werden normalerweise wöchentlich generiert)',
	#'dump-database-request-submit' => 'Anfrage absenden',
	#'dump-database-request-already-submitted' => 'Dump wurde kürzlich (weniger als 7 Tagen) angefordert',
	//'dump-database-info-more' => 'Bitte siehe <a href="http://community.wikia.com/wiki/Help:Database_download">hier</a> für weitere Infos.',
);

/** Greek (Ελληνικά)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['el'] = array(
	//'dump-database-curr-pages' => 'Τρέχουσες σελίδες',
	'dump-database-full-pages' => 'Τρέχουσες σελίδες και ιστορικό',
	'dump-database-full-pages-info' => '(Προσοχή: αυτό το αρχείο μπορεί να είναι πολύ μεγάλο)',
	#'dump-database-request' => 'Ζητήστε μια ενημέρωση',
	#'dump-database-request-submit' => 'Αποστολή αίτησης',
	//'dump-database-info-more' => 'Παρακαλώ να <a href="http://community.wikia.com/wiki/Help:Database_download">δείτε</a>  για περισσότερες πληροφορίες',
);

/** Spanish (Español)
 * @author Bola
 * @author Locos epraix
 * @author Translationista
 */
$messages['es'] = array(
	'dump-database' => 'Descarga de Base de Datos',
	'dump-database-info' => 'La descarga de la base de datos puede ser usada como una copia de seguridad personal (ShoutWiki produce copias de seguridad separadas para todos los wikis automáticamente) o para los bots de mantenimiento.',
	//'dump-database-curr-pages' => 'Páginas actuales',
	//'dump-database-curr-pages-info' => '(Esta versión es normalmente la mejor para el uso de bots)',
	'dump-database-full-pages' => 'Páginas actuales e historial',
	'dump-database-full-pages-info' => '(Advertencia: Este archivo puede ser muy pesado)',
	#'dump-database-request' => 'Solicitar una actualización',
	'dump-database-request-info' => '(Las descargas normalmente se generan semanalmente)',
	#'dump-database-request-submit' => 'Enviar solicitud',
	#'dump-database-request-already-submitted' => 'Se ha solicitado volcado recientemente (hace menos de 7 días)',
	//'dump-database-info-more' => 'Por favor, <a href="http://community.wikia.com/wiki/Help:Database_download">ver esto</a> para más información',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'dump-database-full-pages-info' => '(Oharra: fitxategi hau handiegia izan daiteke)',
	#'dump-database-request' => 'Eguneraketa eskatu',
	#'dump-database-request-submit' => 'Eskaera bidali',
	//'dump-database-info-more' => 'Mesedez <a href="http://community.wikia.com/wiki/Help:Database_download">ikusi</a> informazio gehiagorako',
);

/** Finnish (Suomi)
 * @author Centerlink
 * @author Crt
 * @author Jack Phoenix
 */
$messages['fi'] = array(
	'dump-database' => 'Tietokantavedokset',
	'dump-database-info' => 'Tietokantavedoksia voidaan käyttää henkilökohtaisina varmuuskopioina (ShoutWiki tuottaa erilliset varmuuskopiot kaikista wikeistä automaattisesti) tai bottitarkoituksiin.',
	//'dump-database-curr-pages' => 'Nykyiset sivut',
	//'dump-database-curr-pages-info' => '(Tämä versio on yleensä paras bottikäyttöön)',
	'dump-database-full-pages' => 'Nykyiset sivut ja historia',
	'dump-database-full-pages-info' => '(Varoitus: Tämä tiedosto saattaa olla erittäin suuri)',
	'dump-database-request' => 'Päivitä',
	'dump-database-request-info' => '(Vedokset luodaan yleensä viikoittain)',
	'dump-database-request-submit' => 'Luo uusi tietokantavedos',
	'dump-database-request-already-submitted' => 'Vedos on luotu äskettäin (alle 7 päivää sitten)',
	'dump-database-info-more' => 'Katso [[s:w:fi:Ohje:Tietokantavedokset|ohjesivulta]] lisätietoja.',
	'dump-database-unknown' => 'tuntematon',
	'dump-database-dump-complete' => 'Tietokantavedos luotiin onnistuneesti.
Voit ladata sen <a href="$1/$2/$3/$4.xml.tar.gz">tietokantavedossivustoltamme</a>.',
	'dump-database-error-happened' => 'Pyyntöäsi suoritettaessa tapahtui virhe.
Virheviesti oli: $1',
	'dump-database-error-grep' => 'Ei saatu tietoja samanaikaisista käynnissä olevista vedosprosesseista',
	'dump-database-mysqldump-already-running' => 'Tietokantavedosprosessi on jo käynnissä; odota kunnes se on valmis.',
	//'dump-database-info-more' => '<a href="http://community.wikia.com/wiki/Help:Database_download">Katso lisätietoja</a>',
	'action-generatedump' => 'luoda tietokantavedosta',
	'right-generatedump' => 'Luoda tietokantavedoksia painamalla nappia [[Special:Statistics|tilastosivulla]]',
);

/** French (Français)
 * @author IAlex
 * @author Jean-Frédéric
 * @author Peter17
 */
$messages['fr'] = array(
	'dump-database' => 'Dumps de la base de données',
	'dump-database-info' => 'Les dumps de la base de données peuvent être utilisés comme sauvegarde personnelle (ShoutWiki produit automatiquement des sauvegardes séparées de tous les wikis) ou pour les robots de maintenance',
	//'dump-database-curr-pages' => 'Pages actuelles',
	//'dump-database-curr-pages-info' => '(Cette version est généralement la meilleure pour une utilisation pour un bot)',
	'dump-database-full-pages' => 'Pages actuelles et historique',
	'dump-database-full-pages-info' => '(Attention : ce fichier peut être très grand)',
	#'dump-database-request' => 'Demander une mise à jour',
	'dump-database-request-info' => '(Les dumps sont généralement effectués chaque semaine)',
	#'dump-database-request-submit' => 'Envoyer la requête',
	#'dump-database-request-already-submitted' => 'La création d’une archive a été récemment demandée (il y a moins de 7 jours)',
	'dump-database-info-more' => 'Voyez [[s:Help:Database download|la page d\'aide]] pour plus d\'informations',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'dump-database' => 'Copias da base de datos',
	'dump-database-info' => 'As copias da base de datos pódense usar como unha copia de seguridade persoal (ShoutWiki produce automaticamente copias de seguridade separadas de todos os wikis) ou para os bots de mantemento',
	//'dump-database-curr-pages' => 'Páxinas actuais',
	//'dump-database-curr-pages-info' => '(Esta versión é a miúdo a mellor para o seu uso por parte dun bot)',
	'dump-database-full-pages' => 'Páxinas actuais e historial',
	'dump-database-full-pages-info' => '(Atención: este ficheiro pode ser moi grande)',
	#'dump-database-request' => 'Solicitar unha actualización',
	'dump-database-request-info' => '(As copias xéranse frecuentemente cada semana)',
	#'dump-database-request-submit' => 'Enviar a solicitude',
	#'dump-database-request-already-submitted' => 'A copia de seguridade solicitouse recentemente (hai menos de 7 días)',
	//'dump-database-info-more' => 'Por favor, <a href="http://community.wikia.com/wiki/Help:Database_download">lea isto</a> para obter máis información',
);

/** Hebrew (עברית)
 * @author 0ftal
 */
$messages['he'] = array(
	'dump-database' => 'גיבויי מסד הנתונים',
	//'dump-database-info' => 'מגבה מסד נתונים יכול לשמש כגיבוי אישי (ויקיה מייצרת גיבויים נפרדים של כל הויקי באופן אוטומטי) או עבור רובוטי התחזוקה', // contains a Wikia reference in a non-Latin script
);

/** Hungarian (Magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'dump-database' => 'Adatbázis dumpok',
	'dump-database-info' => 'Az adatbázis dumpok használhatóak személyes biztonsági mentésként (a ShoutWiki az összes wikiről automatikusan készít különálló mentéseket) vagy karbantartó botokhoz',
	//'dump-database-curr-pages' => 'Aktuális lapok',
	//'dump-database-curr-pages-info' => '(Általában ez a verzió a legmegfelelőbb bottal való feldolgozásra)',
	'dump-database-full-pages' => 'Aktuális lapok és laptörténet',
	'dump-database-full-pages-info' => '(Figyelmeztetés: ez a fájl igen nagy lehet)',
	#'dump-database-request' => 'Frissítés kérése',
	'dump-database-request-info' => '(Általában hetente készülnek dumpok)',
	#'dump-database-request-submit' => 'Kérelem elküldése',
	//'dump-database-info-more' => 'További információkat <a href="http://community.wikia.com/wiki/Help:Database_download">itt</a> találsz',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'dump-database' => 'Copias del base de datos',
	'dump-database-info' => 'Le copias del base de datos pote esser usate como copia de securitate personal (ShoutWiki produce automaticamente copias de securitate separate de tote le wikis) o pro le robots de mantenentia.',
	//'dump-database-curr-pages' => 'Paginas actual',
	//'dump-database-curr-pages-info' => '(Iste version es generalmente le melior pro uso per robots)',
	'dump-database-full-pages' => 'Paginas actual e historia',
	'dump-database-full-pages-info' => '(Attention: iste file pote esser multo grande)',
	#'dump-database-request' => 'Requestar un actualisation',
	'dump-database-request-info' => '(Le copias es normalmente generate cata septimana)',
	#'dump-database-request-submit' => 'Inviar requesta',
	#'dump-database-request-already-submitted' => 'Un discarga ha essite requestate recentemente (minus de 7 dies retro)',
	//'dump-database-info-more' => 'Vide <a href="http://community.wikia.com/wiki/Help:Database_download">ulterior informationes</a>',
);

/** Indonesian (Bahasa Indonesia)
 * @author Irwangatot
 */
$messages['id'] = array(
	'dump-database' => 'Limpahan basisdata',
	'dump-database-info' => 'Limpahan basisdata dapat digunakan sebagai cadangan pribadi (ShoutWiki menghasilkan cadangan terpisah dari semua wiki secara otomatis) atau untuk bot pemeliharaan',
	//'dump-database-curr-pages' => 'Halaman sekarang',
	//'dump-database-curr-pages-info' => '(Versi ini biasanya terbaik untuk menggunakan bot)',
	'dump-database-full-pages' => 'Halaman saat ini dan sejarah',
	'dump-database-full-pages-info' => '(Peringatan: Berkas ini mungkin sangat besar)',
	#'dump-database-request' => 'Meminta pembaruan',
	'dump-database-request-info' => '(pelimpahan biasanya dibuat mingguan)',
	#'dump-database-request-submit' => 'Kirim permintaan',
	//'dump-database-info-more' => 'Silakan <a href="http://community.wikia.com/wiki/Help:Database_download">lihat ini</a> untuk informasi lebih lanjut',
);

/** Italian (Italiano)
 * @author OrbiliusMagister
 */
$messages['it'] = array(
	'dump-database' => 'i dump del database',
	'dump-database-info' => 'i dump del database possono essere utilizzati come backup personale (ShoutWiki prodice copie di backup separatedi tutte le wiki automaticamente) o per i bot di manutenzione',
	//'dump-database-curr-pages' => 'pagine attuali',
	//'dump-database-curr-pages-info' => '(Questa versione è normalmente la migliore da far usare ai bot)',
	'dump-database-full-pages' => 'Pagine e cronologia attuali',
	'dump-database-full-pages-info' => '(Attenzione: questo file potrebbe essere molto grande)',
	#'dump-database-request' => 'Richiesta di aggiornamento',
	'dump-database-request-info' => '(di solito i dump sono generati con cadenza settimanale)',
	#'dump-database-request-submit' => 'Invia una richiesta',
	//'dump-database-info-more' => 'Si prega di consultare <a href="http://community.wikia.com/wiki/Help:Database_download">questa pagina</a> per maggiori informazioni',
);

/** Japanese (日本語)
 * @author Hosiryuhosi
 * @author Tommy6
 */
$messages['ja'] = array(
	'dump-database' => 'データベースダンプ',
	//'dump-database-info' => 'データベースダンプは、個人的なバックアップ（ウィキアでは全てのウィキのバックアップを自動的に取っています）やメンテナンスボット用として利用できます。', // contains a Wikia reference in a non-Latin script
	//'dump-database-curr-pages' => '最新のページ',
	//'dump-database-curr-pages-info' => '（ボットで利用する場合には通常最も適したものとなります）',
	'dump-database-full-pages' => '最新ページとその履歴',
	'dump-database-full-pages-info' => '（警告: このファイルは非常に大きなサイズになることがあります）',
	#'dump-database-request' => '更新をリクエスト',
	'dump-database-request-info' => '（ダンプは通常1週間ごとに生成されます）',
	#'dump-database-request-submit' => 'リクエストを送信',
	//'dump-database-info-more' => '詳しくは<a href="http://community.wikia.com/wiki/Help:Database_download">データベースダウンロード</a>をご覧ください。',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	//'dump-database-curr-pages' => 'ಪ್ರಸ್ತುತ ಪುಟಗಳು',
	'dump-database-full-pages' => 'ಪ್ರಸ್ತುತ ಪುಟಗಳು ಮತ್ತು ಇತಿಹಾಸ',
	#'dump-database-request-submit' => 'ಕೋರಿಕೆಯನ್ನು ಕಳುಹಿಸು',
	//'dump-database-info-more' => 'ಹೆಚ್ಚಿನ ಮಾಹಿತಿಗಾಗಿ <a href="http://community.wikia.com/wiki/Help:Database_download">ನೋಡಿ</a>',
);

/** Karachay-Balkar (Къарачай-Малкъар)
 * @author Къарачайлы
 */
$messages['krc'] = array(
	'dump-database' => 'Билги базаланы дамплары',
	//'dump-database-info' => 'Билги базаланы дамплары энчи резерв копия кибик хайырландылыргъа боллукъдула (Версия бютеу викилеге айры резеврв копияланы автомат халда къурайды) неда ботланы баджарыр ючюн хайырландырыр мадар барды', // contains a Wikia reference in a non-Latin script
	//'dump-database-curr-pages' => 'Бара тургъан бетле',
	//'dump-database-curr-pages-info' => '(Бу версия, бот ючюн эм таб келишеди)',
	'dump-database-full-pages' => 'Бара тургъан бетле бла тарих',
	'dump-database-full-pages-info' => '(Эс бёлюгюз: бу файл асыры бек уллу болургъа болур)',
	#'dump-database-request' => 'Джангыртыуланы  изле',
	'dump-database-request-info' => '(Асламысы бла дампла хар кюн къураладыла)',
	#'dump-database-request-submit' => 'Соруу джибер',
	//'dump-database-info-more' => 'Тилейбиз, <a href="http://community.wikia.com/wiki/Help:Database_download"> къошакъ билгилеге къарагъыз</a>',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'dump-database' => 'Dumpe vun der Datebank',
	//'dump-database-curr-pages' => 'Aktuell Säiten',
	#'dump-database-request' => 'Eng Aktualisatioun ufroen',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'dump-database' => 'Базни резерви',
	//'dump-database-info' => 'Складираните резервни базни резерви (dumps) можат да се користат за лично резервно зачувување (Викија автоматски прави посебни резервни зачувувања на сите викија) или ботови за одржување', // contains a Wikia reference in a non-Latin script
	//'dump-database-curr-pages' => 'Тековни страници',
	//'dump-database-curr-pages-info' => '(Оваа верзија е обично најдобра за ботови)',
	'dump-database-full-pages' => 'Тековни страници и историја',
	'dump-database-full-pages-info' => '(Предупредување: оваа податотека може да биде многу голема)',
	#'dump-database-request' => 'Побарај поднова',
	'dump-database-request-info' => '(Складираните базни резерви обично се создаваат еднаш неделно)',
	#'dump-database-request-submit' => 'Испрати барање',
	#'dump-database-request-already-submitted' => 'Базната резерва е побарана неодамна (пред помалку од 7 дена)',
	//'dump-database-info-more' => '<a href="http://community.wikia.com/wiki/Help:Database_download">Погледајте тука</a> за повеќе информации',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'dump-database' => 'Databasedumps',
	'dump-database-info' => "Databasedumps kunnen gebruikt worden als persoonlijke back-up of voor beheerrobots.
ShoutWiki maakt automatisch back-ups van alle wiki's.",
	//'dump-database-curr-pages' => "Huidige pagina's",
	//'dump-database-curr-pages-info' => 'Deze versie is meestal de beste keus voor botgebruik.',
	'dump-database-full-pages' => "Huidige pagina's en geschiedenis",
	'dump-database-full-pages-info' => 'Waarschuwing: dit bestand kan erg groot worden.',
	#'dump-database-request' => 'Update aanvragen',
	'dump-database-request-info' => 'Dumps worden meestal wekelijks aangemaakt.',
	#'dump-database-request-submit' => 'Verzoek versturen',
	#'dump-database-request-already-submitted' => 'Dump is onlangs gevraagd (minder dan 7 dagen geleden)',
	//'dump-database-info-more' => '<a href="http://community.wikia.com/wiki/Help:Database_download">Meer informatie</a>.',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Audun
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'dump-database' => 'Databasedumper',
	'dump-database-info' => 'Databasedumper kan brukes som en personlig sikkerhetskopi (ShoutWiki produserer separate sikkerhetskopier av alle wikier automatisk) eller for vedlikeholdsroboter',
	//'dump-database-curr-pages' => 'Nåværende sider',
	//'dump-database-curr-pages-info' => '(Denne versjonen er vanligvis best for bot-bruk)',
	'dump-database-full-pages' => 'Nåværende sider og historikk',
	'dump-database-full-pages-info' => '(Advarsel: Denne filen kan være veldig stor)',
	#'dump-database-request' => 'Be om en oppdatering',
	'dump-database-request-info' => '(Dumpinger er vanligvis generert ukentlig)',
	#'dump-database-request-submit' => 'Send forespørsel',
	#'dump-database-request-already-submitted' => 'Dumping har nylig blitt etterspurt (mindre enn 7 dager siden)',
	//'dump-database-info-more' => 'Vennligst <a href="http://community.wikia.com/wiki/Help:Database_download">se</a> for mer info',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'dump-database' => 'Dumps de la banca de donadas',
	//'dump-database-curr-pages' => 'Paginas actualas',
	'dump-database-full-pages' => 'Paginas actualas e istoric',
	#'dump-database-request' => 'Demandar una mesa a jorn',
	#'dump-database-request-submit' => 'Mandar la requèsta',
);

/** Polish (Polski)
 * @author Marcin Łukasz Kiejzik
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'dump-database' => 'Zrzuty bazy danych',
	'dump-database-info' => 'Zrzuty bazy danych mogą być używane jako osobista kopia zapasowa (produkty ShoutWiki automatycznie oddzielają kopie zapasowe ze wszystkich wiki automatycznie) lub przez boty',
	//'dump-database-curr-pages' => 'Obecne strony',
	//'dump-database-curr-pages-info' => '(Ta wersja jest najlepsza dla używania przez boty)',
	'dump-database-full-pages' => 'Obecne strony i historia',
	'dump-database-full-pages-info' => '(Ostrzeżenie: plik może być bardzo duży)',
	#'dump-database-request' => 'Wniosek o aktualizację',
	'dump-database-request-info' => '(Zrzuty są zwykle generowane co tydzień)',
	#'dump-database-request-submit' => 'Wyślij zapytanie',
	#'dump-database-request-already-submitted' => 'Zrzut był pobierany niedawno (mniej niż 7 dni temu)',
	//'dump-database-info-more' => 'Proszę zobaczyć<a href="http://community.wikia.com/wiki/Help:Database_download">tę stronę</a> po więcej informacji',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'dump-database' => 'Dump ëd la base ëd dàit',
	'dump-database-info' => 'Ij dump ëd la base ëd dàit a peulo esse dovrà com còpia përsonal (ShoutWiki a produv automaticament dle còpie separà ëd tute le wiki) o për trigomiro ëd manutension',
	//'dump-database-curr-pages' => 'Pàgine corente',
	//'dump-database-curr-pages-info' => "(Sta version-sì a l'é normalment la mej për l'usagi dij trigomiro)",
	'dump-database-full-pages' => 'Pàgine corente e stòria',
	'dump-database-full-pages-info' => "(Atension: st'archivi-sì a peul esse motobin gròss)",
	#'dump-database-request' => 'Ciama na modìfica',
	'dump-database-request-info' => '(Ij dump a son normalment generà setimanalment)',
	#'dump-database-request-submit' => 'Manda arcesta',
	#'dump-database-request-already-submitted' => "La creassion ëd n'archivi a l'é stàita ciamà recentement (men che 7 di fà)",
	//'dump-database-info-more' => 'Për piasì <a href="http://community.wikia.com/wiki/Help:Database_download">varda</a> për savèjne ëd pi',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
#$messages['ps'] = array(
	//'dump-database-curr-pages' => 'تازه مخونه',
	#'dump-database-request-submit' => 'غوښتنه ورلېږل',
#);

/** Portuguese (Português)
 * @author Crazymadlover
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'dump-database' => 'Cópias da base de dados em ficheiro',
	'dump-database-info' => 'Cópias da base de dados em ficheiro podem ser usadas como cópia de segurança pessoal (a ShoutWiki produz automaticamente cópias de segurança separadas, de todas as wikis) ou por robôs de manutenção',
	//'dump-database-curr-pages' => 'páginas actuais',
	//'dump-database-curr-pages-info' => '(Normalmente, esta versão é melhor para uso por robôs)',
	'dump-database-full-pages' => 'Versão actual e histórico das páginas',
	'dump-database-full-pages-info' => '(Aviso: este ficheiro pode ser muito grande)',
	#'dump-database-request' => 'Pedir uma actualização',
	'dump-database-request-info' => '(Normalmente as cópias em ficheiro são geradas semanalmente)',
	#'dump-database-request-submit' => 'Enviar pedido',
	#'dump-database-request-already-submitted' => 'Foi solicitada recentemente uma cópia para ficheiro (há menos de 7 dias)',
	//'dump-database-info-more' => 'Consulte <a href="http://community.wikia.com/wiki/Help:Database_download">download da base de dados</a> para mais informação, por favor',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Daemorris
 * @author Giro720
 */
$messages['pt-br'] = array(
	'dump-database' => 'Descarregamento do banco de dados',
	'dump-database-info' => 'Descarregamentos do banco de dados podem ser usados como cópias de segurança pessoais (ShoutWiki produz cópias de segurança para todas wikis automaticamente) ou para robôs de manutenção',
	//'dump-database-curr-pages' => 'Páginas atuais',
	//'dump-database-curr-pages-info' => '(Esta versão geralmente é melhor para uso por robôs)',
	'dump-database-full-pages' => 'Páginas atuais e histórico',
	'dump-database-full-pages-info' => '(Aviso: este arquivo pode ser muito grande)',
	#'dump-database-request' => 'Pedir atualização',
	'dump-database-request-info' => '(Descarregamentos geralmente são gerados semanalmente)',
	#'dump-database-request-submit' => 'Enviar pedido',
	#'dump-database-request-already-submitted' => 'Foi solicitada recentemente uma cópia para arquivo (há menos de 7 dias)',
	//'dump-database-info-more' => 'Por favor <a href="http://community.wikia.com/wiki/Help:Database_download">veja isto</a> para mais informações',
);

/** Romanian (Română) */
//$messages['ro'] = array(
	//'dump-database-curr-pages' => 'Pagini curente',
//);

/** Russian (Русский)
 * @author Lockal
 * @author MaxSem
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'dump-database' => 'Дампы базы данных',
	//'dump-database-info' => 'Дампы базы данных могут быть использованы в качестве личной резервной копии (Викия создаёт отдельные резервные копии для всех вики автоматически) или для обслуживающих ботов', // contains a Wikia refrence in a non-Latin script
	//'dump-database-curr-pages' => 'Текущие страницы',
	//'dump-database-curr-pages-info' => '(Эта версия, как правило, наиболее удобна для бота)',
	'dump-database-full-pages' => 'Текущие страницы и история',
	'dump-database-full-pages-info' => '(Предупреждение: этот файл может быть слишком большим)',
	#'dump-database-request' => 'Запросить обновление',
	'dump-database-request-info' => '(Дампы обычно генерируются еженедельно)',
	#'dump-database-request-submit' => 'Отправить запрос',
	#'dump-database-request-already-submitted' => 'Резервная копия была запрошена недавно (менее 7 дней назад).',
	//'dump-database-info-more' => 'Пожалуйста, <a href="http://community.wikia.com/wiki/Help:Database_download">см. дополнительные сведения</a>',
);

/** Sinhala (සිංහල) */
$messages['si'] = array(
	//'dump-database-curr-pages' => 'වත්මන් පිටු',
	'dump-database-full-pages' => 'වත්මන් පිටු සහ ඉතිහාසය',
	#'dump-database-request-submit' => 'ඉල්ලීම යවන්න',
);

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Charmed94
 * @author Rancher
 * @author Verlor
 */
$messages['sr-ec'] = array(
	'dump-database' => 'Исписи базе података',
	//'dump-database-info' => 'Исписи базе података се могу користити као лична резерва (Викија самостално ствара одвојене примерке свих викија) или за ботове за одржавање', // contains a Wikia reference in a non-Latin script
	//'dump-database-curr-pages' => 'Тренутне странице',
	//'dump-database-curr-pages-info' => '(ово издање је обично најбоље за ботове)',
	'dump-database-full-pages' => 'Тренутне странице и историјат',
	'dump-database-full-pages-info' => '(Упозорење: ова датотека је веома велика)',
	#'dump-database-request' => 'Затражи доградњу',
	'dump-database-request-info' => '(Исписи се обично стварају недељно)',
	#'dump-database-request-submit' => 'Пошаљи захтев',
	#'dump-database-request-already-submitted' => 'Испис је недавно затражен (пре мање од седам дана)',
	//'dump-database-info-more' => '<a href="http://community.wikia.com/wiki/Help:Database_download">Погледајте ово</a> за више информација',
);

/** Swedish (Svenska)
 * @author Per
 * @author Tobulos1
 */
$messages['sv'] = array(
	'dump-database' => 'Databasdumps',
	'dump-database-info' => 'Databasdumps kan användas som en personlig backup (ShoutWiki producerar separata säkerhetskopior av alla wikis automatiskt) eller för underhållsbots',
	//'dump-database-curr-pages' => 'Nuvarande sidor',
	//'dump-database-curr-pages-info' => '(Denna version är oftast bäst för bot-användning)',
	'dump-database-full-pages' => 'Aktuella sidor och historia',
	'dump-database-full-pages-info' => '(Varning: den här filen kan vara mycket stor)',
	#'dump-database-request' => 'Begär en uppdatering',
	'dump-database-request-info' => '(Dumpar är ofta generade varje vecka)',
	#'dump-database-request-submit' => 'Skicka begäran',
	#'dump-database-request-already-submitted' => 'Dump har begärts nyligen (mindre än 7 dagar sedan)',
	//'dump-database-info-more' => 'Vänligen <a href="http://community.wikia.com/wiki/Help:Database_download">se</a> för mer info',
);

/** Tamil (தமிழ்)
 * @author TRYPPN
 */
#$messages['ta'] = array(
	//'dump-database-curr-pages' => 'தற்போதய பக்கங்கள்',
	#'dump-database-request' => 'நிகழ்வாக்கம் செய்ய கேட்கவும்',
	#'dump-database-request-submit' => 'வேண்டுகோளை அனுப்பவும்',
#);

/** Telugu (తెలుగు)
 * @author Ravichandra
 */
$messages['te'] = array(
	//'dump-database-curr-pages' => 'ప్రస్తుర పుటలు',
	'dump-database-full-pages' => 'ప్రస్తుత పుటలు మరియు చరిత్ర',
	//'dump-database-info-more' => 'మరింత సమాచారం కోసం దయచేసి <a href="http://community.wikia.com/wiki/Help:Database_download">దీన్ని చూడండి</a>',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'dump-database' => 'Tapunan ng talaan ng mga dato',
	'dump-database-info' => 'Magagamit ang tapunan ng talaan ng mga dato bilang isang reserbang pansarili (kusang gumagawa ang ShoutWiki ng nakahiwalay na mga reserba ng lahat ng mga wiki)',
	//'dump-database-curr-pages' => 'Kasalukuyang mga pahina',
	//'dump-database-curr-pages-info' => '(Ang bersyon na ito ay kadalasang pinakamahusay para sa paggamit ng bot)',
	'dump-database-full-pages' => 'Kasalukuyang mga pahina at kasaysayan',
	'dump-database-full-pages-info' => '(Babala: maaaring napakalaki ng talaksang ito)',
	#'dump-database-request' => 'Humiling ng isang pagsasapanahon',
	'dump-database-request-info' => '(Karaniwang linggo-linggong nililikha ang mga tapunan)',
	#'dump-database-request-submit' => 'Ipadala ang hiling',
	#'dump-database-request-already-submitted' => 'Ang pagtatapon ay hiniling kamakailan lamang (mababa kaysa 7 mga araw na ang nakalilipas)',
	//'dump-database-info-more' => 'Paki <a href="http://community.wikia.com/wiki/Help:Database_download">tingnan</a> para sa iba pang kabatiran',
);

/** Ukrainian (Українська)
 * @author Alex Khimich
 * @author Prima klasy4na
 * @author Тест
 */
$messages['uk'] = array(
	'dump-database' => 'Дампи бази данних',
	//'dump-database-info' => 'Дампи бази данних можуть бути використані в якості особистої резервної копіі (Вікія створює окремі резервні копії  всіх Вікі автоматично), або для роботи з обслуговуючими ботами.', // contains a Wikia reference in a non-Latin script
	//'dump-database-curr-pages' => 'Поточні сторінки',
	//'dump-database-curr-pages-info' => '(Ця версія, як правило, найбільш зручна для ботів)',
	'dump-database-full-pages' => 'Поточні сторінки та історія',
	'dump-database-full-pages-info' => '(Увага: цей файл може бути дуже великий)',
	#'dump-database-request' => 'Запросити оновлення',
	'dump-database-request-info' => '(Дампи зазвичай створюються щотижня)',
	#'dump-database-request-submit' => 'Надіслати запит',
	#'dump-database-request-already-submitted' => 'Запит на створення дампа було надіслано недавно (менше 7 днів тому)',
	//'dump-database-info-more' => 'Будь ласка, ознайомтесь з детальнішою інформацією <a href="http://community.wikia.com/wiki/Help:Database_download">тут</a>',
);