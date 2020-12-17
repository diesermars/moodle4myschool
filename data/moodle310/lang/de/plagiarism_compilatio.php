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
 * Strings for component 'plagiarism_compilatio', language 'de', version '3.10'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_content'] = 'Die Compilatio Dienstleistung steht Ihnen bis Ende des Monats auf Ihrer Plattform zur Verfügung. Falls das Abonnement verlängert wird, steht Ihnen Compilatio nach diesem Datum nicht mehr zur Verfügung.';
$string['account_expire_soon_title'] = 'Ende des Compilatio.net Abonnements';
$string['activate_compilatio'] = 'Das Compilatio Plugin aktivieren';
$string['admin_disabled_reports'] = 'Der Administrator hat die Anzeige der Ähnlichkeitsberichte für die Teilnehmer/innen deaktiviert.';
$string['admin_goto_helpcenter'] = 'Gehen Sie zum Compilatio Hilfecenter, um die Artikel zur Verwaltung des Moodle-Plugins zu lesen.';
$string['allow_teachers_to_show_reports'] = 'Den Trainer/innen erlauben, die Analyseberichte den Teilnehmer/innen zur Verfügung zu stellen.';
$string['analysing'] = 'Das Dokument wird gegenwärtig analysiert';
$string['analysis_completed'] = 'Analyse beendet: Ähnlichkeitsquote von {$a}%.';
$string['analysis_date'] = 'Datum der Analyse (nur bei geplantem Start)';
$string['analysis_started'] = '{$a} gewünschte Analyse(n).';
$string['analysis_type'] = 'Start der Analyse';
$string['analysis_type_help'] = '<p>Es stehen Ihnen drei Möglichkeiten zur Verfügung:</p>
<ul>
    <li><strong> Unmittelbar:</strong> Das Dokument wird unmittelbar an Compilatio gesendet und analysiert </li>
    <li><strong> Manuell:</strong>Das Dokument wird an Compilatio gesendet, aber die Trainer/in muss die Analyse des Dokuments manuell auslösen</li>
    <li><strong> Geplant:</strong> Das Dokument wird an Compilatio gesendet und danach zu einer bestimmten Zeit/einem bestimmten Datum analysiert </li>
