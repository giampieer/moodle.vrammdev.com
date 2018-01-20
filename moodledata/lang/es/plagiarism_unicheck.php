<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'plagiarism_unicheck', language 'es', branch 'MOODLE_34_STABLE'
 *
 * @package   plagiarism_unicheck
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_secret'] = 'Secreto de API';
$string['api_secret_help'] = 'El Secreto de API proporcionado por Unicheck para acceder a API, puede encontrarlo en <a href="https://unicheck.com/profile/apisettings">https://unicheck.com/profile/apisettings</a>';
$string['attempts'] = 'Intentos realizados';
$string['check_all_submitted_assignments'] = 'Revisar los trabajos ya entregados';
$string['check_all_submitted_assignments_help'] = 'Utilice esta opción para ejecutar la revisión masiva de todos los trabajos enviados en la actividad actual. La revisión empezará en unos 10 minutos después de actualizar los ajustes de la tarea.';
$string['check_confirm'] = '¿Está seguro de que quiere empezar el escaneo con el detector de plagio Unicheck?';
$string['check_file'] = 'Comenzar escaneo';
$string['check_start'] = 'Calculando el porcentaje de originalidad';
$string['check_type'] = 'Fuentes para comprobar';
$string['check_type_help'] = 'Fuentes de Internet - millones de artículos, páginas y archivos disponibles en Internet. Esto incluye artículos académicos y científicos (de acceso abierto), publicaciones de blog y noticias.
Biblioteca de cotejo - la base de datos de la Institución en la cuenta de Unicheck, que incluye las entregas anteriores de los estudiantes, salvo los "borradores".';
$string['client_id'] = 'ID de Cliente';
$string['client_id_help'] = 'ID de Cliente proporcionado por Unicheck para acceder a la API, puede encontrarlo en <a href="https://unicheck.com/profile/apisettings">https://unicheck.com/profile/apisettings</a>';
$string['cronwarning'] = 'El script de mantenimiento <a href="../../admin/cron.php">cron.php</a> no se ejecutó durante 30 minutos - Cron debe estar configurado para permitir que Unicheck funcione correctamente.';
$string['defaultsdesc'] = 'Configure los ajustes predeterminados para la actividad Tarea. Los profesores podrán editar los ajustes en las tareas individuales';
$string['defaultupdated'] = 'Valores predeterminados actualizados';
$string['delete'] = 'Eliminar';
$string['deletedwarning'] = 'Archivo no encontrado - puede que lo haya eliminado el usuario';
$string['draft_submit'] = '¿Cuándo debería enviarse el archivo a Unicheck?';
$string['exclude_citations'] = 'Identificar citas y referencias';
$string['exclude_citations_help'] = 'Active esta opción para filtrar debidamente el material citado y el bloque de referencias. Unicheck identifica las citas y referencias de acuerdo con las normas descritas en las guías de APA, MLA, Chicago, Turabian, Harvard. Las citas serán resaltadas en color azul y las referencias serán marcadas con el color violeta. Dichos elementos serán excluidos del porcentaje total de similitud.';
$string['exclude_self_plagiarism'] = 'Excluir autoplagio';
$string['explainerrors'] = 'Esta página enumera los archivos que se encuentran actualmente en un estado de error. <br/> Cuando se eliminen los archivos en esta página, no podrán ser reenviados, y los errores ya no se mostrarán a los profesores o estudiantes';
$string['external_database'] = 'Comparar con base de datos externa';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo borrado de la cola';
$string['filereset'] = 'Un archivo se ha restablecido para su reenvío a Unicheck';
$string['fileresubmitted'] = 'Archivo puesto en cola para el reenvío';
$string['generalinfo'] = 'Información general';
$string['getscore'] = 'Obtener resultado';
$string['heldevents'] = 'Eventos realizados';
$string['heldeventsdescription'] = 'Estos son eventos que no se completaron en el primer intento y se pusieron en cola para su reenvío; esto evita que los eventos posteriores se completen y es posible que necesiten una investigación adicional. Algunos de estos eventos pueden no ser relevantes para Unicheck.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['max_100000_words'] = 'El(los) archivo(s) no puede(n) contener más de 100 000 palabras y tener un tamaño superior a 70 MB';
$string['min_30_words'] = 'Se requieren al menos 30 palabras';
$string['module'] = 'Módulo';
$string['my_library'] = 'Comparar con mi biblioteca';
$string['name'] = 'Nombre';
$string['no_index_files'] = 'Tarea borrador';
$string['no_index_files_help'] = 'Utilice esta opción para marcar una tarea como "borrador" si crea las tareas separadas para los borradores y las entregas finales.
Los borradores no se guardarán en la base de datos de la Institución en la cuenta de Unicheck.';
$string['noreceiver'] = 'Dirección del destinatario no especificada';
$string['pending'] = 'Este archivo está pendiente de envío a Unicheck';
$string['plagiarism'] = 'Posible plagio';
$string['plagiarism_run_success'] = 'Archivo enviado para su revisión por plagio';
$string['pluginname'] = 'Detector de plagio Unicheck';
$string['previouslysubmitted'] = 'Enviado previamente como';
$string['processing'] = 'Este archivo fue enviado a Unicheck, ahora se está esperando a que el análisis esté disponible';
$string['progress'] = 'Unicheck está escaneando';
$string['receivernotvalid'] = 'La dirección del destinatario no es válida.';
$string['refresh'] = 'Actualice la página para ver los resultados';
$string['report'] = 'Ver el informe completo';
$string['reportready'] = 'El informe está preparado';
$string['resubmit'] = 'Reenviar';
$string['savedconfigfailed'] = 'Se ha introducido una combinación de ID de Cliente/Secreto de API incorrecta. Unicheck fue desactivado, por favor, inténtelo de nuevo.';
$string['savedconfigsuccess'] = 'Ajustes de detección de plagio guardados';
$string['scoreavailable'] = 'Este archivo ha sido analizado por Unicheck y el informe ya está disponible.';
$string['scorenotavailableyet'] = 'Este archivo todavía no ha sido analizado por Unicheck.';
$string['show_student_report'] = 'Mostrar informes de similitud a los estudiantes';
$string['show_student_report_help'] = 'Los estudiantes sólo ven los informes de similitud de sus propios trabajos y no ven los informes de otros estudiantes.';
$string['show_student_score'] = 'Mostrar porcentajes de similitud a los estudiantes';
$string['show_student_score_help'] = 'Los estudiantes sólo ven los porcentajes de similitud de sus propios trabajos y no ven los porcentajes de otros estudiantes.';
$string['showwhenclosed'] = 'Cuando la Actividad esté cerrada';
$string['similarity'] = 'Similitud';
$string['similarity_sensitivity'] = 'Descartar fuentes con coincidencias menores de (%)';
$string['similarity_sensitivity_help'] = 'Indique el porcentaje mínimo total de coincidencia para una fuente. Estas fuentes no se mostrarán en el listado de las fuentes y serán excluidas del porcentaje total de similitud.';
$string['similarity_words_sensitivity'] = 'Descartar fuentes con coincidencias menores de (palabras)';
$string['similarity_words_sensitivity_help'] = 'Indique el mínimo total de coincidencia de palabras para una fuente. Estas fuentes no se mostrarán en el listado de las fuentes y serán excluidas del porcentaje total de similitud.';
$string['status'] = 'Estado';
$string['studentdisclosure'] = 'Familiarizar a los estudiantes con la Política de Privacidad de Unicheck';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán enviados al sistema de detección de plagio de Unicheck.';
$string['studentdisclosure_help'] = 'Este texto se mostrará a todos los estudiantes en la página de carga del archivo.';
$string['studentemailcontent'] = 'El archivo enviado a {$a->modulename} en {$a->coursename} ya ha sido procesado por el sistema de detección de plagio de Unicheck {$a->modulelink}';
$string['studentemailsubject'] = 'Archivo analizado por Unicheck';
$string['submitondraft'] = 'Enviar el archivo cuando se cargue por primera vez';
$string['submitonfinal'] = 'Enviar el archivo cuando el estudiante lo envía para su calificación';
$string['toolarge'] = 'Este archivo es demasiado grande para ser analizado por Unicheck';
$string['ufiles'] = 'Archivos de Unicheck';
$string['unicheck'] = 'Detector de plagio Unicheck';
$string['unicheckdebug'] = 'Depuración';
$string['unicheckdefaults'] = 'Ajustes predeterminados de Unicheck';
$string['unicheck_enable'] = 'Activar el plugin de Unicheck';
$string['unicheck:enable'] = 'Permitir al profesor activar/desactivar Unicheck dentro de una actividad';
$string['unicheck_enableplugin'] = 'Activar en la actividad {$a}';
$string['unicheck_lang'] = 'Idioma';
$string['unicheck_lang_help'] = 'Código del idioma proporcionado por Unicheck';
$string['unicheck:resetfile'] = 'Permitir al profesor reenviar el archivo a Unicheck después de producirse un error';
$string['unicheck_settings_url_text'] = 'Abra la cuenta del administrador en unicheck.com para ver/copiar ID del Cliente/Secreto de API';
$string['unicheck:vieweditreport'] = 'Permitir al profesor ver y editar el informe completo de Unicheck';
$string['unicheck:viewreport'] = 'Permitir al profesor ver el informe completo de Unicheck';
$string['unknownwarning'] = 'Se ha producido un error al intentar enviar este archivo a Unicheck';
$string['unsupportedfiletype'] = 'Unicheck no soporta este tipo de archivo';
$string['use_assign_desc_param'] = 'Para desbloquear los ajustes de Unicheck';
$string['use_assign_desc_value'] = 'Establecer configuración de envío → Requerir que los estudiantes hagan clic en el botón Enviar = Sí';
$string['use_unicheck'] = 'Verifica automáticamente los envíos nuevos';
$string['use_unicheck_help'] = 'Cuando está activada esta opción, los trabajos de los estudiantes serán revisados en tiempo real, justo después de su envío. En otro caso, habrá que ejecutar manualmente la revisión de los trabajos seleccionados o utilizar la opción "Revisar los trabajos ya entregados".';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos esperando al cron y {$a->countheld} eventos retenidos para reenviarlos';
$string['web'] = 'Comparar con Internet';
$string['web_and_my_lib_and_external_db'] = 'Comparar con Internet + Biblioteca + BD';
$string['web_and_my_library'] = 'Comparar con Internet + Biblioteca';
