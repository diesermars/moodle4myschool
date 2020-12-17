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
 * Strings for component 'report_coursesize', language 'de', version '3.10'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupsize'] = 'Backup Größe';
$string['catsystembackupuse'] = 'Backup Größe des System und der Kategorien: {$a}.';
$string['catsystemuse'] = 'Speicherplatzbedarf des System und der Kategorien (ausgenommen Nutzerkonten und Kurse): {$a}';
$string['coursebackupbytes'] = 'Kurs {$a->shortname} benötigt {$a->backupbytes} Bytes im Kursbackup';
$string['coursebytes'] = 'Kurs {$a->shortname} benötigt {$a->backupbytes} Bytes';
$string['coursesize'] = 'Kursgrößen';
$string['coursesize:view'] = 'Kursgrößen-Bericht ansehen';
$string['coursesize_desc'] = '<p>Dieser Bericht stellt nur Näherungswerte zur Verfügung. Falls eine Datei mehrere Male innerhalb eines Kurses oder in mehreren Kursen verwendet wird, wird sie der Bericht auch mehrfach zählen, obwohl Moodle nur ein Exemplar der Datei im Dateisystem speichert.
<br />Die Spalte "Gemeinsam genutzt" gibt dabei einen Näherungswert für die Gesamtgröße der Dateien, die mehrfach verknüpft sind, an.</p>';
$string['diskusage'] = 'Speicherplatzbedarf';
$string['emptycourseshidden'] = 'Kurse, welche keine im Filesystem abgelegten Dateien enthalten, werden in diesem Bericht nicht gelistet.';
$string['nouserfiles'] = 'Keine Nutzerkonten gelistet.';
$string['pluginname'] = 'Kursgrößen';
$string['sharedusage'] = 'Gemeinsam genutzt';
$string['sitefilesusage'] = 'Bericht zum Speicherplatzbedarf';
$string['sizepermitted'] = '(Erlaubte Quota {$a} MB)';
$string['sizerecorded'] = '(Ermittelt am {$a})';
$string['totalsitedata'] = 'Speicherplatzbedarf insgesamt: {$a}';
$string['userstopnum'] = 'Nutzer/innen (Top {$a})';