</ul>
<p>Damit die Dokumente bei der Analyse miteinander verglichen werden, lösen Sie die Analyse bitte erst dann aus, wenn alle Dokumente der Arbeit vorhanden sind.</p>';
$string['analysistype_direct'] = 'Unmittelbar';
$string['analysistype_manual'] = 'Manuell';
$string['analysistype_prog'] = 'Geplant';
$string['analyze'] = 'Analysieren';
$string['analyzing'] = 'Analyse';
$string['api_key_not_tested'] = 'Der API-Key konnte nicht überprüft werden, da die Verbindung zur Dienstleistung von Compilatio.net nicht hergestellt werden konnte.';
$string['api_key_not_valid'] = 'Der gespeicherte API-Key ist gültig. Er ist auf die verwendete Plattform zugeschnitten. Er kann bei <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a> angefordert werden.';
$string['api_key_valid'] = 'Der gespeicherte API-Key ist gültig.';
$string['assign_statistics'] = 'Statistiken der Arbeiten';
$string['auto_diagnosis_title'] = 'Selbstdiagnose';
$string['average'] = 'Durchschnitt';
$string['average_similarities'] = 'Die durchschnittliche Ähnlichkeitsquote für diese Arbeit liegt bei {$a}%.';
$string['compilatio'] = 'Plugin zur Plagiatserkennung Compilatio';
$string['compilatio:enable'] = 'Den Trainer/innen erlauben, Compilatio innerhalb einer Aufgabe zu aktivieren/deaktivieren';
$string['compilatio:resetfile'] = 'Den Trainer/innen erlauben, die Datei nach einem Fehler erneut Compilatio vorzulegen.';
$string['compilatio:triggeranalysis'] = 'Den Trainer/innen erlauben, die Analyse manuell auszulösen.';
$string['compilatio:viewreport'] = 'Den Trainer/innen erlauben, den vollständigen Bericht auf Compilatio einzusehen.';
$string['compilatio_display_student_report'] = 'Teilnehmer/in die Ansicht des Analyseberichts ermöglichen';
$string['compilatio_display_student_report_help'] = 'Der Analysebericht eines Dokuments zeigt die den ermittelten Quellen ähnliche Stellen und die entsprechende Ähnlichkeitsquote auf.';
$string['compilatio_display_student_score'] = 'Ähnlichkeitsquote pro Teilnehmer/in sichtbar machen';
$string['compilatio_display_student_score_help'] = 'Die Ähnlichkeitsquote zeigt den Textanteil im Dokument an, der auch in anderen Dokumenten gefunden wurde.';
$string['compilatio_draft_submit'] = 'Datum, an dem die Datei Compilatio vorgelegt werden muss';
$string['compilatio_help_assign'] = 'Hilfe zum Compilatio Plugin anfordern.';
$string['compilatio_studentemail'] = 'E-Mail an Teilnehmer/in senden';
$string['compilatio_studentemail_help'] = 'Dadurch wird eine E-Mail mit der Information, dass der Bericht verfügbar ist, versendet.';
$string['compilatioapi'] = 'Adresse der API-Schnittstelle';
$string['compilatioapi_help'] = 'Es handelt sich um die Adresse der Compilatio API-Schnittstelle';
$string['compilatiodefaults'] = 'Standartwerte für Compilatio.';
$string['compilatioenableplugin'] = 'Compilatio aktivieren für {$a}';
$string['compilatioexplain'] = 'Weitere Informationen zu diesem Plugin finden Sie unter: <a href="http://compilatio.net" target="_blank">compilatio.net</a>';
$string['compilatiopassword'] = 'API-Key';
$string['compilatiopassword_help'] = 'Von Compilatio gelieferter persönlicher Zugangscode zur API-Schnittstelle';
$string['context'] = 'Kontext';
$string['cron_check'] = 'Der CRON Job wurde zum letzten Mal am {$a} durchgeführt.';
$string['cron_check_never_called'] = 'Es wurde seit der Aktivierung des Plugins kein CRON Job ausgeführt. Er ist möglicherweise falsch konfiguriert.';
$string['cron_check_not_ok'] = 'Er wurde seit über einer Stunde nicht mehr durchgeführt.';
$string['cron_frequency'] = 'Es scheint, dass er jede {$a} Minute durchgeführt wird.';
$string['cron_recommandation'] = 'Wir empfehlen einen kürzeren Abstand als 15 Minuten zwischen jedem CRON Job.';
$string['defaults_desc'] = 'Folgende Parameter werden als Standartwerte für die Aktivitäten von Compilatio innerhalb von Moodle verwendet.';
$string['defaultupdated'] = 'Die Standartwerte wurden aktualisiert';
$string['disclaimer_data'] = 'Indem Sie Compilatio aktivieren, akzeptieren Sie, dass die Informationen zur Konfiguration Ihrer Moodle Plattform gesammelt werden, um die Unterstützung und Wartung der Dienstleistung zu erleichtern.';
$string['display_notifications'] = 'Benachrichtigungen anzeigen';
$string['display_stats'] = 'Die Statistiken dieser Arbeit aufzeigen';
$string['documents_analyzed'] = '{$a->countAnalyzed} Dokument(e) von {$a->documentsCount} sind analysiert worden.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} Dokument(e) zwischen {$a->greenThreshold}% und {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} Dokument(e) über {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} Dokument(e) unter {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} Dokument(e) werden gegenwärtig analysiert.';
$string['documents_in_queue'] = '{$a} Dokument(e) in der Warteschleife zur Analyse.';
$string['documents_number'] = 'Analysierte Dokumente';
$string['enable_javascript'] = 'Bitte aktivieren Sie JavaScript, um alle Funktionalitäten von Compilatio nutzen zu können. <br/> Finden Sie hier <a href=\'http://www.enable-javascript.com/fr/\' target=\'_blank\'>Anweisungen, um JavaScript in Ihrem Browser zu aktivieren</a>.';
$string['enabledandworking'] = 'Das Compilatio Plugin ist aktiv und funktionsfähig.';
$string['error'] = 'Fehler';
$string['errors'] = 'Fehler :';
$string['export_csv'] = 'Die Daten dieser Arbeit im CSV-Format exportieren';
$string['export_global_csv'] = 'Klicken Sie hier um diese Daten im CSV-Format zu exportieren';
$string['export_raw_csv'] = 'Klicken Sie hier um die Ausgangsdaten im CSV-Format zu exportieren';
$string['failedanalysis'] = 'Compilatio konnte Ihr Dokument nicht analysieren:';
$string['filename'] = 'Dateiname';
$string['filereset'] = 'Die Datei wurde zur erneuten Unterbreitung an Compilatio zurückgesetzt';
$string['firstname'] = 'Vorname';
$string['get_scores'] = 'Ruft die Ähnlichkeitsquoten auf Compilatio.net ab';
$string['global_statistics'] = 'Gesamtstatistiken';
$string['goto_helpcenter'] = 'Klicken Sie auf das Fragezeichen, um ein neues Fenster zu öffnen und sich im Compilatio Hilfecenter einzuloggen.';
$string['green_threshold'] = 'Grün bis';
$string['help_compilatio_format_content'] = 'Compilatio.net unterstützt die meisten in der Büroelektronik und im Internet verwendeten Formate. Folgende Formate werden akzeptiert:';
$string['help_compilatio_settings_content'] = 'Im Compilatio Plugin stehen drei Analysetypen zur Verfügung:
<ul>
    <li>
        Unmittelbar  : <br/>
        Alle Dokumente werden nach ihrer Einreichung durch die Teilnehmer/innen an Compilatio geschickt und analysiert.
        Empfohlen, wenn Sie die Resultate möglichst schnell erhalten möchten und es nicht notwendig ist, dass die Dokumente Ihrer Aktivität miteinander verglichen werden.
    </li>
    <li>
        Geplant  : <br/>
        Wählen Sie für die Compilatio Analysen ein Startdatum nach der Abgabefrist für die Teilnehmer/innen aus.
        Empfohlen, wenn Sie alle Dokumente Ihrer Aktivität miteinander vergleichen möchten.
    </li>
    <li>
        Manuell : <br/>
        Die Dokumente Ihrer Aktivität werden erst analysiert, wenn Sie die Analysen manuell auslösen.
        Um die Analyse eines Dokuments auszulösen, klicken Sie bitte in jedem Dokument auf die Schaltfläche „analysieren“.
        Die Schaltfläche „alle Dokumente analysieren“ löst die Analyse aller in einer Arbeit vorhandenen Dokumente aus.
    </li>
