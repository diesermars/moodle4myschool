<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'theme_boost_campus', language 'de', version '3.10'.
 *
 * @package     theme_boost_campus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addablockpositionsetting'] = 'Platzierung des "Block hinzufügen" Widgets';
$string['addablockpositionsetting_desc'] = 'Mit dieser Einstellung können Sie einstellen, wo das Widget "Block hinzufügen" platziert werden soll. Wenn Sie die Option "Am Ende der Navigationsleiste (Nav Drawer)" wählen, dann wird es im Navigationsmenü, wie auch im Theme Boost, angezeigt. Wenn Sie "Am Ende der standardmäßigen Blockspalte" wählen, dann wird das Widget in der Blockspalte erscheinen. Bitte beachten Sie: Diese zweite Option hat Auswirkungen in der Hinsicht, dass dieses Widget auch in den Aktivitätseinstellungen in der Blockspalte angezeigt wird, wenn Bearbeiten eingeschaltet ist.';
$string['addablockwidgetheadingsetting'] = 'Platzierung des "Block hinzufügen" Widgets';
$string['additionallayoutsettings'] = 'Einstellungen für zusätzliche Layouts';
$string['additionalresourcesheadingsetting'] = 'Zusätzliche Ressourcen';
$string['additionalresourcessetting'] = 'Zusätzliche Ressourcen hinzufügen';
$string['additionalresourcessetting_desc'] = 'Mit dieser Einstellung können Sie zusätzliche Ressourcen zum Theme hinzufügen. Sie können diese Ressourcen dann über einen Link referenzierten. Die URL sieht dann so aus:
"/pluginfile.php/1/theme_boost_campus/additionalresources/0/ihrdateiname.dateiendung"<br/>
Der Vorteil, wenn Sie Dateien zu diesem Dateibereich hinzufügen ist, dass sie auch ohne Überprüfung ob ein Nutzer eingeloggt ist, ausgeliefert werden. Das ist aber auch der Grund, warum Sie hier nur Dateien hinzufügen sollten, die jeder zugreifen können darf und die nicht über ein gültigen Login geschützt werden müssen. <br/>
Ein Beispiel für einen Anwendungsfall finden Sie in der README.md Datei.';
$string['backgroundimage_desc_note'] = '<br>Bitte beachten Sie: Dies wird die Einstellung "theme_boost_campus | loginbackgroundimage" nicht überschreiben. Das bedeutet, dass Bilder, die Sie für den Hintergrund der Loginseite hinzugefügt haben, dort nach wie vor ausgegeben werden.';
$string['backtotop'] = 'Zurück nach oben';
$string['bcbttbuttonheadingsetting'] = 'Boost Campus "Zurück nach oben" Button';
$string['bcbttbuttonsetting'] = 'Boost Campus "Zurück nach oben" Button';
$string['bcbttbuttonsetting_desc'] = 'Seit Moodle 3.9 ist im Theme Boost ein "Nach oben gehen" Button verfügbar und normalerweise würde dies unsere bis dahin bereitgestellte Lösung überflüssig machen. <br/>
Es ist jedoch so, dass die von Boost bereitgestellte Lösung noch kleine Unschönheiten aufweist und das der Grund ist, warum wir den bisherigen Boost Campus "Zurück nach oben" Button als optionale Einstellung noch bereitstellen möchten. <br/>
Wenn Sie diese Einstellung aktivieren, dann wird der vom Boost bereitgestellte "Nach oben gehen" Button nicht und stattdessen der Boost Campus "Zurück nach oben" Button angezeigt. Die Unterschiede sind folgende: <br/>
<ul>
<li>Weiches Scrollen: Der Boost Campus "Zurück nach oben" Button scrollt in einer weichen Bewegung zum Anfang der Seite während der Boost "Nach oben gehen" Button direkt zum Anfang der Seite hüpft.</li>
<li>URL Implikationen: Der Boost Campus "Zurück nach oben" Button nutzt ausschließlich Javascript und hat keinerlei Auswirkungen auf auf die URL. Der Boost "Nach oben gehen" Button dagegen fügt ein "#" am Ende der URL an, wenn der Button gedrückt wurde. Wenn Sie dann die URL kopieren, wird das "#" mit kopiert. </li>
<li>Barrierefreiheit: Der Boost Campus "Zurück nach oben" Button ist nicht explizit für Barrierefreiheit optimiert, während dies der Boost "Nach oben gehen" Button ist.</li>
</ul>
Bitte beachten Sie: <br/>
Diese Einstellung wird wieder entfernt werden, sobald die Lösung vom Kern-Theme Boost soweit verbessert wurde, dass diese individuelle Lösung im Theme nicht mehr nötig ist.';
$string['blockcolumnwidthdashboardsetting'] = 'Breite der Blockspalte auf dem Dashboard';
$string['blockcolumnwidthdashboardsetting_desc'] = 'Mit dieser Einstellung können Sie die Breite (in Pixel) der Blockspalte auf dem Dashboard festlegen.';
$string['blockcolumnwidthdefault'] = 'Die Standardbreite beträgt ab Moodle 3.6 360px, bis Moodle 3.5 war sie 250px.';
$string['blockcolumnwidthsetting'] = 'Breite der Blockspalte auf allen anderen Seiten';
$string['blockcolumnwidthsetting_desc'] = 'Mit dieser Einstellung können Sie die Breite (in Pixel) der Blockspalte auf allen anderen Seiten außer dem Dashboard festlegen.';
$string['blockdesignheadingsetting'] = 'Blöcke';
$string['blockiconsetting'] = 'Block-Icon';
$string['blockiconsetting_desc'] = 'Mit dieser Einstellung können Sie ein standardmäßiges Font Awesome Icon vor der Blocküberschrift platzieren. Wenn Sie diese Einstellung anschalten, dann stellen wir Ihnen auch individuelle Icons für viele von Moodle mitgelieferte und auch einige weit verbreitete Blöcke zur Verfügung. Sie können diese Icons auch ganz einfach für jeden Block einzeln und individuell in Ihrem "Raw SCSS" ändern, indem Sie den "content" des Font Awesome Icons austauschen. Für eine Liste aller verfügbaren Font Awesome Icons, besuchen Sie bitte http://fontawesome.io/icons/ und nutzen den Unicode-Wert des gewünschten Icons um das standardmäßig gesetzte Icon zu ersetzen.
Der Code sieht wie in dieser beispielhaften Änderung des Icons für den "Personenblock" aus: <br/>';
$string['blockiconsetting_desc_code'] = '.block_people .card-block .card-title::before { content: \'\\f0c0\' ; }';
$string['boost_campus:viewhintcourseselfenrol'] = 'Einen Hinweis für eine ungehinderte Selbsteinschreibung in einem sichtbaren Kurs sehen können.';
$string['boost_campus:viewhintinhiddencourse'] = 'Einen Hinweis auf einen unsichtbaren Kurs sehen können.';
$string['bootstrapdangercolor'] = 'Danger color';
$string['bootstrapdarkcolor'] = 'Dark color';
$string['bootstrapinfocolor'] = 'Info color';
$string['bootstraplightcolor'] = 'Light color';
$string['bootstrapprimarycolor'] = 'Primary color';
$string['bootstrapsecondarycolor'] = 'Secondary color';
$string['bootstrapsuccesscolor'] = 'Success color';
$string['bootstrapwarningcolor'] = 'Warning color';
$string['brandcolorheadingsetting'] = 'Markenfarben';
$string['branddangercolorsetting'] = 'Markenfarbe für Fehlermeldungen';
$string['branddangercolorsetting_desc'] = 'Diese Farbe kann beispielsweise bei Formularüberprüfungen verwendet werden.';
$string['brandinfocolorsetting'] = 'Markenfarbe für Informationen';
$string['brandinfocolorsetting_desc'] = 'Diese Farbe wird beispielsweise für die Verfügbarkeitshinweise bei Aktivitäten oder Materialien genutzt.';
$string['brandsuccesscolorsetting'] = 'Markenfarbe für Erfolgsmeldungen';
$string['brandsuccesscolorsetting_desc'] = 'Diese Farbe kann beispielsweise bei Formularüberprüfungen verwendet werden.';
$string['brandwarningcolorsetting'] = 'Markenfarbe für Warnmeldungen';
$string['brandwarningcolorsetting_desc'] = 'Diese Farbe wird zum Beispiel für Warnhinweise verwendet.';
$string['breakpointheadingsetting'] = 'Breakpoint';
$string['breakpointsetting'] = 'Breakpoint ändern';
$string['breakpointsetting_desc'] = 'Im Theme Boost bricht die rechte Blockspalte selbst auf Geräten mit einer Breite bis zu 1200 Pixeln (die Auflösung im Querformat eines iPads beispielsweise liegt bei 1024 Pixeln) bereits nach unten um.
Dies hat die Ursache darin, dass der Breakpoint auf <a href="https://getbootstrap.com/docs/4.0/layout/overview/#responsive-breakpoints">media-breakpoint-down(lg)</a> gestetzt ist. <br/>
Wenn Sie der Meinung sind, dass auf einer Bildschirmbreite von 992 Pixeln und darüber genug Platz ist, die Inhaltsspalte plus die Blockspalte nebeneinander anzuzeigen, dann aktivieren Sie diese Einstellung. Dadurch wird der Breakpoint auf media-breakpoint-down(md) geändert. Damit wird die Blockspalte nur noch auf Bildschirmen mit einer Breite kleiner als 992 Pixeln umgebrochen.';
$string['cachedef_imagearea'] = 'Cache für Bildbereich-Elemente';
$string['catchcmdarrowdownsetting'] = 'Cmd + Pfeil nach unten Shortcut';
$string['catchcmdarrowdownsetting_desc'] = 'Diese Einstellung fängt den Shortcut "Cmd + Pfeil nach unten" ab (MAC).';
$string['catchctrlarrowdownsetting'] = 'Strg + Pfeil nach unten Shortcut';
$string['catchctrlarrowdownsetting_desc'] = 'Diese Einstellung fängt den Shortcut "Strg + Pfeil nach unten" ab (Windows).';
$string['catchendkeysetting'] = 'Ende-Taste';
$string['catchendkeysetting_desc'] = 'Diese Einstellung fängt die "Ende-Taste" ab. Dies sollte auf allen gängigen Browsern und Betriebssystemen funktionieren.';
$string['catchkeyboardcommandsheadingsetting'] = 'Tastaturbefehle abfangen';
$string['catchkeyboardcommandsheadingsetting_desc'] = 'Die folgenden Einstellungen sind dafür gedacht, den besonderen Bedürfnissen von fortgeschrittenen Nutzer/innen entgegen zu kommen - vor allem für den Fall, dass Ihre Moodle Instanz einen ausgedehnten Footer aufweist. Fortgeschrittene Nutzer/innen verwenden gerne die Tastatur, um sich durch Webseiten zu navigieren. So können Sie diese auch nutzen, um schnell an das Ende eines Kurses zu gelangen um beispielsweise den aktuellsten Abschnitt zu erreichen und dort schnell neuen Inhalt hinzuzufügen oder die aktuellste Aufgabe zu bewerten. Wenn Ihr Footer nicht sehr kurz gehalten ist, dann müssen diese Personen in diesem Fall wieder nach oben scrollen, weil Sie über die Navigation mit der Tastatur über das Ende des Kursinhalts hinaus zum ganzen Seitenende gelangt sind und den Kursinhalt so vielleicht gar nicht mehr sehen können. Wenn Sie diese Einstellung aktivieren, so werden die jeweils ausgewählten Tastaturbefehle abgefangen und die Seite scrollt dann nur bis zum Ende des Kursinhalts.';
$string['catchkeys_desc_addition'] = 'Dies verhindert das standardmäßige Scrollen zum Ende der ganzen Webseite und ändert das Verhalten so, dass nun nur noch bis zum Ende des Kursinhalts gefahren wird.';
$string['choosereadme'] = 'Das Theme Boost Campus ist ein von Boost abgeleitetes Theme für die Nutzung an Universitäten.';
$string['close'] = 'Schließen';
$string['closingperpetualinfobanner'] = 'Sind Sie sicher, dass Sie diese Information ausblenden möchten? Sobald Sie diese ausgeblendet haben, wird sie nicht erneut erscheinen!';
$string['configtitle'] = 'Boost Campus Einstellungen';
$string['confirmation'] = 'Bestätigung';
$string['coursehintsheadingsetting'] = 'Kursbezogene Hinweise';
$string['courselayoutsettings'] = 'Einstellungen Kurs-Layout';
$string['coursesettingsheadingsetting'] = 'Kurseinstellungen';
$string['darknavbarsetting'] = 'Dunkle Navigationsleiste';
$string['darknavbarsetting_desc'] = 'Wenn Sie diese Einstellung aktivieren, können Sie die Farben der Navigationsleiste zu weißer Schrift auf dunklem Hintergrund invertieren.';
$string['dashboardontopsetting'] = 'Menüeintrag Dashboard nach oben';
$string['dashboardontopsetting_desc'] = 'Wenn Sie diese Einstellung setzen, wird der Menüeintrag "Dashboard" immer an erster Stelle im linken Menü platziert. Standardmäßig ist dies in Moodle, außer für die Kursseiten, der Fall. Auf der Kursseite wird der Kursknoten mit seinen Inhalten ganz oben im Menü platziert. Dies könnte aber zu einem Bruch der Nutzererwartungen für den Menüeintrag "Dashboard" führen.';
$string['defaulthomepageontopsetting'] = 'Standardmäßige Startseite nach oben';
$string['defaulthomepageontopsetting_desc'] = 'Wenn Sie diese Einstellung setzen, wird der Menüeintrag für die standardmäßige Startseite (Dashboard oder Website) immer an erster Stelle im linken Menü platziert. Standardmäßig ist dies in Moodle, außer für die Kursseiten, der Fall. Dort wird der Kursknoten mit seinen Inhalten ganz oben im Menü platziert. Dies könnte aber zu einem Bruch der Nutzererwartungen für die standardmäßige Startseite führen.';
$string['designsettings'] = 'Einstellungen zur Gestaltung';
$string['faviconheadingsetting'] = 'Favicon';
$string['faviconsetting'] = 'Favicon';
$string['faviconsetting_desc'] = 'Sie können hier ein Bild (im .ico oder .png Format) hochladen, das der Browser als das Favicon Ihrer Moodle Seite anzeigt.';
$string['fontdesignheadingsetting'] = 'Schriftarten';
$string['fontfilessetting'] = 'Schriftart-Dateien';
$string['fontfilessetting_desc'] = 'Mit diesem Dialog können Sie eigene Schriftarten hochladen. Der Upload ist auf Schriftart-Dateien des Typs .eot, .woff, .woff2, .tff und .svg beschränkt. <br/>
Wichtig: Um diese hochgeladenen Dateien innerhalb Ihres Themes nutzen zu können, müssen Sie noch passenden Code in Ihr "Raw SCSS" innhalb der "Erweiterten Einstellungen" hinzufügen. Ein vollständiges Beispiel dafür können Sie in der README.md finden.';
$string['footerblocks0columnssetting'] = 'Keine Blöcke im Footer';
$string['footerblocks1columnssetting'] = 'Eine Blockspalte im Footer';
$string['footerblocks2columnssetting'] = 'Zwei Blockspalten im Footer';
$string['footerblocks3columnssetting'] = 'Drei Blockspalten im Footer';
$string['footerblocksheadingsetting'] = 'Footer Blöcke';
$string['footerblockssetting'] = 'Footer Blöcke';
$string['footerblockssetting_desc'] = 'Mit dieser Einstellung ist es möglich Blöcke im Footer zu platzieren. Wenn Sie dies möchten, können Sie zwischen einer, zwei oder drei Blockspalten wählen. <br/>
Hinweis: Diese Spalten werden nur auf ausreichend großen Bildschirmen dargestellt. Auf kleinen Bildschirmen wird automatisch, zur besseren Lesbarkeit, auf eine Spalte umgebrochen.';
$string['footerhidehelplinksetting'] = 'Link zur Moodle Dokumentation verbergen';
$string['footerhidehomelinksetting'] = 'Link zur Startseite verbergen';
$string['footerhidelogininfosetting'] = 'Login-Informationen verbergen';
$string['footerhideusertourslinksetting'] = 'Link zum Zurücksetzen von geführten Touren verbergen';
$string['footerlayoutsettings'] = 'Einstellungen Footer-Layout';
$string['footerlinks_desc'] = 'Wenn dies aktiviert ist, wird der Link im Footer verborgen. Wenn Sie die Einstellung nicht aktivieren (Standard), wird er angezeigt.';
$string['footerlinksheadingsetting'] = 'Standard-Links im Footer';
$string['footerlinksheadingsetting_desc'] = 'Moodle stellt einige standardmäßige Links im Footer bereit: Ein Link zu der Moodle Dokumentation, Login Informationen und ein Link zur Startseite. <br/> Mit den folgenden drei Einstellungen können Sie für jeden dieser Links entscheiden, ob Sie diesen im Footer anzeigen oder verbergen möchten, weil Sie davon ausgehen, dass Ihre Nutzerschaft diesen Link dort nicht brauchen wird.';
$string['footnoteheadingsetting'] = 'Fußzeile';
$string['footnoteheadingsetting_desc'] = 'Die folgende Einstellung erlaubt es Ihnen einen zusätzlichen Bereich zur Anzeige einer Fußzeile hinzuzufügen.';
$string['footnotesetting'] = 'Fußzeile';
$string['footnotesetting_desc'] = 'Alles, was Sie in dieses Textfeld einfügen, wird unterhalb des Footers (auf jeder Seite, die den Standard-Footer auch darstellt - in Layouts "columns2" und "login"), in einem eigenen Bereich ausgegeben. Hier können Sie beispielsweise das Copyright, Ihre Nutzungsbedingungen oder Ihre Organisation nennen und verlinken. <br/>
Wenn Sie diese Fußzeile wieder entfernen möchten, leeren Sie das Textfeld komplett.';
$string['helptextheadingsetting'] = 'Hilfetexte';
$string['helptextmodalsetting'] = 'Zeige Hilfetexte in einem modalen Dialog';
$string['helptextmodalsetting_desc'] = 'Die Standardlösung mit der Hilfetexte in einem Popover dargestellt werden führt zu diversen Schwierigkeiten. Zum Beispiel kann man den Inhalt der Popovers nicht scrollen und sie können sich auch außerhalb des Darstellungsfensters befinden. <br/>
Deshalb können Sie mit dieser Einstellung entscheiden, dass Hilfetexte in einem eigenen Textfenster (modaler Dialog) angezeigt werden. Dieses Fenster wird mittig auf der Seite platziert und stellt auch für lange Hilfetexte genug Platz zur Verfügung.';
$string['hidefooterheadingsetting'] = 'Footer verbergen';
$string['hidefooteronloginpagesetting'] = 'Den Footer auf der Login-Seite verbergen';
$string['hidefooteronloginpagesetting_desc'] = 'Mit der Aktivierung dieser Einstellung können Sie den Footer auf der Login-Seite verbergen. Bitte beachten Sie, dass dies nur den Footer-Abschnitt entfernt. Die Fußzeile bleibt erhalten, wenn Sie diese nutzen.';
$string['imageareaheadingsetting'] = 'Bildbereich';
$string['imageareaheadingsetting_desc'] = 'Die folgenden Einstellungen erlauben es, einen zusätzlichen Bereich hinzuzufügen, in dem Sie Bilder, wie zum Beispiel Logos, ausgeben lassen können. Dieser Bereich wird unter dem Standard-Footer und über der optionalen Fußzeile hinzugefügt. Wenn Bilder hochgeladen sind, wird dieser Bereich auf allen Seiten ausgegeben, die das "columns2"-Layout nutzen.';
$string['imageareaitemsattributessetting'] = 'Zusätzliche Attribute für Elemente im Bildbereich';
$string['imageareaitemsattributessetting_desc'] = 'Mit dieser optionalen Einstellung können Sie Ihre hochgeladenen Bilder mit zusätzlichen Attributen versehen:
<ul>
<li>Link</li>
<li>Attribut alt, das das Bild beschreibt</li>
</ul>
Jede Zeile besteht aus der Kennung (Dateiname) , der URL des Links und dem alt-Text, getrennt durch einen Trennstrich (Pipe). Jede Link-Definition muss in eine eigene Zeile geschrieben werden.
<br/>
Zum Beispiel:<br/>
```
moodle.jpg|https://moodle.org|Moodle logo
```<br/><br/>
Sie können die Attribute für eine beliebige Anzahl von Bildern hinzufügen. Die Attribute werden nur für diejenigen Bilder gesetzt, bei denen die Kennung mit dem Dateinamen der hochgeladenen Datei übereinstimmen.';
$string['imageareaitemsmaxheightsetting'] = 'Maximale Höhe für Elemente im Bildbereich';
$string['imageareaitemsmaxheightsetting_desc'] = 'Mit dieser Einstellung können Sie die Höhe für Ihre hochgeladenen Elemente im Bildbereich festlegen. Alle Bilder haben die selbe Maximalhöhe, die Sie hier festlegen können. Die Breite der Bilder wird proportional angepasst. Der Standardwert ist auf 100 Pixel gesetzt.';
$string['imageareaitemssetting'] = 'Elemente im Bildbereich';
$string['imageareaitemssetting_desc'] = 'Mit diesem Dialog können Sie Bilder hochladen, die in einem zusätzlichen Bereich ausgegeben werden. Die Bilder werden alphabetisch nach dem Dateinamen sortiert und in dieser Reihenfolge auch dargestellt. Um diesen Bereich wieder vollständig zu entfernen, löschen Sie einfach alle hochgeladenen Bilder in diesem Dialog.';
$string['incoursesettingsswitchtorolepositionsetting'] = 'Platzierung von "Rolle wechseln..."';
$string['incoursesettingsswitchtorolepositionsetting_desc'] = 'Mit dieser Einstellung können Sie entscheiden, an welcher Stelle die Information zur gewechselten Rolle angezeigt wird. Wenn Sie die Option "Im Nutzermenü" (Standard) wählen, dann wird diese Information direkt unter dem Nutzernamen im Nutzermenü präsentiert (wie im Theme Boost). Wenn Sie die Option "In den Kurseinstellungen" wählen, dann wird diese Information innerhalb des Kurses angezeigt, da diese Funktionalität kursgebunden ist. Wenn Sie die Option "An beiden Orten: Im Nutzermenü und in den Kurseinstellungen" wählen, dann erscheint die Information an beiden Orten.';
$string['incoursesettingsswitchtorolesettingboth'] = 'An beiden Orten: Im Nutzermenü und in den Kurseinstellungen';
$string['incoursesettingsswitchtorolesettingjustcourse'] = 'In den Kurseinstellungen';
$string['incoursesettingsswitchtorolesettingjustmenu'] = 'Im Nutzermenü';
$string['infobannersettings'] = 'Infobanner Einstellungen';
$string['login_page'] = 'Loginseite';
$string['loginbackgroundimagesetting'] = 'Hintergrundbilder für die Login-Seite';
$string['loginbackgroundimagesetting_desc'] = 'Bilder, die Sie in dieser Einstellung hochladen werden als Hintergrundbilder auf der Login-Seite in zufälliger Reihenfolge ausgegeben.';
$string['loginbackgroundimagetextsetting'] = 'Text für die Hintergrundbilder der Login-Seite';
$string['loginbackgroundimagetextsetting_desc'] = 'Mit dieser optionalen Einstellung können Sie Text, zum Beispiel einen Copyright-Hinweis, zu Ihren hochgeladenen Hintergrundbildern hinzufügen. <br/>
Jede Zeile besteht aus der Kennung (Dateiname) und dem Text, der dargestellt werden soll, getrennt durch einen Trennstrich (Pipe). Jede Deklaration muss in eine eigene Zeile geschrieben werden. <br/>
Zum Beispiel:
background-image-1.jpg|Copyright: CC0<br/>
Sie können Texte für eine beliebige Anzahl Ihrer hochgeladenen Bilder hinzufügen. Diese werden nur für diejenigen Bilder gesetzt, bei denen die Kennung und der Dateiname der hochgeladenen Datei übereinstimmen.';
$string['loginform'] = 'Login-Formular';
$string['loginform_desc'] = 'Mit dieser Einstellung können Sie die Darstellung des Login-Formulars optimieren, um eine größere Bandbreite an Hintergrundbildern zu unterstützen. Dies bedeutet, dass das Login-Formular weiter links auf der Login-Seite platziert wird, in der Breite verkleinert wird und das Hintergrundbild durch das Formular leicht durchscheint. Das Formular wird links platziert, da die meisten Bilder ihren Hauptinhalt eher mittig ausgerichtet haben und so dieser Bereich sichtbar bleibt. Ergänzung: Natürlich können Sie diese Einstellung auch unabhängig davon aktivieren, ob Sie eigene Hintergrundbilder hinzugefügt haben.';
$string['loginpagedesignheadingsetting'] = 'Login-Seite';
$string['navbardesignheadingsetting'] = 'Navigationsleiste';
$string['navdrawerfullwidthsetting'] = 'Volle Breite des Navigationsmenüs auf kleinen Bildschirmen';
$string['navdrawerfullwidthsettings_desc'] = 'Wenn diese Einstellung aktiviert ist, wird das Navigationsmenü auf kleinen Bildschirmen auf die volle Bildschirmbreite vergrößert. Dies kann gewollt sein, weil auf kleinen Bildschirmen sowieso nur ganz wenig des Inhaltsbereichs noch sichtbar ist, was keinen Informationsgehalt vermitteln kann. Außerdem kann ein Menü mit voller Breite eher den Nutzererwartungen auf kleinen Bildschirmen entsprechen, weil es üblicherweise so dargestellt wird.';
$string['navdrawerheadingsetting'] = 'Navigationsmenü';
$string['perpetualinfobannerheadingsetting'] = 'Dauerhafter Informationsbanner';
$string['perpetualinfobannerheadingsetting_desc'] = 'Die folgenden Einstellungen erlauben es, einige wichtige Informationen mit einem prominenten, dauerhaften Banner anzuzeigen.';
$string['perpetualinfobannerresetvisiblitysetting'] = 'Sichtbarkeit des dauerhaften Infobanners zurücksetzen';
$string['perpetualinfobannerresetvisiblitysetting_desc'] = 'Wenn Sie diese Checkbox anhaken, dann werden die von den Nutzern eventuell ausgeblendeten Infobanner wieder angezeigt. Sie können diese Einstellung nutzen, wenn Sie wichtige Änderungen am Inhalt gemacht haben und diese Information allen Nutzern wieder präsentieren möchten. <br/><br/>
Bitte beachten Sie: <br/>
Wenn Sie diese Änderung speichern, werden die Datenbankoperationen zum Zurücksetzen der Sichtbarkeit gestartet und diese Einstellung wird automatisch wieder deaktiviert. Das nächste Mal, wenn Sie diese Einstellung wieder setzen und speichern werden erneut die Datenbankoperationen gestartet.';
$string['perpibconfirmsetting'] = 'Bestätigungsdialog';
$string['perpibconfirmsetting_desc'] = 'Wenn Sie diese Einstellung aktivieren, wird dem/der Nutzer/in ein Bestätigungsdialog angezeigt, wenn er/sie den Infobanner wegklickt.
<br/>Der dort angezeigte Text ist im String mit dem Namen "closingperpetualinfobanner" gespeichert:
<br/><br/>
Sind Sie sicher, dass Sie diese Information ausblenden möchten? Sobald Sie diese ausgeblendet haben, wird sie nicht erneut erscheinen!
<br/><br/>
Sie können diesen Text über die Sprachanpassung ändern, wenn Sie hier etwas anderes ausgeben möchten.';
$string['perpibcontent'] = 'Inhalt des dauerhaften Informationsbanners';
$string['perpibcontent_desc'] = 'Geben Sie hier Ihre Information, die Sie im Banner anzeigen lassen möchten, ein.';
$string['perpibcsssetting'] = 'Boostrap CSS Klasse für den dauerhaften Infobanner';
$string['perpibcsssetting_desc'] = 'Mit dieser Einstellung können Sie den Bootstrap Stil auswählen mit dem der dauerhafte Informationsbanner angezeigt werden soll.';
$string['perpibdismisssetting'] = 'Ausblendbarkeit des dauerhaften Infobanners';
$string['perpibdismisssetting_desc'] = 'Mit dieser Einstellung können Sie den Infobanner dauerhaft ausblendbar machen. Wenn der/die Nutzer/in auf das X klickt, erscheint ein ein Bestätigungsdialog und erst  nachdem der/die Nutzer/in diesen bestätigt hat, wird der Banner dieser Person dauerhaft nicht mehr angezeigt.
<br/><br/>Bitte beachten Sie:<br/>Diese Einstellung hat keine Auswirkung auf Infobanner, die auf der Loginseite angezeigt werden. Infobanner auf der Loginseite können nicht dauerhaft verborgen werden, weswegen wir dort die Option diese überhaupt ausblenden zu können gar nicht erst angeboten wird.';
$string['perpibenablesetting'] = 'Dauerhaften Infobanner aktivieren';
$string['perpibenablesetting_desc'] = 'Mit dieser Einstellung können Sie entscheiden, ob der dauerhafte Informationsbanner auf den ausgewählten Seiten angezeigt werden soll oder nicht.';
$string['perpibshowonpagessetting'] = 'Seitenlayouts, auf denen der Infobanner angezeigt werden soll';
$string['perpibshowonpagessetting_desc'] = 'Mit dieser Einstellung können Sie die Seiten auswählen, auf denen der Infobanner angezeigt werden soll';
$string['pluginname'] = 'Boost Campus';
$string['presetheadingsetting'] = 'Theme Voreinstellungen';
$string['privacy:metadata:preference:infobanner_dismissed'] = 'Die Nutzereinstellung für den Status, ob der dauerhafte Infobanner ausgeblendet wurde.';
$string['privacy:metadata:request:infobanner_dismissed_no'] = 'Dauerhafter Infobanner wurde nicht ausgeblendet.';
$string['privacy:metadata:request:infobanner_dismissed_yes'] = 'Dauerhafter Infobanner wurde ausgeblendet.';
$string['region-footer-left'] = 'Footer (links)';
$string['region-footer-middle'] = 'Footer (mitte)';
$string['region-footer-right'] = 'Footer (rechts)';
$string['region-side-pre'] = 'Rechts';
$string['resetperpetualinfobannersuccess'] = 'Erfolg! Alle dauerhaften Infobannerinstanzen sind wieder sichtbar.
<br/>Die Einstellung "Sichtbarkeit des dauerhaften Infobanners zurücksetzen" wurde zurückgesetzt.';
$string['resetperpetualinfobannervisibilityerror'] = 'Ups... Etwas ist beim Aktualisieren der Datenbanktabellen schief gelaufen. Die Nutzereinstellung "theme_boost_campus_infobanner_dismissed" hätte in der Tabelle "user_preferences" zurückgesetzt werden sollen.
<br/>Geworfene Ausnahme: {$a->message}.
<br/>Stack Trace:
<br/>{$a->stacktrace}.
<br/>Die Einstellung "Sichtbarkeit des dauerhaften Infobanners zurücksetzen" wurde trotzdem zurückgesetzt.';
$string['section0titlesetting'] = 'Abschnitt 0: Überschrift';
$string['section0titlesetting_desc'] = 'Diese Einstellung ändert das Verhalten wie Moodle die Überschrift für den ersten Kursabschnitt darstellt. Moodle zeigt diesen nicht an, so lange hier der Standard-Titel verwendet wird. Sobald der Titel von einem/einer Nutzer/in individuell geändert wird, erscheint dieser plötzlich. Wenn Sie diese Einstellung aktivieren, können Sie ein konsistentes und erwartungskonformes Verhalten erreichen, indem der Titel für den Abschnitt 0 immer angezeigt wird.';
$string['settingsaddablockpositionbottomblockregion'] = 'Am Ende der standardmäßigen Blockspalte';
$string['settingsaddablockpositionbottomnavdrawer'] = 'Am Ende der Navigationsleiste (Nav Drawer)';
$string['showhintcourseguestaccessgeneral'] = 'Sie betrachten diesen Kurs gerade als <strong>{$a->role}</strong>.';
$string['showhintcourseguestaccesslink'] = 'Um vollen Zugriff auf diesen Kurs zu erhalten, können Sie sich <a href="{$a->url}">selbst in diesen Kurs einschreiben</a>.';
$string['showhintcourseguestaccesssetting_desc'] = 'Bei dieser Einstellung wird ein Hinweis im Kopfbereich des Kurses erscheinen, wenn ein/e Nutzer/in diesen mittels des Gastzugangs betritt. Wenn der Kurs eine aktive Selbsteinschreibung anbietet, wird dem Gast auch ein Link direkt zu dieser Einschreibemöglichkeit angezeigt.';
$string['showhintcoursehiddengeneral'] = 'Dieser Kurs ist zur Zeit <strong>verborgen</strong>. Solange der Kurs weiter verborgen ist, können ausschließlich eingeschriebene Trainer/innen darauf zugreifen.';
$string['showhintcoursehiddensetting'] = 'Hinweis in verborgenen Kursen anzeigen';
$string['showhintcoursehiddensetting_desc'] = 'Mit dieser Einstellung wird ein Hinweis im Kursheader angezeigt, solange der Kurs verborgen ist. Dies erlaubt die Erkennung des Sichtbarkeitsstatuses eines Kurses auf einen Blick, ohne die Kurseinstellungen öffnen zu müssen.';
$string['showhintcoursehiddensettingslink'] = 'Sie können die Sichtbarkeit in den <a href="{$a->url}">Kurseinstellungen</a> ändern.';
$string['showhintcourseselfenrol'] = 'Dieser Kurs ist gerade sichtbar und eine <strong>ungehinderte Selbsteinschreibung</strong> ist möglich über: <strong>"{$a->name}"</strong>. <br/>
Das heißt, dass weder ein Einschreibeschlüssel noch ein Einschreibungsende gesetzt ist.';
$string['showhintcourseselfenrollink'] = 'Wenn Sie nicht möchten, dass jede/r Moodle Nutzer/in sich in diesen Kurs ungehindert einschreiben können, dann beschränken Sie bitte den Zugang für diese Selbsteinschreibungsinstanz in den <a href="{$a->url}">Einstellungen zur Selbsteinschreibung</a>.';
$string['showhintcourseselfenrolsetting'] = 'Hinweis wegen uneingeschränkter Selbsteinschreibung anzeigen';
$string['showhintcourseselfenrolsetting_desc'] = 'Mit dieser Einstellung können Sie festlegen, dass ein Hinweis im Kurskopf erscheint, wenn ein Kurs sichtbar ist und eine uneingeschränkte (kein Einschreibeschlüssel oder Einschreibungsende) Selbsteinschreibung aktiv ist.';
$string['showhintcoursguestaccesssetting'] = 'Hinweis beim Gastzugang anzeigen';
$string['showsettingsincoursesetting'] = 'Kurseinstellungen direkt im Kurs';
$string['showsettingsincoursesetting_desc'] = 'Mit dieser Einstellung können Sie die Darstellung des Kurskontextmenüs ändern. Im Theme Boost erscheint direkt bei dem Zahnrad-Icon ein Kontext-Menü wenn Sie auf dieses Icon klicken. Der Menüeintrag "Mehr..." führt den/die Nutzer/in zu einer neuen Seite, auf der dann alle Einstellungen für den Kurskontext zu finden sind. Wenn Sie diese Einstellung aktivieren, dann erscheint das komplette kursbezogene Menü innerhalb des Kurses direkt unter dem Kopfbereich. Die Menüs sind in Reitern angeordnet, was es dem Nutzenden einfacher macht gewünschte Einträge zu finden als eine lange Liste von Einträgen durchsuchen zu müssen. Mit dieser Einstellung wird auch das Icon für die Einstellungen auf der Seite Teilnehmer/innen entfernt, weil die Einträge in diesem Menü identisch mit dem Kursmenü sind und daher nicht benötigt wird.<br/>
Bitte beachten Sie, dass diese Einstellung für Nutzer/innen, die JavaScript in ihrem Browser deaktiviert haben, keine Auswirkung hat - sie werden nach wie vor das Moodle Standardverhalten mit dem Popup-Kontextmenü erhalten.';
$string['showswitchedroleincoursesetting'] = 'Position der Rollenwechselinformation';
$string['showswitchedroleincoursesetting_desc'] = 'Mit dieser Einstellung können Sie entscheiden, wo der Hinweis auf welche Rolle ein/e Nutzer/in gewechselt hat, angezeigt wird. Wenn diese Einstellung nicht aktiviert ist (Standard), wird dieser Hinweis direkt unter dem Nutzernamen im Nutzermenü angezeigt (wie in Theme Boost). Ist sie aktiviert, wird diese Information, zusammen mit einem Link mit dem man zurück zur Ausgangsrolle kommt, direkt unter dem Kurskopf angezeigt, da diese Funktion kursbezogen ist.';
$string['sitehomeontopsetting'] = 'Menüeintrag Startseite nach oben';
$string['sitehomeontopsetting_desc'] = 'Wenn Sie diese Einstellung setzen, wird der Menüeintrag "Startseite" immer an erster Stelle im linken Menü platziert. Standardmäßig ist dies in Moodle, außer für die Kursseiten, der Fall. Auf der Kursseite wird der Kursknoten mit seinen Inhalten ganz oben im Menü platziert. Dies könnte aber zu einem Bruch der Nutzererwartungen für den Menüeintrag "Startseite" führen.';
$string['switchedroleto'] = 'Sie betrachten den Kurs gerade mit der Rolle:';
$string['switchroleto'] = 'Rolle wechseln';
$string['timedibcontent'] = 'Inhalt des zeitgesteuerten Informationsbanners';
$string['timedibcontent_desc'] = 'Geben Sie hier Ihre Information, die Sie im zeitgesteuerten Banner anzeigen lassen möchten, ein.';
$string['timedibcsssetting'] = 'Boostrap CSS Klasse für den zeitgesteuerten Infobanner';
$string['timedibcsssetting_desc'] = 'Mit dieser Einstellung können Sie den Bootstrap Stil auswählen mit dem der zeitgesteuerte Informationsbanner angezeigt werden soll.';
$string['timedibenablesetting'] = 'Zeitgesteuerten Infobanner aktivieren';
$string['timedibenablesetting_desc'] = 'Mit dieser Einstellung können Sie entscheiden, ob der zeitgesteuerte Informationsbanner auf den ausgewählten Seiten angezeigt werden soll oder nicht.';
$string['timedibendsetting'] = 'Endzeit für den zeitgesteuerten Infobanner';
$string['timedibendsetting_desc'] = 'Mit dieser Einstellung können Sie definieren, wann der zeitgesteuerte Informationsbanner auf den ausgewählten Seiten verborgen werden soll.
<br/>Bitte geben Sie ein gültiges Datum in diesem Format an: JJJJ-MM-TT SS:MM:SS. Zu Beispiel: "2020-01-07 08:00:00". Als Zeitzone wird diejenige genommen, die in der Einstellung "Zeitzone" eingestellt ist.
<br/>Wenn Sie diese Einstellung leer lassen, aber ein Datum für den Beginn eingegeben haben, dann wird der Banner nicht von alleine verschwinden, nachdem der Startzeitpunkt erreicht wurde.';
$string['timedibshowonpagessetting'] = 'Seitenlayouts, auf denen der Infobanner angezeigt werden soll';
$string['timedibshowonpagessetting_desc'] = 'Mit dieser Einstellung können Sie die Seiten auswählen, auf denen der zeitgesteuerte Infobanner angezeigt werden soll.
<br/> Wenn beide Bannerarten auf einem ausgewählten Seitenlayout aktiv sind, dann wird der zeitgesteuerte Infobanner immer über dem dauerhaften Infobanner angezeigt!';
$string['timedibstartsetting'] = 'Startzeit für den zeitgesteuerten Infobanner';
$string['timedibstartsetting_desc'] = 'Mit dieser Einstellung können Sie definieren, wann der zeitgesteuerte Informationsbanner auf den ausgewählten Seiten angzeigt werden soll.
<br/>Bitte geben Sie ein gültiges Datum in diesem Format an: JJJJ-MM-TT SS:MM:SS. Zu Beispiel: "2020-01-07 08:00:00". Als Zeitzone wird diejenige genommen, die in der Einstellung "Zeitzone" eingestellt ist.
<br/>Wenn Sie diese Einstellung leer lassen, aber ein Datum für das Ende eingegeben haben, dann verhält es sich genau so als ob Sie ein Datum weit in der Vergangenheit eingegeben hätten.';
$string['timedinfobannerheadingsetting'] = 'Zeitgesteuerter Infobanner';
$string['timedinfobannerheadingsetting_desc'] = 'Die folgenden Einstellungen ermöglichen es, wichtige Informationen innerhalb eines prominenten, zeitgesteuerten Banners anzuzeigen.';
$string['userdefinedontopsetting'] = 'Nutzereingestellte Seite nach oben';
$string['userdefinedontopsetting_desc'] = 'Wenn Sie diese Einstellung setzen, wird der Menüeintrag Dashboard oder Startseite (abhängig von den Einstellungen des Nutzers) immer an erster Stelle im linken Menü platziert. Standardmäßig ist dies in Moodle bereits der Fall, außer für die Kursseiten. Dort wird der Kursknoten mit seinen Inhalten ganz oben im Menü platziert. Dies könnte aber zu einem Bruch der Nutzererwartungen für die Startseite führen.';
$string['yes_close'] = 'Ja, bitte ausblenden!';
