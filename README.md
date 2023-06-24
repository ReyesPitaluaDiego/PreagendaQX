# PreagendaQX
Sistema para reportes prequirúrgicos del ISSSTE

Se desarrolla en PHP 8, los requerimientos son:
 * XAMPP 8.0.25 o superior
 * Crear una carpeta con el nombre del proyecto en c://xampp/htdocs/ y depositar los archivos ahí
 * Crear la Base de Datos con el nombre preagendaqx en su servidor local y usar utf8mb4_spanish_ci e importar el archivo .sql de la        carpeta DB
 * Existen dos archivos .sql en la carpeta DB, "issste" tiene todos los datos de prueba y "preagendaqx" se encuentra sin registros
 * Si desea usar la BD con registros de prueba debe comentar la linea 5 y descomentar la 6 en en archivo "bd.php"