</ul>';
$string['help_compilatio_settings_title'] = 'Welche Einstellungen in den Compilatio Parametern einer Aktivität auswählen?';
$string['hide_area'] = 'Die Compilatio Informationen ausblenden';
$string['immediately'] = 'Unmittelbar';
$string['indexed_document'] = 'Das Dokument wurde der Referenzbibliothek Ihrer Institution hinzugefügt. Sein Inhalt kann verwendet werden, um die Ähnlichkeiten mit anderen Dokumenten aufzuzeigen.';
$string['indexing_state'] = 'Dokumente zur Referenzbibliothek hinzufügen';
$string['indexing_state_help'] = 'Der Inhalt der Dokumente wird in der Referenzbibliothek angegeben. Er wird als Vergleichsmaterial für spätere Analysen verwendet.';
$string['information_settings'] = 'Informationen';
$string['lastname'] = 'Nachname';
$string['loading'] = 'Wird geladen, bitte warten...';
$string['manual_analysis'] = 'Die Analyse dieses Dokuments muss manuell ausgelöst werden';
$string['manual_send_confirmation'] = '{$a} Compilatio vorgelegte Datei(n).';
$string['max_attempts_reach_files'] = 'Folgende Dateien konnten nicht von Compilatio analysiert werden. Der Grenzwert zum Neustart der Analysen wurde erreicht:';
$string['max_file_size_allowed'] = 'Maximale Größe der Dokumente : <strong>{$a->Mo} MB</strong>';
$string['maximum'] = 'Maximum';
$string['minimum'] = 'Minimum';
$string['news_analysis_perturbated'] = 'Compilatio.net Analysen beeinträchtigt';
$string['news_incident'] = 'Zwischenfall auf Compilatio.net';
$string['news_maintenance'] = 'Wartung von Compilatio.net';
$string['news_update'] = 'Aktualisierung von Compilatio.net';
$string['no_document_available_for_analysis'] = 'Es steht kein Dokument zur Analyse bereit.';
$string['no_documents_available'] = 'Zu dieser Aufgabe steht kein Dokument zur Analyse bereit.';
$string['no_statistics_yet'] = 'Derzeit sind keine Statistiken verfügbar.';
$string['not_analyzed'] = 'Folgende Dokumente konnten nicht analysiert werden:';
$string['not_analyzed_unextractable'] = '{$a} Dokument(e) wurden nicht analysiert, da sie nicht genügend Text enthalten.';
$string['not_analyzed_unsupported'] = '{$a} Dokument(e) wurden nicht analysiert, da ihr Format nicht unterstützt wird.';
$string['not_indexed_document'] = 'Das Dokument wurde nicht der Referenzbibliothek Ihrer Institution hinzugefügt. Sein Inhalt wird nicht verwendet, um die Ähnlichkeiten mit anderen Dokumenten aufzuzeigen.';
$string['numeric_threshold'] = 'Der Grenzwert muss eine Zahl sein.';
$string['orange_threshold'] = 'Orange bis';
$string['owner_file'] = 'DSGVO und Eigentum der Arbeit';
$string['owner_file_school'] = 'Die Bildungsinstitution ist Eigentümerin der Arbeiten.';
$string['owner_file_school_details'] = 'Im Falle einer Anfrage zur Löschung von personenbezogenen Daten seitens eines Schülers wird der Inhalt der Arbeit aufbewahrt und steht für zukünftige Vergleiche mit neuen Arbeiten zur Verfügung. Nach Vertragsende mit Compilatio werden innerhalb der vertraglich festgelegten Fristen alle personenbezogenen Daten, die aus Ihrer Bildungsinstitution stammen, gelöscht, darunter auch die Arbeiten.';
$string['owner_file_student'] = 'Der Studierende ist Eigentümer seiner Arbeit';
$string['owner_file_student_details'] = 'Im Falle einer Anfrage zur Löschung von personenbezogenen Daten seitens eines Schülers werden die Arbeiten aus der Moodle Plattform und der Compilatio Referenzbibliothek gelöscht. Die Arbeiten stehen nicht mehr zum Vergleich mit neuen Dokumenten zur Verfügung.';
$string['pending'] = 'Die Datei ist bei Compilatio in der Warteschleife.';
$string['pending_status'] = 'Wartezeit';
$string['planned'] = 'Geplant';
$string['plugin_disabled'] = 'Das Plugin wurde nicht für die Moodle Plattform aktiviert.';
$string['plugin_disabled_assign'] = 'Das Plugin wurde nicht für die Aufgaben aktiviert.';
$string['plugin_disabled_forum'] = 'Das Plugin wurde nicht für die Foren aktiviert.';
$string['plugin_disabled_workshop'] = 'Das Plugin wurde nicht für die Workshops aktiviert.';
$string['plugin_enabled'] = 'Das Plugin wurde für die Moodle Plattform aktiviert.';
$string['plugin_enabled_assign'] = 'Das Plugin wurde für die Aufgaben aktiviert.';
$string['plugin_enabled_forum'] = 'Das Plugin wurde für die Foren aktiviert.';
$string['plugin_enabled_workshop'] = 'Das Plugin wurde für die Workshops aktiviert.';
$string['pluginname'] = 'Compilatio – Plugin zur Plagiatserkennung';
$string['previouslysubmitted'] = 'Zuvor eingereicht als';
$string['privacy:metadata:core_files'] = 'Eingereichte oder in einem Eingabefeld erstellte Dateien';
$string['privacy:metadata:core_plagiarism'] = 'Dieses Plugin wird vom Plagiatserkennung-Untersystem von Moodle aufgerufen';
$string['privacy:metadata:external_compilatio_document'] = 'Informationen zu den Dokumenten in der Compilatio Datenbank';
$string['privacy:metadata:external_compilatio_document:email_adress'] = 'E-Mail-Adresse des Compilatio Nutzers, der die Datei eingereicht hat – Achtung, dieser Nutzer ist derjenige, der mit dem  Compilatio API-Key auf der Moodle Plattform verknüpft ist (dies ist also häufig der Administrator der Plattform)';
$string['privacy:metadata:external_compilatio_document:filename'] = 'Name der Einreichung';
$string['privacy:metadata:external_compilatio_document:firstname'] = 'Vorname des Compilatio Nutzers, der die Datei eingereicht hat – Achtung, dieser Nutzer ist derjenige, der mit dem  Compilatio API-Key auf der Moodle Plattform verknüpft ist (dies ist also häufig der Administrator der Plattform)';
$string['privacy:metadata:external_compilatio_document:id'] = 'Kennung der Einreichung in der Compilatio Datenbank';
$string['privacy:metadata:external_compilatio_document:indexed'] = 'Stand der Indexierung der Einreichung (falls sie als Referenzdokument in den Analysen verwendet wird)';
$string['privacy:metadata:external_compilatio_document:lastname'] = 'Name des Compilatio Nutzers, der die Datei eingereicht hat – Achtung, dieser Nutzer ist derjenige, der mit dem  Compilatio API-Key auf der Moodle Plattform verknüpft ist (dies ist also häufig der Administrator der Plattform)';
$string['privacy:metadata:external_compilatio_document:upload_date'] = 'Uhrzeit der Speicherung in der Compilatio Datenbank';
$string['privacy:metadata:external_compilatio_document:user_id'] = 'Kennung des Compilatio Nutzers, der die Datei eingereicht hat – Achtung, dieser Nutzer ist derjenige, der mit dem  Compilatio API-Key auf der Moodle Plattform verknüpft ist (dies ist also häufig der Administrator der Plattform)';
$string['privacy:metadata:external_compilatio_report'] = 'Informationen zum Analysebericht in der Compilatio Datenbank (nur falls das Dokument analysiert worden ist)';
$string['privacy:metadata:external_compilatio_report:doc_id'] = 'Compilatio Kennung des analysierten Dokuments';
$string['privacy:metadata:external_compilatio_report:end'] = 'Datum des Analyseendes';
$string['privacy:metadata:external_compilatio_report:id'] = 'Compilatio Kennung des Analyseberichts';
$string['privacy:metadata:external_compilatio_report:plagiarism_percent'] = 'Ähnlichkeitsprozentsatz für diese Einreichung';
$string['privacy:metadata:external_compilatio_report:start'] = 'Datum des Analysebeginns';
$string['privacy:metadata:external_compilatio_report:state'] = 'Stand der Analyse der Einreichung (analysiert, im Wartestatus, Zeit überschritten, …)';
$string['privacy:metadata:external_compilatio_report:user_id'] = 'Kennung des Compilatio Nutzers, der die Datei eingereicht hat – Achtung, dieser Nutzer ist derjenige, der mit dem  Compilatio API-Key auf der Moodle Plattform verknüpft ist (dies ist also häufig der Administrator der Plattform)';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Informationen zu den bei Compilatio eingereichten Dateien in der Datenbank des Plugins';
$string['privacy:metadata:plagiarism_compilatio_files:attempt'] = 'Anzahl Analysestartversuche des Nutzers für eine Einreichung';
$string['privacy:metadata:plagiarism_compilatio_files:cm'] = 'Kennung des Unterrichtsmoduls, in dem sich die Einreichung befindet';
$string['privacy:metadata:plagiarism_compilatio_files:errorresponse'] = 'Antwort im Falle eines Fehlers – gegenwärtig wird dieses Feld nicht mehr genutzt und automatisch mit \'NULL\' ausgegeben';
$string['privacy:metadata:plagiarism_compilatio_files:externalid'] = 'Kennung der Einreichung in der Compilatio Datenbank';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'Der Name (eventuell auto-generiert) der Einreichung';
$string['privacy:metadata:plagiarism_compilatio_files:id'] = 'Kennung der Einreichung in der Moodle Datenbank';
$string['privacy:metadata:plagiarism_compilatio_files:identifier'] = 'Der contenthash der Einreichung';
$string['privacy:metadata:plagiarism_compilatio_files:reporturl'] = 'Die URL-Adresse des Analyseberichts';
$string['privacy:metadata:plagiarism_compilatio_files:similarityscore'] = 'Ähnlichkeitsprozentsatz für diese Einreichung';
$string['privacy:metadata:plagiarism_compilatio_files:statuscode'] = 'Stand der Analyse der Einreichung (analysiert, im Wartestatus, Zeit überschritten, …)';
$string['privacy:metadata:plagiarism_compilatio_files:timesubmitted'] = 'Uhrzeit der Speicherung in der Moodle Datenbank des Plugins';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'Nutzer-ID der Person, die die Einreichung vorgenommen hat';
$string['processing_doc'] = 'Die Datei wird von Compilatio analysiert.';
$string['programmed_analysis_future'] = 'Die Dokumente werden am {$a} von Compilatio analysiert.';
$string['programmed_analysis_past'] = 'Die Dokumente wurden Compilatio am {$a} zur Analyse unterbreitet.';
$string['progress'] = 'Progression :';
$string['queue'] = 'Wartezeit';
$string['queued'] = 'Das Dokument befindet sich in der Warteschleife zur Analyse und wird in Kürze von Compilatio bearbeitet';
$string['red_threshold'] = 'Rot ab';
$string['report'] = 'Bericht';
$string['reset'] = 'Erneut auslösen';
$string['restart_failed_analysis'] = 'Gescheiterte Analysen erneut auslösen';
$string['restart_failed_analysis_title'] = 'Neustart der gescheiterten Analysen:';
$string['results'] = 'Resultate :';
$string['saved_config_failed'] = '<strong>Die Kombination von Adresse und API-Key ist nicht korrekt. Das Plugin wurde deaktiviert, bitte versuchen Sie es erneut.<br/>
    Die Seite der<a href="autodiagnosis.php">auto-diagnostic</a> kann Ihnen dabei helfen, dieses Plugin zu konfigurieren.</strong><br/>
    Fehler :';
