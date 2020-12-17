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
 * Strings for component 'tool_organisation', language 'de_wp', version '3.10'.
 *
 * @package     tool_organisation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['addchilddepartment'] = 'Neue Unterabteilung für Abteilung \'{$a}\'';
$string['addchildposition'] = 'Neue Unterposition für Position \'{$a}\'';
$string['adddepartment'] = 'Neue Abteilung für Framework \'{$a}\'';
$string['adddepartmentframework'] = 'Neues Abteilungsframework';
$string['addjob'] = 'Neuer Job';
$string['addjobforuser'] = 'Neuer Job für \'{$a}\'';
$string['addposition'] = 'Neue Position für Framework \'{$a}\'';
$string['addpositionframework'] = 'Neues Positionsframework';
$string['allframeworks'] = 'Abteilungs- und Positionsrahmen';
$string['anydepartment'] = 'Jeder';
$string['anyposition'] = 'Jeder';
$string['assfirstchildof'] = 'Als erste Unterkategorie von \'{$a}\'';
$string['audienceand'] = 'Und';
$string['audiencecustomise'] = 'Individuell anpassen...';
$string['audienceor'] = 'Oder';
$string['audienceselect'] = 'Beziehung zum Nutzer, der den Bericht ansieht';
$string['audienceselectinitial'] = 'Zielgruppe auswählen';
$string['audienceself'] = 'Selbst';
$string['audienceusersall'] = 'Alle Nutzer';
$string['audienceusersdept'] = 'In derselben Abteilung wie der Nutzer, der den Bericht ansieht';
$string['audienceusersreporting'] = 'Berichtet an den Nutzer, der den Bericht ansieht';
$string['audienceusersreporting_help'] = 'Nutzer einbeziehen, die direkt an den Nutzer berichten, der den Bericht ansieht (diese Nutzer sollten selbst eine Managerposition haben)';
$string['cachedef_myjob'] = 'Job dieses Nutzers und sein Team';
$string['conditioncanallocateprograms'] = 'Kann zu Programmen zuweisen';
$string['conditioncanreceivenotifications'] = 'Kann Benachrichtigungen erhalten';
$string['conditioncanviewreports'] = 'Kann Berichte ansehen';
$string['conditionuserdepartment'] = 'Nutzer ist in Abteilung';
$string['conditionuserdepartmentdescription'] = 'Nutzer ist zugewiesen in Abteilung \'{$->deptname}\'<br  />
Unterabteilungen: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionnegated'] = 'Nutzer ist nicht zugewiesen in Abteilung  \'{$->deptname}\'<br  />
Unterabteilungen: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionwithdate'] = 'Nutzer ist zugewiesen in Abteilung \'{$->deptname}\'<br  />
Unterabteilungen: {$a->subdeptsinclude}<br />
Am oder später: {$a->conditiondate}';
$string['conditionusernotindepartment'] = 'Nutzer ist nicht in Abteilung';
$string['conditionuserposition'] = 'Nutzer hat Position';
$string['conditionuserpositiondescription'] = 'Nutzer hat Position \'{$a->posname}\'<br />
Unterpositionen:{$a->subposinclude}';
$string['conditionuserpositiondescriptionnegated'] = 'Nutzer hat nicht die Position \'{$a->posname}\'<br />
Unterpositionen:{$a->subposinclude}';
$string['conditionuserpositiondescriptionwithdate'] = 'Nutzer hat Position \'{$a->posname}\'<br />
Unterpositionen:{$a->subposinclude}<br />
Am oder später:{$a->conditiondate}';
$string['conditionuserwithoutposition'] = 'Nutzer hat keine Position';
$string['creategenericframework'] = 'Generischen Rahmen erstellen';
$string['delete'] = 'Löschen';
$string['deletedepartment'] = 'Abteilung \'{$a}\' löschen';
$string['deletedepartmentconfirm'] = 'Sind Sie sicher, dass Sie die Abteilung \'{$a}\' löschen wollen?';
$string['deletedepartmentframework'] = 'Abteilungs-Framework \'{$a}\' löschen';
$string['deletedepartmentframeworkconfirm'] = 'Sind Sie sicher, dass Sie das Abteilungs-Framework \'{$a}\' löschen wollen?';
$string['deleteposition'] = 'Position \'{$a}\\ löschen';
$string['deletepositionconfirm'] = 'Sind Sie sicher, dass Sie die Position \'{$a}\' löschen wollen?';
$string['deletepositionframework'] = 'Positions-Framework \'{$a} löschen';
$string['deletepositionframeworkconfirm'] = 'Sind Sie sicher, dass Sie das Positions-Framework \'{$a}\' löschen wollen?';
$string['department'] = 'Abteilung';
$string['department_help'] = 'Abteilung auswählen';
$string['departmentandpositionrequiredforjobcreate'] = 'Abteilungen und Positionen müssen erstellt werden, um mit den Jobzuweisungen fortzufahren';
$string['departmentdeleted'] = 'Abteilung wurde erfolgreich gelöscht';
$string['departmentdescription'] = 'Beschreibung';
$string['departmentframework'] = 'Abteilungs-Framework';
$string['departmentframeworkpostfix'] = '{$a} (Abteilungsrahmen)';
$string['departmentframeworks'] = 'Abteilungs-Frameworks';
$string['departmentfrmidnumberconflict'] = 'Abteilungsrahmen-ID-Nummern existieren bereits';
$string['departmenthasjobs'] = 'Abteilung kann nicht gelöscht werden, weil Jobs damit verbunden sind.';
$string['departmentidentifier'] = 'Abteilungsidentifikator';
$string['departmentidentifier_help'] = 'Diese Spalte identifiziert die Reihen in der CSV-Datei. Sie wird benutzt, um das übergeordnete Element zu finden';
$string['departmentidnumber'] = 'ID Nummer';
$string['departmentidnumberconflict'] = 'Abteilungs-ID-Nummern existieren bereits';
$string['departmentmanagementicons'] = 'Abteilungs-Verwaltungs-Icons';
$string['departmentmanager'] = 'Abteilungsmanager/in';
$string['departmentmanager_help'] = 'Personen mit dem Job Abteilungsmanager werden unabhängig von ihrer Position als Manager aller Mitglieder der Abteilung und deren Unterabteilungen betrachtet.';
$string['departmentname'] = 'Name';
$string['departmentnotfound'] = 'Abteilung nicht gefunden';
$string['departmentparent'] = 'Übergeordnetes Element';
$string['departmentrequiredforjobcreate'] = 'Es müssen Abteilungen erstellt werden, um mit den Jobzuweisungen fortzufahren';
$string['departments'] = 'Abteilungen';
$string['departmentwithicons'] = 'Abteilung';
$string['details'] = 'Details';
$string['editdepartment'] = 'Abteilung \'{$a}\' bearbeiten';
$string['editdepartmentframework'] = 'Abteilungs-Framework \'{$a}\' bearbeiten';
$string['editdepartmentname'] = 'Name bearbeiten';
$string['editjob'] = 'Job bearbeiten';
$string['editjobforuser'] = 'Job \'{$a}\' bearbeiten';
$string['editposition'] = 'Position \'{$a}\' bearbeiten';
$string['editpositionframework'] = 'Position-Framework \'{$a}\' bearbeiten';
$string['editpositionname'] = 'Namen bearbeiten';
$string['enddate'] = 'Enddatum';
$string['enddate_help'] = 'Enddatum des Jobs';
$string['entitydepartment'] = 'Abteilung';
$string['entityjob'] = 'Job';
$string['entityposition'] = 'Position';
$string['errorcreatingdepartment'] = 'Beim Erstellen der Abteilung ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.';
$string['errorcreatingjob'] = 'Bei der Erstellung des Jobs ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.';
$string['errorcreatingposition'] = 'Beim Erstellen der Position ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.';
$string['errorcsvinvalidparentmapping'] = 'Zuweisung für das Feld \'Übergeordnetes Element\' kann nicht die selbe sein wie für den Identifikator';
$string['errorcsvnohierarchy'] = 'Wenn keine Hierarchie importiert wird, darf die Spalte \'Übergeordnetes Element\' keine Zuweisung haben';
$string['errorcsvnoparent'] = 'Wenn eine Hierarchie importiert wird, muss die Spalte \'Übergeordnetes Element\' eine Zuweisung haben';
$string['erroridnumberdepartment'] = 'Abteilung mit ID-Nummer \'{$a}\' existiert bereits';
$string['erroridnumberposition'] = 'Position mit ID-Nummer \'{$a}\' existiert bereits';
$string['errorinvaliddepartment'] = 'Ungültige Abteilung';
$string['errorinvalidposition'] = 'Ungültige Position';
$string['errormovehierarchy'] = 'Beim Verschieben der Position/der Abteilung zu einer anderen Hierarchie trat ein Fehler auf.';
$string['errorparentnotfound'] = 'Übergeordnete Kategorie nicht gefunden';
$string['errorparentnotfounddepartment'] = 'Übergeordnetes Element für Abteilung mit ID-Nummer \'{$a}\' nicht gefunden';
$string['errorparentnotfoundposition'] = 'Übergeordnetes Element für Position mit ID-Nummer \'{$a}\' nicht gefunden';
$string['errorsameidnumberdepartment'] = 'Abteilung mit der selben ID-Nummer existiert bereits';
$string['errorsameidnumberposition'] = 'Position mit der selben ID-Nummer existiert bereits';
$string['eventdepartmentcreated'] = 'Abteilung erstellt';
$string['eventdepartmentdeleted'] = 'Abteilung gelöscht';
$string['eventdepartmentupdated'] = 'Abteilung aktualisiert';
$string['eventjobcreated'] = 'Job erstellt';
$string['eventjobdeleted'] = 'Job gelöscht';
$string['eventjobupdated'] = 'Job aktualisiert';
$string['eventpositioncreated'] = 'Position erstellt';
$string['eventpositiondeleted'] = 'Position gelöscht';
$string['eventpositionupdated'] = 'Position aktualisiert';
$string['expanddepartmentframework'] = 'Abteilungs-Framework \'{$a}\' erweitern';
$string['expandpositionframework'] = 'Positions-Framework \'{$a}\' erweitern';
$string['exporterjobs'] = 'Jobs der Organisationsstruktur';
$string['exporterjobsdesc'] = 'Jobs mit ihren zugehörigen Abteilungs- und Positionsrahmen';
$string['exporterorgstructure'] = 'Rahmen der Organisationsstruktur';
$string['exporterorgstructurecsv'] = 'Rahmen der Organisationsstruktur (CSV)';
$string['exporterorgstructuredesc'] = 'Rahmen mit der vollständigen Hierarchie für Abteilungen und/oder Positionen';
$string['exportframeworkssettings'] = 'Beschreibungen, Hierarchie und Berechtigungen';
$string['frameworks'] = 'Rahmen';
$string['fullcompletionreport'] = 'Vollständiger Abschlussbericht';
$string['fullname'] = 'Nutzer';
$string['globalmanagementicons'] = 'Globale-Vorgesetzter-Icons';
$string['globalmanager'] = 'Globaler Vorgesetzte/r';
$string['globalmanager_help'] = 'Die Person mit dem Job "Globaler Vorgesetzter"  wird als Vorgesetzter aller niedrigeren Positionen betrachtet, unabhängig von deren Abteilungen.';
$string['hasjobdepartment'] = 'Hat Job in Abteilung';
$string['hasjobposition'] = 'Hat Job in Position';
$string['hierarchy'] = 'Hierarchie';
$string['hierarchydepartments'] = 'Abteilungshierarchie…';
$string['hierarchypositions'] = 'Positionshierarchie…';
$string['importerdepartmentscsv'] = 'Abteilungs-Importer (CSV)';
$string['importerdepartmentscsvdesc'] = 'Abteilungen mit oder ohne Hierarchie, die in einen Rahmen importiert werden sollen';
$string['importerpositionscsv'] = 'Positions-Importer (CSV)';
$string['importerpositionscsvdesc'] = 'Positionen mit oder ohne Hierarchie, die in einen Rahmen importiert werden sollen';
$string['importlogdeptfailed'] = 'Konnte Abteilung \'{$a->name}\' nicht importieren';
$string['importlogdeptfrmfailed'] = 'Konnte Abteilungsrahmen \'{$a->name}\' nicht importieren';
$string['importlogdeptfrmsuccess'] = 'Neuer Abteilungsrahmen \'<a href="{$a->url}">{$a->name}</a>\' wurde erstellt';
$string['importlogdeptsuccess'] = 'Neue Abteilung \'{$a->name}\' wurde erstellt';
$string['importlogidnumberexistsdepartment'] = 'Abteilung mit ID-Nummer \'{$a->originalidnumber}\' existiert bereits';
$string['importlogidnumberexistsposition'] = 'Position mit ID-Nummer \'{$a->originalidnumber}\' existiert bereits';
$string['importlogjobfailed'] = 'Konnte Job für \'{$a->userfullname}\' – {$a->position} ({$a->department}) nicht importieren';
$string['importlogjobsuccess'] = 'Neuer Job für \'<a href="{$a->url}">{$a->userfullname}</a>\' – {$a->position} ({$a->department}) wurde erstellt';
$string['importlogposfailed'] = 'Konnte Position \'{$a->name}\' nicht importieren';
$string['importlogposfrmfailed'] = 'Konnte Positionsrahmen \'{$a->name}\' nicht importieren';
$string['importlogposfrmsuccess'] = 'Neuer Positionsrahmen \'<a href="{$a->url}">{$a->name}</a>\' wurde erstellt';
$string['importlogpossuccess'] = 'Neue Position \'{$a->name}\' wurde erstellt';
$string['jobdeleteconfirm'] = 'Sind Sie sicher, dass Sie diesen Job und alle damit zusammenhängenden Daten löschen wollen? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['jobdeleted'] = 'Job wurde erfolgreich gelöscht';
$string['jobfrom'] = 'Von {$a}';
$string['jobfromto'] = 'Von {$a->from} bis {$a->to}';
$string['jobnotfound'] = 'Job nicht gefunden';
$string['jobpositiondepartment'] = 'Position und Abteilung';
$string['jobs'] = 'Jobzuweisungen';
$string['jobsnumber'] = 'Jobs';
$string['jobsnumber_help'] = 'Zeigt aktuelle und frühere Jobs. <br /> \'10 (2)\' bedeutet beispielsweise, dass 10 aktuelle und 2 frühere Jobs existieren';
$string['jobstartdateafter'] = 'Job-Startdatum ist an oder nach';
$string['listdeptsnohierarchy'] = 'Liste von Abteilungen ohne Hierarchie';
$string['listposnohierarchy'] = 'Liste von Positionen ohne Hierarchie';
$string['mappingerrordeptnotfound'] = 'Eine Abteilung {$a} wurde nicht gefunden';
$string['mappingerrorposnotfound'] = 'Eine Position {$a} wurde nicht gefunden';
$string['mappingnoticenodeptidnumber'] = 'Die Abteilung wurde mit dem Namen abgerufen, weil die ID-Nummer leer ist. Es wird empfohlen, für Abteilungen eine ID-Nummer anzulegen.';
$string['mappingnoticenoposidnumber'] = 'Die Position wurde mit dem Namen abgerufen, weil die ID-Nummer leer ist. Es wird empfohlen, für Positionen eine ID-Nummer anzulegen.';
$string['missingdepartment'] = 'Abteilung fehlt';
$string['missingposition'] = 'Position fehlt';
$string['missingusers'] = 'Fehlende(r) Nutzer';
$string['movedepartmentframework'] = 'Abteilungs-Framework \'{$a}\' verschieben';
$string['movepositionframework'] = 'Positions-Framework \'{$a}\' verschieben';
$string['myteams'] = 'Teams';
$string['newframework'] = 'Neuer Framework';
$string['newnamefor'] = 'Neuer Name für \'{$a}\'';
$string['notification'] = 'Benachrichtigung';
$string['notificationcannotcreatejobs'] = 'Erstellen Sie vor dem Zuweisen von Jobs zu Benutzern einige Abteilungen und Positionen.';
$string['onlycurrent'] = 'Nur aktuelle';
$string['onlyfuture'] = 'Nur zukünftige';
$string['onlypast'] = 'Nur ehemalige';
$string['onorafter'] = 'am oder später';
$string['organisation:allocateuserstoprogramcertificationsdept'] = 'Nutzer in Programme/Zertifizierungen zuweisen';
$string['organisation:allocateuserstoprogramcertificationsdept_help'] = 'Abteilungs-Vorgesetzter: Weisen Sie Nutzer in Programme/Zertifizierungen zu';
$string['organisation:allocateuserstoprogramcertificationsglob'] = 'Nutzer in Programme/Zertifizierungen zuweisen';
$string['organisation:allocateuserstoprogramcertificationsglob_help'] = 'Globaler Vorgesetzter: Weisen Sie Nutzer in Programme/Zertifizierungen zu';
$string['organisation:assignjobs'] = 'Jobs zuweisen';
$string['organisation:managedepartments'] = 'Abteilungen verwalten';
$string['organisation:managepositions'] = 'Positionen verwalten';
$string['organisation:receivenotificationsdept'] = 'Benachrichtigen erhalten';
$string['organisation:receivenotificationsdept_help'] = 'Abteilungs-Vorgesetzter: Benachrichtigungen erhalten';
$string['organisation:receivenotificationsglob'] = 'Benachrichtigen erhalten';
$string['organisation:receivenotificationsglob_help'] = 'Globaler Vorgesetzter: Benachrichtigen erhalten';
$string['organisation:viewusersreportdept'] = 'Nutzerberichte anzeigen';
$string['organisation:viewusersreportdept_help'] = 'Abteilungs-Vorgesetzter: Nutzerberichte anzeigen';
$string['organisation:viewusersreportglob'] = 'Nutzerberichte anzeigen';
$string['organisation:viewusersreportglob_help'] = 'Globaler Vorgesetzter: Nutzerberichte anzeigen';
$string['organisationadmintab'] = 'Organisation';
$string['orgfiltercustomise'] = 'Anpassen';
$string['orgfilterdirectreports'] = 'Nur meine eigenen Direkten Berichte anzeigen';
$string['orgfiltereverybody'] = 'Jeden anzeigen, der mir Bericht erstattet';
$string['orgstructure'] = 'Organisationsstruktur';
$string['pluginname'] = 'Organisation';
$string['position'] = 'Position';
$string['position_help'] = 'Position auswählen';
$string['positionanddepartmentdisplay'] = '{$a->position} ({$a->department})';
$string['positiondeleted'] = 'Position wurde erfolgreich gelöscht';
$string['positiondescription'] = 'Beschreibung';
$string['positionframework'] = 'Positions-Framework';
$string['positionframeworkpostfix'] = '{$a} (Positionsrahmen)';
$string['positionframeworks'] = 'Positions-Frameworks';
$string['positionfrmidnumberconflict'] = 'Positionsrahmen-ID-Nummern existieren bereits';
$string['positionhasjobs'] = 'Position kann nicht gelöscht werden, weil damit Jobs verbunden sind.';
$string['positionidentifier'] = 'Positionsidentifikator';
$string['positionidentifier_help'] = 'Diese Spalte identifiziert die Reihen in der CSV-Datei. Sie wird benutzt, um das übergeordnete Element zu finden';
$string['positionidnumber'] = 'ID Nummer';
$string['positionidnumberconflict'] = 'Positions-ID-Nummern existieren bereits';
$string['positionname'] = 'Name';
$string['positionnotfound'] = 'Position nicht gefunden';
$string['positionparent'] = 'Übergeordnetes Element';
$string['positionpermissions'] = 'Berechtigungen';
$string['positionrequiredforjobcreate'] = 'Positionen müssen erstellt werden, um mit Jobzuweisungen fortzufahren';
$string['positions'] = 'Positionen';
$string['positionwithicons'] = 'Position';
$string['privacy:metadata:department'] = 'Job Abteilung';
$string['privacy:metadata:enddate'] = 'Wann dieser Job endet';
$string['privacy:metadata:jobssummary'] = 'Job Zusammenfassung';
$string['privacy:metadata:position'] = 'Job Position';
$string['privacy:metadata:startdate'] = 'Wann dieser Job beginnt';
$string['privacy:metadata:timecreated'] = 'Wann dieser Job erstellt wurde';
$string['privacy:metadata:timemodified'] = 'Wann dieser Job zuletzt bearbeitet wurde';
$string['privacy:metadata:userid'] = 'Nutzer ID';
$string['reg_wpdepartmentframeworks'] = 'Anzahl der Abteilungs-Frameworks ({$a})';
$string['reg_wpdepartments'] = 'Anzahl der Abteilungen';
$string['reg_wpjobs'] = 'Anzahl der Jobs ({$a})';
$string['reg_wppositionframeworks'] = 'Anzahl der Positions-Frameworks';
$string['reg_wppositions'] = 'Anzahl der Positionen';
$string['rolemanager'] = 'Organisationsstruktur-Vorgesetzter';
$string['rolemanagerdescription'] = 'Ermöglicht es Jobs, Positionen und Abteilungen innerhalb des aktuellen Mandanten zu erstellen und zu bearbeiten';
$string['roleslist'] = 'Rollen';
$string['select_framework'] = 'Rahmen auswählen';
$string['selectallactivejobs'] = 'Alle aktiven Jobs auswählen';
$string['selectalldepartmentframeworks'] = 'Alle Abteilungsrahmen auswählen';
$string['selectallframeworks'] = 'Alle Abteilungs- und Positionsrahmen auswählen';
$string['selectalljobs'] = 'Alle aktiven und vergangenen Jobs auswählen';
$string['selectalljobsinfile'] = 'Alle Jobs in dieser Datei auswählen';
$string['selectalljobsinframeworks'] = 'Alle Jobs in den ausgewählten Rahmen auswählen…';
$string['selectallpositionframeworks'] = 'Alle Positionsrahmen auswählen';
$string['selectexistingframework'] = 'Existierenden Rahmen auswählen';
$string['selectjobsinframeworks'] = 'Alle Jobs von bestimmten Rahmen auswählen…';
$string['showjobs'] = 'Jobs anzeigen';
$string['showpastjobs'] = 'Ehemalige Jobs anzeigen';
$string['somedepartmentsdonotexist'] = 'Einige Abteilungen existieren nicht';
$string['somepositionsdonotexist'] = 'Einige Positionen existieren nicht';
$string['startdate'] = 'Startdatum';
$string['startdate_help'] = 'Startdatum des Jobs';
$string['timecreated'] = 'Erstellzeitpunkt';
$string['usernotfound'] = 'Nutzer nicht gefunden';
$string['users'] = 'Nutzer auswählen';
$string['users_help'] = 'Nutzer suchen und für Jobzuweisung auswählen';
$string['validationmsgedateonsdate'] = 'Das Enddatum muss nach dem Startdatum liegen';
$string['withoutpermission'] = 'Ohne Berechtigung \'{$a}\'';
$string['withpermission'] = 'Mit Berechtigung \'{$a}\'';
$string['withsubdepartments'] = 'Unterabteilungen einbeziehen';
$string['withsubpositions'] = 'Unterpositionen einbeziehen';
