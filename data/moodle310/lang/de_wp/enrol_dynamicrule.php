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
 * Strings for component 'enrol_dynamicrule', language 'de_wp', version '3.10'.
 *
 * @package     enrol_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Aktion';
$string['actiondisableenrolment'] = 'Einschreibung deaktivieren';
$string['actiondisableenrolmentremoveroles'] = 'Einschreibung deaktivieren und Rollen entfernen';
$string['actionunenrol'] = 'Nutzer aus Kurs ausschreiben';
$string['duration'] = 'Dauer';
$string['dynamicrule:config'] = 'Einschreibungen durch dynamische Regeln konfigurieren';
$string['dynamicrule:enrol'] = 'Nutzer/in mit der Einschreibeaktion des Kurses einschreiben';
$string['dynamicrule:unenrol'] = 'Nutzer/in mit der Abmeldeaktion des Kurses oder manuell abmelden';
$string['enddate'] = 'Enddatum';
$string['errorinvalidaction'] = 'Ungültige Aktion';
$string['errorinvalidcoursetoenrol'] = 'Ungültiger Kurs zur Einschreibung';
$string['errorinvalidcoursetounenrol'] = 'Ungültiger Kurs zur Ausschreibung';
$string['errorinvaliddurationandenddate'] = 'Wählen Sie das Enddatum der Einschreibung ODER die Dauer aus, nicht beides.';
$string['errorinvalidrole'] = 'Ungültige Rolle';
$string['group'] = 'Gruppenname';
$string['group_help'] = 'Name der Gruppe, der die Nutzer als MItglieder hinzufügt werden.';
$string['ingroup'] = 'in der Gruppe';
$string['noavailablecoursesenrol'] = 'Keine Kurse, in die Nutzer/innen mit einer Dynamischen Regel eingeschrieben werden können.';
$string['noavailablecoursesunenrol'] = 'Keine Kurse, aus denen Nutzer/innen mit einer Dynamischen Regel abgemeldet werden können.';
$string['outcomecourseenrol'] = 'Nutzer in einen Kurs einschreiben';
$string['outcomecourseenroldescription'] = 'Einschreiben in Kurs \'{$a->coursename}\'<br />
Rolle: {$a->role}<br />
Gruppe: {$a->groupname}';
$string['outcomecourseenroldescriptionwithduration'] = 'Einschreiben in Kurs \'{$a->coursename}\'<br />
Rolle: {$a->role}<br />
Gruppe: {$a->groupname}<br />
Dauer: {$a->durationtype}';
$string['outcomecourseenroldescriptionwithenddate'] = 'Einschreiben in Kurs \'{$a->coursename}\'<br />
Rolle: {$a->role}<br />
Gruppe: {$a->groupname}<br />
Enddatum: {$a->enddate}';
$string['outcomecourseunenrol'] = 'Nutzer aus einem Kurs ausschreiben';
$string['outcomecourseunenroldescription'] = 'Nutzer ausschreiben aus Kurs \'{$a->coursename}\'<br />
Aktion: \'{$a->action}\\';
$string['pluginname'] = 'Dynamische Regeln';
$string['privacy:metadata'] = 'Das Dynamische Regeln-Plugin speichert keine persönlichen Daten von Nutzern.';
$string['selectcourse'] = 'Kurs wählen';