$string['savedconfigsuccess'] = 'Die Parameter wurden gespeichert';
$string['send_files'] = 'Schickt die Dateien an Compilatio.net zur Plagiatserkennung';
$string['showwhenclosed'] = 'Datum, an dem die Aktivität abgeschlossen wurde';
$string['similarities'] = 'Ähnlichkeiten';
$string['similarities_disclaimer'] = 'Sie können die in den Dokumenten vorhandenen Ähnlichkeiten mithilfe der <a href=\'http://compilatio.net\' target=\'_blank\'>Compilatio</a>.<br/> Software analysieren.
    Achtung, die in einer Analyse gemessenen Ähnlichkeiten decken nicht zwangsläufig ein Plagiat auf.
    Der Analysebericht hilft Ihnen, herauszufinden, ob die Ähnlichkeiten ordnungsgemäß aufgeführten Entlehnungen und Zitaten entsprechen oder Plagiate sind.';
$string['similarity_percent'] = '% Ähnlichkeiten';
$string['start_analysis_title'] = 'Manueller Start der Analysen';
$string['startallcompilatioanalysis'] = 'Alle Dokumente analysieren';
$string['startanalysis'] = 'Die Analyse starten';
$string['statistics_title'] = 'Statistiken';
$string['studentdisclosuredefault'] = 'Alle übermittelten Dateien werden dem Plagiatserkennungsdienst von Compilatio vorgelegt';
$string['studentemailcontent'] = 'Die Datei, die Sie {$a->modulename} vorgelegt {$a->coursename} haben, wurde vom Compilatio {$a->modulelink} Tool zur Plagiatserkennung verarbeitet';
$string['studentemailsubject'] = 'Die Datei wurde von Compilatio verarbeitet';
$string['students_disclosure'] = 'Präventive Botschaft an die Teilnehmer/innen';
$string['students_disclosure_help'] = 'Dieser Text wird für alle Teilnehmer/innen auf der Download-Seite angezeigt.';
$string['submitondraft'] = 'Datei vorlegen, wenn das erste Dokument hochgeladen wurde';
$string['submitonfinal'] = 'Datei vorlegen, wenn sie ein/e Teilnehmer/in zur Analyse übermittelt';
$string['subscription_state'] = '<strong>Ihr Compilatio.net Abonnement ist bis Ende des Monats {$a->end_date} gültig. In diesem Monat haben Sie {$a->used} Dokument(e) mit weniger als 5000 Wörtern analysiert.</strong>';
$string['tabs_title_help'] = 'Hilfe';
$string['tabs_title_notifications'] = 'Benachrichtigungen';
$string['tabs_title_stats'] = 'Statistiken';
$string['teacher'] = 'Trainer/in';
$string['thresholds_description'] = 'Geben Sie die Grenzwerte ein, die Sie verwenden möchten, um den Analysebericht (Ähnlichkeitsquote) einfacher zu kennzeichnen:';
$string['thresholds_settings'] = 'Einstellung der Grenzwerte für die Anzeige der Ähnlichkeitsquote:';
$string['timesubmitted'] = 'Compilatio vorgelegt am';
$string['toolarge'] = 'Die Datei ist zu groß, um von Compilatio verarbeitet zu werden. Maximale Größe: {$a->Mo} MB';
$string['trigger_timed_analyses'] = 'Löst die geplanten Plagiatsanalysen aus';
$string['unextractable'] = 'Der Inhalt dieses Dokuments konnte nicht abgerufen werden';
$string['unextractable_files'] = 'Folgende Dateien konnten nicht von Compilatio analysiert werden. Sie enthalten nicht genügend Wörter oder der Text konnte nicht richtig abgerufen werden:';
$string['unextractablefile'] = 'Ihr Dokument enthält nicht genügend Wörter oder der Text konnte nicht richtig abgerufen werden.';
$string['unknownlang'] = 'Achtung, die Sprache einiger Passagen in diesem Dokument wurde nicht erkannt.';
$string['unknownwarning'] = 'Beim Verschicken der Datei an Compilatio ist ein Fehler aufgetreten';
$string['unsent_documents'] = 'Nicht vorgelegte Datei(n)';
$string['unsent_documents_content'] = 'Achtung, diese Arbeit beinhält ein/mehrere Dokument(e), die Compilatio nicht vorgelegt wurde(n).';
$string['unsupported'] = 'Das Dokument wird nicht unterstützt';
$string['unsupported_files'] = 'Folgende Dokumente konnten nicht analysiert werden, da ihr Format nicht unterstützt wird:';
$string['unsupportedfiletype'] = 'Diese Dateiart wird von Compilatio nicht unterstützt';
$string['update_in_progress'] = 'Informationsaktualisierung';
$string['update_meta'] = 'Führt die von Compilatio.net geplanten Aufgaben aus';
$string['updatecompilatioresults'] = 'Informationen erneuern';
$string['updated_analysis'] = 'Die Resultate der Compilatio Analyse wurden aktualisiert.';
$string['use_compilatio'] = 'Ähnlichkeiten mit Compilatio erkennen';
$string['webservice_not_ok'] = 'Der Webservice konnte nicht kontaktiert werden. Ihre Firewall blockiert möglicherweise die Verbindung.';
$string['webservice_ok'] = 'Der Server kann den Webservice kontaktieren.';
$string['webservice_unreachable_content'] = 'Die Compilatio.net Dienstleistung ist derzeit nicht verfügbar. Entschuldigen Sie bitte die Umstände.';
$string['webservice_unreachable_title'] = 'Compilatio.net nicht verfügbar';
