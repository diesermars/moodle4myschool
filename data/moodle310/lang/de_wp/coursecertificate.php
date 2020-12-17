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
 * Strings for component 'coursecertificate', language 'de_wp', version '3.10'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'Diese Aktivität ist momentan versteckt. Indem Sie sie sichtbar machen, können Nutzer/innen automatisch eine PDF des Zertifikats erhalten, sobald sie die Vorraussetzungen für die Aktivität erfüllen.';
$string['automaticsend_helptitle'] = 'Hilfe zum automatischen Versand';
$string['automaticsenddisabled'] = 'Der automatische Versand dieses Zertifikats ist deaktiviert.';
$string['automaticsenddisabled_help'] = 'Indem Sie ihn deaktiviert lassen, müssen Teilnehmer/innen in der Kursübersicht auf die Aktivität klicken, sobald sie die Voraussetzungen erfüllen, um das Zertifikat zu erhalten.<br/><br/>
Wenn Sie ihn aktivieren, erhalten Teilnehmer/innen automatisch eine PDF des Zertifikats sobald sie die Vorraussetzungen für die Aktivität erfüllen. Alle Teilnehmer/innen, die diese Voraussetzungen bereits jetzt erfüllen, erhalten bei der Aktivierung auch sofort ihr Zertifikat.';
$string['automaticsenddisabledinfo'] = 'Aktuell erfüllen {$a} Teilnehmer/innen die Voraussetzungen für diese Aktivität und werden ein Zertifikat erhalten, sobald Sie auf diese Aktivität zugreifen.';
$string['automaticsendenabled'] = 'Der automatische Versand dieses Zertifikats ist aktiviert.';
$string['automaticsendenabled_help'] = 'Indem Sie ihn aktiviert lassen, erhalten Teilnehmer/innen automatisch eine PDF des Zertifikats, sobald sie die Voraussetzungen der Aktivität erfüllen.<br/><br/>
Wenn Sie ihn deaktivieren, müssen Teilnehmer/innen in der Kursübersicht auf die Aktivität klicken, sobald sie die Voraussetzungen erfüllen, um das Zertifikat zu erhalten.';
$string['certificateissues'] = 'Zertifikate';
$string['certifiedusers'] = 'Zertifizierte Teilnehmer/innen';
$string['chooseatemplate'] = 'Vorlage wählen...';
$string['code'] = 'Code';
$string['coursecertificate:addinstance'] = 'Eine neue Kurszertifikat-Aktivität hinzufügen';
$string['coursecertificate:receive'] = 'Erteilte Zertifikate erhalten';
$string['coursecertificate:view'] = 'Kurszertifikat ansehen';
$string['coursecertificate:viewreport'] = 'Bericht zum Kurszertifikat ansehen';
$string['coursecompletiondate'] = 'Fertigstellungsdatum';
$string['courseinternalid'] = 'Interne Kurs-ID zur Nutzung in URLs';
$string['courseurl'] = 'Kurs-URL';
$string['disableautomaticsend'] = 'Teilnehmer/innen werden nicht mehr automatisch eine PDF des Zertifikats erhalten, sobald sie die Voraussetzungen der Aktivität erfüllen. Stattdessen müssen sie in der Kursübersicht auf die Aktivität klicken, sobald sie die Vorraussetzungen erfüllen, um ihr Zertifikat zu erhalten.';
$string['enableautomaticsend'] = 'Teilnehmer/innen werden automatisch eine PDF des Zertifikats erhalten, sobald sie die Voraussetzungen der Aktivität erfüllen.<br/><br/>
Aktuell erfüllen {$a} Teilnehmer/innen die Voraussetzungen, aber haben diese Aktivität noch nicht aufgerufen. Sie werden sofort ein Zertifikat erhalten.<br/><br/>
Teilnehmer/innen, die bereits auf diese Aktivität zugegriffen haben, werden ihr Zertifikat nicht nochmals erhalten.';
$string['expirydate'] = 'Ablaufdatum';
$string['issueddate'] = 'Ausgabedatum';
$string['modulename'] = 'Kurszertifikat';
$string['modulename_help'] = 'Das Modul "Kurszertifikat" ermöglicht Lernenden die Wertschätzung persönlicher Erfolge durch die Ausstellung von Zertifikaten.<br/><br/>
Sie können von ihren verschiedenen Zertifikatsvorlagen auswählen, welche personalisierte Daten wie Namen, Kurs, etc. automatisch anzeigen.<br/><br/>
Nutzer/innen können das Zertifikat als PDF herunterladen, indem sie auf diese Aktivität zugreifen. Alternativ kann man den automatischen Versand per Email aktivieren.<br><br/>
Wenn die Vorlage für diese Aktivität einen QR-Code enthält, können Nutzer/innen ihn einscannen, um ihr Zertifikat zu validieren.';
$string['modulenameplural'] = 'Kurszertifikate';
$string['notemplateselected'] = 'Die ausgewählte Vorlage wurde nicht gefunden. Gehen Sie bitte in die Aktivitätseinstellungen und wählen Sie eine andere.';
$string['notemplateselecteduser'] = 'Das Zertifikat ist nicht verfügbar. Bitte kontaktieren Sie den/die Kursadministrator/in.';
$string['notemplateswarning'] = 'Es gibt keine verfügbaren Zertifikatsvorlagen. Bitte kontaktieren Sie den/die Administrator/in.';
$string['notemplateswarningwithlink'] = 'Es gibt keine verfügbaren Zertifikatsvorlagen. Bitte gehen Sie zur Seite <a href="{$a}">Zertifikatsvorlagen verwalten</a> und erstellen Sie eine.';
$string['nouserscertified'] = 'Keine Teilnehmer/innen sind zertifiziert.';
$string['page-mod-coursecertificate-x'] = 'Beliebige Seite des Kurszertifikat-Moduls';
$string['pluginadministration'] = 'Kurszertifikat-Administration';
$string['pluginname'] = 'Kurszertifikat';
$string['previewcoursefullname'] = 'Vollständiger Name des Kurses';
$string['previewcourseshortname'] = 'Kurzname des Kurses';
$string['privacy:metadata'] = 'Die Kurszertifikat-Aktivität speichert keine personenbezogenen Daten.';
$string['revoke'] = 'Widerrufen';
$string['revokeissue'] = 'Sind Sie sicher, dass Sie diese Zertifikatausstellung widerrufen wollen?';
$string['selectdate'] = 'Datum wählen';
$string['selecttemplatewarning'] = 'Sobald diese Aktivität mindestens ein Zertifikat ausgestellt hat, wird dieses Feld gesperrt und nicht mehr editierbar sein.';
$string['status'] = 'Status';
$string['taskissuecertificates'] = 'Kurszertifikate ausstellen';
$string['template'] = 'Vorlage';
