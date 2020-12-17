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
 * Strings for component 'tool_dynamicrule', language 'de_wp', version '3.10'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Aktiv';
$string['activerules'] = 'Aktive Regeln';
$string['addcondition'] = 'Bedingung hinzufügen';
$string['addconditions'] = 'Bedingungen zu dieser Regel hinzufügen';
$string['addoutcome'] = 'Aktion hinzufügen';
$string['addoutcomes'] = 'Aktionen zu dieser Regel hinzufügen';
$string['after'] = 'Am oder später';
$string['archive'] = 'Archiv';
$string['archived'] = 'Archiviert';
$string['archivedrules'] = 'Archivierte Regeln';
$string['archiverule'] = 'Archivierte Regel \'{$a}\'';
$string['availableplaceholders'] = 'Verfügbare Platzhalter';
$string['before'] = 'Vor';
$string['body'] = 'Inhalt';
$string['broken'] = 'Defekt';
$string['cachedef_eventsubscriptions'] = 'Dies speichert die Liste der Ereignis-Abonnements für Regelbedingungen';
$string['cannotenablecomponentrule'] = 'Die Regel \'{$a}\' kann erst aktiviert werden, wenn Aktionen zugeordnet wurden und keine Fehler auftreten.';
$string['cannotenablerule'] = 'Regel \'{$a}\' kann nicht aktiviert werden. Sie muss Bedingungen und Aktionen enthalten, darf nicht defekt und darf nicht archiviert sein.';
$string['cohort'] = 'Globale Gruppe';
$string['conditioncohortmember'] = 'Nutzer ist Mitglied in Globaler Gruppe';
$string['conditioncohortmemberdescription'] = 'Nutzer, die Mitglied der Globalen Gruppe \'{$a}\' sind';
$string['conditioncohortmemberdescriptionwithdate'] = 'Nutzer der Globalen Gruppet \'{$a->name}\'<br />
Der Globalen Gruppe am oder später zugewiesen: \'{$a->conditiondate}\\';
$string['conditioncohortnotmember'] = 'Nutzer ist kein Mitglied von Globaler Gruppe';
$string['conditioncohortnotmemberdescription'] = 'Nutzer, die kein Mitglied der Globalen Gruppe \'{$a}\' sind';
$string['conditioncoursecompleted'] = 'Kurs abgeschlossen';
$string['conditioncoursecompleteddescription'] = 'Nutzer, die den Kurs \'{$a}\' abgeschlossen haben';
$string['conditioncoursecompleteddescriptionwithdate'] = 'Nutzer, dieden Kurs \'{$a->coursename}\' abgeschlossen haben<br />
Abschlussdatum am oder \'{$a->datetype}\': \'{$a->conditiondate}\\';
$string['conditioncoursenotcompleted'] = 'Kurs nicht abgeschlossen';
$string['conditioncoursenotcompleteddescription'] = 'Nutzer, die den Kurs \'{$a}\' nicht abgeschlossen haben';
$string['conditionisbroken'] = 'Die Konfiguration der Bedingung ist defekt';
$string['conditionisnotavailable'] = 'Diese Voraussetzung ist nicht verfügbar.';
$string['conditionnotsaved'] = 'Die Bedingung ist nicht gespeichert';
$string['conditions'] = 'Bedingungen';
$string['conditionuserenrolled'] = 'Eingeschriebene Nutzer';
$string['conditionuserenrolleddescription'] = 'Eingeschriebene Nutzer im Kurs \'{$a->course}\'<br />
Einschreibemethode: \'{$a->enrol}\\';
$string['conditionuserenrolleddescriptionwithdate'] = 'Eingeschriebene Nutzer im Kurs \'{$a->course}\'<br />
Einschreibemethode: \'{$a->enrol}\\<br />
Einschreibestartdatum am oder später: \'{$a->conditiondate}\\';
$string['conditionuserlastlogin'] = 'Letzter Login des Nutzers';
$string['conditionuserlastlogindescriptionbefore'] = 'Nutzer, die sich vor über {$a} zuletzt eingeloggt haben';
$string['conditionuserlastlogindescriptionever'] = 'Nutzer, die sich mindestens einmal eingeloggt haben';
$string['conditionuserlastlogindescriptioninlast'] = 'Nutzer, die sich in den letzten {$a} eingeloggt haben';
$string['conditionuserlastlogindescriptionnever'] = 'Nutzer, die sich noch nie eingeloggt haben';
$string['conditionusernotenrolled'] = 'Nicht eingeschriebener Nutzer';
$string['conditionusernotenrolleddescription'] = 'Nutzer, die nicht in Kurs \'{$a->course}\' eingeschrieben sind<br />
Einschreibemethode: \'{$a-<enrol}\\';
$string['conditionusernotenrolleddescriptionwithenrol'] = 'Nutzer, die nicht über Einschreibemethode \'{$a->enrol}\' in Kurs \'{$a->course}\' eingeschrieben sind';
$string['conditionuserprofilefield'] = 'Nutzerprofilfeld';
$string['conditionuserprofilefielddescription'] = 'Nutzer mit dem Eintrag \'{$a->fieldvalue}\' im Feld \'{$a->fieldname}\'';
$string['conditionuserprofilefielddescriptiontext'] = 'Nutzer mit diesem Profilfeldwert \'{$a->fieldname}\' {$a->fieldvalue}';
$string['confirmarchiverule'] = 'Sind Sie sicher, dass Sie die Regel \'{$a}\' archivieren wollen? Archivierte Dynamische Regeln werden weiterhin für aktuelle und zukünftige Berichte verfügbar sein.';
$string['confirmdeletecondition'] = 'Sind Sie sicher, dass Sie die Bedingung \'{$a}\' und alle damit zusammenhängenden Daten löschen wollen? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['confirmdeleteoutcome'] = 'Sind Sie sicher, dass Sie die Aktion \'{$a}\' und alle damit zusammenhängenden Daten löschen wollen? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['confirmdeleterule'] = 'Sind Sie sicher, dass Sie die Regel \'{$a}\' und alle damit zusammenhängenden Daten löschen wollen? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['confirmdisableruleforedit'] = 'Diese Regel wird automatisch deaktiviert, damit sie bearbeitet werden kann.';
$string['confirmduplicaterule'] = 'Sind Sie sicher, dass Sie die Regel \'{$a}\' duplizieren wollen?';
$string['confirmeditrule'] = 'Einige Nutzer erfüllten diese Regel schon in der Vergangenheit. Daher können Sie nun nur die Aktionen bearbeiten. Um die Bedingungen zu bearbeiten, können Sie eine Kopie der Regel anlegen.';
$string['confirmenablecomponentrule'] = 'Sind Sie sicher, dass Sie die Regel aktivieren wollen? Dies betrifft {$a} Nutzer.';
$string['confirmenablerule'] = 'Bedingungen werden gesperrt wenn zumindest ein/e Nutzer/in von der Regel betroffen ist. Sind Sie sicher, dass Sie diese Regel aktivieren wollen?';
$string['countmatchingusers'] = '{$a} Übereinstimmungen';
$string['coursecompletiondate'] = 'Fertigstellungstermin';
$string['courseinternalid'] = 'Interne Kurs-ID, die in URLs verwendet wird';
$string['courseurl'] = 'Kurs-URL';
$string['date'] = 'Datum';
$string['datetypeever'] = 'Jemals';
$string['datetypeinlast'] = 'Zuletzt';
$string['datetypenever'] = 'Nie';
$string['datetypenone'] = 'Nicht gesetzt';
$string['datetypepast'] = 'Über';
$string['deletecondition'] = 'Bedingung löschen';
$string['deleteoutcome'] = 'Aktion löschen';
$string['deleterule'] = 'Regel \'{$a}\\ löschen';
$string['details'] = 'Details';
$string['disablerule'] = 'Regel \'{$a}\' deaktivieren';
$string['duplicate'] = 'Duplizieren';
$string['duplicaterule'] = 'Regel \'{$a}\' duplizieren';
$string['during'] = 'während';
$string['dynamicrule:manage'] = 'Dynamische Regeln verwalten';
$string['editactions'] = 'Aktionen der Regel  \'{$a}\' bearbeiten';
$string['editanyway'] = 'Trotzdem bearbeiten';
$string['editcondition'] = 'Bedingung bearbeiten';
$string['editdetails'] = 'Details der Regel \'{$a}\' bearbeiten';
$string['editdetailsbutton'] = 'Details bearbeiten';
$string['editoutcome'] = 'Aktion bearbeiten';
$string['editrule'] = 'Regel \'{$a}\' bearbeiten';
$string['editrulename'] = 'Name der Regel \'{$a}\' bearbeiten';
$string['enable'] = 'Aktivieren';
$string['enablehelp'] = 'Regel aktivieren';
$string['enablehelp_help'] = 'Eine Regel muss mindestens eine Bedingung und eine Aktion enthalten, um aktiviert werden zu können. Bedingungen und Aktionen müssen zudem logisch fehlerfrei sein.';
$string['enablehelpmodal'] = 'Regel aktivieren';
$string['enablehelpmodal_help'] = 'Eine Regel muss mindestens eine Aktion enthalten, um aktiviert werden zu können.';
$string['enablerule'] = 'Regel \'{$a}\' aktivieren';
$string['errorbadgehasextracriteria'] = 'Dieser Badge hat eine andere benötigte Bedingung zusätzlich zur manuellen Vergabe, kann also nicht mit einer Dynamischen Regel vergeben werden';
$string['errorbadgenopermission'] = 'Sie haben nicht die benötigte Rolle, um diesen Badge zu vergeben';
$string['errorcannotcreate'] = 'Sie haben keine Berechtigung Regeln zu erstellen';
$string['errorcannotmanage'] = 'Sie haben keine Berechtigung, diese Regel zu verwalten';
$string['errorcannotmanagecondition'] = 'Sie haben nicht die Berechtigung, diese Bedingung zu verwalten';
$string['errorcannotmanageoutcome'] = 'Sie haben nicht die Berechtigung, diese Aktion zu verwalten';
$string['errorcompletionnotenabled'] = 'Für diesen Kurs ist kein Abschluss aktiviert';
$string['errorinvalidbadge'] = 'Ungültiger Badge';
$string['errorinvalidbody'] = 'Ungültiger Benachrichtigungstext';
$string['errorinvalidcohort'] = 'Ungültige Kohorte';
$string['errorinvalidcompetency'] = 'Ungültige Kompetenz';
$string['errorinvalidcourse'] = 'Ungültiger Kurs';
$string['errorinvalidenrolmentmethod'] = 'Dieser Kurs hat nicht die ausgewählte Einschreibemethode oder sie ist nicht aktiviert';
$string['errorinvalidoperator'] = 'Üngültiger Wert. Nur "vor" und "nach" sind erlaubt.';
$string['errorinvalidsubject'] = 'Ungültiger Betreff für Benachrichtigung';
$string['errorinvaliduserlastlogin'] = 'Ungültiges Datum des letztens Logins';
$string['errorinvaliduserlastlogintype'] = 'Letzter Login-Typ ungültig';
$string['errorinvaliduserprofilefield'] = 'Ungültiges Profilfeld';
$string['errorinvaliduserprofilefieldvalue'] = 'Ungültiger Profilfeldwert';
$string['errornopermissionissuecertificate'] = 'Sie haben nicht das Recht, dieses Zertifikat auszustellen';
$string['ever'] = 'jemals';
$string['exporterdescription'] = 'Definition Dynamischer Regeln; Bedinungen und Aktionen';
$string['exportselectactive'] = 'Alle Dynamischen Regeln auswählen (ohne archivierte)';
$string['exportselectall'] = 'Alle Dynamischen Regeln auswählen (mit archivierten)';
$string['exportselectenabled'] = 'Alle aktivierten Dynamischen Regeln auswählen';
$string['exportsettings'] = 'Regeldefinitionen, Bedinungen und Aktionen';
$string['exportsettings_help'] = 'Alle Regeln werden beim Import deaktiviert, ungeachtet ihres ursprünglichen Zustands.';
$string['field'] = 'Feld';
$string['general'] = 'Allgemein';
$string['importlogerror'] = 'Konnte Regel \'{$a}\' nicht importieren';
$string['importlogerrorinvalidcondition'] = 'Fehlende oder ungültige Bedingung der Regel';
$string['importlogerrorinvalidoutcome'] = 'Fehlende oder ungültige Aktion der Regel';
$string['importlogsuccess'] = 'Neue Regel \'{$a->name}\' mit {$a->conditionscount} Bedinungen und {$a->outcomescount} Aktionen wurde erstellt';
$string['importlogsuccesslink'] = 'Neue Regel \'<a href="{$a->url}">{$a->name}</a>\' mit {$a->conditionscount} Bedinungen und {$a->outcomescount} Aktionen wurde erstellt';
$string['importselectall'] = 'Alle Dynamischen Regeln in dieser Datei auswählen';
$string['importselectspecified'] = 'Manuell auswählen…';
$string['lastlogin'] = 'Letzter Login des Nutzers am';
$string['lastlogin_help'] = 'Sie können ein Datum in Relation zum aktuellen Datum wählen oder Nutzer, die sich noch nie eingeloggt haben.';
$string['limitreached'] = 'Maximale Anzahl Dynamischer Regeln erreicht';
$string['limitreacheddescr'] = 'Sie haben die maximale Anzahl Dynamischer Regeln auf dieser Seite erreicht. Bitte beachten Sie, dass auch archivierte Regeln mitgezählt werden.';
$string['limitreachednumdescr'] = 'Sie können maximal {$a} Dynamische Regeln auf dieser Seite erstellen. Bitte beachten Sie, dass auch archivierte Regeln mitgezählt werden.';
$string['managebadges'] = 'Badges verwalten';
$string['managecohorts'] = 'Globale Gruppen verwalten';
$string['managecompetencies'] = 'Kompetenzen verwalten';
$string['managerules'] = 'Regeln verwalten';
$string['match'] = 'Zuordnung';
$string['matchedtime'] = 'Zeitpunkt der Zuordnung';
$string['matchlimitinvalid'] = 'Regel muss mindestens einmal angewandt werden.';
$string['messageprovider:notificationoutcome'] = 'Benachrichtigungsaktion für Dynamische Regeln';
$string['missingcondition'] = 'Fehlende Bedingung';
$string['missingconditiondescr'] = 'Bedingung \'{$a->condition}\' existiert nicht im Plugin \'{$a->plugin}\'.';
$string['missingoutcome'] = 'Fehlende Aktion';
$string['missingoutcomedescr'] = 'Aktion \'{$a->outcome}\' existiert nicht im Plugin \'{$a->plugin}\'.';
$string['newnameforrule'] = 'Neuer Name für Regel \'{$a}\'';
$string['newrule'] = 'Neue Regel';
$string['noavailablebadges'] = 'Keine Badges vorhanden';
$string['noavailablecohorts'] = 'Keine Globalen Gruppen verfügbar';
$string['noavailablecompletioncourses'] = 'Keine Kurse mit aktiviertem Abschluss';
$string['noavailableenrolledcourses'] = 'Keine Kurse, in denen Sie Zugriff auf die Teilnehmerliste haben';
$string['noruleconditions'] = 'Keine Bedingung in dieser Regel enthalten';
$string['noruleoutcomes'] = 'Keine Aktion in dieser Regel enthalten';
$string['onorafter'] = 'am oder später';
$string['operator'] = 'Bedingung';
$string['operatorafter'] = 'Nach';
$string['operatorbefore'] = 'Vor';
$string['outcomebadge'] = 'Badge vergeben';
$string['outcomebadgedescription'] = 'Badge an Nutzer \'{$a}\' vergeben';
$string['outcomecertificate'] = 'Zertifikat ausstellen';
$string['outcomecertificatedescription'] = 'Zertifikat \'{$a}\' an Nutzer/innen ausstellen';
$string['outcomecohort'] = 'Zu Globaler Gruppe hinzufügen';
$string['outcomecohortbroken'] = 'Globale Gruppe mit ID \'{$a}\' existiert nicht.';
$string['outcomecohortdescription'] = 'Nutzer/innen zur Globalen Gruppe \'{$a}\' hinzufügen';
$string['outcomecompetency'] = 'Kompetenz vergeben';
$string['outcomecompetencybroken'] = 'Kompetenz mit ID \'{$a}\' existiert nicht.';
$string['outcomecompetencydescription'] = 'Kompetenz an Nutzer \'{$a}\' vergeben';
$string['outcomeisbroken'] = 'Diese Aktionskonfiguration ist fehlerhaft';
$string['outcomeisnotavailable'] = 'Diese Aktion ist nicht verfügbar';
$string['outcomenotification'] = 'Benachrichtigung';
$string['outcomenotificationdescription'] = 'Benachrichtigung \'{$a}\' an Nutzer senden';
$string['outcomenotsaved'] = 'Aktion wird nicht gespeichert';
$string['outcomes'] = 'Aktionen';
$string['per'] = 'pro';
$string['placeholdersdesc'] = 'Platzhalter';
$string['placeholdersdesc_help'] = 'Platzhalter ermöglichen das Hinzufügen dynamischer Inhalte, z.B. der {{userfullname}}';
$string['pluginname'] = 'Dynamische Regeln';
$string['previewcoursefullname'] = 'Vollständiger Name des Kurses';
$string['previewcourseshortname'] = 'Kurzname des Kurses';
$string['privacy:metadata:tool_dynamicrule_match'] = 'Information über Nutzer, der die Regelbedingungen erfüllt. Dies führt dazu, dass der Nutzer von den in der Regel definierten Aktionen betroffen ist.';
$string['privacy:metadata:tool_dynamicrule_match:matchedtime'] = 'Zeitstempel, der anzeigt, wann der Nutzer die Bedingungen von Regeln erfüllt hat.';
$string['privacy:metadata:tool_dynamicrule_match:ruleid'] = 'ID der Regel';
$string['privacy:metadata:tool_dynamicrule_match:unmatchedtime'] = 'Zeitstempel, der anzeigt, wann der Nutzer die Bedingungen von Regeln nicht mehr erfüllt hat nachdem die Aktion aktiviert wurde.';
$string['privacy:metadata:tool_dynamicrule_match:userid'] = 'Die ID des Nutzers, der die Regelbedingungen erfüllt.';
$string['reg_wpdynamicrules'] = 'Anzahl Dynamischen Regeln ({$a})';
$string['reportmatchingusers'] = 'Bericht über Nutzer, die dynamische Regel erfüllen';
$string['reportrulematches'] = 'Bericht über Nutzer, die von der Dynamischen Regel betroffen waren und über Nutzer, die von ihr nicht betroffen waren';
$string['reportruleslist'] = 'Systembericht für RegellIste';
$string['rolemanager'] = '/inDynamische Regeln-Manager';
$string['rolemanagerdescription'] = 'Kann Dynamische Regeln innerhalb dieses Mandanten zu erstellen und zu verwalten';
$string['ruledisabled'] = 'Diese Regel ist deaktiviert.';
$string['ruleisbroken'] = 'Diese Regel ist fehlerhaft. Mindestens eine Bedingung oder eine Aktion ist fehlerhaft.';
$string['rulematchfreq'] = 'Ausführungshäufigkeit';
$string['rulematchfreq_help'] = 'Sobald ein Nutzer die Bedingungen erfüllt wird die Regel für ihn/sie angewandt. Dies wird nicht wiederholt, solange der Nutzer die Bedingungen erfüllt.  Wenn der Nutzer für einige Zeit die Bedingung nicht erfüllt, dann später wieder erfüllt, wird die Regel neu angewandt.  Die Einstellung definiert wie häufig die Regel für einen Nutzer maximal angewendet wird.';
$string['rulematchfreqdesc0'] = 'Kann mehrmals, öfter als ausgeführt werden';
$string['rulematchfreqdesc1'] = 'mal';
$string['rulematchfreqenable'] = 'Begrenzung der Ausführungshäufigkeit für jeden Nutzer aktivieren';
$string['rulename'] = 'Name';
$string['rulenotfound'] = 'Regel konnte nicht gefunden werden.';
$string['ruleselectitemarchived'] = '{$a} (archiviert)';
$string['select'] = 'Auswählen';
$string['selectbadge'] = 'Badge auswählen';
$string['selectbadge_help'] = 'Um durch eine Dynamische Regeln vergeben werden zu können, muss der Badge aktiviert sein und eine manuelle Vergabe angelegt sein.';
$string['selectcertificate'] = 'Zertifikat wählen';
$string['selectcompetency'] = 'Kompetenz auswählen';
$string['selectcompetency_help'] = 'Kompetenzen zum Ausstellen auswählen';
$string['sitelink'] = 'Link zur Seite';
$string['siteplaceholders'] = 'Platzhalter der Seite';
$string['siteshortname'] = 'Kuzname der Seite';
$string['subject'] = 'Betreff';
$string['taskprocessrules'] = 'Regeln verarbeiten';
$string['timeadded'] = 'An oder nach diesem Datum und dieser Zeit zu Globaler Gruppe hinzugefügt';
$string['timecompleted'] = 'Abschluss ist an oder nach';
$string['timeenrolled'] = 'Einschreibungs-Start ist an oder nach';
$string['toomanybadgestoshow'] = 'Zu viele Badges zur Anzeige';
$string['toomanycertificatestoshow'] = 'Zu viele Zertifikate ({$a}) zum anzeigen';
$string['unarchiverule'] = 'Archivierung von Regel \'{$a}# rückgängig machen';
$string['unmatchedtime'] = 'Nicht abgeglichene Zeit';
$string['userplaceholders'] = 'Platzhalter für Nutzer';
$string['value'] = 'Wert';
$string['viewmatchingusers'] = 'Passende Nutzer anzeigen';
$string['viewreport'] = 'Bericht ansehen für \'{$a}\'';
$string['warningchangeswillnotapplymatchedusers'] = 'Die Änderungen wirken sich nicht auf Nutzer aus für die die Regel bereits früher angewandt wurde';
