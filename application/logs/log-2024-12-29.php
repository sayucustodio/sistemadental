<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2024-12-29 03:07:37 --> Model Class Initialized
INFO - 2024-12-29 03:07:37 --> Model Class Initialized
INFO - 2024-12-29 03:07:37 --> Model Class Initialized
INFO - 2024-12-29 03:07:37 --> Controller Class Initialized
ERROR - 2024-12-29 03:07:37 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'zip' (tried: C:/laragon/bin/php/php-2.8/ext\zip (No se puede encontrar el m�dulo especificado.), C:/laragon/bin/php/php-2.8/ext\php_zip.dll (No se puede encontrar el m�dulo especificado.)) Unknown 0
INFO - 2024-12-29 03:07:37 --> Model Class Initialized
INFO - 2024-12-29 03:07:37 --> Model Class Initialized
INFO - 2024-12-29 03:07:37 --> Model Class Initialized
INFO - 2024-12-29 03:07:37 --> Controller Class Initialized
INFO - 2024-12-29 03:07:37 --> Model Class Initialized
INFO - 2024-12-29 03:07:37 --> Model Class Initialized
INFO - 2024-12-29 03:07:37 --> File loaded: C:\laragon\www\demo\application\views\admin/login.php
INFO - 2024-12-29 03:07:37 --> Final output sent to browser
DEBUG - 2024-12-29 03:07:37 --> Total execution time: 0.0981
INFO - 2024-12-29 03:07:45 --> Model Class Initialized
INFO - 2024-12-29 03:07:45 --> Model Class Initialized
INFO - 2024-12-29 03:07:45 --> Model Class Initialized
INFO - 2024-12-29 03:07:45 --> Controller Class Initialized
INFO - 2024-12-29 03:07:45 --> Model Class Initialized
INFO - 2024-12-29 03:07:45 --> Model Class Initialized
INFO - 2024-12-29 03:07:46 --> Model Class Initialized
INFO - 2024-12-29 03:07:46 --> Model Class Initialized
INFO - 2024-12-29 03:07:46 --> Model Class Initialized
INFO - 2024-12-29 03:07:46 --> Controller Class Initialized
INFO - 2024-12-29 03:07:46 --> Model Class Initialized
INFO - 2024-12-29 03:07:46 --> Model Class Initialized
INFO - 2024-12-29 03:07:46 --> File loaded: C:\laragon\www\demo\application\views\admin/login.php
INFO - 2024-12-29 03:07:46 --> Final output sent to browser
DEBUG - 2024-12-29 03:07:46 --> Total execution time: 0.1378
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Controller Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Controller Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> Model Class Initialized
INFO - 2024-12-29 03:07:50 --> File loaded: C:\laragon\www\demo\application\views\admin/login.php
INFO - 2024-12-29 03:07:50 --> Final output sent to browser
DEBUG - 2024-12-29 03:07:50 --> Total execution time: 0.1208
INFO - 2024-12-29 03:08:00 --> Model Class Initialized
INFO - 2024-12-29 03:08:00 --> Model Class Initialized
INFO - 2024-12-29 03:08:00 --> Model Class Initialized
INFO - 2024-12-29 03:08:00 --> Controller Class Initialized
INFO - 2024-12-29 03:08:00 --> Model Class Initialized
INFO - 2024-12-29 03:08:00 --> Model Class Initialized
INFO - 2024-12-29 03:08:00 --> Model Class Initialized
INFO - 2024-12-29 03:08:00 --> Model Class Initialized
INFO - 2024-12-29 03:08:00 --> Model Class Initialized
INFO - 2024-12-29 03:08:00 --> Controller Class Initialized
INFO - 2024-12-29 03:08:00 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:08:00 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:08:00 --> File loaded: C:\laragon\www\demo\application\views\home/inicio.php
INFO - 2024-12-29 03:08:00 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:08:00 --> Final output sent to browser
DEBUG - 2024-12-29 03:08:00 --> Total execution time: 0.1515
INFO - 2024-12-29 03:08:01 --> Model Class Initialized
INFO - 2024-12-29 03:08:01 --> Model Class Initialized
INFO - 2024-12-29 03:08:01 --> Model Class Initialized
INFO - 2024-12-29 03:08:01 --> Controller Class Initialized
INFO - 2024-12-29 03:08:01 --> Model Class Initialized
INFO - 2024-12-29 03:08:01 --> Model Class Initialized
INFO - 2024-12-29 03:08:01 --> Email Class Initialized
INFO - 2024-12-29 03:08:01 --> Final output sent to browser
DEBUG - 2024-12-29 03:08:01 --> Total execution time: 0.1797
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Controller Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
ERROR - 2024-12-29 03:08:02 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:08:02 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Controller Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Final output sent to browser
DEBUG - 2024-12-29 03:08:02 --> Total execution time: 0.2427
ERROR - 2024-12-29 03:08:02 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'zip' (tried: C:/laragon/bin/php/php-2.8/ext\zip (No se puede encontrar el m�dulo especificado.), C:/laragon/bin/php/php-2.8/ext\php_zip.dll (No se puede encontrar el m�dulo especificado.)) Unknown 0
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Controller Class Initialized
INFO - 2024-12-29 03:08:02 --> Model Class Initialized
INFO - 2024-12-29 03:08:02 --> Final output sent to browser
DEBUG - 2024-12-29 03:08:02 --> Total execution time: 0.3297
ERROR - 2024-12-29 03:08:02 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'zip' (tried: C:/laragon/bin/php/php-2.8/ext\zip (No se puede encontrar el m�dulo especificado.), C:/laragon/bin/php/php-2.8/ext\php_zip.dll (No se puede encontrar el m�dulo especificado.)) Unknown 0
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Controller Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:10:58 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:10:58 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/panel.php
INFO - 2024-12-29 03:10:58 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:10:58 --> Final output sent to browser
DEBUG - 2024-12-29 03:10:58 --> Total execution time: 0.1954
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Controller Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Email Class Initialized
INFO - 2024-12-29 03:10:58 --> Final output sent to browser
DEBUG - 2024-12-29 03:10:58 --> Total execution time: 0.1657
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
INFO - 2024-12-29 03:10:58 --> Controller Class Initialized
INFO - 2024-12-29 03:10:58 --> Model Class Initialized
ERROR - 2024-12-29 03:10:58 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:10:58 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Controller Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Final output sent to browser
DEBUG - 2024-12-29 03:10:59 --> Total execution time: 0.3231
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Controller Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Final output sent to browser
DEBUG - 2024-12-29 03:10:59 --> Total execution time: 0.1660
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Controller Class Initialized
INFO - 2024-12-29 03:10:59 --> Model Class Initialized
INFO - 2024-12-29 03:10:59 --> Final output sent to browser
DEBUG - 2024-12-29 03:10:59 --> Total execution time: 0.1645
INFO - 2024-12-29 03:11:09 --> Model Class Initialized
INFO - 2024-12-29 03:11:09 --> Model Class Initialized
INFO - 2024-12-29 03:11:09 --> Model Class Initialized
INFO - 2024-12-29 03:11:09 --> Controller Class Initialized
INFO - 2024-12-29 03:11:09 --> Model Class Initialized
INFO - 2024-12-29 03:11:09 --> Model Class Initialized
INFO - 2024-12-29 03:11:09 --> Model Class Initialized
INFO - 2024-12-29 03:11:09 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:09 --> Total execution time: 0.1661
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Controller Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/datos_paciente.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/exploracion_fisica.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/receta.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/placas.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/cursores.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma_nav.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/evolucion.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/cita.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/histratamiento.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/diagnostico.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/historia.php
INFO - 2024-12-29 03:11:12 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:11:12 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:12 --> Total execution time: 0.2646
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Controller Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Email Class Initialized
INFO - 2024-12-29 03:11:12 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:12 --> Total execution time: 0.1948
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Controller Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
ERROR - 2024-12-29 03:11:12 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:11:12 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Controller Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:12 --> Total execution time: 0.3697
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Controller Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:12 --> Total execution time: 0.2779
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Controller Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Model Class Initialized
INFO - 2024-12-29 03:11:12 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:12 --> Total execution time: 0.2948
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Controller Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:13 --> Total execution time: 0.2909
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Controller Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:13 --> Total execution time: 0.3037
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Controller Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:13 --> Total execution time: 0.1529
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Controller Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:13 --> Total execution time: 0.2286
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Controller Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Model Class Initialized
INFO - 2024-12-29 03:11:13 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:13 --> Total execution time: 0.3120
INFO - 2024-12-29 03:11:15 --> Model Class Initialized
INFO - 2024-12-29 03:11:15 --> Model Class Initialized
INFO - 2024-12-29 03:11:15 --> Model Class Initialized
INFO - 2024-12-29 03:11:15 --> Controller Class Initialized
INFO - 2024-12-29 03:11:15 --> Model Class Initialized
INFO - 2024-12-29 03:11:15 --> Model Class Initialized
INFO - 2024-12-29 03:11:15 --> Model Class Initialized
INFO - 2024-12-29 03:11:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 03:11:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 03:11:15 --> Final output sent to browser
DEBUG - 2024-12-29 03:11:15 --> Total execution time: 0.9037
INFO - 2024-12-29 03:17:12 --> Model Class Initialized
INFO - 2024-12-29 03:17:12 --> Model Class Initialized
INFO - 2024-12-29 03:17:12 --> Model Class Initialized
INFO - 2024-12-29 03:17:12 --> Controller Class Initialized
INFO - 2024-12-29 03:17:13 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:17:13 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:17:13 --> File loaded: C:\laragon\www\demo\application\views\home/inicio.php
INFO - 2024-12-29 03:17:13 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:17:13 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:13 --> Total execution time: 0.1726
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Controller Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:13 --> Total execution time: 0.1710
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Controller Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
ERROR - 2024-12-29 03:17:13 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:17:13 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Controller Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Model Class Initialized
INFO - 2024-12-29 03:17:13 --> Email Class Initialized
INFO - 2024-12-29 03:17:13 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:13 --> Total execution time: 0.3962
INFO - 2024-12-29 03:17:14 --> Model Class Initialized
INFO - 2024-12-29 03:17:14 --> Model Class Initialized
INFO - 2024-12-29 03:17:14 --> Model Class Initialized
INFO - 2024-12-29 03:17:14 --> Controller Class Initialized
INFO - 2024-12-29 03:17:14 --> Model Class Initialized
INFO - 2024-12-29 03:17:14 --> Model Class Initialized
INFO - 2024-12-29 03:17:14 --> Model Class Initialized
INFO - 2024-12-29 03:17:14 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:14 --> Total execution time: 0.1446
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Controller Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/datos_paciente.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/exploracion_fisica.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/receta.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/placas.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/cursores.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma_nav.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/evolucion.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/cita.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/histratamiento.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/diagnostico.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/historia.php
INFO - 2024-12-29 03:17:15 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:17:15 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:15 --> Total execution time: 0.2876
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Controller Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Email Class Initialized
INFO - 2024-12-29 03:17:15 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:15 --> Total execution time: 0.2974
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Controller Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:15 --> Total execution time: 0.3731
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Controller Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
ERROR - 2024-12-29 03:17:15 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:17:15 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Model Class Initialized
INFO - 2024-12-29 03:17:15 --> Controller Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:16 --> Total execution time: 0.2460
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Controller Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:16 --> Total execution time: 0.2366
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Controller Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:16 --> Total execution time: 0.2593
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Controller Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:16 --> Total execution time: 0.2661
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Controller Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:16 --> Total execution time: 0.1680
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Controller Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:16 --> Total execution time: 0.2256
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Controller Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Model Class Initialized
INFO - 2024-12-29 03:17:16 --> Final output sent to browser
DEBUG - 2024-12-29 03:17:16 --> Total execution time: 0.3134
INFO - 2024-12-29 03:20:25 --> Model Class Initialized
INFO - 2024-12-29 03:20:25 --> Model Class Initialized
INFO - 2024-12-29 03:20:25 --> Model Class Initialized
INFO - 2024-12-29 03:20:25 --> Controller Class Initialized
INFO - 2024-12-29 03:20:25 --> Model Class Initialized
INFO - 2024-12-29 03:20:25 --> Model Class Initialized
INFO - 2024-12-29 03:20:25 --> Email Class Initialized
INFO - 2024-12-29 03:20:25 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:20:25 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:20:25 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/tratamientos/panel.php
INFO - 2024-12-29 03:20:25 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:20:25 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:25 --> Total execution time: 0.3489
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Controller Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Email Class Initialized
INFO - 2024-12-29 03:20:26 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:26 --> Total execution time: 0.1634
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Controller Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
ERROR - 2024-12-29 03:20:26 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:20:26 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Controller Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Model Class Initialized
INFO - 2024-12-29 03:20:26 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:26 --> Total execution time: 0.3411
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Controller Class Initialized
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:27 --> Total execution time: 0.1470
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Controller Class Initialized
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Model Class Initialized
INFO - 2024-12-29 03:20:27 --> Email Class Initialized
INFO - 2024-12-29 03:20:27 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:27 --> Total execution time: 0.2143
INFO - 2024-12-29 03:20:34 --> Model Class Initialized
INFO - 2024-12-29 03:20:34 --> Model Class Initialized
INFO - 2024-12-29 03:20:34 --> Model Class Initialized
INFO - 2024-12-29 03:20:34 --> Controller Class Initialized
INFO - 2024-12-29 03:20:34 --> Model Class Initialized
INFO - 2024-12-29 03:20:34 --> Model Class Initialized
INFO - 2024-12-29 03:20:34 --> Email Class Initialized
INFO - 2024-12-29 03:20:34 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:34 --> Total execution time: 0.2153
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Controller Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Email Class Initialized
INFO - 2024-12-29 03:20:38 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:20:38 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:20:38 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/pagos/nuevo_pago.php
INFO - 2024-12-29 03:20:38 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:20:38 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:38 --> Total execution time: 0.2092
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Controller Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Email Class Initialized
INFO - 2024-12-29 03:20:38 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:38 --> Total execution time: 0.1880
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
INFO - 2024-12-29 03:20:38 --> Controller Class Initialized
INFO - 2024-12-29 03:20:38 --> Model Class Initialized
ERROR - 2024-12-29 03:20:38 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:20:38 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Controller Class Initialized
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:39 --> Total execution time: 0.4127
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Controller Class Initialized
INFO - 2024-12-29 03:20:39 --> Model Class Initialized
INFO - 2024-12-29 03:20:39 --> Final output sent to browser
DEBUG - 2024-12-29 03:20:39 --> Total execution time: 0.1597
INFO - 2024-12-29 03:21:29 --> Model Class Initialized
INFO - 2024-12-29 03:21:29 --> Model Class Initialized
INFO - 2024-12-29 03:21:29 --> Model Class Initialized
INFO - 2024-12-29 03:21:29 --> Controller Class Initialized
INFO - 2024-12-29 03:21:29 --> Model Class Initialized
INFO - 2024-12-29 03:21:29 --> Model Class Initialized
INFO - 2024-12-29 03:21:29 --> Email Class Initialized
INFO - 2024-12-29 03:21:29 --> Final output sent to browser
DEBUG - 2024-12-29 03:21:29 --> Total execution time: 0.1864
INFO - 2024-12-29 03:22:11 --> Model Class Initialized
INFO - 2024-12-29 03:22:11 --> Model Class Initialized
INFO - 2024-12-29 03:22:11 --> Model Class Initialized
INFO - 2024-12-29 03:22:11 --> Controller Class Initialized
INFO - 2024-12-29 03:22:11 --> Model Class Initialized
INFO - 2024-12-29 03:22:11 --> Model Class Initialized
INFO - 2024-12-29 03:22:11 --> Email Class Initialized
INFO - 2024-12-29 03:22:11 --> Final output sent to browser
DEBUG - 2024-12-29 03:22:11 --> Total execution time: 0.1795
INFO - 2024-12-29 03:22:15 --> Model Class Initialized
INFO - 2024-12-29 03:22:15 --> Model Class Initialized
INFO - 2024-12-29 03:22:15 --> Model Class Initialized
INFO - 2024-12-29 03:22:15 --> Controller Class Initialized
INFO - 2024-12-29 03:22:15 --> Model Class Initialized
INFO - 2024-12-29 03:22:15 --> Model Class Initialized
INFO - 2024-12-29 03:22:15 --> Email Class Initialized
INFO - 2024-12-29 03:22:15 --> Final output sent to browser
DEBUG - 2024-12-29 03:22:15 --> Total execution time: 0.1582
INFO - 2024-12-29 03:22:17 --> Model Class Initialized
INFO - 2024-12-29 03:22:17 --> Model Class Initialized
INFO - 2024-12-29 03:22:17 --> Model Class Initialized
INFO - 2024-12-29 03:22:18 --> Controller Class Initialized
INFO - 2024-12-29 03:22:18 --> Model Class Initialized
INFO - 2024-12-29 03:22:18 --> Model Class Initialized
INFO - 2024-12-29 03:22:18 --> Email Class Initialized
INFO - 2024-12-29 03:22:18 --> Final output sent to browser
DEBUG - 2024-12-29 03:22:18 --> Total execution time: 0.1681
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Controller Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Email Class Initialized
INFO - 2024-12-29 03:26:42 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:26:42 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:26:42 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/tratamientos/panel.php
INFO - 2024-12-29 03:26:42 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:26:42 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:42 --> Total execution time: 0.1973
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Controller Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:42 --> Total execution time: 0.2035
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Controller Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Email Class Initialized
INFO - 2024-12-29 03:26:42 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:42 --> Total execution time: 0.3176
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
INFO - 2024-12-29 03:26:42 --> Controller Class Initialized
INFO - 2024-12-29 03:26:42 --> Model Class Initialized
ERROR - 2024-12-29 03:26:42 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:26:42 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Controller Class Initialized
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:43 --> Total execution time: 0.1810
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Controller Class Initialized
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Model Class Initialized
INFO - 2024-12-29 03:26:43 --> Email Class Initialized
INFO - 2024-12-29 03:26:43 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:43 --> Total execution time: 0.2641
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Controller Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Email Class Initialized
INFO - 2024-12-29 03:26:44 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:26:44 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:26:44 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/tratamientos/nuevo.php
INFO - 2024-12-29 03:26:44 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:26:44 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:44 --> Total execution time: 0.2092
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Controller Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:44 --> Total execution time: 0.1910
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Controller Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
ERROR - 2024-12-29 03:26:44 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:26:44 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Controller Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Model Class Initialized
INFO - 2024-12-29 03:26:44 --> Email Class Initialized
INFO - 2024-12-29 03:26:44 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:44 --> Total execution time: 0.4072
INFO - 2024-12-29 03:26:45 --> Model Class Initialized
INFO - 2024-12-29 03:26:45 --> Model Class Initialized
INFO - 2024-12-29 03:26:45 --> Model Class Initialized
INFO - 2024-12-29 03:26:45 --> Controller Class Initialized
INFO - 2024-12-29 03:26:45 --> Model Class Initialized
INFO - 2024-12-29 03:26:45 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:45 --> Total execution time: 0.1506
INFO - 2024-12-29 03:26:47 --> Model Class Initialized
INFO - 2024-12-29 03:26:47 --> Model Class Initialized
INFO - 2024-12-29 03:26:47 --> Model Class Initialized
INFO - 2024-12-29 03:26:47 --> Controller Class Initialized
INFO - 2024-12-29 03:26:47 --> Model Class Initialized
INFO - 2024-12-29 03:26:47 --> Email Class Initialized
INFO - 2024-12-29 03:26:47 --> Final output sent to browser
DEBUG - 2024-12-29 03:26:47 --> Total execution time: 0.1870
INFO - 2024-12-29 03:27:23 --> Model Class Initialized
INFO - 2024-12-29 03:27:23 --> Model Class Initialized
INFO - 2024-12-29 03:27:23 --> Model Class Initialized
INFO - 2024-12-29 03:27:23 --> Controller Class Initialized
INFO - 2024-12-29 03:27:23 --> Model Class Initialized
INFO - 2024-12-29 03:27:23 --> Model Class Initialized
INFO - 2024-12-29 03:27:23 --> Email Class Initialized
INFO - 2024-12-29 03:27:23 --> Final output sent to browser
DEBUG - 2024-12-29 03:27:23 --> Total execution time: 0.1601
INFO - 2024-12-29 03:27:28 --> Model Class Initialized
INFO - 2024-12-29 03:27:28 --> Model Class Initialized
INFO - 2024-12-29 03:27:28 --> Model Class Initialized
INFO - 2024-12-29 03:27:28 --> Controller Class Initialized
INFO - 2024-12-29 03:27:28 --> Model Class Initialized
INFO - 2024-12-29 03:27:28 --> Model Class Initialized
INFO - 2024-12-29 03:27:28 --> Email Class Initialized
INFO - 2024-12-29 03:27:28 --> Final output sent to browser
DEBUG - 2024-12-29 03:27:28 --> Total execution time: 0.1654
INFO - 2024-12-29 03:32:22 --> Model Class Initialized
INFO - 2024-12-29 03:32:22 --> Model Class Initialized
INFO - 2024-12-29 03:32:22 --> Model Class Initialized
INFO - 2024-12-29 03:32:22 --> Controller Class Initialized
INFO - 2024-12-29 03:32:22 --> Model Class Initialized
INFO - 2024-12-29 03:32:22 --> Model Class Initialized
INFO - 2024-12-29 03:32:22 --> Email Class Initialized
INFO - 2024-12-29 03:32:22 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2024-12-29 03:32:22 --> Final output sent to browser
DEBUG - 2024-12-29 03:32:22 --> Total execution time: 0.2178
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Controller Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Email Class Initialized
INFO - 2024-12-29 03:32:23 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:32:23 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:32:23 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/tratamientos/panel.php
INFO - 2024-12-29 03:32:23 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:32:23 --> Final output sent to browser
DEBUG - 2024-12-29 03:32:23 --> Total execution time: 0.2384
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Controller Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
ERROR - 2024-12-29 03:32:23 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:32:23 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Controller Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Final output sent to browser
DEBUG - 2024-12-29 03:32:23 --> Total execution time: 0.2969
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Controller Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Model Class Initialized
INFO - 2024-12-29 03:32:23 --> Email Class Initialized
INFO - 2024-12-29 03:32:23 --> Final output sent to browser
DEBUG - 2024-12-29 03:32:23 --> Total execution time: 0.3909
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Controller Class Initialized
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Final output sent to browser
DEBUG - 2024-12-29 03:32:24 --> Total execution time: 0.1134
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Controller Class Initialized
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Model Class Initialized
INFO - 2024-12-29 03:32:24 --> Email Class Initialized
INFO - 2024-12-29 03:32:24 --> Final output sent to browser
DEBUG - 2024-12-29 03:32:24 --> Total execution time: 0.1637
INFO - 2024-12-29 03:33:08 --> Model Class Initialized
INFO - 2024-12-29 03:33:08 --> Model Class Initialized
INFO - 2024-12-29 03:33:08 --> Model Class Initialized
INFO - 2024-12-29 03:33:08 --> Controller Class Initialized
INFO - 2024-12-29 03:33:08 --> Model Class Initialized
INFO - 2024-12-29 03:33:08 --> Model Class Initialized
INFO - 2024-12-29 03:33:08 --> Email Class Initialized
INFO - 2024-12-29 03:33:08 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:33:08 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:33:08 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/pagos/nuevo_pago.php
INFO - 2024-12-29 03:33:08 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:33:08 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:08 --> Total execution time: 0.1906
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Controller Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
ERROR - 2024-12-29 03:33:09 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:33:09 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Controller Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:09 --> Total execution time: 0.3138
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Controller Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Model Class Initialized
INFO - 2024-12-29 03:33:09 --> Email Class Initialized
INFO - 2024-12-29 03:33:09 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:09 --> Total execution time: 0.4097
INFO - 2024-12-29 03:33:10 --> Model Class Initialized
INFO - 2024-12-29 03:33:10 --> Model Class Initialized
INFO - 2024-12-29 03:33:10 --> Model Class Initialized
INFO - 2024-12-29 03:33:10 --> Controller Class Initialized
INFO - 2024-12-29 03:33:10 --> Model Class Initialized
INFO - 2024-12-29 03:33:10 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:10 --> Total execution time: 0.1721
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Controller Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Email Class Initialized
INFO - 2024-12-29 03:33:20 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:33:20 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:33:20 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/tratamientos/panel.php
INFO - 2024-12-29 03:33:20 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:33:20 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:20 --> Total execution time: 0.1994
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Controller Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Email Class Initialized
INFO - 2024-12-29 03:33:20 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:20 --> Total execution time: 0.1989
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Controller Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:20 --> Total execution time: 0.2990
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
INFO - 2024-12-29 03:33:20 --> Controller Class Initialized
INFO - 2024-12-29 03:33:20 --> Model Class Initialized
ERROR - 2024-12-29 03:33:20 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:33:20 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Controller Class Initialized
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:21 --> Total execution time: 0.1838
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Controller Class Initialized
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Model Class Initialized
INFO - 2024-12-29 03:33:21 --> Email Class Initialized
INFO - 2024-12-29 03:33:21 --> Final output sent to browser
DEBUG - 2024-12-29 03:33:21 --> Total execution time: 0.2988
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Controller Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Email Class Initialized
INFO - 2024-12-29 03:40:53 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:40:53 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:40:53 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/pagos/nuevo_pago.php
INFO - 2024-12-29 03:40:53 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:40:53 --> Final output sent to browser
DEBUG - 2024-12-29 03:40:53 --> Total execution time: 0.2034
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Controller Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Final output sent to browser
DEBUG - 2024-12-29 03:40:53 --> Total execution time: 0.1927
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Controller Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Email Class Initialized
INFO - 2024-12-29 03:40:53 --> Final output sent to browser
DEBUG - 2024-12-29 03:40:53 --> Total execution time: 0.3033
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
INFO - 2024-12-29 03:40:53 --> Controller Class Initialized
INFO - 2024-12-29 03:40:53 --> Model Class Initialized
ERROR - 2024-12-29 03:40:53 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:40:53 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:40:54 --> Model Class Initialized
INFO - 2024-12-29 03:40:54 --> Model Class Initialized
INFO - 2024-12-29 03:40:54 --> Model Class Initialized
INFO - 2024-12-29 03:40:54 --> Controller Class Initialized
INFO - 2024-12-29 03:40:54 --> Model Class Initialized
INFO - 2024-12-29 03:40:54 --> Final output sent to browser
DEBUG - 2024-12-29 03:40:54 --> Total execution time: 0.2119
INFO - 2024-12-29 03:40:58 --> Model Class Initialized
INFO - 2024-12-29 03:40:58 --> Model Class Initialized
INFO - 2024-12-29 03:40:58 --> Model Class Initialized
INFO - 2024-12-29 03:40:58 --> Controller Class Initialized
INFO - 2024-12-29 03:40:58 --> Model Class Initialized
INFO - 2024-12-29 03:40:58 --> Model Class Initialized
INFO - 2024-12-29 03:40:58 --> Email Class Initialized
INFO - 2024-12-29 03:40:58 --> Final output sent to browser
DEBUG - 2024-12-29 03:40:58 --> Total execution time: 0.1962
INFO - 2024-12-29 03:44:26 --> Model Class Initialized
INFO - 2024-12-29 03:44:26 --> Model Class Initialized
INFO - 2024-12-29 03:44:26 --> Model Class Initialized
INFO - 2024-12-29 03:44:26 --> Controller Class Initialized
INFO - 2024-12-29 03:44:26 --> Model Class Initialized
INFO - 2024-12-29 03:44:26 --> Model Class Initialized
INFO - 2024-12-29 03:44:26 --> Email Class Initialized
INFO - 2024-12-29 03:44:26 --> Final output sent to browser
DEBUG - 2024-12-29 03:44:26 --> Total execution time: 0.1691
INFO - 2024-12-29 03:45:40 --> Model Class Initialized
INFO - 2024-12-29 03:45:40 --> Model Class Initialized
INFO - 2024-12-29 03:45:40 --> Model Class Initialized
INFO - 2024-12-29 03:45:40 --> Controller Class Initialized
INFO - 2024-12-29 03:45:40 --> Model Class Initialized
INFO - 2024-12-29 03:45:40 --> Model Class Initialized
INFO - 2024-12-29 03:45:40 --> Email Class Initialized
INFO - 2024-12-29 03:45:40 --> Final output sent to browser
DEBUG - 2024-12-29 03:45:40 --> Total execution time: 0.1917
INFO - 2024-12-29 03:45:58 --> Model Class Initialized
INFO - 2024-12-29 03:45:58 --> Model Class Initialized
INFO - 2024-12-29 03:45:58 --> Model Class Initialized
INFO - 2024-12-29 03:45:58 --> Controller Class Initialized
INFO - 2024-12-29 03:45:58 --> Model Class Initialized
INFO - 2024-12-29 03:45:58 --> Model Class Initialized
INFO - 2024-12-29 03:45:58 --> Email Class Initialized
INFO - 2024-12-29 03:45:58 --> Final output sent to browser
DEBUG - 2024-12-29 03:45:58 --> Total execution time: 0.3497
INFO - 2024-12-29 03:46:06 --> Model Class Initialized
INFO - 2024-12-29 03:46:06 --> Model Class Initialized
INFO - 2024-12-29 03:46:06 --> Model Class Initialized
INFO - 2024-12-29 03:46:06 --> Controller Class Initialized
INFO - 2024-12-29 03:46:06 --> Model Class Initialized
INFO - 2024-12-29 03:46:06 --> Model Class Initialized
INFO - 2024-12-29 03:46:06 --> Email Class Initialized
INFO - 2024-12-29 03:46:06 --> Final output sent to browser
DEBUG - 2024-12-29 03:46:06 --> Total execution time: 0.1773
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Controller Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Email Class Initialized
INFO - 2024-12-29 03:55:51 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 03:55:51 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 03:55:51 --> File loaded: C:\laragon\www\demo\application\views\admin/tratamientos/pagos/nuevo_pago.php
INFO - 2024-12-29 03:55:51 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 03:55:51 --> Final output sent to browser
DEBUG - 2024-12-29 03:55:51 --> Total execution time: 0.1990
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Controller Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
ERROR - 2024-12-29 03:55:51 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 03:55:51 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Controller Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Final output sent to browser
DEBUG - 2024-12-29 03:55:51 --> Total execution time: 0.2465
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Controller Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Model Class Initialized
INFO - 2024-12-29 03:55:51 --> Email Class Initialized
INFO - 2024-12-29 03:55:51 --> Final output sent to browser
DEBUG - 2024-12-29 03:55:51 --> Total execution time: 0.3389
INFO - 2024-12-29 03:55:52 --> Model Class Initialized
INFO - 2024-12-29 03:55:52 --> Model Class Initialized
INFO - 2024-12-29 03:55:52 --> Model Class Initialized
INFO - 2024-12-29 03:55:52 --> Controller Class Initialized
INFO - 2024-12-29 03:55:52 --> Model Class Initialized
INFO - 2024-12-29 03:55:52 --> Final output sent to browser
DEBUG - 2024-12-29 03:55:52 --> Total execution time: 0.1575
INFO - 2024-12-29 03:55:58 --> Model Class Initialized
INFO - 2024-12-29 03:55:58 --> Model Class Initialized
INFO - 2024-12-29 03:55:58 --> Model Class Initialized
INFO - 2024-12-29 03:55:58 --> Controller Class Initialized
INFO - 2024-12-29 03:55:58 --> Model Class Initialized
INFO - 2024-12-29 03:55:58 --> Model Class Initialized
INFO - 2024-12-29 03:55:58 --> Email Class Initialized
INFO - 2024-12-29 03:55:58 --> Final output sent to browser
DEBUG - 2024-12-29 03:55:58 --> Total execution time: 0.1694
INFO - 2024-12-29 03:56:00 --> Model Class Initialized
INFO - 2024-12-29 03:56:00 --> Model Class Initialized
INFO - 2024-12-29 03:56:00 --> Model Class Initialized
INFO - 2024-12-29 03:56:00 --> Controller Class Initialized
INFO - 2024-12-29 03:56:00 --> Model Class Initialized
INFO - 2024-12-29 03:56:00 --> Model Class Initialized
INFO - 2024-12-29 03:56:00 --> Email Class Initialized
INFO - 2024-12-29 03:56:00 --> Final output sent to browser
DEBUG - 2024-12-29 03:56:00 --> Total execution time: 0.1502
INFO - 2024-12-29 03:56:04 --> Model Class Initialized
INFO - 2024-12-29 03:56:04 --> Model Class Initialized
INFO - 2024-12-29 03:56:04 --> Model Class Initialized
INFO - 2024-12-29 03:56:04 --> Controller Class Initialized
INFO - 2024-12-29 03:56:04 --> Model Class Initialized
INFO - 2024-12-29 03:56:04 --> Model Class Initialized
INFO - 2024-12-29 03:56:04 --> Email Class Initialized
INFO - 2024-12-29 03:56:04 --> Final output sent to browser
DEBUG - 2024-12-29 03:56:04 --> Total execution time: 0.1508
INFO - 2024-12-29 03:56:06 --> Model Class Initialized
INFO - 2024-12-29 03:56:06 --> Model Class Initialized
INFO - 2024-12-29 03:56:06 --> Model Class Initialized
INFO - 2024-12-29 03:56:06 --> Controller Class Initialized
INFO - 2024-12-29 03:56:06 --> Model Class Initialized
INFO - 2024-12-29 03:56:06 --> Model Class Initialized
INFO - 2024-12-29 03:56:06 --> Email Class Initialized
INFO - 2024-12-29 03:56:06 --> Final output sent to browser
DEBUG - 2024-12-29 03:56:06 --> Total execution time: 0.1607
INFO - 2024-12-29 03:56:40 --> Model Class Initialized
INFO - 2024-12-29 03:56:40 --> Model Class Initialized
INFO - 2024-12-29 03:56:40 --> Model Class Initialized
INFO - 2024-12-29 03:56:40 --> Controller Class Initialized
INFO - 2024-12-29 03:56:40 --> Model Class Initialized
INFO - 2024-12-29 03:56:40 --> Model Class Initialized
INFO - 2024-12-29 03:56:40 --> Email Class Initialized
INFO - 2024-12-29 03:56:40 --> Final output sent to browser
DEBUG - 2024-12-29 03:56:40 --> Total execution time: 0.1635
INFO - 2024-12-29 03:58:58 --> Model Class Initialized
INFO - 2024-12-29 03:58:58 --> Model Class Initialized
INFO - 2024-12-29 03:58:58 --> Model Class Initialized
INFO - 2024-12-29 03:58:58 --> Controller Class Initialized
INFO - 2024-12-29 03:58:58 --> Model Class Initialized
INFO - 2024-12-29 03:58:58 --> Model Class Initialized
INFO - 2024-12-29 03:58:58 --> Email Class Initialized
INFO - 2024-12-29 03:58:58 --> Final output sent to browser
DEBUG - 2024-12-29 03:58:58 --> Total execution time: 0.1398
INFO - 2024-12-29 04:21:15 --> Model Class Initialized
INFO - 2024-12-29 04:21:15 --> Model Class Initialized
INFO - 2024-12-29 04:21:15 --> Model Class Initialized
INFO - 2024-12-29 04:21:15 --> Controller Class Initialized
INFO - 2024-12-29 04:21:15 --> Model Class Initialized
INFO - 2024-12-29 04:21:15 --> Model Class Initialized
INFO - 2024-12-29 04:21:15 --> Model Class Initialized
INFO - 2024-12-29 04:21:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:21:15 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:21:15 --> Final output sent to browser
DEBUG - 2024-12-29 04:21:15 --> Total execution time: 0.4969
INFO - 2024-12-29 04:27:03 --> Model Class Initialized
INFO - 2024-12-29 04:27:03 --> Model Class Initialized
INFO - 2024-12-29 04:27:03 --> Model Class Initialized
INFO - 2024-12-29 04:27:03 --> Controller Class Initialized
INFO - 2024-12-29 04:27:03 --> Model Class Initialized
INFO - 2024-12-29 04:27:03 --> Model Class Initialized
INFO - 2024-12-29 04:27:03 --> Model Class Initialized
INFO - 2024-12-29 04:27:03 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:27:03 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:27:03 --> Final output sent to browser
DEBUG - 2024-12-29 04:27:03 --> Total execution time: 0.4970
INFO - 2024-12-29 04:27:47 --> Model Class Initialized
INFO - 2024-12-29 04:27:47 --> Model Class Initialized
INFO - 2024-12-29 04:27:47 --> Model Class Initialized
INFO - 2024-12-29 04:27:47 --> Controller Class Initialized
INFO - 2024-12-29 04:27:47 --> Model Class Initialized
INFO - 2024-12-29 04:27:47 --> Model Class Initialized
INFO - 2024-12-29 04:27:47 --> Model Class Initialized
INFO - 2024-12-29 04:27:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:27:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:27:47 --> Final output sent to browser
DEBUG - 2024-12-29 04:27:47 --> Total execution time: 0.4987
INFO - 2024-12-29 04:28:37 --> Model Class Initialized
INFO - 2024-12-29 04:28:37 --> Model Class Initialized
INFO - 2024-12-29 04:28:37 --> Model Class Initialized
INFO - 2024-12-29 04:28:37 --> Controller Class Initialized
INFO - 2024-12-29 04:28:37 --> Model Class Initialized
INFO - 2024-12-29 04:28:37 --> Model Class Initialized
INFO - 2024-12-29 04:28:37 --> Model Class Initialized
INFO - 2024-12-29 04:28:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:28:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:28:38 --> Final output sent to browser
DEBUG - 2024-12-29 04:28:38 --> Total execution time: 0.5063
INFO - 2024-12-29 04:28:50 --> Model Class Initialized
INFO - 2024-12-29 04:28:50 --> Model Class Initialized
INFO - 2024-12-29 04:28:50 --> Model Class Initialized
INFO - 2024-12-29 04:28:50 --> Controller Class Initialized
INFO - 2024-12-29 04:28:50 --> Model Class Initialized
INFO - 2024-12-29 04:28:50 --> Model Class Initialized
INFO - 2024-12-29 04:28:50 --> Model Class Initialized
INFO - 2024-12-29 04:28:50 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:28:50 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:28:50 --> Final output sent to browser
DEBUG - 2024-12-29 04:28:50 --> Total execution time: 0.4908
INFO - 2024-12-29 04:34:26 --> Model Class Initialized
INFO - 2024-12-29 04:34:26 --> Model Class Initialized
INFO - 2024-12-29 04:34:26 --> Model Class Initialized
INFO - 2024-12-29 04:34:26 --> Controller Class Initialized
INFO - 2024-12-29 04:34:26 --> Model Class Initialized
INFO - 2024-12-29 04:34:26 --> Model Class Initialized
INFO - 2024-12-29 04:34:26 --> Model Class Initialized
INFO - 2024-12-29 04:34:26 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:34:26 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:34:26 --> Final output sent to browser
DEBUG - 2024-12-29 04:34:26 --> Total execution time: 0.6675
INFO - 2024-12-29 04:36:21 --> Model Class Initialized
INFO - 2024-12-29 04:36:21 --> Model Class Initialized
INFO - 2024-12-29 04:36:21 --> Model Class Initialized
INFO - 2024-12-29 04:36:21 --> Controller Class Initialized
INFO - 2024-12-29 04:36:21 --> Model Class Initialized
INFO - 2024-12-29 04:36:21 --> Model Class Initialized
INFO - 2024-12-29 04:36:21 --> Model Class Initialized
INFO - 2024-12-29 04:36:21 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:36:21 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:36:21 --> Final output sent to browser
DEBUG - 2024-12-29 04:36:21 --> Total execution time: 0.5794
INFO - 2024-12-29 04:37:11 --> Model Class Initialized
INFO - 2024-12-29 04:37:11 --> Model Class Initialized
INFO - 2024-12-29 04:37:11 --> Model Class Initialized
INFO - 2024-12-29 04:37:11 --> Controller Class Initialized
INFO - 2024-12-29 04:37:11 --> Model Class Initialized
INFO - 2024-12-29 04:37:11 --> Model Class Initialized
INFO - 2024-12-29 04:37:11 --> Model Class Initialized
INFO - 2024-12-29 04:37:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:37:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:37:11 --> Final output sent to browser
DEBUG - 2024-12-29 04:37:11 --> Total execution time: 0.5137
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Controller Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 04:39:56 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 04:39:56 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/panel.php
INFO - 2024-12-29 04:39:56 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 04:39:56 --> Final output sent to browser
DEBUG - 2024-12-29 04:39:56 --> Total execution time: 0.1872
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Controller Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Email Class Initialized
INFO - 2024-12-29 04:39:56 --> Final output sent to browser
DEBUG - 2024-12-29 04:39:56 --> Total execution time: 0.1790
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Controller Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Final output sent to browser
DEBUG - 2024-12-29 04:39:56 --> Total execution time: 0.2509
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
INFO - 2024-12-29 04:39:56 --> Controller Class Initialized
INFO - 2024-12-29 04:39:56 --> Model Class Initialized
ERROR - 2024-12-29 04:39:56 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 04:39:56 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Controller Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Final output sent to browser
DEBUG - 2024-12-29 04:39:57 --> Total execution time: 0.1554
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Controller Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Model Class Initialized
INFO - 2024-12-29 04:39:57 --> Final output sent to browser
DEBUG - 2024-12-29 04:39:57 --> Total execution time: 0.2089
INFO - 2024-12-29 04:40:00 --> Model Class Initialized
INFO - 2024-12-29 04:40:00 --> Model Class Initialized
INFO - 2024-12-29 04:40:00 --> Model Class Initialized
INFO - 2024-12-29 04:40:00 --> Controller Class Initialized
INFO - 2024-12-29 04:40:00 --> Model Class Initialized
INFO - 2024-12-29 04:40:00 --> Model Class Initialized
INFO - 2024-12-29 04:40:00 --> Model Class Initialized
INFO - 2024-12-29 04:40:00 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:00 --> Total execution time: 0.1721
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Controller Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/datos_paciente.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/exploracion_fisica.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/receta.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/placas.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/cursores.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma_nav.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/evolucion.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/cita.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/histratamiento.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/diagnostico.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/historia.php
INFO - 2024-12-29 04:40:02 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 04:40:02 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:02 --> Total execution time: 0.2424
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Controller Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Email Class Initialized
INFO - 2024-12-29 04:40:02 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:02 --> Total execution time: 0.2392
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Controller Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
ERROR - 2024-12-29 04:40:02 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 04:40:02 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Controller Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:02 --> Total execution time: 0.4193
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Controller Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:02 --> Total execution time: 0.2890
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Controller Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:02 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:03 --> Total execution time: 0.2977
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Controller Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:03 --> Total execution time: 0.2887
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Controller Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:03 --> Total execution time: 0.2812
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Controller Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:03 --> Total execution time: 0.1526
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Controller Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:03 --> Total execution time: 0.2582
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Controller Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Model Class Initialized
INFO - 2024-12-29 04:40:03 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:03 --> Total execution time: 0.3623
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Controller Class Initialized
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 04:40:27 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 04:40:27 --> File loaded: C:\laragon\www\demo\application\views\admin/medida/listarmedida.php
INFO - 2024-12-29 04:40:27 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 04:40:27 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:27 --> Total execution time: 0.1861
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Controller Class Initialized
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Model Class Initialized
INFO - 2024-12-29 04:40:27 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:27 --> Total execution time: 0.1961
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Controller Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Email Class Initialized
INFO - 2024-12-29 04:40:28 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:28 --> Total execution time: 0.2968
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Controller Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
ERROR - 2024-12-29 04:40:28 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 04:40:28 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Controller Class Initialized
INFO - 2024-12-29 04:40:28 --> Model Class Initialized
INFO - 2024-12-29 04:40:28 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:28 --> Total execution time: 0.1707
INFO - 2024-12-29 04:40:29 --> Model Class Initialized
INFO - 2024-12-29 04:40:29 --> Model Class Initialized
INFO - 2024-12-29 04:40:29 --> Model Class Initialized
INFO - 2024-12-29 04:40:29 --> Controller Class Initialized
INFO - 2024-12-29 04:40:29 --> Model Class Initialized
INFO - 2024-12-29 04:40:29 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:29 --> Total execution time: 0.2571
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Controller Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/datos_paciente.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/exploracion_fisica.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/receta.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/placas.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/cursores.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma_nav.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/evolucion.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/cita.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/histratamiento.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/diagnostico.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/historia.php
INFO - 2024-12-29 04:40:47 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 04:40:47 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:47 --> Total execution time: 0.2476
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Controller Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Email Class Initialized
INFO - 2024-12-29 04:40:47 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:47 --> Total execution time: 0.1750
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Controller Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
ERROR - 2024-12-29 04:40:47 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 04:40:47 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Controller Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:47 --> Total execution time: 0.3556
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Controller Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:47 --> Total execution time: 0.2775
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Controller Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:47 --> Total execution time: 0.2835
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Controller Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Model Class Initialized
INFO - 2024-12-29 04:40:47 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:47 --> Total execution time: 0.2838
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Controller Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:48 --> Total execution time: 0.2942
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Controller Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:48 --> Total execution time: 0.1723
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Controller Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:48 --> Total execution time: 0.2701
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Controller Class Initialized
INFO - 2024-12-29 04:40:48 --> Model Class Initialized
INFO - 2024-12-29 04:40:48 --> Final output sent to browser
DEBUG - 2024-12-29 04:40:48 --> Total execution time: 0.3490
INFO - 2024-12-29 04:52:22 --> Model Class Initialized
INFO - 2024-12-29 04:52:22 --> Model Class Initialized
INFO - 2024-12-29 04:52:22 --> Model Class Initialized
INFO - 2024-12-29 04:52:22 --> Controller Class Initialized
INFO - 2024-12-29 04:52:22 --> Model Class Initialized
INFO - 2024-12-29 04:52:22 --> Model Class Initialized
INFO - 2024-12-29 04:52:22 --> Model Class Initialized
INFO - 2024-12-29 04:52:22 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:52:22 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:52:23 --> Final output sent to browser
DEBUG - 2024-12-29 04:52:23 --> Total execution time: 0.4860
INFO - 2024-12-29 04:53:54 --> Model Class Initialized
INFO - 2024-12-29 04:53:54 --> Model Class Initialized
INFO - 2024-12-29 04:53:54 --> Model Class Initialized
INFO - 2024-12-29 04:53:54 --> Controller Class Initialized
INFO - 2024-12-29 04:53:54 --> Model Class Initialized
INFO - 2024-12-29 04:53:54 --> Model Class Initialized
INFO - 2024-12-29 04:53:54 --> Model Class Initialized
INFO - 2024-12-29 04:53:54 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:53:54 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:53:55 --> Final output sent to browser
DEBUG - 2024-12-29 04:53:55 --> Total execution time: 0.4855
INFO - 2024-12-29 04:54:03 --> Model Class Initialized
INFO - 2024-12-29 04:54:03 --> Model Class Initialized
INFO - 2024-12-29 04:54:03 --> Model Class Initialized
INFO - 2024-12-29 04:54:03 --> Controller Class Initialized
INFO - 2024-12-29 04:54:03 --> Model Class Initialized
INFO - 2024-12-29 04:54:03 --> Model Class Initialized
INFO - 2024-12-29 04:54:03 --> Model Class Initialized
INFO - 2024-12-29 04:54:03 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:54:03 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:54:03 --> Final output sent to browser
DEBUG - 2024-12-29 04:54:03 --> Total execution time: 0.4904
INFO - 2024-12-29 04:54:35 --> Model Class Initialized
INFO - 2024-12-29 04:54:36 --> Model Class Initialized
INFO - 2024-12-29 04:54:36 --> Model Class Initialized
INFO - 2024-12-29 04:54:36 --> Controller Class Initialized
INFO - 2024-12-29 04:54:36 --> Model Class Initialized
INFO - 2024-12-29 04:54:36 --> Model Class Initialized
INFO - 2024-12-29 04:54:36 --> Model Class Initialized
INFO - 2024-12-29 04:54:36 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:54:36 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:54:36 --> Final output sent to browser
DEBUG - 2024-12-29 04:54:36 --> Total execution time: 0.5237
INFO - 2024-12-29 04:55:04 --> Model Class Initialized
INFO - 2024-12-29 04:55:04 --> Model Class Initialized
INFO - 2024-12-29 04:55:04 --> Model Class Initialized
INFO - 2024-12-29 04:55:04 --> Controller Class Initialized
INFO - 2024-12-29 04:55:04 --> Model Class Initialized
INFO - 2024-12-29 04:55:04 --> Model Class Initialized
INFO - 2024-12-29 04:55:04 --> Model Class Initialized
INFO - 2024-12-29 04:55:04 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:55:04 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:55:04 --> Final output sent to browser
DEBUG - 2024-12-29 04:55:04 --> Total execution time: 0.4863
INFO - 2024-12-29 04:55:25 --> Model Class Initialized
INFO - 2024-12-29 04:55:25 --> Model Class Initialized
INFO - 2024-12-29 04:55:25 --> Model Class Initialized
INFO - 2024-12-29 04:55:25 --> Controller Class Initialized
INFO - 2024-12-29 04:55:25 --> Model Class Initialized
INFO - 2024-12-29 04:55:25 --> Model Class Initialized
INFO - 2024-12-29 04:55:25 --> Model Class Initialized
INFO - 2024-12-29 04:55:25 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:55:25 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:55:25 --> Final output sent to browser
DEBUG - 2024-12-29 04:55:25 --> Total execution time: 0.4703
INFO - 2024-12-29 04:57:32 --> Model Class Initialized
INFO - 2024-12-29 04:57:32 --> Model Class Initialized
INFO - 2024-12-29 04:57:32 --> Model Class Initialized
INFO - 2024-12-29 04:57:32 --> Controller Class Initialized
INFO - 2024-12-29 04:57:32 --> Model Class Initialized
INFO - 2024-12-29 04:57:32 --> Model Class Initialized
INFO - 2024-12-29 04:57:32 --> Model Class Initialized
INFO - 2024-12-29 04:57:32 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 04:57:32 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 04:57:32 --> Final output sent to browser
DEBUG - 2024-12-29 04:57:32 --> Total execution time: 0.4752
INFO - 2024-12-29 00:13:59 --> Config Class Initialized
INFO - 2024-12-29 00:13:59 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:13:59 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:13:59 --> Utf8 Class Initialized
INFO - 2024-12-29 00:13:59 --> URI Class Initialized
INFO - 2024-12-29 00:13:59 --> Router Class Initialized
INFO - 2024-12-29 00:13:59 --> Output Class Initialized
INFO - 2024-12-29 00:13:59 --> Security Class Initialized
DEBUG - 2024-12-29 00:13:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:13:59 --> Input Class Initialized
INFO - 2024-12-29 00:13:59 --> Language Class Initialized
INFO - 2024-12-29 00:13:59 --> Loader Class Initialized
INFO - 2024-12-29 00:13:59 --> Helper loaded: form_helper
INFO - 2024-12-29 00:13:59 --> Helper loaded: url_helper
INFO - 2024-12-29 00:13:59 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:13:59 --> Helper loaded: download_helper
INFO - 2024-12-29 00:13:59 --> Helper loaded: string_helper
INFO - 2024-12-29 00:13:59 --> Helper loaded: general_helper
INFO - 2024-12-29 00:13:59 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:13:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:13:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:13:59 --> Form Validation Class Initialized
INFO - 2024-12-29 00:13:59 --> Upload Class Initialized
INFO - 2024-12-29 05:13:59 --> Model Class Initialized
INFO - 2024-12-29 05:13:59 --> Model Class Initialized
INFO - 2024-12-29 05:13:59 --> Model Class Initialized
INFO - 2024-12-29 05:13:59 --> Controller Class Initialized
INFO - 2024-12-29 05:13:59 --> Model Class Initialized
INFO - 2024-12-29 05:13:59 --> Model Class Initialized
INFO - 2024-12-29 05:13:59 --> Model Class Initialized
INFO - 2024-12-29 05:13:59 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:13:59 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:13:59 --> Final output sent to browser
DEBUG - 2024-12-29 05:13:59 --> Total execution time: 0.6000
INFO - 2024-12-29 00:14:09 --> Config Class Initialized
INFO - 2024-12-29 00:14:09 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:14:09 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:14:09 --> Utf8 Class Initialized
INFO - 2024-12-29 00:14:09 --> URI Class Initialized
INFO - 2024-12-29 00:14:09 --> Router Class Initialized
INFO - 2024-12-29 00:14:09 --> Output Class Initialized
INFO - 2024-12-29 00:14:09 --> Security Class Initialized
DEBUG - 2024-12-29 00:14:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:14:09 --> Input Class Initialized
INFO - 2024-12-29 00:14:09 --> Language Class Initialized
INFO - 2024-12-29 00:14:09 --> Loader Class Initialized
INFO - 2024-12-29 00:14:09 --> Helper loaded: form_helper
INFO - 2024-12-29 00:14:09 --> Helper loaded: url_helper
INFO - 2024-12-29 00:14:09 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:14:09 --> Helper loaded: download_helper
INFO - 2024-12-29 00:14:09 --> Helper loaded: string_helper
INFO - 2024-12-29 00:14:09 --> Helper loaded: general_helper
INFO - 2024-12-29 00:14:09 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:14:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:14:09 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:14:09 --> Form Validation Class Initialized
INFO - 2024-12-29 00:14:09 --> Upload Class Initialized
INFO - 2024-12-29 05:14:09 --> Model Class Initialized
INFO - 2024-12-29 05:14:09 --> Model Class Initialized
INFO - 2024-12-29 05:14:09 --> Model Class Initialized
INFO - 2024-12-29 05:14:09 --> Controller Class Initialized
INFO - 2024-12-29 05:14:09 --> Model Class Initialized
INFO - 2024-12-29 05:14:09 --> Model Class Initialized
INFO - 2024-12-29 05:14:09 --> Model Class Initialized
INFO - 2024-12-29 05:14:09 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:14:09 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:14:09 --> Final output sent to browser
DEBUG - 2024-12-29 05:14:09 --> Total execution time: 0.5272
INFO - 2024-12-29 00:17:33 --> Config Class Initialized
INFO - 2024-12-29 00:17:33 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:17:33 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:17:33 --> Utf8 Class Initialized
INFO - 2024-12-29 00:17:33 --> URI Class Initialized
INFO - 2024-12-29 00:17:33 --> Router Class Initialized
INFO - 2024-12-29 00:17:33 --> Output Class Initialized
INFO - 2024-12-29 00:17:33 --> Security Class Initialized
DEBUG - 2024-12-29 00:17:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:17:33 --> Input Class Initialized
INFO - 2024-12-29 00:17:33 --> Language Class Initialized
INFO - 2024-12-29 00:17:33 --> Loader Class Initialized
INFO - 2024-12-29 00:17:33 --> Helper loaded: form_helper
INFO - 2024-12-29 00:17:33 --> Helper loaded: url_helper
INFO - 2024-12-29 00:17:33 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:17:33 --> Helper loaded: download_helper
INFO - 2024-12-29 00:17:33 --> Helper loaded: string_helper
INFO - 2024-12-29 00:17:33 --> Helper loaded: general_helper
INFO - 2024-12-29 00:17:33 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:17:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:17:33 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:17:33 --> Form Validation Class Initialized
INFO - 2024-12-29 00:17:33 --> Upload Class Initialized
INFO - 2024-12-29 05:17:33 --> Model Class Initialized
INFO - 2024-12-29 05:17:33 --> Model Class Initialized
INFO - 2024-12-29 05:17:33 --> Model Class Initialized
INFO - 2024-12-29 05:17:33 --> Controller Class Initialized
INFO - 2024-12-29 05:17:33 --> Model Class Initialized
INFO - 2024-12-29 05:17:33 --> Model Class Initialized
INFO - 2024-12-29 05:17:33 --> Model Class Initialized
INFO - 2024-12-29 05:17:33 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:17:33 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:17:33 --> Final output sent to browser
DEBUG - 2024-12-29 05:17:33 --> Total execution time: 0.5958
INFO - 2024-12-29 00:19:47 --> Config Class Initialized
INFO - 2024-12-29 00:19:47 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:19:47 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:19:47 --> Utf8 Class Initialized
INFO - 2024-12-29 00:19:47 --> URI Class Initialized
INFO - 2024-12-29 00:19:47 --> Router Class Initialized
INFO - 2024-12-29 00:19:47 --> Output Class Initialized
INFO - 2024-12-29 00:19:47 --> Security Class Initialized
DEBUG - 2024-12-29 00:19:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:19:47 --> Input Class Initialized
INFO - 2024-12-29 00:19:47 --> Language Class Initialized
INFO - 2024-12-29 00:19:47 --> Loader Class Initialized
INFO - 2024-12-29 00:19:47 --> Helper loaded: form_helper
INFO - 2024-12-29 00:19:47 --> Helper loaded: url_helper
INFO - 2024-12-29 00:19:47 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:19:47 --> Helper loaded: download_helper
INFO - 2024-12-29 00:19:47 --> Helper loaded: string_helper
INFO - 2024-12-29 00:19:47 --> Helper loaded: general_helper
INFO - 2024-12-29 00:19:47 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:19:47 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:19:47 --> Form Validation Class Initialized
INFO - 2024-12-29 00:19:47 --> Upload Class Initialized
INFO - 2024-12-29 05:19:47 --> Model Class Initialized
INFO - 2024-12-29 05:19:47 --> Model Class Initialized
INFO - 2024-12-29 05:19:47 --> Model Class Initialized
INFO - 2024-12-29 05:19:47 --> Controller Class Initialized
INFO - 2024-12-29 05:19:47 --> Model Class Initialized
INFO - 2024-12-29 05:19:47 --> Model Class Initialized
INFO - 2024-12-29 05:19:47 --> Model Class Initialized
INFO - 2024-12-29 05:19:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:19:47 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:19:47 --> Final output sent to browser
DEBUG - 2024-12-29 05:19:47 --> Total execution time: 0.5728
INFO - 2024-12-29 00:21:33 --> Config Class Initialized
INFO - 2024-12-29 00:21:33 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:21:33 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:21:33 --> Utf8 Class Initialized
INFO - 2024-12-29 00:21:33 --> URI Class Initialized
INFO - 2024-12-29 00:21:33 --> Router Class Initialized
INFO - 2024-12-29 00:21:33 --> Output Class Initialized
INFO - 2024-12-29 00:21:33 --> Security Class Initialized
DEBUG - 2024-12-29 00:21:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:21:33 --> Input Class Initialized
INFO - 2024-12-29 00:21:33 --> Language Class Initialized
INFO - 2024-12-29 00:21:33 --> Loader Class Initialized
INFO - 2024-12-29 00:21:33 --> Helper loaded: form_helper
INFO - 2024-12-29 00:21:33 --> Helper loaded: url_helper
INFO - 2024-12-29 00:21:33 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:21:33 --> Helper loaded: download_helper
INFO - 2024-12-29 00:21:33 --> Helper loaded: string_helper
INFO - 2024-12-29 00:21:33 --> Helper loaded: general_helper
INFO - 2024-12-29 00:21:33 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:21:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:21:33 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:21:33 --> Form Validation Class Initialized
INFO - 2024-12-29 00:21:33 --> Upload Class Initialized
INFO - 2024-12-29 05:21:33 --> Model Class Initialized
INFO - 2024-12-29 05:21:33 --> Model Class Initialized
INFO - 2024-12-29 05:21:33 --> Model Class Initialized
INFO - 2024-12-29 05:21:33 --> Controller Class Initialized
INFO - 2024-12-29 05:21:33 --> Model Class Initialized
INFO - 2024-12-29 05:21:33 --> Model Class Initialized
INFO - 2024-12-29 05:21:33 --> Model Class Initialized
INFO - 2024-12-29 05:21:33 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:21:33 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 05:21:33 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 00:27:00 --> Config Class Initialized
INFO - 2024-12-29 00:27:00 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:27:00 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:27:00 --> Utf8 Class Initialized
INFO - 2024-12-29 00:27:00 --> URI Class Initialized
INFO - 2024-12-29 00:27:00 --> Router Class Initialized
INFO - 2024-12-29 00:27:00 --> Output Class Initialized
INFO - 2024-12-29 00:27:00 --> Security Class Initialized
DEBUG - 2024-12-29 00:27:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:27:00 --> Input Class Initialized
INFO - 2024-12-29 00:27:00 --> Language Class Initialized
INFO - 2024-12-29 00:27:00 --> Loader Class Initialized
INFO - 2024-12-29 00:27:00 --> Helper loaded: form_helper
INFO - 2024-12-29 00:27:00 --> Helper loaded: url_helper
INFO - 2024-12-29 00:27:00 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:27:00 --> Helper loaded: download_helper
INFO - 2024-12-29 00:27:00 --> Helper loaded: string_helper
INFO - 2024-12-29 00:27:00 --> Helper loaded: general_helper
INFO - 2024-12-29 00:27:00 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:27:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:27:00 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:27:00 --> Form Validation Class Initialized
INFO - 2024-12-29 00:27:00 --> Upload Class Initialized
INFO - 2024-12-29 05:27:00 --> Model Class Initialized
INFO - 2024-12-29 05:27:00 --> Model Class Initialized
INFO - 2024-12-29 05:27:00 --> Model Class Initialized
INFO - 2024-12-29 05:27:00 --> Controller Class Initialized
INFO - 2024-12-29 05:27:00 --> Model Class Initialized
INFO - 2024-12-29 05:27:00 --> Model Class Initialized
INFO - 2024-12-29 05:27:00 --> Model Class Initialized
INFO - 2024-12-29 05:27:00 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:27:00 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 05:27:01 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 00:27:25 --> Config Class Initialized
INFO - 2024-12-29 00:27:25 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:27:25 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:27:25 --> Utf8 Class Initialized
INFO - 2024-12-29 00:27:25 --> URI Class Initialized
INFO - 2024-12-29 00:27:25 --> Router Class Initialized
INFO - 2024-12-29 00:27:25 --> Output Class Initialized
INFO - 2024-12-29 00:27:25 --> Security Class Initialized
DEBUG - 2024-12-29 00:27:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:27:25 --> Input Class Initialized
INFO - 2024-12-29 00:27:25 --> Language Class Initialized
INFO - 2024-12-29 00:27:25 --> Loader Class Initialized
INFO - 2024-12-29 00:27:25 --> Helper loaded: form_helper
INFO - 2024-12-29 00:27:25 --> Helper loaded: url_helper
INFO - 2024-12-29 00:27:25 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:27:25 --> Helper loaded: download_helper
INFO - 2024-12-29 00:27:25 --> Helper loaded: string_helper
INFO - 2024-12-29 00:27:25 --> Helper loaded: general_helper
INFO - 2024-12-29 00:27:25 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:27:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:27:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:27:25 --> Form Validation Class Initialized
INFO - 2024-12-29 00:27:25 --> Upload Class Initialized
INFO - 2024-12-29 05:27:25 --> Model Class Initialized
INFO - 2024-12-29 05:27:25 --> Model Class Initialized
INFO - 2024-12-29 05:27:25 --> Model Class Initialized
INFO - 2024-12-29 05:27:25 --> Controller Class Initialized
INFO - 2024-12-29 05:27:25 --> Model Class Initialized
INFO - 2024-12-29 05:27:25 --> Model Class Initialized
INFO - 2024-12-29 05:27:25 --> Model Class Initialized
INFO - 2024-12-29 05:27:25 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:27:25 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 05:27:25 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 00:28:00 --> Config Class Initialized
INFO - 2024-12-29 00:28:00 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:28:00 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:28:00 --> Utf8 Class Initialized
INFO - 2024-12-29 00:28:00 --> URI Class Initialized
INFO - 2024-12-29 00:28:00 --> Router Class Initialized
INFO - 2024-12-29 00:28:00 --> Output Class Initialized
INFO - 2024-12-29 00:28:00 --> Security Class Initialized
DEBUG - 2024-12-29 00:28:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:28:00 --> Input Class Initialized
INFO - 2024-12-29 00:28:00 --> Language Class Initialized
INFO - 2024-12-29 00:28:00 --> Loader Class Initialized
INFO - 2024-12-29 00:28:00 --> Helper loaded: form_helper
INFO - 2024-12-29 00:28:00 --> Helper loaded: url_helper
INFO - 2024-12-29 00:28:00 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:28:00 --> Helper loaded: download_helper
INFO - 2024-12-29 00:28:00 --> Helper loaded: string_helper
INFO - 2024-12-29 00:28:00 --> Helper loaded: general_helper
INFO - 2024-12-29 00:28:00 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:28:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:28:00 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:28:00 --> Form Validation Class Initialized
INFO - 2024-12-29 00:28:00 --> Upload Class Initialized
INFO - 2024-12-29 05:28:01 --> Model Class Initialized
INFO - 2024-12-29 05:28:01 --> Model Class Initialized
INFO - 2024-12-29 05:28:01 --> Model Class Initialized
INFO - 2024-12-29 05:28:01 --> Controller Class Initialized
INFO - 2024-12-29 05:28:01 --> Model Class Initialized
INFO - 2024-12-29 05:28:01 --> Model Class Initialized
INFO - 2024-12-29 05:28:01 --> Model Class Initialized
INFO - 2024-12-29 05:28:01 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:28:01 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:28:01 --> Final output sent to browser
DEBUG - 2024-12-29 05:28:01 --> Total execution time: 0.5453
INFO - 2024-12-29 00:29:13 --> Config Class Initialized
INFO - 2024-12-29 00:29:13 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:29:13 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:29:13 --> Utf8 Class Initialized
INFO - 2024-12-29 00:29:13 --> URI Class Initialized
INFO - 2024-12-29 00:29:13 --> Router Class Initialized
INFO - 2024-12-29 00:29:13 --> Output Class Initialized
INFO - 2024-12-29 00:29:13 --> Security Class Initialized
DEBUG - 2024-12-29 00:29:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:29:13 --> Input Class Initialized
INFO - 2024-12-29 00:29:13 --> Language Class Initialized
INFO - 2024-12-29 00:29:13 --> Loader Class Initialized
INFO - 2024-12-29 00:29:13 --> Helper loaded: form_helper
INFO - 2024-12-29 00:29:13 --> Helper loaded: url_helper
INFO - 2024-12-29 00:29:13 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:29:13 --> Helper loaded: download_helper
INFO - 2024-12-29 00:29:13 --> Helper loaded: string_helper
INFO - 2024-12-29 00:29:13 --> Helper loaded: general_helper
INFO - 2024-12-29 00:29:13 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:29:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:29:13 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:29:13 --> Form Validation Class Initialized
INFO - 2024-12-29 00:29:13 --> Upload Class Initialized
INFO - 2024-12-29 05:29:13 --> Model Class Initialized
INFO - 2024-12-29 05:29:13 --> Model Class Initialized
INFO - 2024-12-29 05:29:13 --> Model Class Initialized
INFO - 2024-12-29 05:29:13 --> Controller Class Initialized
INFO - 2024-12-29 05:29:13 --> Model Class Initialized
INFO - 2024-12-29 05:29:13 --> Model Class Initialized
INFO - 2024-12-29 05:29:13 --> Model Class Initialized
INFO - 2024-12-29 05:29:13 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:29:13 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:29:14 --> Final output sent to browser
DEBUG - 2024-12-29 05:29:14 --> Total execution time: 0.5483
INFO - 2024-12-29 00:32:16 --> Config Class Initialized
INFO - 2024-12-29 00:32:16 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:16 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:16 --> URI Class Initialized
INFO - 2024-12-29 00:32:16 --> Router Class Initialized
INFO - 2024-12-29 00:32:16 --> Output Class Initialized
INFO - 2024-12-29 00:32:16 --> Security Class Initialized
DEBUG - 2024-12-29 00:32:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:16 --> Input Class Initialized
INFO - 2024-12-29 00:32:16 --> Language Class Initialized
INFO - 2024-12-29 00:32:16 --> Loader Class Initialized
INFO - 2024-12-29 00:32:16 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: url_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:16 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:16 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:16 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:16 --> Upload Class Initialized
INFO - 2024-12-29 05:32:16 --> Model Class Initialized
INFO - 2024-12-29 05:32:16 --> Model Class Initialized
INFO - 2024-12-29 05:32:16 --> Model Class Initialized
INFO - 2024-12-29 05:32:16 --> Controller Class Initialized
INFO - 2024-12-29 05:32:16 --> Model Class Initialized
INFO - 2024-12-29 05:32:16 --> Model Class Initialized
INFO - 2024-12-29 05:32:16 --> Model Class Initialized
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/datos_paciente.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/exploracion_fisica.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/receta.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/placas.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/cursores.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma_nav.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/evolucion.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/cita.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/histratamiento.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/diagnostico.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/historia.php
INFO - 2024-12-29 05:32:16 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 05:32:16 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:16 --> Total execution time: 0.2448
INFO - 2024-12-29 00:32:16 --> Config Class Initialized
INFO - 2024-12-29 00:32:16 --> Hooks Class Initialized
INFO - 2024-12-29 00:32:16 --> Config Class Initialized
INFO - 2024-12-29 00:32:16 --> Config Class Initialized
INFO - 2024-12-29 00:32:16 --> Hooks Class Initialized
INFO - 2024-12-29 00:32:16 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:16 --> Utf8 Class Initialized
DEBUG - 2024-12-29 00:32:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:16 --> URI Class Initialized
DEBUG - 2024-12-29 00:32:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:16 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:16 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:16 --> Router Class Initialized
INFO - 2024-12-29 00:32:16 --> URI Class Initialized
INFO - 2024-12-29 00:32:16 --> URI Class Initialized
INFO - 2024-12-29 00:32:16 --> Output Class Initialized
INFO - 2024-12-29 00:32:16 --> Router Class Initialized
INFO - 2024-12-29 00:32:16 --> Router Class Initialized
INFO - 2024-12-29 00:32:16 --> Security Class Initialized
INFO - 2024-12-29 00:32:16 --> Output Class Initialized
INFO - 2024-12-29 00:32:16 --> Output Class Initialized
DEBUG - 2024-12-29 00:32:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:16 --> Security Class Initialized
INFO - 2024-12-29 00:32:16 --> Input Class Initialized
INFO - 2024-12-29 00:32:16 --> Security Class Initialized
DEBUG - 2024-12-29 00:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:32:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:16 --> Language Class Initialized
INFO - 2024-12-29 00:32:16 --> Input Class Initialized
INFO - 2024-12-29 00:32:16 --> Input Class Initialized
INFO - 2024-12-29 00:32:16 --> Language Class Initialized
INFO - 2024-12-29 00:32:16 --> Language Class Initialized
INFO - 2024-12-29 00:32:16 --> Loader Class Initialized
INFO - 2024-12-29 00:32:16 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:16 --> Loader Class Initialized
INFO - 2024-12-29 00:32:16 --> Loader Class Initialized
INFO - 2024-12-29 00:32:16 --> Helper loaded: url_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: url_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: url_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:16 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:16 --> Database Driver Class Initialized
INFO - 2024-12-29 00:32:16 --> Database Driver Class Initialized
INFO - 2024-12-29 00:32:16 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 00:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:16 --> Session: Class initialized using 'files' driver.
DEBUG - 2024-12-29 00:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:16 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:16 --> Upload Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Controller Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
ERROR - 2024-12-29 05:32:17 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 05:32:17 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 00:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:17 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:17 --> Upload Class Initialized
INFO - 2024-12-29 00:32:17 --> Config Class Initialized
INFO - 2024-12-29 00:32:17 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:17 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:17 --> URI Class Initialized
INFO - 2024-12-29 00:32:17 --> Router Class Initialized
INFO - 2024-12-29 00:32:17 --> Output Class Initialized
INFO - 2024-12-29 00:32:17 --> Security Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:17 --> Input Class Initialized
INFO - 2024-12-29 00:32:17 --> Language Class Initialized
INFO - 2024-12-29 00:32:17 --> Loader Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: form_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: url_helper
INFO - 2024-12-29 05:32:17 --> Controller Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: download_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: general_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Final output sent to browser
INFO - 2024-12-29 00:32:17 --> Database Driver Class Initialized
DEBUG - 2024-12-29 05:32:17 --> Total execution time: 0.3018
INFO - 2024-12-29 00:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:17 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:17 --> Upload Class Initialized
INFO - 2024-12-29 00:32:17 --> Config Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:17 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:17 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:17 --> URI Class Initialized
INFO - 2024-12-29 00:32:17 --> Router Class Initialized
INFO - 2024-12-29 00:32:17 --> Output Class Initialized
INFO - 2024-12-29 00:32:17 --> Security Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:17 --> Input Class Initialized
INFO - 2024-12-29 00:32:17 --> Language Class Initialized
INFO - 2024-12-29 00:32:17 --> Loader Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: url_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: directory_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: download_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: string_helper
INFO - 2024-12-29 05:32:17 --> Controller Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: general_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Database Driver Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Email Class Initialized
INFO - 2024-12-29 05:32:17 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:17 --> Total execution time: 0.4383
INFO - 2024-12-29 00:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:17 --> Form Validation Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:17 --> Upload Class Initialized
INFO - 2024-12-29 00:32:17 --> Config Class Initialized
INFO - 2024-12-29 00:32:17 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:17 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:17 --> URI Class Initialized
INFO - 2024-12-29 00:32:17 --> Router Class Initialized
INFO - 2024-12-29 00:32:17 --> Output Class Initialized
INFO - 2024-12-29 00:32:17 --> Security Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:17 --> Input Class Initialized
INFO - 2024-12-29 00:32:17 --> Language Class Initialized
INFO - 2024-12-29 00:32:17 --> Loader Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: url_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: directory_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Controller Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: string_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: general_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Database Driver Class Initialized
INFO - 2024-12-29 05:32:17 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:17 --> Total execution time: 0.3089
INFO - 2024-12-29 00:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:17 --> Form Validation Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:17 --> Upload Class Initialized
INFO - 2024-12-29 00:32:17 --> Config Class Initialized
INFO - 2024-12-29 00:32:17 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:17 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:17 --> URI Class Initialized
INFO - 2024-12-29 00:32:17 --> Router Class Initialized
INFO - 2024-12-29 00:32:17 --> Output Class Initialized
INFO - 2024-12-29 00:32:17 --> Security Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:17 --> Input Class Initialized
INFO - 2024-12-29 00:32:17 --> Language Class Initialized
INFO - 2024-12-29 00:32:17 --> Loader Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: url_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: directory_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: download_helper
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: general_helper
INFO - 2024-12-29 05:32:17 --> Controller Class Initialized
INFO - 2024-12-29 00:32:17 --> Database Driver Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:17 --> Total execution time: 0.3215
INFO - 2024-12-29 00:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:17 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:17 --> Upload Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Controller Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:17 --> Total execution time: 0.2956
INFO - 2024-12-29 00:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:17 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:17 --> Upload Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Controller Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Model Class Initialized
INFO - 2024-12-29 05:32:17 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:17 --> Total execution time: 0.2872
INFO - 2024-12-29 00:32:17 --> Config Class Initialized
INFO - 2024-12-29 00:32:17 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:17 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:17 --> Config Class Initialized
INFO - 2024-12-29 00:32:17 --> URI Class Initialized
INFO - 2024-12-29 00:32:17 --> Hooks Class Initialized
INFO - 2024-12-29 00:32:17 --> Router Class Initialized
DEBUG - 2024-12-29 00:32:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:17 --> Output Class Initialized
INFO - 2024-12-29 00:32:17 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:17 --> Security Class Initialized
INFO - 2024-12-29 00:32:17 --> URI Class Initialized
INFO - 2024-12-29 00:32:17 --> Config Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:17 --> Router Class Initialized
INFO - 2024-12-29 00:32:17 --> Input Class Initialized
INFO - 2024-12-29 00:32:17 --> Hooks Class Initialized
INFO - 2024-12-29 00:32:17 --> Output Class Initialized
INFO - 2024-12-29 00:32:17 --> Language Class Initialized
DEBUG - 2024-12-29 00:32:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:17 --> Security Class Initialized
INFO - 2024-12-29 00:32:17 --> Utf8 Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:17 --> Loader Class Initialized
INFO - 2024-12-29 00:32:17 --> Input Class Initialized
INFO - 2024-12-29 00:32:17 --> URI Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:17 --> Language Class Initialized
INFO - 2024-12-29 00:32:17 --> Router Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: url_helper
INFO - 2024-12-29 00:32:17 --> Output Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:17 --> Loader Class Initialized
INFO - 2024-12-29 00:32:17 --> Security Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: form_helper
DEBUG - 2024-12-29 00:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:17 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: url_helper
INFO - 2024-12-29 00:32:17 --> Input Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:17 --> Language Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:17 --> Loader Class Initialized
INFO - 2024-12-29 00:32:17 --> Database Driver Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:17 --> Helper loaded: url_helper
DEBUG - 2024-12-29 00:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:17 --> Database Driver Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:17 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:17 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:17 --> Upload Class Initialized
INFO - 2024-12-29 00:32:17 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:17 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 00:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Controller Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:18 --> Total execution time: 0.1817
INFO - 2024-12-29 00:32:18 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:18 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:18 --> Upload Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Controller Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:18 --> Total execution time: 0.2830
INFO - 2024-12-29 00:32:18 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:18 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:18 --> Upload Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Controller Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Model Class Initialized
INFO - 2024-12-29 05:32:18 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:18 --> Total execution time: 0.4016
INFO - 2024-12-29 00:32:19 --> Config Class Initialized
INFO - 2024-12-29 00:32:19 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:19 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:19 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:19 --> URI Class Initialized
INFO - 2024-12-29 00:32:19 --> Router Class Initialized
INFO - 2024-12-29 00:32:19 --> Output Class Initialized
INFO - 2024-12-29 00:32:19 --> Security Class Initialized
DEBUG - 2024-12-29 00:32:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:19 --> Input Class Initialized
INFO - 2024-12-29 00:32:19 --> Language Class Initialized
INFO - 2024-12-29 00:32:19 --> Loader Class Initialized
INFO - 2024-12-29 00:32:19 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:19 --> Helper loaded: url_helper
INFO - 2024-12-29 00:32:19 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:19 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:19 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:19 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:19 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:32:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:19 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:19 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:19 --> Upload Class Initialized
INFO - 2024-12-29 05:32:19 --> Model Class Initialized
INFO - 2024-12-29 05:32:19 --> Model Class Initialized
INFO - 2024-12-29 05:32:19 --> Model Class Initialized
INFO - 2024-12-29 05:32:19 --> Controller Class Initialized
INFO - 2024-12-29 05:32:19 --> Model Class Initialized
INFO - 2024-12-29 05:32:19 --> Model Class Initialized
INFO - 2024-12-29 05:32:19 --> Model Class Initialized
INFO - 2024-12-29 05:32:19 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:32:19 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:32:20 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:20 --> Total execution time: 0.5698
INFO - 2024-12-29 00:32:34 --> Config Class Initialized
INFO - 2024-12-29 00:32:34 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:32:34 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:32:34 --> Utf8 Class Initialized
INFO - 2024-12-29 00:32:34 --> URI Class Initialized
INFO - 2024-12-29 00:32:34 --> Router Class Initialized
INFO - 2024-12-29 00:32:34 --> Output Class Initialized
INFO - 2024-12-29 00:32:34 --> Security Class Initialized
DEBUG - 2024-12-29 00:32:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:32:34 --> Input Class Initialized
INFO - 2024-12-29 00:32:34 --> Language Class Initialized
INFO - 2024-12-29 00:32:34 --> Loader Class Initialized
INFO - 2024-12-29 00:32:34 --> Helper loaded: form_helper
INFO - 2024-12-29 00:32:34 --> Helper loaded: url_helper
INFO - 2024-12-29 00:32:34 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:32:34 --> Helper loaded: download_helper
INFO - 2024-12-29 00:32:34 --> Helper loaded: string_helper
INFO - 2024-12-29 00:32:34 --> Helper loaded: general_helper
INFO - 2024-12-29 00:32:34 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:32:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:32:34 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:32:34 --> Form Validation Class Initialized
INFO - 2024-12-29 00:32:34 --> Upload Class Initialized
INFO - 2024-12-29 05:32:34 --> Model Class Initialized
INFO - 2024-12-29 05:32:34 --> Model Class Initialized
INFO - 2024-12-29 05:32:34 --> Model Class Initialized
INFO - 2024-12-29 05:32:34 --> Controller Class Initialized
INFO - 2024-12-29 05:32:34 --> Model Class Initialized
INFO - 2024-12-29 05:32:34 --> Model Class Initialized
INFO - 2024-12-29 05:32:34 --> Model Class Initialized
INFO - 2024-12-29 05:32:34 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:32:34 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:32:35 --> Final output sent to browser
DEBUG - 2024-12-29 05:32:35 --> Total execution time: 0.5791
INFO - 2024-12-29 00:35:31 --> Config Class Initialized
INFO - 2024-12-29 00:35:31 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:35:31 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:35:31 --> Utf8 Class Initialized
INFO - 2024-12-29 00:35:31 --> URI Class Initialized
INFO - 2024-12-29 00:35:31 --> Router Class Initialized
INFO - 2024-12-29 00:35:31 --> Output Class Initialized
INFO - 2024-12-29 00:35:31 --> Security Class Initialized
DEBUG - 2024-12-29 00:35:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:35:31 --> Input Class Initialized
INFO - 2024-12-29 00:35:31 --> Language Class Initialized
INFO - 2024-12-29 00:35:31 --> Loader Class Initialized
INFO - 2024-12-29 00:35:31 --> Helper loaded: form_helper
INFO - 2024-12-29 00:35:31 --> Helper loaded: url_helper
INFO - 2024-12-29 00:35:31 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:35:31 --> Helper loaded: download_helper
INFO - 2024-12-29 00:35:31 --> Helper loaded: string_helper
INFO - 2024-12-29 00:35:31 --> Helper loaded: general_helper
INFO - 2024-12-29 00:35:31 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:35:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:35:31 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:35:31 --> Form Validation Class Initialized
INFO - 2024-12-29 00:35:31 --> Upload Class Initialized
INFO - 2024-12-29 05:35:31 --> Model Class Initialized
INFO - 2024-12-29 05:35:31 --> Model Class Initialized
INFO - 2024-12-29 05:35:31 --> Model Class Initialized
INFO - 2024-12-29 05:35:31 --> Controller Class Initialized
INFO - 2024-12-29 05:35:31 --> Model Class Initialized
INFO - 2024-12-29 05:35:31 --> Model Class Initialized
INFO - 2024-12-29 05:35:31 --> Model Class Initialized
INFO - 2024-12-29 05:35:32 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:35:32 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:35:32 --> Final output sent to browser
DEBUG - 2024-12-29 05:35:32 --> Total execution time: 0.6211
INFO - 2024-12-29 00:36:12 --> Config Class Initialized
INFO - 2024-12-29 00:36:13 --> Hooks Class Initialized
DEBUG - 2024-12-29 00:36:13 --> UTF-8 Support Enabled
INFO - 2024-12-29 00:36:13 --> Utf8 Class Initialized
INFO - 2024-12-29 00:36:13 --> URI Class Initialized
INFO - 2024-12-29 00:36:13 --> Router Class Initialized
INFO - 2024-12-29 00:36:13 --> Output Class Initialized
INFO - 2024-12-29 00:36:13 --> Security Class Initialized
DEBUG - 2024-12-29 00:36:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 00:36:13 --> Input Class Initialized
INFO - 2024-12-29 00:36:13 --> Language Class Initialized
INFO - 2024-12-29 00:36:13 --> Loader Class Initialized
INFO - 2024-12-29 00:36:13 --> Helper loaded: form_helper
INFO - 2024-12-29 00:36:13 --> Helper loaded: url_helper
INFO - 2024-12-29 00:36:13 --> Helper loaded: directory_helper
INFO - 2024-12-29 00:36:13 --> Helper loaded: download_helper
INFO - 2024-12-29 00:36:13 --> Helper loaded: string_helper
INFO - 2024-12-29 00:36:13 --> Helper loaded: general_helper
INFO - 2024-12-29 00:36:13 --> Database Driver Class Initialized
DEBUG - 2024-12-29 00:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 00:36:13 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 00:36:13 --> Form Validation Class Initialized
INFO - 2024-12-29 00:36:13 --> Upload Class Initialized
INFO - 2024-12-29 05:36:13 --> Model Class Initialized
INFO - 2024-12-29 05:36:13 --> Model Class Initialized
INFO - 2024-12-29 05:36:13 --> Model Class Initialized
INFO - 2024-12-29 05:36:13 --> Controller Class Initialized
INFO - 2024-12-29 05:36:13 --> Model Class Initialized
INFO - 2024-12-29 05:36:13 --> Model Class Initialized
INFO - 2024-12-29 05:36:13 --> Model Class Initialized
INFO - 2024-12-29 05:36:13 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 05:36:13 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 05:36:13 --> Final output sent to browser
DEBUG - 2024-12-29 05:36:13 --> Total execution time: 0.6581
INFO - 2024-12-29 14:05:55 --> Config Class Initialized
INFO - 2024-12-29 14:05:55 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:05:55 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:05:55 --> Utf8 Class Initialized
INFO - 2024-12-29 14:05:55 --> URI Class Initialized
INFO - 2024-12-29 14:05:55 --> Router Class Initialized
INFO - 2024-12-29 14:05:55 --> Output Class Initialized
INFO - 2024-12-29 14:05:55 --> Security Class Initialized
DEBUG - 2024-12-29 14:05:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:05:55 --> Input Class Initialized
INFO - 2024-12-29 14:05:55 --> Language Class Initialized
INFO - 2024-12-29 14:05:55 --> Loader Class Initialized
INFO - 2024-12-29 14:05:55 --> Helper loaded: form_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: url_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: download_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: string_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: general_helper
INFO - 2024-12-29 14:05:55 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:05:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:05:55 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:05:55 --> Form Validation Class Initialized
INFO - 2024-12-29 14:05:55 --> Upload Class Initialized
INFO - 2024-12-29 19:05:55 --> Model Class Initialized
INFO - 2024-12-29 19:05:55 --> Model Class Initialized
INFO - 2024-12-29 19:05:55 --> Model Class Initialized
INFO - 2024-12-29 19:05:55 --> Controller Class Initialized
ERROR - 2024-12-29 19:05:55 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'zip' (tried: C:/laragon/bin/php/php-2.8/ext\zip (No se puede encontrar el m�dulo especificado.), C:/laragon/bin/php/php-2.8/ext\php_zip.dll (No se puede encontrar el m�dulo especificado.)) Unknown 0
INFO - 2024-12-29 14:05:55 --> Config Class Initialized
INFO - 2024-12-29 14:05:55 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:05:55 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:05:55 --> Utf8 Class Initialized
INFO - 2024-12-29 14:05:55 --> URI Class Initialized
DEBUG - 2024-12-29 14:05:55 --> No URI present. Default controller set.
INFO - 2024-12-29 14:05:55 --> Router Class Initialized
INFO - 2024-12-29 14:05:55 --> Output Class Initialized
INFO - 2024-12-29 14:05:55 --> Security Class Initialized
DEBUG - 2024-12-29 14:05:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:05:55 --> Input Class Initialized
INFO - 2024-12-29 14:05:55 --> Language Class Initialized
INFO - 2024-12-29 14:05:55 --> Loader Class Initialized
INFO - 2024-12-29 14:05:55 --> Helper loaded: form_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: url_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: download_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: string_helper
INFO - 2024-12-29 14:05:55 --> Helper loaded: general_helper
INFO - 2024-12-29 14:05:55 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:05:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:05:55 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:05:55 --> Form Validation Class Initialized
INFO - 2024-12-29 14:05:55 --> Upload Class Initialized
INFO - 2024-12-29 19:05:55 --> Model Class Initialized
INFO - 2024-12-29 19:05:55 --> Model Class Initialized
INFO - 2024-12-29 19:05:55 --> Model Class Initialized
INFO - 2024-12-29 19:05:55 --> Controller Class Initialized
INFO - 2024-12-29 19:05:55 --> Model Class Initialized
INFO - 2024-12-29 19:05:55 --> Model Class Initialized
INFO - 2024-12-29 19:05:55 --> File loaded: C:\laragon\www\demo\application\views\admin/login.php
INFO - 2024-12-29 19:05:55 --> Final output sent to browser
DEBUG - 2024-12-29 19:05:55 --> Total execution time: 0.1641
INFO - 2024-12-29 14:06:00 --> Config Class Initialized
INFO - 2024-12-29 14:06:00 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:00 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:00 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:00 --> URI Class Initialized
INFO - 2024-12-29 14:06:00 --> Router Class Initialized
INFO - 2024-12-29 14:06:00 --> Output Class Initialized
INFO - 2024-12-29 14:06:00 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:00 --> Input Class Initialized
INFO - 2024-12-29 14:06:00 --> Language Class Initialized
INFO - 2024-12-29 14:06:00 --> Loader Class Initialized
INFO - 2024-12-29 14:06:00 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:00 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:00 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:00 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:00 --> Upload Class Initialized
INFO - 2024-12-29 19:06:00 --> Model Class Initialized
INFO - 2024-12-29 19:06:00 --> Model Class Initialized
INFO - 2024-12-29 19:06:00 --> Model Class Initialized
INFO - 2024-12-29 19:06:00 --> Controller Class Initialized
INFO - 2024-12-29 19:06:00 --> Model Class Initialized
INFO - 2024-12-29 19:06:00 --> Model Class Initialized
INFO - 2024-12-29 14:06:00 --> Config Class Initialized
INFO - 2024-12-29 14:06:00 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:00 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:00 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:00 --> URI Class Initialized
INFO - 2024-12-29 14:06:00 --> Router Class Initialized
INFO - 2024-12-29 14:06:00 --> Output Class Initialized
INFO - 2024-12-29 14:06:00 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:00 --> Input Class Initialized
INFO - 2024-12-29 14:06:00 --> Language Class Initialized
INFO - 2024-12-29 14:06:00 --> Loader Class Initialized
INFO - 2024-12-29 14:06:00 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:00 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:00 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:00 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:00 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:00 --> Upload Class Initialized
INFO - 2024-12-29 19:06:00 --> Model Class Initialized
INFO - 2024-12-29 19:06:00 --> Model Class Initialized
INFO - 2024-12-29 19:06:00 --> Model Class Initialized
INFO - 2024-12-29 19:06:00 --> Controller Class Initialized
INFO - 2024-12-29 19:06:00 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 19:06:00 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 19:06:00 --> File loaded: C:\laragon\www\demo\application\views\home/inicio.php
INFO - 2024-12-29 19:06:00 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 19:06:00 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:00 --> Total execution time: 0.1592
INFO - 2024-12-29 14:06:01 --> Config Class Initialized
INFO - 2024-12-29 14:06:01 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:01 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:01 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:01 --> URI Class Initialized
INFO - 2024-12-29 14:06:01 --> Router Class Initialized
INFO - 2024-12-29 14:06:01 --> Output Class Initialized
INFO - 2024-12-29 14:06:01 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:01 --> Input Class Initialized
INFO - 2024-12-29 14:06:01 --> Language Class Initialized
INFO - 2024-12-29 14:06:01 --> Loader Class Initialized
INFO - 2024-12-29 14:06:01 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:01 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:01 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:01 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:01 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:01 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:01 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:01 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:01 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:01 --> Upload Class Initialized
INFO - 2024-12-29 19:06:01 --> Model Class Initialized
INFO - 2024-12-29 19:06:01 --> Model Class Initialized
INFO - 2024-12-29 19:06:01 --> Model Class Initialized
INFO - 2024-12-29 19:06:01 --> Controller Class Initialized
INFO - 2024-12-29 19:06:01 --> Model Class Initialized
INFO - 2024-12-29 19:06:01 --> Model Class Initialized
INFO - 2024-12-29 19:06:01 --> Email Class Initialized
INFO - 2024-12-29 19:06:01 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:01 --> Total execution time: 0.1614
INFO - 2024-12-29 14:06:02 --> Config Class Initialized
INFO - 2024-12-29 14:06:02 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:02 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:02 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:02 --> URI Class Initialized
INFO - 2024-12-29 14:06:02 --> Router Class Initialized
INFO - 2024-12-29 14:06:02 --> Output Class Initialized
INFO - 2024-12-29 14:06:02 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:02 --> Input Class Initialized
INFO - 2024-12-29 14:06:02 --> Config Class Initialized
INFO - 2024-12-29 14:06:02 --> Config Class Initialized
INFO - 2024-12-29 14:06:02 --> Language Class Initialized
INFO - 2024-12-29 14:06:02 --> Hooks Class Initialized
INFO - 2024-12-29 14:06:02 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:02 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:02 --> Loader Class Initialized
DEBUG - 2024-12-29 14:06:02 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:02 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:02 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:02 --> URI Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:02 --> URI Class Initialized
INFO - 2024-12-29 14:06:02 --> Router Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:02 --> Router Class Initialized
INFO - 2024-12-29 14:06:02 --> Output Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:02 --> Output Class Initialized
INFO - 2024-12-29 14:06:02 --> Security Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: string_helper
DEBUG - 2024-12-29 14:06:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:02 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:02 --> Security Class Initialized
INFO - 2024-12-29 14:06:02 --> Input Class Initialized
DEBUG - 2024-12-29 14:06:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:02 --> Language Class Initialized
INFO - 2024-12-29 14:06:02 --> Input Class Initialized
INFO - 2024-12-29 14:06:02 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:02 --> Language Class Initialized
INFO - 2024-12-29 14:06:02 --> Loader Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:02 --> Loader Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:02 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:02 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:02 --> Helper loaded: url_helper
DEBUG - 2024-12-29 14:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:02 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:02 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:02 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:02 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:02 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:02 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:02 --> Upload Class Initialized
INFO - 2024-12-29 14:06:02 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:02 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:02 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 14:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Controller Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:02 --> Total execution time: 0.1935
INFO - 2024-12-29 14:06:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:02 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:02 --> Upload Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Controller Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
ERROR - 2024-12-29 19:06:02 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 19:06:02 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-12-29 19:06:02 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'zip' (tried: C:/laragon/bin/php/php-2.8/ext\zip (No se puede encontrar el m�dulo especificado.), C:/laragon/bin/php/php-2.8/ext\php_zip.dll (No se puede encontrar el m�dulo especificado.)) Unknown 0
INFO - 2024-12-29 14:06:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:02 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:02 --> Upload Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Controller Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Model Class Initialized
INFO - 2024-12-29 19:06:02 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:02 --> Total execution time: 0.2978
ERROR - 2024-12-29 19:06:02 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'zip' (tried: C:/laragon/bin/php/php-2.8/ext\zip (No se puede encontrar el m�dulo especificado.), C:/laragon/bin/php/php-2.8/ext\php_zip.dll (No se puede encontrar el m�dulo especificado.)) Unknown 0
INFO - 2024-12-29 14:06:05 --> Config Class Initialized
INFO - 2024-12-29 14:06:05 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:05 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:05 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:05 --> URI Class Initialized
INFO - 2024-12-29 14:06:05 --> Router Class Initialized
INFO - 2024-12-29 14:06:05 --> Output Class Initialized
INFO - 2024-12-29 14:06:05 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:05 --> Input Class Initialized
INFO - 2024-12-29 14:06:05 --> Language Class Initialized
INFO - 2024-12-29 14:06:05 --> Loader Class Initialized
INFO - 2024-12-29 14:06:05 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:05 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:05 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:05 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:05 --> Upload Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Controller Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 19:06:05 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 19:06:05 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/panel.php
INFO - 2024-12-29 19:06:05 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 19:06:05 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:05 --> Total execution time: 0.1717
INFO - 2024-12-29 14:06:05 --> Config Class Initialized
INFO - 2024-12-29 14:06:05 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:05 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:05 --> Config Class Initialized
INFO - 2024-12-29 14:06:05 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:05 --> Hooks Class Initialized
INFO - 2024-12-29 14:06:05 --> Config Class Initialized
INFO - 2024-12-29 14:06:05 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:05 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:05 --> URI Class Initialized
INFO - 2024-12-29 14:06:05 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:05 --> Router Class Initialized
DEBUG - 2024-12-29 14:06:05 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:05 --> URI Class Initialized
INFO - 2024-12-29 14:06:05 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:05 --> Output Class Initialized
INFO - 2024-12-29 14:06:05 --> Router Class Initialized
INFO - 2024-12-29 14:06:05 --> URI Class Initialized
INFO - 2024-12-29 14:06:05 --> Security Class Initialized
INFO - 2024-12-29 14:06:05 --> Output Class Initialized
INFO - 2024-12-29 14:06:05 --> Router Class Initialized
DEBUG - 2024-12-29 14:06:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:05 --> Input Class Initialized
INFO - 2024-12-29 14:06:05 --> Security Class Initialized
INFO - 2024-12-29 14:06:05 --> Output Class Initialized
INFO - 2024-12-29 14:06:05 --> Language Class Initialized
DEBUG - 2024-12-29 14:06:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:05 --> Security Class Initialized
INFO - 2024-12-29 14:06:05 --> Input Class Initialized
INFO - 2024-12-29 14:06:05 --> Language Class Initialized
DEBUG - 2024-12-29 14:06:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:05 --> Loader Class Initialized
INFO - 2024-12-29 14:06:05 --> Input Class Initialized
INFO - 2024-12-29 14:06:05 --> Loader Class Initialized
INFO - 2024-12-29 14:06:05 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:05 --> Language Class Initialized
INFO - 2024-12-29 14:06:05 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:05 --> Loader Class Initialized
INFO - 2024-12-29 14:06:05 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:05 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:05 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:05 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:05 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:05 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:05 --> Session: Class initialized using 'files' driver.
DEBUG - 2024-12-29 14:06:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:05 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:05 --> Upload Class Initialized
DEBUG - 2024-12-29 14:06:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Controller Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
ERROR - 2024-12-29 19:06:05 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 19:06:05 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 14:06:05 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:05 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:05 --> Upload Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Controller Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Email Class Initialized
INFO - 2024-12-29 19:06:05 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:05 --> Total execution time: 0.2353
INFO - 2024-12-29 14:06:05 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:05 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:05 --> Upload Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Controller Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Model Class Initialized
INFO - 2024-12-29 19:06:05 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:05 --> Total execution time: 0.3136
INFO - 2024-12-29 14:06:06 --> Config Class Initialized
INFO - 2024-12-29 14:06:06 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:06 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:06 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:06 --> Config Class Initialized
INFO - 2024-12-29 14:06:06 --> URI Class Initialized
INFO - 2024-12-29 14:06:06 --> Hooks Class Initialized
INFO - 2024-12-29 14:06:06 --> Router Class Initialized
DEBUG - 2024-12-29 14:06:06 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:06 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:06 --> Output Class Initialized
INFO - 2024-12-29 14:06:06 --> URI Class Initialized
INFO - 2024-12-29 14:06:06 --> Security Class Initialized
INFO - 2024-12-29 14:06:06 --> Router Class Initialized
DEBUG - 2024-12-29 14:06:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:06 --> Input Class Initialized
INFO - 2024-12-29 14:06:06 --> Output Class Initialized
INFO - 2024-12-29 14:06:06 --> Language Class Initialized
INFO - 2024-12-29 14:06:06 --> Security Class Initialized
INFO - 2024-12-29 14:06:06 --> Loader Class Initialized
DEBUG - 2024-12-29 14:06:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:06 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:06 --> Input Class Initialized
INFO - 2024-12-29 14:06:06 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:06 --> Language Class Initialized
INFO - 2024-12-29 14:06:06 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:06 --> Loader Class Initialized
INFO - 2024-12-29 14:06:06 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:06 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:06 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:06 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:06 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:06 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:06 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:06 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:06 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:06 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:06 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:06 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:06 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:06 --> Upload Class Initialized
DEBUG - 2024-12-29 14:06:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Controller Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:06 --> Total execution time: 0.1594
INFO - 2024-12-29 14:06:06 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:06 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:06 --> Upload Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Controller Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Model Class Initialized
INFO - 2024-12-29 19:06:06 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:06 --> Total execution time: 0.2336
INFO - 2024-12-29 14:06:08 --> Config Class Initialized
INFO - 2024-12-29 14:06:08 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:08 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:08 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:08 --> URI Class Initialized
INFO - 2024-12-29 14:06:08 --> Router Class Initialized
INFO - 2024-12-29 14:06:08 --> Output Class Initialized
INFO - 2024-12-29 14:06:08 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:08 --> Input Class Initialized
INFO - 2024-12-29 14:06:08 --> Language Class Initialized
INFO - 2024-12-29 14:06:08 --> Loader Class Initialized
INFO - 2024-12-29 14:06:08 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:08 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:08 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:08 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:08 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:08 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:08 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:08 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:08 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:08 --> Upload Class Initialized
INFO - 2024-12-29 19:06:08 --> Model Class Initialized
INFO - 2024-12-29 19:06:08 --> Model Class Initialized
INFO - 2024-12-29 19:06:08 --> Model Class Initialized
INFO - 2024-12-29 19:06:08 --> Controller Class Initialized
INFO - 2024-12-29 19:06:08 --> Model Class Initialized
INFO - 2024-12-29 19:06:08 --> Model Class Initialized
INFO - 2024-12-29 19:06:08 --> Model Class Initialized
INFO - 2024-12-29 19:06:08 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:08 --> Total execution time: 0.1424
INFO - 2024-12-29 14:06:10 --> Config Class Initialized
INFO - 2024-12-29 14:06:10 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:10 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:10 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:10 --> URI Class Initialized
INFO - 2024-12-29 14:06:10 --> Router Class Initialized
INFO - 2024-12-29 14:06:10 --> Output Class Initialized
INFO - 2024-12-29 14:06:10 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:10 --> Input Class Initialized
INFO - 2024-12-29 14:06:10 --> Language Class Initialized
INFO - 2024-12-29 14:06:10 --> Loader Class Initialized
INFO - 2024-12-29 14:06:10 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:10 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:10 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:10 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:10 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:10 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:10 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:10 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:10 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:10 --> Upload Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Controller Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/datos_paciente.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/exploracion_fisica.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/receta.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/placas.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/cursores.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma_nav.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/evolucion.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/cita.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/histratamiento.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/diagnostico.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/historia.php
INFO - 2024-12-29 19:06:11 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 19:06:11 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:11 --> Total execution time: 0.2568
INFO - 2024-12-29 14:06:11 --> Config Class Initialized
INFO - 2024-12-29 14:06:11 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:11 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:11 --> Config Class Initialized
INFO - 2024-12-29 14:06:11 --> Config Class Initialized
INFO - 2024-12-29 14:06:11 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:11 --> Hooks Class Initialized
INFO - 2024-12-29 14:06:11 --> Hooks Class Initialized
INFO - 2024-12-29 14:06:11 --> URI Class Initialized
DEBUG - 2024-12-29 14:06:11 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:11 --> Router Class Initialized
DEBUG - 2024-12-29 14:06:11 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:11 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:11 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:11 --> Output Class Initialized
INFO - 2024-12-29 14:06:11 --> URI Class Initialized
INFO - 2024-12-29 14:06:11 --> URI Class Initialized
INFO - 2024-12-29 14:06:11 --> Router Class Initialized
INFO - 2024-12-29 14:06:11 --> Security Class Initialized
INFO - 2024-12-29 14:06:11 --> Router Class Initialized
INFO - 2024-12-29 14:06:11 --> Output Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:11 --> Input Class Initialized
INFO - 2024-12-29 14:06:11 --> Output Class Initialized
INFO - 2024-12-29 14:06:11 --> Security Class Initialized
INFO - 2024-12-29 14:06:11 --> Language Class Initialized
INFO - 2024-12-29 14:06:11 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:11 --> Input Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:11 --> Loader Class Initialized
INFO - 2024-12-29 14:06:11 --> Language Class Initialized
INFO - 2024-12-29 14:06:11 --> Input Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:11 --> Language Class Initialized
INFO - 2024-12-29 14:06:11 --> Loader Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:11 --> Loader Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:11 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:11 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:11 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:11 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:11 --> Form Validation Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 14:06:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:11 --> Upload Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Controller Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Email Class Initialized
INFO - 2024-12-29 19:06:11 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:11 --> Total execution time: 0.1887
INFO - 2024-12-29 14:06:11 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:11 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:11 --> Upload Class Initialized
INFO - 2024-12-29 14:06:11 --> Config Class Initialized
INFO - 2024-12-29 14:06:11 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:11 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:11 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:11 --> URI Class Initialized
INFO - 2024-12-29 14:06:11 --> Router Class Initialized
INFO - 2024-12-29 14:06:11 --> Output Class Initialized
INFO - 2024-12-29 14:06:11 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:11 --> Input Class Initialized
INFO - 2024-12-29 14:06:11 --> Language Class Initialized
INFO - 2024-12-29 14:06:11 --> Loader Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: download_helper
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: string_helper
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: general_helper
INFO - 2024-12-29 19:06:11 --> Controller Class Initialized
INFO - 2024-12-29 14:06:11 --> Database Driver Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:06:11 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:11 --> Total execution time: 0.2658
INFO - 2024-12-29 14:06:11 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:11 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:11 --> Upload Class Initialized
INFO - 2024-12-29 14:06:11 --> Config Class Initialized
INFO - 2024-12-29 14:06:11 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:11 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:11 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:11 --> URI Class Initialized
INFO - 2024-12-29 14:06:11 --> Router Class Initialized
INFO - 2024-12-29 14:06:11 --> Output Class Initialized
INFO - 2024-12-29 14:06:11 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:11 --> Input Class Initialized
INFO - 2024-12-29 14:06:11 --> Language Class Initialized
INFO - 2024-12-29 14:06:11 --> Loader Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: string_helper
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: general_helper
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 14:06:11 --> Database Driver Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Controller Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
ERROR - 2024-12-29 19:06:11 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 19:06:11 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 14:06:11 --> Session: Class initialized using 'files' driver.
DEBUG - 2024-12-29 14:06:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:11 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:11 --> Upload Class Initialized
INFO - 2024-12-29 14:06:11 --> Config Class Initialized
INFO - 2024-12-29 14:06:11 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:11 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:11 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:11 --> URI Class Initialized
INFO - 2024-12-29 14:06:11 --> Router Class Initialized
INFO - 2024-12-29 14:06:11 --> Output Class Initialized
INFO - 2024-12-29 14:06:11 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:11 --> Input Class Initialized
INFO - 2024-12-29 14:06:11 --> Language Class Initialized
INFO - 2024-12-29 14:06:11 --> Loader Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: general_helper
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 14:06:11 --> Database Driver Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Controller Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Final output sent to browser
DEBUG - 2024-12-29 14:06:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 19:06:11 --> Total execution time: 0.2309
INFO - 2024-12-29 14:06:11 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:11 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:11 --> Upload Class Initialized
INFO - 2024-12-29 14:06:11 --> Config Class Initialized
INFO - 2024-12-29 14:06:11 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:11 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:11 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:11 --> URI Class Initialized
INFO - 2024-12-29 14:06:11 --> Router Class Initialized
INFO - 2024-12-29 14:06:11 --> Output Class Initialized
INFO - 2024-12-29 14:06:11 --> Security Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:11 --> Input Class Initialized
INFO - 2024-12-29 14:06:11 --> Language Class Initialized
INFO - 2024-12-29 14:06:11 --> Loader Class Initialized
INFO - 2024-12-29 14:06:11 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:11 --> Helper loaded: general_helper
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 14:06:11 --> Database Driver Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Controller Class Initialized
DEBUG - 2024-12-29 14:06:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:11 --> Total execution time: 0.2247
INFO - 2024-12-29 14:06:11 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:11 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:11 --> Upload Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Controller Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:11 --> Total execution time: 0.2385
INFO - 2024-12-29 14:06:11 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:11 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:11 --> Upload Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Controller Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Model Class Initialized
INFO - 2024-12-29 19:06:11 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:11 --> Total execution time: 0.2609
INFO - 2024-12-29 14:06:12 --> Config Class Initialized
INFO - 2024-12-29 14:06:12 --> Hooks Class Initialized
DEBUG - 2024-12-29 14:06:12 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:12 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:12 --> Config Class Initialized
INFO - 2024-12-29 14:06:12 --> Config Class Initialized
INFO - 2024-12-29 14:06:12 --> URI Class Initialized
INFO - 2024-12-29 14:06:12 --> Hooks Class Initialized
INFO - 2024-12-29 14:06:12 --> Hooks Class Initialized
INFO - 2024-12-29 14:06:12 --> Router Class Initialized
DEBUG - 2024-12-29 14:06:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 14:06:12 --> UTF-8 Support Enabled
INFO - 2024-12-29 14:06:12 --> Utf8 Class Initialized
INFO - 2024-12-29 14:06:12 --> Output Class Initialized
INFO - 2024-12-29 14:06:12 --> URI Class Initialized
INFO - 2024-12-29 14:06:12 --> Security Class Initialized
INFO - 2024-12-29 14:06:12 --> Router Class Initialized
INFO - 2024-12-29 14:06:12 --> Utf8 Class Initialized
DEBUG - 2024-12-29 14:06:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:12 --> Output Class Initialized
INFO - 2024-12-29 14:06:12 --> Input Class Initialized
INFO - 2024-12-29 14:06:12 --> URI Class Initialized
INFO - 2024-12-29 14:06:12 --> Security Class Initialized
INFO - 2024-12-29 14:06:12 --> Language Class Initialized
INFO - 2024-12-29 14:06:12 --> Router Class Initialized
DEBUG - 2024-12-29 14:06:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:12 --> Loader Class Initialized
INFO - 2024-12-29 14:06:12 --> Input Class Initialized
INFO - 2024-12-29 14:06:12 --> Output Class Initialized
INFO - 2024-12-29 14:06:12 --> Language Class Initialized
INFO - 2024-12-29 14:06:12 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:12 --> Security Class Initialized
INFO - 2024-12-29 14:06:12 --> Helper loaded: url_helper
DEBUG - 2024-12-29 14:06:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 14:06:12 --> Loader Class Initialized
INFO - 2024-12-29 14:06:12 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:12 --> Input Class Initialized
INFO - 2024-12-29 14:06:12 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:12 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:12 --> Language Class Initialized
INFO - 2024-12-29 14:06:12 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:12 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:12 --> Helper loaded: directory_helper
INFO - 2024-12-29 14:06:12 --> Loader Class Initialized
INFO - 2024-12-29 14:06:12 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:12 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:12 --> Helper loaded: form_helper
INFO - 2024-12-29 14:06:12 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:12 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:12 --> Helper loaded: url_helper
INFO - 2024-12-29 14:06:12 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:12 --> Helper loaded: directory_helper
DEBUG - 2024-12-29 14:06:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 14:06:12 --> Helper loaded: download_helper
INFO - 2024-12-29 14:06:12 --> Database Driver Class Initialized
INFO - 2024-12-29 14:06:12 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:12 --> Helper loaded: string_helper
INFO - 2024-12-29 14:06:12 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:12 --> Helper loaded: general_helper
INFO - 2024-12-29 14:06:12 --> Upload Class Initialized
INFO - 2024-12-29 14:06:12 --> Database Driver Class Initialized
DEBUG - 2024-12-29 14:06:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 14:06:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Controller Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:12 --> Total execution time: 0.1355
INFO - 2024-12-29 14:06:12 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:12 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:12 --> Upload Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Controller Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:12 --> Total execution time: 0.2161
INFO - 2024-12-29 14:06:12 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 14:06:12 --> Form Validation Class Initialized
INFO - 2024-12-29 14:06:12 --> Upload Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Controller Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Model Class Initialized
INFO - 2024-12-29 19:06:12 --> Final output sent to browser
DEBUG - 2024-12-29 19:06:12 --> Total execution time: 0.2950
INFO - 2024-12-29 17:54:17 --> Config Class Initialized
INFO - 2024-12-29 17:54:17 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:17 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:17 --> URI Class Initialized
INFO - 2024-12-29 17:54:17 --> Router Class Initialized
INFO - 2024-12-29 17:54:17 --> Output Class Initialized
INFO - 2024-12-29 17:54:17 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:17 --> Input Class Initialized
INFO - 2024-12-29 17:54:17 --> Language Class Initialized
INFO - 2024-12-29 17:54:18 --> Loader Class Initialized
INFO - 2024-12-29 17:54:18 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:18 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:18 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:18 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:18 --> Upload Class Initialized
INFO - 2024-12-29 22:54:18 --> Model Class Initialized
INFO - 2024-12-29 22:54:18 --> Model Class Initialized
INFO - 2024-12-29 22:54:18 --> Model Class Initialized
INFO - 2024-12-29 22:54:18 --> Controller Class Initialized
INFO - 2024-12-29 17:54:18 --> Config Class Initialized
INFO - 2024-12-29 17:54:18 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:18 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:18 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:18 --> URI Class Initialized
DEBUG - 2024-12-29 17:54:18 --> No URI present. Default controller set.
INFO - 2024-12-29 17:54:18 --> Router Class Initialized
INFO - 2024-12-29 17:54:18 --> Output Class Initialized
INFO - 2024-12-29 17:54:18 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:18 --> Input Class Initialized
INFO - 2024-12-29 17:54:18 --> Language Class Initialized
INFO - 2024-12-29 17:54:18 --> Loader Class Initialized
INFO - 2024-12-29 17:54:18 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:18 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:18 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:18 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:18 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:18 --> Upload Class Initialized
INFO - 2024-12-29 22:54:18 --> Model Class Initialized
INFO - 2024-12-29 22:54:18 --> Model Class Initialized
INFO - 2024-12-29 22:54:18 --> Model Class Initialized
INFO - 2024-12-29 22:54:18 --> Controller Class Initialized
INFO - 2024-12-29 22:54:18 --> Model Class Initialized
INFO - 2024-12-29 22:54:18 --> Model Class Initialized
INFO - 2024-12-29 22:54:18 --> File loaded: C:\laragon\www\demo\application\views\admin/login.php
INFO - 2024-12-29 22:54:18 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:18 --> Total execution time: 0.2080
INFO - 2024-12-29 17:54:18 --> Config Class Initialized
INFO - 2024-12-29 17:54:18 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:18 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:18 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:18 --> URI Class Initialized
INFO - 2024-12-29 17:54:18 --> Router Class Initialized
INFO - 2024-12-29 17:54:18 --> Output Class Initialized
INFO - 2024-12-29 17:54:18 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:18 --> Input Class Initialized
INFO - 2024-12-29 17:54:18 --> Language Class Initialized
ERROR - 2024-12-29 17:54:18 --> 404 Page Not Found: Img/log.svg
INFO - 2024-12-29 17:54:23 --> Config Class Initialized
INFO - 2024-12-29 17:54:23 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:23 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:23 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:23 --> URI Class Initialized
INFO - 2024-12-29 17:54:23 --> Router Class Initialized
INFO - 2024-12-29 17:54:23 --> Output Class Initialized
INFO - 2024-12-29 17:54:23 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:23 --> Input Class Initialized
INFO - 2024-12-29 17:54:23 --> Language Class Initialized
INFO - 2024-12-29 17:54:23 --> Loader Class Initialized
INFO - 2024-12-29 17:54:23 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:24 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:24 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:24 --> Upload Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Controller Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 17:54:24 --> Config Class Initialized
INFO - 2024-12-29 17:54:24 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:24 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:24 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:24 --> URI Class Initialized
INFO - 2024-12-29 17:54:24 --> Router Class Initialized
INFO - 2024-12-29 17:54:24 --> Output Class Initialized
INFO - 2024-12-29 17:54:24 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:24 --> Input Class Initialized
INFO - 2024-12-29 17:54:24 --> Language Class Initialized
INFO - 2024-12-29 17:54:24 --> Loader Class Initialized
INFO - 2024-12-29 17:54:24 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:24 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:24 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:24 --> Upload Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Controller Class Initialized
INFO - 2024-12-29 22:54:24 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 22:54:24 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 22:54:24 --> File loaded: C:\laragon\www\demo\application\views\home/inicio.php
INFO - 2024-12-29 22:54:24 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 22:54:24 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:24 --> Total execution time: 0.2308
INFO - 2024-12-29 17:54:24 --> Config Class Initialized
INFO - 2024-12-29 17:54:24 --> Config Class Initialized
INFO - 2024-12-29 17:54:24 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:24 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:24 --> Config Class Initialized
INFO - 2024-12-29 17:54:24 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 17:54:24 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:24 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:24 --> Utf8 Class Initialized
DEBUG - 2024-12-29 17:54:24 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:24 --> URI Class Initialized
INFO - 2024-12-29 17:54:24 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:24 --> URI Class Initialized
INFO - 2024-12-29 17:54:24 --> URI Class Initialized
INFO - 2024-12-29 17:54:24 --> Router Class Initialized
INFO - 2024-12-29 17:54:24 --> Router Class Initialized
INFO - 2024-12-29 17:54:24 --> Router Class Initialized
INFO - 2024-12-29 17:54:24 --> Output Class Initialized
INFO - 2024-12-29 17:54:24 --> Output Class Initialized
INFO - 2024-12-29 17:54:24 --> Security Class Initialized
INFO - 2024-12-29 17:54:24 --> Output Class Initialized
INFO - 2024-12-29 17:54:24 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:24 --> Security Class Initialized
INFO - 2024-12-29 17:54:24 --> Input Class Initialized
DEBUG - 2024-12-29 17:54:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 17:54:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:24 --> Input Class Initialized
INFO - 2024-12-29 17:54:24 --> Input Class Initialized
INFO - 2024-12-29 17:54:24 --> Language Class Initialized
INFO - 2024-12-29 17:54:24 --> Language Class Initialized
INFO - 2024-12-29 17:54:24 --> Language Class Initialized
INFO - 2024-12-29 17:54:24 --> Loader Class Initialized
INFO - 2024-12-29 17:54:24 --> Loader Class Initialized
INFO - 2024-12-29 17:54:24 --> Loader Class Initialized
INFO - 2024-12-29 17:54:24 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:24 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:24 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:24 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:24 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 17:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 17:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:24 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:24 --> Upload Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Controller Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:24 --> Total execution time: 0.2191
INFO - 2024-12-29 17:54:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:24 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:24 --> Upload Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
INFO - 2024-12-29 22:54:24 --> Controller Class Initialized
INFO - 2024-12-29 22:54:24 --> Model Class Initialized
ERROR - 2024-12-29 22:54:24 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 22:54:24 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 17:54:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:25 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:25 --> Upload Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Controller Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Email Class Initialized
INFO - 2024-12-29 22:54:25 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:25 --> Total execution time: 0.5055
INFO - 2024-12-29 17:54:25 --> Config Class Initialized
INFO - 2024-12-29 17:54:25 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:25 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:25 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:25 --> URI Class Initialized
INFO - 2024-12-29 17:54:25 --> Router Class Initialized
INFO - 2024-12-29 17:54:25 --> Output Class Initialized
INFO - 2024-12-29 17:54:25 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:25 --> Input Class Initialized
INFO - 2024-12-29 17:54:25 --> Language Class Initialized
INFO - 2024-12-29 17:54:25 --> Loader Class Initialized
INFO - 2024-12-29 17:54:25 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:25 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:25 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:25 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:25 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:25 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:25 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:25 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:25 --> Upload Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Controller Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Model Class Initialized
INFO - 2024-12-29 22:54:25 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:25 --> Total execution time: 0.2103
INFO - 2024-12-29 17:54:29 --> Config Class Initialized
INFO - 2024-12-29 17:54:29 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:29 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:29 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:29 --> URI Class Initialized
INFO - 2024-12-29 17:54:29 --> Router Class Initialized
INFO - 2024-12-29 17:54:29 --> Output Class Initialized
INFO - 2024-12-29 17:54:29 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:29 --> Input Class Initialized
INFO - 2024-12-29 17:54:29 --> Language Class Initialized
INFO - 2024-12-29 17:54:29 --> Loader Class Initialized
INFO - 2024-12-29 17:54:29 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:29 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:29 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:29 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:29 --> Upload Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Controller Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 22:54:29 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 22:54:29 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/panel.php
INFO - 2024-12-29 22:54:29 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 22:54:29 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:29 --> Total execution time: 0.2415
INFO - 2024-12-29 17:54:29 --> Config Class Initialized
INFO - 2024-12-29 17:54:29 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:29 --> Config Class Initialized
INFO - 2024-12-29 17:54:29 --> Config Class Initialized
INFO - 2024-12-29 17:54:29 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:29 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:29 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:29 --> Utf8 Class Initialized
DEBUG - 2024-12-29 17:54:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 17:54:29 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:29 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:29 --> URI Class Initialized
INFO - 2024-12-29 17:54:29 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:29 --> URI Class Initialized
INFO - 2024-12-29 17:54:29 --> Router Class Initialized
INFO - 2024-12-29 17:54:29 --> URI Class Initialized
INFO - 2024-12-29 17:54:29 --> Router Class Initialized
INFO - 2024-12-29 17:54:29 --> Output Class Initialized
INFO - 2024-12-29 17:54:29 --> Router Class Initialized
INFO - 2024-12-29 17:54:29 --> Security Class Initialized
INFO - 2024-12-29 17:54:29 --> Output Class Initialized
INFO - 2024-12-29 17:54:29 --> Output Class Initialized
DEBUG - 2024-12-29 17:54:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:29 --> Security Class Initialized
INFO - 2024-12-29 17:54:29 --> Security Class Initialized
INFO - 2024-12-29 17:54:29 --> Input Class Initialized
DEBUG - 2024-12-29 17:54:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 17:54:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:29 --> Language Class Initialized
INFO - 2024-12-29 17:54:29 --> Input Class Initialized
INFO - 2024-12-29 17:54:29 --> Input Class Initialized
INFO - 2024-12-29 17:54:29 --> Loader Class Initialized
INFO - 2024-12-29 17:54:29 --> Language Class Initialized
INFO - 2024-12-29 17:54:29 --> Language Class Initialized
INFO - 2024-12-29 17:54:29 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:29 --> Loader Class Initialized
INFO - 2024-12-29 17:54:29 --> Loader Class Initialized
INFO - 2024-12-29 17:54:29 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:29 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:29 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:29 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:29 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:29 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:29 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:29 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:29 --> Upload Class Initialized
DEBUG - 2024-12-29 17:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 17:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Controller Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Email Class Initialized
INFO - 2024-12-29 22:54:29 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:29 --> Total execution time: 0.2237
INFO - 2024-12-29 17:54:29 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:29 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:29 --> Upload Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Controller Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
ERROR - 2024-12-29 22:54:29 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 22:54:29 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 17:54:29 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:29 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:29 --> Upload Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Controller Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Model Class Initialized
INFO - 2024-12-29 22:54:29 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:29 --> Total execution time: 0.4495
INFO - 2024-12-29 17:54:30 --> Config Class Initialized
INFO - 2024-12-29 17:54:30 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:30 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:30 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:30 --> URI Class Initialized
INFO - 2024-12-29 17:54:30 --> Router Class Initialized
INFO - 2024-12-29 17:54:30 --> Config Class Initialized
INFO - 2024-12-29 17:54:30 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:30 --> Output Class Initialized
INFO - 2024-12-29 17:54:30 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:30 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:30 --> Utf8 Class Initialized
DEBUG - 2024-12-29 17:54:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:30 --> Input Class Initialized
INFO - 2024-12-29 17:54:30 --> URI Class Initialized
INFO - 2024-12-29 17:54:30 --> Language Class Initialized
INFO - 2024-12-29 17:54:30 --> Router Class Initialized
INFO - 2024-12-29 17:54:30 --> Loader Class Initialized
INFO - 2024-12-29 17:54:30 --> Output Class Initialized
INFO - 2024-12-29 17:54:30 --> Security Class Initialized
INFO - 2024-12-29 17:54:30 --> Helper loaded: form_helper
DEBUG - 2024-12-29 17:54:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:30 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:30 --> Input Class Initialized
INFO - 2024-12-29 17:54:30 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:30 --> Language Class Initialized
INFO - 2024-12-29 17:54:30 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:30 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:30 --> Loader Class Initialized
INFO - 2024-12-29 17:54:30 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:30 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:30 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:30 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:30 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:30 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:30 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:30 --> Helper loaded: general_helper
DEBUG - 2024-12-29 17:54:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:30 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:30 --> Session: Class initialized using 'files' driver.
DEBUG - 2024-12-29 17:54:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:30 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:30 --> Upload Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Controller Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:30 --> Total execution time: 0.2163
INFO - 2024-12-29 17:54:30 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:30 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:30 --> Upload Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Controller Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Model Class Initialized
INFO - 2024-12-29 22:54:30 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:30 --> Total execution time: 0.3088
INFO - 2024-12-29 17:54:32 --> Config Class Initialized
INFO - 2024-12-29 17:54:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:32 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:32 --> URI Class Initialized
INFO - 2024-12-29 17:54:32 --> Router Class Initialized
INFO - 2024-12-29 17:54:32 --> Output Class Initialized
INFO - 2024-12-29 17:54:32 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:32 --> Input Class Initialized
INFO - 2024-12-29 17:54:32 --> Language Class Initialized
INFO - 2024-12-29 17:54:32 --> Loader Class Initialized
INFO - 2024-12-29 17:54:32 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:32 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:32 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:32 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:32 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:32 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:32 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:32 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:32 --> Upload Class Initialized
INFO - 2024-12-29 22:54:32 --> Model Class Initialized
INFO - 2024-12-29 22:54:32 --> Model Class Initialized
INFO - 2024-12-29 22:54:32 --> Model Class Initialized
INFO - 2024-12-29 22:54:32 --> Controller Class Initialized
INFO - 2024-12-29 22:54:32 --> Model Class Initialized
INFO - 2024-12-29 22:54:32 --> Model Class Initialized
INFO - 2024-12-29 22:54:32 --> Model Class Initialized
INFO - 2024-12-29 22:54:32 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:32 --> Total execution time: 0.2320
INFO - 2024-12-29 17:54:37 --> Config Class Initialized
INFO - 2024-12-29 17:54:37 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:37 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:37 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:37 --> URI Class Initialized
INFO - 2024-12-29 17:54:37 --> Router Class Initialized
INFO - 2024-12-29 17:54:37 --> Output Class Initialized
INFO - 2024-12-29 17:54:37 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:37 --> Input Class Initialized
INFO - 2024-12-29 17:54:37 --> Language Class Initialized
INFO - 2024-12-29 17:54:37 --> Loader Class Initialized
INFO - 2024-12-29 17:54:37 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:37 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:37 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:37 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:37 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:37 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:37 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:37 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:37 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:37 --> Upload Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Controller Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\layouts/header.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\layouts/aside.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/datos_paciente.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/exploracion_fisica.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/receta.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/placas.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/cursores.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma_nav.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/odontograma/odontograma.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/evolucion.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/cita.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/histratamiento.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/diagnostico.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/movimiento/historia.php
INFO - 2024-12-29 22:54:38 --> File loaded: C:\laragon\www\demo\application\views\layouts/footer.php
INFO - 2024-12-29 22:54:38 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:38 --> Total execution time: 0.3205
INFO - 2024-12-29 17:54:38 --> Config Class Initialized
INFO - 2024-12-29 17:54:38 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:38 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:38 --> Config Class Initialized
INFO - 2024-12-29 17:54:38 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:38 --> URI Class Initialized
INFO - 2024-12-29 17:54:38 --> Config Class Initialized
INFO - 2024-12-29 17:54:38 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:38 --> Router Class Initialized
DEBUG - 2024-12-29 17:54:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:38 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:38 --> Output Class Initialized
DEBUG - 2024-12-29 17:54:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:38 --> URI Class Initialized
INFO - 2024-12-29 17:54:38 --> Security Class Initialized
INFO - 2024-12-29 17:54:38 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:38 --> Router Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:38 --> URI Class Initialized
INFO - 2024-12-29 17:54:38 --> Output Class Initialized
INFO - 2024-12-29 17:54:38 --> Input Class Initialized
INFO - 2024-12-29 17:54:38 --> Security Class Initialized
INFO - 2024-12-29 17:54:38 --> Language Class Initialized
INFO - 2024-12-29 17:54:38 --> Router Class Initialized
INFO - 2024-12-29 17:54:38 --> Loader Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:38 --> Output Class Initialized
INFO - 2024-12-29 17:54:38 --> Input Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:38 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:38 --> Language Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:38 --> Input Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:38 --> Loader Class Initialized
INFO - 2024-12-29 17:54:38 --> Language Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:38 --> Loader Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:38 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:38 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:38 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 17:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:38 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:38 --> Upload Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Controller Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Email Class Initialized
INFO - 2024-12-29 22:54:38 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:38 --> Total execution time: 0.2393
INFO - 2024-12-29 17:54:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:38 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:38 --> Upload Class Initialized
INFO - 2024-12-29 17:54:38 --> Config Class Initialized
INFO - 2024-12-29 17:54:38 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:38 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:38 --> URI Class Initialized
INFO - 2024-12-29 17:54:38 --> Router Class Initialized
INFO - 2024-12-29 17:54:38 --> Output Class Initialized
INFO - 2024-12-29 17:54:38 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:38 --> Input Class Initialized
INFO - 2024-12-29 17:54:38 --> Language Class Initialized
INFO - 2024-12-29 17:54:38 --> Loader Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: string_helper
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: general_helper
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 17:54:38 --> Database Driver Class Initialized
INFO - 2024-12-29 22:54:38 --> Controller Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 22:54:38 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:38 --> Total execution time: 0.3243
INFO - 2024-12-29 17:54:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:38 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:38 --> Upload Class Initialized
INFO - 2024-12-29 17:54:38 --> Config Class Initialized
INFO - 2024-12-29 17:54:38 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:38 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:38 --> URI Class Initialized
INFO - 2024-12-29 17:54:38 --> Router Class Initialized
INFO - 2024-12-29 17:54:38 --> Output Class Initialized
INFO - 2024-12-29 17:54:38 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:38 --> Input Class Initialized
INFO - 2024-12-29 17:54:38 --> Language Class Initialized
INFO - 2024-12-29 17:54:38 --> Loader Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: download_helper
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: string_helper
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: general_helper
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Controller Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 17:54:38 --> Database Driver Class Initialized
ERROR - 2024-12-29 22:54:38 --> Query error: Incorrect DATE value: '-01-01' - Invalid query: SELECT MONTH(fecha_tra) as mes, sum(total_tra) as montos
FROM `tratamiento`
WHERE `fecha_tra` >= '-01-01'
AND `fecha_tra` <= '-12-31'
AND `estadopago_tra` = '3'
AND `estado_tra` = '1'
GROUP BY `mes`
ORDER BY `mes`
INFO - 2024-12-29 22:54:38 --> Language file loaded: language/english/db_lang.php
INFO - 2024-12-29 17:54:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:38 --> Form Validation Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:38 --> Upload Class Initialized
INFO - 2024-12-29 17:54:38 --> Config Class Initialized
INFO - 2024-12-29 17:54:38 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:38 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:38 --> URI Class Initialized
INFO - 2024-12-29 17:54:38 --> Router Class Initialized
INFO - 2024-12-29 17:54:38 --> Output Class Initialized
INFO - 2024-12-29 17:54:38 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:38 --> Input Class Initialized
INFO - 2024-12-29 17:54:38 --> Language Class Initialized
INFO - 2024-12-29 17:54:38 --> Loader Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:38 --> Helper loaded: download_helper
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: string_helper
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 17:54:38 --> Helper loaded: general_helper
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Controller Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 17:54:38 --> Database Driver Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Model Class Initialized
INFO - 2024-12-29 22:54:38 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:38 --> Total execution time: 0.3392
INFO - 2024-12-29 17:54:38 --> Session: Class initialized using 'files' driver.
DEBUG - 2024-12-29 17:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:38 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:38 --> Upload Class Initialized
INFO - 2024-12-29 17:54:38 --> Config Class Initialized
INFO - 2024-12-29 17:54:38 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:38 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:38 --> URI Class Initialized
INFO - 2024-12-29 17:54:39 --> Router Class Initialized
INFO - 2024-12-29 17:54:39 --> Output Class Initialized
INFO - 2024-12-29 17:54:39 --> Security Class Initialized
DEBUG - 2024-12-29 17:54:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:39 --> Input Class Initialized
INFO - 2024-12-29 17:54:39 --> Language Class Initialized
INFO - 2024-12-29 17:54:39 --> Loader Class Initialized
INFO - 2024-12-29 17:54:39 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: string_helper
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 17:54:39 --> Helper loaded: general_helper
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 17:54:39 --> Database Driver Class Initialized
INFO - 2024-12-29 22:54:39 --> Controller Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Final output sent to browser
DEBUG - 2024-12-29 17:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 22:54:39 --> Total execution time: 0.3657
INFO - 2024-12-29 17:54:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:39 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:39 --> Upload Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Controller Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:39 --> Total execution time: 0.3760
INFO - 2024-12-29 17:54:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:39 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:39 --> Upload Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Controller Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:39 --> Total execution time: 0.3765
INFO - 2024-12-29 17:54:39 --> Config Class Initialized
INFO - 2024-12-29 17:54:39 --> Hooks Class Initialized
DEBUG - 2024-12-29 17:54:39 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:39 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:39 --> URI Class Initialized
INFO - 2024-12-29 17:54:39 --> Config Class Initialized
INFO - 2024-12-29 17:54:39 --> Router Class Initialized
INFO - 2024-12-29 17:54:39 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:39 --> Output Class Initialized
INFO - 2024-12-29 17:54:39 --> Config Class Initialized
DEBUG - 2024-12-29 17:54:39 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:39 --> Security Class Initialized
INFO - 2024-12-29 17:54:39 --> Hooks Class Initialized
INFO - 2024-12-29 17:54:39 --> Utf8 Class Initialized
DEBUG - 2024-12-29 17:54:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:39 --> URI Class Initialized
DEBUG - 2024-12-29 17:54:39 --> UTF-8 Support Enabled
INFO - 2024-12-29 17:54:39 --> Input Class Initialized
INFO - 2024-12-29 17:54:39 --> Utf8 Class Initialized
INFO - 2024-12-29 17:54:39 --> Router Class Initialized
INFO - 2024-12-29 17:54:39 --> Language Class Initialized
INFO - 2024-12-29 17:54:39 --> URI Class Initialized
INFO - 2024-12-29 17:54:39 --> Output Class Initialized
INFO - 2024-12-29 17:54:39 --> Router Class Initialized
INFO - 2024-12-29 17:54:39 --> Loader Class Initialized
INFO - 2024-12-29 17:54:39 --> Security Class Initialized
INFO - 2024-12-29 17:54:39 --> Output Class Initialized
DEBUG - 2024-12-29 17:54:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:39 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:39 --> Security Class Initialized
INFO - 2024-12-29 17:54:39 --> Input Class Initialized
INFO - 2024-12-29 17:54:39 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:39 --> Language Class Initialized
DEBUG - 2024-12-29 17:54:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 17:54:39 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:39 --> Input Class Initialized
INFO - 2024-12-29 17:54:39 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:39 --> Loader Class Initialized
INFO - 2024-12-29 17:54:39 --> Language Class Initialized
INFO - 2024-12-29 17:54:39 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:39 --> Loader Class Initialized
INFO - 2024-12-29 17:54:39 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: form_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: url_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:39 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:39 --> Helper loaded: directory_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: download_helper
INFO - 2024-12-29 17:54:39 --> Helper loaded: general_helper
DEBUG - 2024-12-29 17:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:39 --> Database Driver Class Initialized
INFO - 2024-12-29 17:54:39 --> Helper loaded: string_helper
INFO - 2024-12-29 17:54:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:39 --> Helper loaded: general_helper
INFO - 2024-12-29 17:54:39 --> Form Validation Class Initialized
DEBUG - 2024-12-29 17:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 17:54:39 --> Upload Class Initialized
INFO - 2024-12-29 17:54:39 --> Database Driver Class Initialized
DEBUG - 2024-12-29 17:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Controller Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:39 --> Total execution time: 0.2007
INFO - 2024-12-29 17:54:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:39 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:39 --> Upload Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Controller Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:39 --> Total execution time: 0.3057
INFO - 2024-12-29 17:54:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 17:54:39 --> Form Validation Class Initialized
INFO - 2024-12-29 17:54:39 --> Upload Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Controller Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Model Class Initialized
INFO - 2024-12-29 22:54:39 --> Final output sent to browser
DEBUG - 2024-12-29 22:54:39 --> Total execution time: 0.4365
INFO - 2024-12-29 18:00:05 --> Config Class Initialized
INFO - 2024-12-29 18:00:05 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:00:05 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:00:05 --> Utf8 Class Initialized
INFO - 2024-12-29 18:00:05 --> URI Class Initialized
INFO - 2024-12-29 18:00:05 --> Router Class Initialized
INFO - 2024-12-29 18:00:05 --> Output Class Initialized
INFO - 2024-12-29 18:00:05 --> Security Class Initialized
DEBUG - 2024-12-29 18:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:00:05 --> Input Class Initialized
INFO - 2024-12-29 18:00:05 --> Language Class Initialized
INFO - 2024-12-29 18:00:05 --> Loader Class Initialized
INFO - 2024-12-29 18:00:05 --> Helper loaded: form_helper
INFO - 2024-12-29 18:00:05 --> Helper loaded: url_helper
INFO - 2024-12-29 18:00:05 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:00:05 --> Helper loaded: download_helper
INFO - 2024-12-29 18:00:05 --> Helper loaded: string_helper
INFO - 2024-12-29 18:00:05 --> Helper loaded: general_helper
INFO - 2024-12-29 18:00:05 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:00:05 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:00:05 --> Form Validation Class Initialized
INFO - 2024-12-29 18:00:05 --> Upload Class Initialized
INFO - 2024-12-29 23:00:05 --> Model Class Initialized
INFO - 2024-12-29 23:00:05 --> Model Class Initialized
INFO - 2024-12-29 23:00:05 --> Model Class Initialized
INFO - 2024-12-29 23:00:05 --> Controller Class Initialized
INFO - 2024-12-29 23:00:05 --> Model Class Initialized
INFO - 2024-12-29 23:00:05 --> Model Class Initialized
INFO - 2024-12-29 23:00:05 --> Model Class Initialized
INFO - 2024-12-29 23:00:05 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:00:05 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:00:06 --> Final output sent to browser
DEBUG - 2024-12-29 23:00:06 --> Total execution time: 0.5593
INFO - 2024-12-29 18:00:40 --> Config Class Initialized
INFO - 2024-12-29 18:00:40 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:00:40 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:00:40 --> Utf8 Class Initialized
INFO - 2024-12-29 18:00:40 --> URI Class Initialized
INFO - 2024-12-29 18:00:40 --> Router Class Initialized
INFO - 2024-12-29 18:00:40 --> Output Class Initialized
INFO - 2024-12-29 18:00:40 --> Security Class Initialized
DEBUG - 2024-12-29 18:00:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:00:40 --> Input Class Initialized
INFO - 2024-12-29 18:00:40 --> Language Class Initialized
INFO - 2024-12-29 18:00:40 --> Loader Class Initialized
INFO - 2024-12-29 18:00:40 --> Helper loaded: form_helper
INFO - 2024-12-29 18:00:40 --> Helper loaded: url_helper
INFO - 2024-12-29 18:00:40 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:00:40 --> Helper loaded: download_helper
INFO - 2024-12-29 18:00:40 --> Helper loaded: string_helper
INFO - 2024-12-29 18:00:40 --> Helper loaded: general_helper
INFO - 2024-12-29 18:00:40 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:00:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:00:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:00:40 --> Form Validation Class Initialized
INFO - 2024-12-29 18:00:40 --> Upload Class Initialized
INFO - 2024-12-29 23:00:40 --> Model Class Initialized
INFO - 2024-12-29 23:00:40 --> Model Class Initialized
INFO - 2024-12-29 23:00:40 --> Model Class Initialized
INFO - 2024-12-29 23:00:40 --> Controller Class Initialized
INFO - 2024-12-29 23:00:40 --> Model Class Initialized
INFO - 2024-12-29 23:00:40 --> Model Class Initialized
INFO - 2024-12-29 23:00:40 --> Model Class Initialized
INFO - 2024-12-29 23:00:40 --> Final output sent to browser
DEBUG - 2024-12-29 23:00:40 --> Total execution time: 0.1370
INFO - 2024-12-29 18:00:41 --> Config Class Initialized
INFO - 2024-12-29 18:00:41 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:00:41 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:00:41 --> Utf8 Class Initialized
INFO - 2024-12-29 18:00:41 --> URI Class Initialized
INFO - 2024-12-29 18:00:41 --> Router Class Initialized
INFO - 2024-12-29 18:00:41 --> Output Class Initialized
INFO - 2024-12-29 18:00:41 --> Security Class Initialized
DEBUG - 2024-12-29 18:00:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:00:41 --> Input Class Initialized
INFO - 2024-12-29 18:00:41 --> Language Class Initialized
INFO - 2024-12-29 18:00:41 --> Loader Class Initialized
INFO - 2024-12-29 18:00:41 --> Helper loaded: form_helper
INFO - 2024-12-29 18:00:41 --> Helper loaded: url_helper
INFO - 2024-12-29 18:00:41 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:00:41 --> Helper loaded: download_helper
INFO - 2024-12-29 18:00:41 --> Helper loaded: string_helper
INFO - 2024-12-29 18:00:41 --> Helper loaded: general_helper
INFO - 2024-12-29 18:00:41 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:00:41 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:00:41 --> Form Validation Class Initialized
INFO - 2024-12-29 18:00:41 --> Upload Class Initialized
INFO - 2024-12-29 23:00:42 --> Model Class Initialized
INFO - 2024-12-29 23:00:42 --> Model Class Initialized
INFO - 2024-12-29 23:00:42 --> Model Class Initialized
INFO - 2024-12-29 23:00:42 --> Controller Class Initialized
INFO - 2024-12-29 23:00:42 --> Model Class Initialized
INFO - 2024-12-29 23:00:42 --> Model Class Initialized
INFO - 2024-12-29 23:00:42 --> Model Class Initialized
INFO - 2024-12-29 23:00:42 --> Final output sent to browser
DEBUG - 2024-12-29 23:00:42 --> Total execution time: 0.1682
INFO - 2024-12-29 18:32:02 --> Config Class Initialized
INFO - 2024-12-29 18:32:02 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:32:02 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:32:02 --> Utf8 Class Initialized
INFO - 2024-12-29 18:32:02 --> URI Class Initialized
INFO - 2024-12-29 18:32:02 --> Router Class Initialized
INFO - 2024-12-29 18:32:02 --> Output Class Initialized
INFO - 2024-12-29 18:32:02 --> Security Class Initialized
DEBUG - 2024-12-29 18:32:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:32:02 --> Input Class Initialized
INFO - 2024-12-29 18:32:02 --> Language Class Initialized
INFO - 2024-12-29 18:32:02 --> Loader Class Initialized
INFO - 2024-12-29 18:32:02 --> Helper loaded: form_helper
INFO - 2024-12-29 18:32:02 --> Helper loaded: url_helper
INFO - 2024-12-29 18:32:02 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:32:02 --> Helper loaded: download_helper
INFO - 2024-12-29 18:32:02 --> Helper loaded: string_helper
INFO - 2024-12-29 18:32:02 --> Helper loaded: general_helper
INFO - 2024-12-29 18:32:02 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:32:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:32:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:32:02 --> Form Validation Class Initialized
INFO - 2024-12-29 18:32:02 --> Upload Class Initialized
INFO - 2024-12-29 23:32:02 --> Model Class Initialized
INFO - 2024-12-29 23:32:02 --> Model Class Initialized
INFO - 2024-12-29 23:32:02 --> Model Class Initialized
INFO - 2024-12-29 23:32:02 --> Controller Class Initialized
INFO - 2024-12-29 23:32:02 --> Model Class Initialized
INFO - 2024-12-29 23:32:02 --> Model Class Initialized
INFO - 2024-12-29 23:32:02 --> Model Class Initialized
INFO - 2024-12-29 23:32:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:32:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:32:02 --> Final output sent to browser
DEBUG - 2024-12-29 23:32:02 --> Total execution time: 0.4356
INFO - 2024-12-29 18:34:53 --> Config Class Initialized
INFO - 2024-12-29 18:34:53 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:34:53 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:34:53 --> Utf8 Class Initialized
INFO - 2024-12-29 18:34:53 --> URI Class Initialized
INFO - 2024-12-29 18:34:53 --> Router Class Initialized
INFO - 2024-12-29 18:34:53 --> Output Class Initialized
INFO - 2024-12-29 18:34:53 --> Security Class Initialized
DEBUG - 2024-12-29 18:34:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:34:53 --> Input Class Initialized
INFO - 2024-12-29 18:34:53 --> Language Class Initialized
INFO - 2024-12-29 18:34:53 --> Loader Class Initialized
INFO - 2024-12-29 18:34:53 --> Helper loaded: form_helper
INFO - 2024-12-29 18:34:53 --> Helper loaded: url_helper
INFO - 2024-12-29 18:34:53 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:34:53 --> Helper loaded: download_helper
INFO - 2024-12-29 18:34:53 --> Helper loaded: string_helper
INFO - 2024-12-29 18:34:53 --> Helper loaded: general_helper
INFO - 2024-12-29 18:34:53 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:34:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:34:53 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:34:53 --> Form Validation Class Initialized
INFO - 2024-12-29 18:34:53 --> Upload Class Initialized
INFO - 2024-12-29 23:34:53 --> Model Class Initialized
INFO - 2024-12-29 23:34:53 --> Model Class Initialized
INFO - 2024-12-29 23:34:53 --> Model Class Initialized
INFO - 2024-12-29 23:34:53 --> Controller Class Initialized
INFO - 2024-12-29 23:34:53 --> Model Class Initialized
INFO - 2024-12-29 23:34:53 --> Model Class Initialized
INFO - 2024-12-29 23:34:53 --> Model Class Initialized
INFO - 2024-12-29 23:34:53 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:34:53 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:34:54 --> Final output sent to browser
DEBUG - 2024-12-29 23:34:54 --> Total execution time: 0.4720
INFO - 2024-12-29 18:38:38 --> Config Class Initialized
INFO - 2024-12-29 18:38:38 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:38:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:38:38 --> Utf8 Class Initialized
INFO - 2024-12-29 18:38:38 --> URI Class Initialized
INFO - 2024-12-29 18:38:38 --> Router Class Initialized
INFO - 2024-12-29 18:38:38 --> Output Class Initialized
INFO - 2024-12-29 18:38:38 --> Security Class Initialized
DEBUG - 2024-12-29 18:38:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:38:38 --> Input Class Initialized
INFO - 2024-12-29 18:38:38 --> Language Class Initialized
INFO - 2024-12-29 18:38:38 --> Loader Class Initialized
INFO - 2024-12-29 18:38:38 --> Helper loaded: form_helper
INFO - 2024-12-29 18:38:38 --> Helper loaded: url_helper
INFO - 2024-12-29 18:38:38 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:38:38 --> Helper loaded: download_helper
INFO - 2024-12-29 18:38:38 --> Helper loaded: string_helper
INFO - 2024-12-29 18:38:38 --> Helper loaded: general_helper
INFO - 2024-12-29 18:38:38 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:38:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:38:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:38:38 --> Form Validation Class Initialized
INFO - 2024-12-29 18:38:38 --> Upload Class Initialized
INFO - 2024-12-29 23:38:38 --> Model Class Initialized
INFO - 2024-12-29 23:38:38 --> Model Class Initialized
INFO - 2024-12-29 23:38:38 --> Model Class Initialized
INFO - 2024-12-29 23:38:38 --> Controller Class Initialized
INFO - 2024-12-29 23:38:38 --> Model Class Initialized
INFO - 2024-12-29 23:38:38 --> Model Class Initialized
INFO - 2024-12-29 23:38:38 --> Model Class Initialized
INFO - 2024-12-29 23:38:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:38:38 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:38:40 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 18:39:16 --> Config Class Initialized
INFO - 2024-12-29 18:39:16 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:39:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:39:16 --> Utf8 Class Initialized
INFO - 2024-12-29 18:39:16 --> URI Class Initialized
INFO - 2024-12-29 18:39:16 --> Router Class Initialized
INFO - 2024-12-29 18:39:16 --> Output Class Initialized
INFO - 2024-12-29 18:39:16 --> Security Class Initialized
DEBUG - 2024-12-29 18:39:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:39:16 --> Input Class Initialized
INFO - 2024-12-29 18:39:16 --> Language Class Initialized
INFO - 2024-12-29 18:39:16 --> Loader Class Initialized
INFO - 2024-12-29 18:39:16 --> Helper loaded: form_helper
INFO - 2024-12-29 18:39:16 --> Helper loaded: url_helper
INFO - 2024-12-29 18:39:16 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:39:16 --> Helper loaded: download_helper
INFO - 2024-12-29 18:39:16 --> Helper loaded: string_helper
INFO - 2024-12-29 18:39:16 --> Helper loaded: general_helper
INFO - 2024-12-29 18:39:16 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:39:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:39:16 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:39:16 --> Form Validation Class Initialized
INFO - 2024-12-29 18:39:16 --> Upload Class Initialized
INFO - 2024-12-29 23:39:16 --> Model Class Initialized
INFO - 2024-12-29 23:39:16 --> Model Class Initialized
INFO - 2024-12-29 23:39:16 --> Model Class Initialized
INFO - 2024-12-29 23:39:16 --> Controller Class Initialized
INFO - 2024-12-29 23:39:16 --> Model Class Initialized
INFO - 2024-12-29 23:39:16 --> Model Class Initialized
INFO - 2024-12-29 23:39:16 --> Model Class Initialized
INFO - 2024-12-29 23:39:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:39:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:39:16 --> Final output sent to browser
DEBUG - 2024-12-29 23:39:16 --> Total execution time: 0.4419
INFO - 2024-12-29 18:39:22 --> Config Class Initialized
INFO - 2024-12-29 18:39:22 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:39:22 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:39:22 --> Utf8 Class Initialized
INFO - 2024-12-29 18:39:22 --> URI Class Initialized
INFO - 2024-12-29 18:39:22 --> Router Class Initialized
INFO - 2024-12-29 18:39:22 --> Output Class Initialized
INFO - 2024-12-29 18:39:22 --> Security Class Initialized
DEBUG - 2024-12-29 18:39:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:39:22 --> Input Class Initialized
INFO - 2024-12-29 18:39:22 --> Language Class Initialized
INFO - 2024-12-29 18:39:22 --> Loader Class Initialized
INFO - 2024-12-29 18:39:22 --> Helper loaded: form_helper
INFO - 2024-12-29 18:39:22 --> Helper loaded: url_helper
INFO - 2024-12-29 18:39:22 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:39:22 --> Helper loaded: download_helper
INFO - 2024-12-29 18:39:22 --> Helper loaded: string_helper
INFO - 2024-12-29 18:39:22 --> Helper loaded: general_helper
INFO - 2024-12-29 18:39:22 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:39:22 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:39:22 --> Form Validation Class Initialized
INFO - 2024-12-29 18:39:22 --> Upload Class Initialized
INFO - 2024-12-29 23:39:22 --> Model Class Initialized
INFO - 2024-12-29 23:39:22 --> Model Class Initialized
INFO - 2024-12-29 23:39:22 --> Model Class Initialized
INFO - 2024-12-29 23:39:22 --> Controller Class Initialized
INFO - 2024-12-29 23:39:22 --> Model Class Initialized
INFO - 2024-12-29 23:39:22 --> Model Class Initialized
INFO - 2024-12-29 23:39:22 --> Model Class Initialized
INFO - 2024-12-29 23:39:22 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:39:22 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:39:23 --> Final output sent to browser
DEBUG - 2024-12-29 23:39:23 --> Total execution time: 0.4536
INFO - 2024-12-29 18:39:50 --> Config Class Initialized
INFO - 2024-12-29 18:39:50 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:39:50 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:39:50 --> Utf8 Class Initialized
INFO - 2024-12-29 18:39:50 --> URI Class Initialized
INFO - 2024-12-29 18:39:50 --> Router Class Initialized
INFO - 2024-12-29 18:39:50 --> Output Class Initialized
INFO - 2024-12-29 18:39:50 --> Security Class Initialized
DEBUG - 2024-12-29 18:39:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:39:50 --> Input Class Initialized
INFO - 2024-12-29 18:39:50 --> Language Class Initialized
INFO - 2024-12-29 18:39:50 --> Loader Class Initialized
INFO - 2024-12-29 18:39:50 --> Helper loaded: form_helper
INFO - 2024-12-29 18:39:50 --> Helper loaded: url_helper
INFO - 2024-12-29 18:39:50 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:39:50 --> Helper loaded: download_helper
INFO - 2024-12-29 18:39:50 --> Helper loaded: string_helper
INFO - 2024-12-29 18:39:50 --> Helper loaded: general_helper
INFO - 2024-12-29 18:39:50 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:39:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:39:50 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:39:50 --> Form Validation Class Initialized
INFO - 2024-12-29 18:39:50 --> Upload Class Initialized
INFO - 2024-12-29 23:39:50 --> Model Class Initialized
INFO - 2024-12-29 23:39:50 --> Model Class Initialized
INFO - 2024-12-29 23:39:50 --> Model Class Initialized
INFO - 2024-12-29 23:39:50 --> Controller Class Initialized
INFO - 2024-12-29 23:39:50 --> Model Class Initialized
INFO - 2024-12-29 23:39:50 --> Model Class Initialized
INFO - 2024-12-29 23:39:50 --> Model Class Initialized
INFO - 2024-12-29 23:39:50 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:39:50 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:39:50 --> Final output sent to browser
DEBUG - 2024-12-29 23:39:50 --> Total execution time: 0.4375
INFO - 2024-12-29 18:40:09 --> Config Class Initialized
INFO - 2024-12-29 18:40:09 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:40:09 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:40:09 --> Utf8 Class Initialized
INFO - 2024-12-29 18:40:09 --> URI Class Initialized
INFO - 2024-12-29 18:40:09 --> Router Class Initialized
INFO - 2024-12-29 18:40:09 --> Output Class Initialized
INFO - 2024-12-29 18:40:09 --> Security Class Initialized
DEBUG - 2024-12-29 18:40:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:40:09 --> Input Class Initialized
INFO - 2024-12-29 18:40:09 --> Language Class Initialized
INFO - 2024-12-29 18:40:09 --> Loader Class Initialized
INFO - 2024-12-29 18:40:09 --> Helper loaded: form_helper
INFO - 2024-12-29 18:40:09 --> Helper loaded: url_helper
INFO - 2024-12-29 18:40:09 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:40:09 --> Helper loaded: download_helper
INFO - 2024-12-29 18:40:09 --> Helper loaded: string_helper
INFO - 2024-12-29 18:40:09 --> Helper loaded: general_helper
INFO - 2024-12-29 18:40:09 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:40:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:40:09 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:40:09 --> Form Validation Class Initialized
INFO - 2024-12-29 18:40:09 --> Upload Class Initialized
INFO - 2024-12-29 23:40:09 --> Model Class Initialized
INFO - 2024-12-29 23:40:09 --> Model Class Initialized
INFO - 2024-12-29 23:40:09 --> Model Class Initialized
INFO - 2024-12-29 23:40:09 --> Controller Class Initialized
INFO - 2024-12-29 23:40:09 --> Model Class Initialized
INFO - 2024-12-29 23:40:09 --> Model Class Initialized
INFO - 2024-12-29 23:40:09 --> Model Class Initialized
INFO - 2024-12-29 23:40:09 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:40:09 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:40:09 --> Final output sent to browser
DEBUG - 2024-12-29 23:40:09 --> Total execution time: 0.4552
INFO - 2024-12-29 18:41:16 --> Config Class Initialized
INFO - 2024-12-29 18:41:16 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:41:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:41:16 --> Utf8 Class Initialized
INFO - 2024-12-29 18:41:16 --> URI Class Initialized
INFO - 2024-12-29 18:41:16 --> Router Class Initialized
INFO - 2024-12-29 18:41:16 --> Output Class Initialized
INFO - 2024-12-29 18:41:16 --> Security Class Initialized
DEBUG - 2024-12-29 18:41:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:41:16 --> Input Class Initialized
INFO - 2024-12-29 18:41:16 --> Language Class Initialized
INFO - 2024-12-29 18:41:16 --> Loader Class Initialized
INFO - 2024-12-29 18:41:16 --> Helper loaded: form_helper
INFO - 2024-12-29 18:41:16 --> Helper loaded: url_helper
INFO - 2024-12-29 18:41:16 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:41:16 --> Helper loaded: download_helper
INFO - 2024-12-29 18:41:16 --> Helper loaded: string_helper
INFO - 2024-12-29 18:41:16 --> Helper loaded: general_helper
INFO - 2024-12-29 18:41:16 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:41:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:41:16 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:41:16 --> Form Validation Class Initialized
INFO - 2024-12-29 18:41:16 --> Upload Class Initialized
INFO - 2024-12-29 23:41:16 --> Model Class Initialized
INFO - 2024-12-29 23:41:16 --> Model Class Initialized
INFO - 2024-12-29 23:41:16 --> Model Class Initialized
INFO - 2024-12-29 23:41:16 --> Controller Class Initialized
INFO - 2024-12-29 23:41:16 --> Model Class Initialized
INFO - 2024-12-29 23:41:16 --> Model Class Initialized
INFO - 2024-12-29 23:41:16 --> Model Class Initialized
INFO - 2024-12-29 23:41:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:41:16 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:41:16 --> Final output sent to browser
DEBUG - 2024-12-29 23:41:16 --> Total execution time: 0.4845
INFO - 2024-12-29 18:42:13 --> Config Class Initialized
INFO - 2024-12-29 18:42:13 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:42:13 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:42:13 --> Utf8 Class Initialized
INFO - 2024-12-29 18:42:13 --> URI Class Initialized
INFO - 2024-12-29 18:42:13 --> Router Class Initialized
INFO - 2024-12-29 18:42:13 --> Output Class Initialized
INFO - 2024-12-29 18:42:13 --> Security Class Initialized
DEBUG - 2024-12-29 18:42:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:42:13 --> Input Class Initialized
INFO - 2024-12-29 18:42:13 --> Language Class Initialized
INFO - 2024-12-29 18:42:13 --> Loader Class Initialized
INFO - 2024-12-29 18:42:13 --> Helper loaded: form_helper
INFO - 2024-12-29 18:42:13 --> Helper loaded: url_helper
INFO - 2024-12-29 18:42:13 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:42:13 --> Helper loaded: download_helper
INFO - 2024-12-29 18:42:13 --> Helper loaded: string_helper
INFO - 2024-12-29 18:42:13 --> Helper loaded: general_helper
INFO - 2024-12-29 18:42:13 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:42:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:42:13 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:42:13 --> Form Validation Class Initialized
INFO - 2024-12-29 18:42:13 --> Upload Class Initialized
INFO - 2024-12-29 23:42:13 --> Model Class Initialized
INFO - 2024-12-29 23:42:13 --> Model Class Initialized
INFO - 2024-12-29 23:42:13 --> Model Class Initialized
INFO - 2024-12-29 23:42:13 --> Controller Class Initialized
INFO - 2024-12-29 23:42:13 --> Model Class Initialized
INFO - 2024-12-29 23:42:13 --> Model Class Initialized
INFO - 2024-12-29 23:42:13 --> Model Class Initialized
INFO - 2024-12-29 23:42:13 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:42:13 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:42:13 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 18:42:22 --> Config Class Initialized
INFO - 2024-12-29 18:42:22 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:42:22 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:42:22 --> Utf8 Class Initialized
INFO - 2024-12-29 18:42:22 --> URI Class Initialized
INFO - 2024-12-29 18:42:22 --> Router Class Initialized
INFO - 2024-12-29 18:42:22 --> Output Class Initialized
INFO - 2024-12-29 18:42:22 --> Security Class Initialized
DEBUG - 2024-12-29 18:42:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:42:22 --> Input Class Initialized
INFO - 2024-12-29 18:42:22 --> Language Class Initialized
INFO - 2024-12-29 18:42:22 --> Loader Class Initialized
INFO - 2024-12-29 18:42:22 --> Helper loaded: form_helper
INFO - 2024-12-29 18:42:22 --> Helper loaded: url_helper
INFO - 2024-12-29 18:42:22 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:42:22 --> Helper loaded: download_helper
INFO - 2024-12-29 18:42:22 --> Helper loaded: string_helper
INFO - 2024-12-29 18:42:22 --> Helper loaded: general_helper
INFO - 2024-12-29 18:42:22 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:42:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:42:22 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:42:22 --> Form Validation Class Initialized
INFO - 2024-12-29 18:42:22 --> Upload Class Initialized
INFO - 2024-12-29 23:42:22 --> Model Class Initialized
INFO - 2024-12-29 23:42:22 --> Model Class Initialized
INFO - 2024-12-29 23:42:22 --> Model Class Initialized
INFO - 2024-12-29 23:42:22 --> Controller Class Initialized
INFO - 2024-12-29 23:42:22 --> Model Class Initialized
INFO - 2024-12-29 23:42:22 --> Model Class Initialized
INFO - 2024-12-29 23:42:22 --> Model Class Initialized
INFO - 2024-12-29 23:42:22 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:42:22 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:42:23 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 18:43:01 --> Config Class Initialized
INFO - 2024-12-29 18:43:01 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:43:01 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:43:01 --> Utf8 Class Initialized
INFO - 2024-12-29 18:43:01 --> URI Class Initialized
INFO - 2024-12-29 18:43:01 --> Router Class Initialized
INFO - 2024-12-29 18:43:01 --> Output Class Initialized
INFO - 2024-12-29 18:43:01 --> Security Class Initialized
DEBUG - 2024-12-29 18:43:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:43:01 --> Input Class Initialized
INFO - 2024-12-29 18:43:01 --> Language Class Initialized
INFO - 2024-12-29 18:43:01 --> Loader Class Initialized
INFO - 2024-12-29 18:43:01 --> Helper loaded: form_helper
INFO - 2024-12-29 18:43:01 --> Helper loaded: url_helper
INFO - 2024-12-29 18:43:01 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:43:01 --> Helper loaded: download_helper
INFO - 2024-12-29 18:43:01 --> Helper loaded: string_helper
INFO - 2024-12-29 18:43:01 --> Helper loaded: general_helper
INFO - 2024-12-29 18:43:01 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:43:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:43:01 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:43:01 --> Form Validation Class Initialized
INFO - 2024-12-29 18:43:01 --> Upload Class Initialized
INFO - 2024-12-29 23:43:01 --> Model Class Initialized
INFO - 2024-12-29 23:43:01 --> Model Class Initialized
INFO - 2024-12-29 23:43:01 --> Model Class Initialized
INFO - 2024-12-29 23:43:01 --> Controller Class Initialized
INFO - 2024-12-29 23:43:01 --> Model Class Initialized
INFO - 2024-12-29 23:43:01 --> Model Class Initialized
INFO - 2024-12-29 23:43:01 --> Model Class Initialized
INFO - 2024-12-29 23:43:01 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:43:01 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:43:02 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 18:43:04 --> Config Class Initialized
INFO - 2024-12-29 18:43:04 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:43:04 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:43:04 --> Utf8 Class Initialized
INFO - 2024-12-29 18:43:04 --> URI Class Initialized
INFO - 2024-12-29 18:43:04 --> Router Class Initialized
INFO - 2024-12-29 18:43:04 --> Output Class Initialized
INFO - 2024-12-29 18:43:04 --> Security Class Initialized
DEBUG - 2024-12-29 18:43:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:43:04 --> Input Class Initialized
INFO - 2024-12-29 18:43:04 --> Language Class Initialized
INFO - 2024-12-29 18:43:04 --> Loader Class Initialized
INFO - 2024-12-29 18:43:04 --> Helper loaded: form_helper
INFO - 2024-12-29 18:43:04 --> Helper loaded: url_helper
INFO - 2024-12-29 18:43:04 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:43:04 --> Helper loaded: download_helper
INFO - 2024-12-29 18:43:04 --> Helper loaded: string_helper
INFO - 2024-12-29 18:43:04 --> Helper loaded: general_helper
INFO - 2024-12-29 18:43:04 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:43:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:43:04 --> Form Validation Class Initialized
INFO - 2024-12-29 18:43:04 --> Upload Class Initialized
INFO - 2024-12-29 23:43:04 --> Model Class Initialized
INFO - 2024-12-29 23:43:04 --> Model Class Initialized
INFO - 2024-12-29 23:43:04 --> Model Class Initialized
INFO - 2024-12-29 23:43:04 --> Controller Class Initialized
INFO - 2024-12-29 23:43:04 --> Model Class Initialized
INFO - 2024-12-29 23:43:04 --> Model Class Initialized
INFO - 2024-12-29 23:43:04 --> Model Class Initialized
INFO - 2024-12-29 23:43:04 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:43:04 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:43:05 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 18:48:28 --> Config Class Initialized
INFO - 2024-12-29 18:48:28 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:48:28 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:48:28 --> Utf8 Class Initialized
INFO - 2024-12-29 18:48:28 --> URI Class Initialized
INFO - 2024-12-29 18:48:28 --> Router Class Initialized
INFO - 2024-12-29 18:48:28 --> Output Class Initialized
INFO - 2024-12-29 18:48:28 --> Security Class Initialized
DEBUG - 2024-12-29 18:48:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:48:28 --> Input Class Initialized
INFO - 2024-12-29 18:48:28 --> Language Class Initialized
INFO - 2024-12-29 18:48:28 --> Loader Class Initialized
INFO - 2024-12-29 18:48:28 --> Helper loaded: form_helper
INFO - 2024-12-29 18:48:28 --> Helper loaded: url_helper
INFO - 2024-12-29 18:48:28 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:48:28 --> Helper loaded: download_helper
INFO - 2024-12-29 18:48:28 --> Helper loaded: string_helper
INFO - 2024-12-29 18:48:28 --> Helper loaded: general_helper
INFO - 2024-12-29 18:48:28 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:48:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:48:28 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:48:28 --> Form Validation Class Initialized
INFO - 2024-12-29 18:48:28 --> Upload Class Initialized
INFO - 2024-12-29 23:48:28 --> Model Class Initialized
INFO - 2024-12-29 23:48:28 --> Model Class Initialized
INFO - 2024-12-29 23:48:28 --> Model Class Initialized
INFO - 2024-12-29 23:48:28 --> Controller Class Initialized
INFO - 2024-12-29 23:48:28 --> Model Class Initialized
INFO - 2024-12-29 23:48:28 --> Model Class Initialized
INFO - 2024-12-29 23:48:28 --> Model Class Initialized
INFO - 2024-12-29 23:48:28 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:48:28 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
INFO - 2024-12-29 23:48:28 --> Final output sent to browser
DEBUG - 2024-12-29 23:48:28 --> Total execution time: 0.4593
INFO - 2024-12-29 18:50:02 --> Config Class Initialized
INFO - 2024-12-29 18:50:02 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:50:02 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:50:02 --> Utf8 Class Initialized
INFO - 2024-12-29 18:50:02 --> URI Class Initialized
INFO - 2024-12-29 18:50:02 --> Router Class Initialized
INFO - 2024-12-29 18:50:02 --> Output Class Initialized
INFO - 2024-12-29 18:50:02 --> Security Class Initialized
DEBUG - 2024-12-29 18:50:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:50:02 --> Input Class Initialized
INFO - 2024-12-29 18:50:02 --> Language Class Initialized
INFO - 2024-12-29 18:50:02 --> Loader Class Initialized
INFO - 2024-12-29 18:50:02 --> Helper loaded: form_helper
INFO - 2024-12-29 18:50:02 --> Helper loaded: url_helper
INFO - 2024-12-29 18:50:02 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:50:02 --> Helper loaded: download_helper
INFO - 2024-12-29 18:50:02 --> Helper loaded: string_helper
INFO - 2024-12-29 18:50:02 --> Helper loaded: general_helper
INFO - 2024-12-29 18:50:02 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:50:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:50:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:50:02 --> Form Validation Class Initialized
INFO - 2024-12-29 18:50:02 --> Upload Class Initialized
INFO - 2024-12-29 23:50:02 --> Model Class Initialized
INFO - 2024-12-29 23:50:02 --> Model Class Initialized
INFO - 2024-12-29 23:50:02 --> Model Class Initialized
INFO - 2024-12-29 23:50:02 --> Controller Class Initialized
INFO - 2024-12-29 23:50:02 --> Model Class Initialized
INFO - 2024-12-29 23:50:02 --> Model Class Initialized
INFO - 2024-12-29 23:50:02 --> Model Class Initialized
INFO - 2024-12-29 23:50:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:50:02 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:50:02 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 18:53:07 --> Config Class Initialized
INFO - 2024-12-29 18:53:07 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:53:07 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:53:07 --> Utf8 Class Initialized
INFO - 2024-12-29 18:53:07 --> URI Class Initialized
INFO - 2024-12-29 18:53:07 --> Router Class Initialized
INFO - 2024-12-29 18:53:07 --> Output Class Initialized
INFO - 2024-12-29 18:53:07 --> Security Class Initialized
DEBUG - 2024-12-29 18:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:53:07 --> Input Class Initialized
INFO - 2024-12-29 18:53:07 --> Language Class Initialized
INFO - 2024-12-29 18:53:07 --> Loader Class Initialized
INFO - 2024-12-29 18:53:07 --> Helper loaded: form_helper
INFO - 2024-12-29 18:53:07 --> Helper loaded: url_helper
INFO - 2024-12-29 18:53:07 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:53:07 --> Helper loaded: download_helper
INFO - 2024-12-29 18:53:07 --> Helper loaded: string_helper
INFO - 2024-12-29 18:53:07 --> Helper loaded: general_helper
INFO - 2024-12-29 18:53:07 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:53:07 --> Form Validation Class Initialized
INFO - 2024-12-29 18:53:07 --> Upload Class Initialized
INFO - 2024-12-29 23:53:07 --> Model Class Initialized
INFO - 2024-12-29 23:53:07 --> Model Class Initialized
INFO - 2024-12-29 23:53:07 --> Model Class Initialized
INFO - 2024-12-29 23:53:07 --> Controller Class Initialized
INFO - 2024-12-29 23:53:07 --> Model Class Initialized
INFO - 2024-12-29 23:53:07 --> Model Class Initialized
INFO - 2024-12-29 23:53:07 --> Model Class Initialized
INFO - 2024-12-29 23:53:07 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:53:07 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:53:07 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
INFO - 2024-12-29 18:56:12 --> Config Class Initialized
INFO - 2024-12-29 18:56:12 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:56:12 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:56:12 --> Utf8 Class Initialized
INFO - 2024-12-29 18:56:12 --> URI Class Initialized
INFO - 2024-12-29 18:56:12 --> Router Class Initialized
INFO - 2024-12-29 18:56:12 --> Output Class Initialized
INFO - 2024-12-29 18:56:12 --> Security Class Initialized
DEBUG - 2024-12-29 18:56:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:56:12 --> Input Class Initialized
INFO - 2024-12-29 18:56:12 --> Language Class Initialized
INFO - 2024-12-29 18:56:12 --> Loader Class Initialized
INFO - 2024-12-29 18:56:12 --> Helper loaded: form_helper
INFO - 2024-12-29 18:56:12 --> Helper loaded: url_helper
INFO - 2024-12-29 18:56:12 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:56:12 --> Helper loaded: download_helper
INFO - 2024-12-29 18:56:12 --> Helper loaded: string_helper
INFO - 2024-12-29 18:56:12 --> Helper loaded: general_helper
INFO - 2024-12-29 18:56:12 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:56:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:56:12 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:56:12 --> Form Validation Class Initialized
INFO - 2024-12-29 18:56:12 --> Upload Class Initialized
INFO - 2024-12-29 23:56:13 --> Model Class Initialized
INFO - 2024-12-29 23:56:13 --> Model Class Initialized
INFO - 2024-12-29 23:56:13 --> Model Class Initialized
INFO - 2024-12-29 23:56:13 --> Controller Class Initialized
INFO - 2024-12-29 23:56:13 --> Model Class Initialized
INFO - 2024-12-29 23:56:13 --> Model Class Initialized
INFO - 2024-12-29 23:56:13 --> Model Class Initialized
INFO - 2024-12-29 23:56:13 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:56:13 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:56:13 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
ERROR - 2024-12-29 23:56:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\laragon\www\demo\vendor\dompdf\dompdf\src\Css\Stylesheet.php:1749) C:\laragon\www\demo\system\core\Common.php 564
INFO - 2024-12-29 18:57:19 --> Config Class Initialized
INFO - 2024-12-29 18:57:19 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:57:19 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:57:19 --> Utf8 Class Initialized
INFO - 2024-12-29 18:57:19 --> URI Class Initialized
INFO - 2024-12-29 18:57:19 --> Router Class Initialized
INFO - 2024-12-29 18:57:19 --> Output Class Initialized
INFO - 2024-12-29 18:57:19 --> Security Class Initialized
DEBUG - 2024-12-29 18:57:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:57:19 --> Input Class Initialized
INFO - 2024-12-29 18:57:19 --> Language Class Initialized
INFO - 2024-12-29 18:57:19 --> Loader Class Initialized
INFO - 2024-12-29 18:57:19 --> Helper loaded: form_helper
INFO - 2024-12-29 18:57:19 --> Helper loaded: url_helper
INFO - 2024-12-29 18:57:19 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:57:19 --> Helper loaded: download_helper
INFO - 2024-12-29 18:57:19 --> Helper loaded: string_helper
INFO - 2024-12-29 18:57:19 --> Helper loaded: general_helper
INFO - 2024-12-29 18:57:19 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:57:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:57:19 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:57:19 --> Form Validation Class Initialized
INFO - 2024-12-29 18:57:19 --> Upload Class Initialized
INFO - 2024-12-29 23:57:19 --> Model Class Initialized
INFO - 2024-12-29 23:57:19 --> Model Class Initialized
INFO - 2024-12-29 23:57:19 --> Model Class Initialized
INFO - 2024-12-29 23:57:19 --> Controller Class Initialized
INFO - 2024-12-29 23:57:19 --> Model Class Initialized
INFO - 2024-12-29 23:57:19 --> Model Class Initialized
INFO - 2024-12-29 23:57:19 --> Model Class Initialized
INFO - 2024-12-29 23:57:19 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:57:19 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:57:20 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
ERROR - 2024-12-29 23:57:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\laragon\www\demo\vendor\dompdf\dompdf\src\Css\Stylesheet.php:1749) C:\laragon\www\demo\system\core\Common.php 564
INFO - 2024-12-29 18:57:32 --> Config Class Initialized
INFO - 2024-12-29 18:57:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 18:57:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 18:57:32 --> Utf8 Class Initialized
INFO - 2024-12-29 18:57:32 --> URI Class Initialized
INFO - 2024-12-29 18:57:32 --> Router Class Initialized
INFO - 2024-12-29 18:57:32 --> Output Class Initialized
INFO - 2024-12-29 18:57:32 --> Security Class Initialized
DEBUG - 2024-12-29 18:57:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 18:57:32 --> Input Class Initialized
INFO - 2024-12-29 18:57:32 --> Language Class Initialized
INFO - 2024-12-29 18:57:32 --> Loader Class Initialized
INFO - 2024-12-29 18:57:32 --> Helper loaded: form_helper
INFO - 2024-12-29 18:57:32 --> Helper loaded: url_helper
INFO - 2024-12-29 18:57:32 --> Helper loaded: directory_helper
INFO - 2024-12-29 18:57:32 --> Helper loaded: download_helper
INFO - 2024-12-29 18:57:32 --> Helper loaded: string_helper
INFO - 2024-12-29 18:57:32 --> Helper loaded: general_helper
INFO - 2024-12-29 18:57:32 --> Database Driver Class Initialized
DEBUG - 2024-12-29 18:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 18:57:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 18:57:32 --> Form Validation Class Initialized
INFO - 2024-12-29 18:57:32 --> Upload Class Initialized
INFO - 2024-12-29 23:57:32 --> Model Class Initialized
INFO - 2024-12-29 23:57:32 --> Model Class Initialized
INFO - 2024-12-29 23:57:32 --> Model Class Initialized
INFO - 2024-12-29 23:57:32 --> Controller Class Initialized
INFO - 2024-12-29 23:57:32 --> Model Class Initialized
INFO - 2024-12-29 23:57:32 --> Model Class Initialized
INFO - 2024-12-29 23:57:32 --> Model Class Initialized
INFO - 2024-12-29 23:57:33 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/contenido.php
INFO - 2024-12-29 23:57:33 --> File loaded: C:\laragon\www\demo\application\views\admin/historia/imprimir/footer.php
ERROR - 2024-12-29 23:57:33 --> Severity: error --> Exception: The PHP GD extension is required, but is not installed. C:\laragon\www\demo\vendor\dompdf\dompdf\lib\Cpdf.php 5835
ERROR - 2024-12-29 23:57:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\laragon\www\demo\vendor\dompdf\dompdf\src\FrameDecorator\Image.php:52) C:\laragon\www\demo\system\core\Common.php 564
INFO - 2024-12-29 19:03:30 --> Config Class Initialized
INFO - 2024-12-29 19:03:30 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:03:30 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:03:30 --> Utf8 Class Initialized
INFO - 2024-12-29 19:03:30 --> URI Class Initialized
INFO - 2024-12-29 19:03:30 --> Router Class Initialized
INFO - 2024-12-29 19:03:30 --> Output Class Initialized
INFO - 2024-12-29 19:03:30 --> Security Class Initialized
DEBUG - 2024-12-29 19:03:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:03:30 --> Input Class Initialized
INFO - 2024-12-29 19:03:30 --> Language Class Initialized
INFO - 2024-12-29 19:03:30 --> Loader Class Initialized
INFO - 2024-12-29 19:03:30 --> Helper loaded: form_helper
INFO - 2024-12-29 19:03:30 --> Helper loaded: url_helper
INFO - 2024-12-29 19:03:30 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:03:30 --> Helper loaded: download_helper
INFO - 2024-12-29 19:03:30 --> Helper loaded: string_helper
INFO - 2024-12-29 19:03:30 --> Helper loaded: general_helper
INFO - 2024-12-29 19:03:30 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:03:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:03:30 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:03:30 --> Form Validation Class Initialized
INFO - 2024-12-29 19:03:30 --> Upload Class Initialized
INFO - 2024-12-29 19:03:33 --> Config Class Initialized
INFO - 2024-12-29 19:03:33 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:03:33 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:03:33 --> Utf8 Class Initialized
INFO - 2024-12-29 19:03:33 --> URI Class Initialized
INFO - 2024-12-29 19:03:33 --> Router Class Initialized
INFO - 2024-12-29 19:03:33 --> Output Class Initialized
INFO - 2024-12-29 19:03:33 --> Security Class Initialized
DEBUG - 2024-12-29 19:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:03:33 --> Input Class Initialized
INFO - 2024-12-29 19:03:33 --> Language Class Initialized
INFO - 2024-12-29 19:03:33 --> Loader Class Initialized
INFO - 2024-12-29 19:03:33 --> Helper loaded: form_helper
INFO - 2024-12-29 19:03:33 --> Helper loaded: url_helper
INFO - 2024-12-29 19:03:33 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:03:33 --> Helper loaded: download_helper
INFO - 2024-12-29 19:03:33 --> Helper loaded: string_helper
INFO - 2024-12-29 19:03:34 --> Helper loaded: general_helper
INFO - 2024-12-29 19:03:34 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:03:34 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:03:34 --> Form Validation Class Initialized
INFO - 2024-12-29 19:03:34 --> Upload Class Initialized
INFO - 2024-12-29 19:03:46 --> Config Class Initialized
INFO - 2024-12-29 19:03:46 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:03:46 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:03:46 --> Utf8 Class Initialized
INFO - 2024-12-29 19:03:46 --> URI Class Initialized
INFO - 2024-12-29 19:03:46 --> Router Class Initialized
INFO - 2024-12-29 19:03:46 --> Output Class Initialized
INFO - 2024-12-29 19:03:46 --> Security Class Initialized
DEBUG - 2024-12-29 19:03:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:03:46 --> Input Class Initialized
INFO - 2024-12-29 19:03:46 --> Language Class Initialized
INFO - 2024-12-29 19:03:46 --> Loader Class Initialized
INFO - 2024-12-29 19:03:46 --> Helper loaded: form_helper
INFO - 2024-12-29 19:03:46 --> Helper loaded: url_helper
INFO - 2024-12-29 19:03:46 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:03:46 --> Helper loaded: download_helper
INFO - 2024-12-29 19:03:46 --> Helper loaded: string_helper
INFO - 2024-12-29 19:03:46 --> Helper loaded: general_helper
INFO - 2024-12-29 19:03:46 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:03:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:03:46 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:03:46 --> Form Validation Class Initialized
INFO - 2024-12-29 19:03:46 --> Upload Class Initialized
INFO - 2024-12-29 19:03:49 --> Config Class Initialized
INFO - 2024-12-29 19:03:49 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:03:49 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:03:49 --> Utf8 Class Initialized
INFO - 2024-12-29 19:03:49 --> URI Class Initialized
INFO - 2024-12-29 19:03:49 --> Router Class Initialized
INFO - 2024-12-29 19:03:49 --> Output Class Initialized
INFO - 2024-12-29 19:03:49 --> Security Class Initialized
DEBUG - 2024-12-29 19:03:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:03:49 --> Input Class Initialized
INFO - 2024-12-29 19:03:49 --> Language Class Initialized
INFO - 2024-12-29 19:03:49 --> Loader Class Initialized
INFO - 2024-12-29 19:03:49 --> Helper loaded: form_helper
INFO - 2024-12-29 19:03:49 --> Helper loaded: url_helper
INFO - 2024-12-29 19:03:49 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:03:49 --> Helper loaded: download_helper
INFO - 2024-12-29 19:03:49 --> Helper loaded: string_helper
INFO - 2024-12-29 19:03:49 --> Helper loaded: general_helper
INFO - 2024-12-29 19:03:49 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:03:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:03:49 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:03:49 --> Form Validation Class Initialized
INFO - 2024-12-29 19:03:49 --> Upload Class Initialized
INFO - 2024-12-29 19:04:01 --> Config Class Initialized
INFO - 2024-12-29 19:04:01 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:04:01 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:04:01 --> Utf8 Class Initialized
INFO - 2024-12-29 19:04:01 --> URI Class Initialized
INFO - 2024-12-29 19:04:01 --> Router Class Initialized
INFO - 2024-12-29 19:04:01 --> Output Class Initialized
INFO - 2024-12-29 19:04:01 --> Security Class Initialized
DEBUG - 2024-12-29 19:04:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:04:01 --> Input Class Initialized
INFO - 2024-12-29 19:04:01 --> Language Class Initialized
INFO - 2024-12-29 19:04:01 --> Loader Class Initialized
INFO - 2024-12-29 19:04:01 --> Helper loaded: form_helper
INFO - 2024-12-29 19:04:01 --> Helper loaded: url_helper
INFO - 2024-12-29 19:04:01 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:04:01 --> Helper loaded: download_helper
INFO - 2024-12-29 19:04:01 --> Helper loaded: string_helper
INFO - 2024-12-29 19:04:01 --> Helper loaded: general_helper
INFO - 2024-12-29 19:04:01 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:04:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:04:01 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:04:01 --> Form Validation Class Initialized
INFO - 2024-12-29 19:04:01 --> Upload Class Initialized
INFO - 2024-12-29 19:06:51 --> Config Class Initialized
INFO - 2024-12-29 19:06:51 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:06:51 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:06:51 --> Utf8 Class Initialized
INFO - 2024-12-29 19:06:51 --> URI Class Initialized
INFO - 2024-12-29 19:06:51 --> Router Class Initialized
INFO - 2024-12-29 19:06:51 --> Output Class Initialized
INFO - 2024-12-29 19:06:51 --> Security Class Initialized
DEBUG - 2024-12-29 19:06:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:06:51 --> Input Class Initialized
INFO - 2024-12-29 19:06:51 --> Language Class Initialized
INFO - 2024-12-29 19:06:51 --> Loader Class Initialized
INFO - 2024-12-29 19:06:51 --> Helper loaded: form_helper
INFO - 2024-12-29 19:06:51 --> Helper loaded: url_helper
INFO - 2024-12-29 19:06:51 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:06:51 --> Helper loaded: download_helper
INFO - 2024-12-29 19:06:51 --> Helper loaded: string_helper
INFO - 2024-12-29 19:06:51 --> Helper loaded: general_helper
INFO - 2024-12-29 19:06:51 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:06:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:06:51 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:06:51 --> Form Validation Class Initialized
INFO - 2024-12-29 19:06:51 --> Upload Class Initialized
INFO - 2024-12-29 19:07:02 --> Config Class Initialized
INFO - 2024-12-29 19:07:02 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:07:02 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:07:02 --> Utf8 Class Initialized
INFO - 2024-12-29 19:07:02 --> URI Class Initialized
INFO - 2024-12-29 19:07:02 --> Router Class Initialized
INFO - 2024-12-29 19:07:02 --> Output Class Initialized
INFO - 2024-12-29 19:07:02 --> Security Class Initialized
DEBUG - 2024-12-29 19:07:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:07:02 --> Input Class Initialized
INFO - 2024-12-29 19:07:02 --> Language Class Initialized
INFO - 2024-12-29 19:07:02 --> Loader Class Initialized
INFO - 2024-12-29 19:07:02 --> Helper loaded: form_helper
INFO - 2024-12-29 19:07:02 --> Helper loaded: url_helper
INFO - 2024-12-29 19:07:02 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:07:02 --> Helper loaded: download_helper
INFO - 2024-12-29 19:07:02 --> Helper loaded: string_helper
INFO - 2024-12-29 19:07:02 --> Helper loaded: general_helper
INFO - 2024-12-29 19:07:02 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:07:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:07:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:07:02 --> Form Validation Class Initialized
INFO - 2024-12-29 19:07:02 --> Upload Class Initialized
INFO - 2024-12-29 19:49:43 --> Config Class Initialized
INFO - 2024-12-29 19:49:43 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:49:43 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:49:43 --> Utf8 Class Initialized
INFO - 2024-12-29 19:49:43 --> URI Class Initialized
INFO - 2024-12-29 19:49:43 --> Router Class Initialized
INFO - 2024-12-29 19:49:43 --> Output Class Initialized
INFO - 2024-12-29 19:49:43 --> Security Class Initialized
DEBUG - 2024-12-29 19:49:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:49:43 --> Input Class Initialized
INFO - 2024-12-29 19:49:43 --> Language Class Initialized
INFO - 2024-12-29 19:49:43 --> Loader Class Initialized
INFO - 2024-12-29 19:49:43 --> Helper loaded: form_helper
INFO - 2024-12-29 19:49:43 --> Helper loaded: url_helper
INFO - 2024-12-29 19:49:43 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:49:43 --> Helper loaded: download_helper
INFO - 2024-12-29 19:49:43 --> Helper loaded: string_helper
INFO - 2024-12-29 19:49:43 --> Helper loaded: general_helper
INFO - 2024-12-29 19:49:43 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:49:43 --> Form Validation Class Initialized
INFO - 2024-12-29 19:49:43 --> Upload Class Initialized
INFO - 2024-12-29 19:50:49 --> Config Class Initialized
INFO - 2024-12-29 19:50:49 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:50:49 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:50:49 --> Utf8 Class Initialized
INFO - 2024-12-29 19:50:49 --> URI Class Initialized
INFO - 2024-12-29 19:50:49 --> Router Class Initialized
INFO - 2024-12-29 19:50:49 --> Output Class Initialized
INFO - 2024-12-29 19:50:49 --> Security Class Initialized
DEBUG - 2024-12-29 19:50:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:50:49 --> Input Class Initialized
INFO - 2024-12-29 19:50:49 --> Language Class Initialized
INFO - 2024-12-29 19:50:49 --> Loader Class Initialized
INFO - 2024-12-29 19:50:49 --> Helper loaded: form_helper
INFO - 2024-12-29 19:50:49 --> Helper loaded: url_helper
INFO - 2024-12-29 19:50:49 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:50:49 --> Helper loaded: download_helper
INFO - 2024-12-29 19:50:49 --> Helper loaded: string_helper
INFO - 2024-12-29 19:50:49 --> Helper loaded: general_helper
INFO - 2024-12-29 19:50:49 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:50:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:50:49 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:50:49 --> Form Validation Class Initialized
INFO - 2024-12-29 19:50:49 --> Upload Class Initialized
INFO - 2024-12-29 19:56:45 --> Config Class Initialized
INFO - 2024-12-29 19:56:45 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:56:45 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:56:45 --> Utf8 Class Initialized
INFO - 2024-12-29 19:56:45 --> URI Class Initialized
INFO - 2024-12-29 19:56:45 --> Router Class Initialized
INFO - 2024-12-29 19:56:45 --> Output Class Initialized
INFO - 2024-12-29 19:56:45 --> Security Class Initialized
DEBUG - 2024-12-29 19:56:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:56:45 --> Input Class Initialized
INFO - 2024-12-29 19:56:45 --> Language Class Initialized
INFO - 2024-12-29 19:56:45 --> Loader Class Initialized
INFO - 2024-12-29 19:56:45 --> Helper loaded: form_helper
INFO - 2024-12-29 19:56:45 --> Helper loaded: url_helper
INFO - 2024-12-29 19:56:45 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:56:45 --> Helper loaded: download_helper
INFO - 2024-12-29 19:56:45 --> Helper loaded: string_helper
INFO - 2024-12-29 19:56:45 --> Helper loaded: general_helper
INFO - 2024-12-29 19:56:45 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:56:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:56:45 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:56:45 --> Form Validation Class Initialized
INFO - 2024-12-29 19:56:45 --> Upload Class Initialized
INFO - 2024-12-29 19:57:01 --> Config Class Initialized
INFO - 2024-12-29 19:57:01 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:57:01 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:57:01 --> Utf8 Class Initialized
INFO - 2024-12-29 19:57:01 --> URI Class Initialized
INFO - 2024-12-29 19:57:01 --> Router Class Initialized
INFO - 2024-12-29 19:57:01 --> Output Class Initialized
INFO - 2024-12-29 19:57:01 --> Security Class Initialized
DEBUG - 2024-12-29 19:57:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:57:01 --> Input Class Initialized
INFO - 2024-12-29 19:57:01 --> Language Class Initialized
INFO - 2024-12-29 19:57:01 --> Loader Class Initialized
INFO - 2024-12-29 19:57:01 --> Helper loaded: form_helper
INFO - 2024-12-29 19:57:01 --> Helper loaded: url_helper
INFO - 2024-12-29 19:57:01 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:57:01 --> Helper loaded: download_helper
INFO - 2024-12-29 19:57:01 --> Helper loaded: string_helper
INFO - 2024-12-29 19:57:01 --> Helper loaded: general_helper
INFO - 2024-12-29 19:57:01 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:57:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:57:01 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:57:01 --> Form Validation Class Initialized
INFO - 2024-12-29 19:57:01 --> Upload Class Initialized
INFO - 2024-12-29 19:57:10 --> Config Class Initialized
INFO - 2024-12-29 19:57:10 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:57:10 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:57:10 --> Utf8 Class Initialized
INFO - 2024-12-29 19:57:10 --> URI Class Initialized
INFO - 2024-12-29 19:57:10 --> Router Class Initialized
INFO - 2024-12-29 19:57:10 --> Output Class Initialized
INFO - 2024-12-29 19:57:10 --> Security Class Initialized
DEBUG - 2024-12-29 19:57:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:57:10 --> Input Class Initialized
INFO - 2024-12-29 19:57:10 --> Language Class Initialized
INFO - 2024-12-29 19:57:10 --> Loader Class Initialized
INFO - 2024-12-29 19:57:10 --> Helper loaded: form_helper
INFO - 2024-12-29 19:57:10 --> Helper loaded: url_helper
INFO - 2024-12-29 19:57:10 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:57:10 --> Helper loaded: download_helper
INFO - 2024-12-29 19:57:10 --> Helper loaded: string_helper
INFO - 2024-12-29 19:57:10 --> Helper loaded: general_helper
INFO - 2024-12-29 19:57:10 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:57:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:57:10 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:57:10 --> Form Validation Class Initialized
INFO - 2024-12-29 19:57:10 --> Upload Class Initialized
INFO - 2024-12-29 19:58:30 --> Config Class Initialized
INFO - 2024-12-29 19:58:30 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:58:30 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:58:30 --> Utf8 Class Initialized
INFO - 2024-12-29 19:58:30 --> URI Class Initialized
INFO - 2024-12-29 19:58:30 --> Router Class Initialized
INFO - 2024-12-29 19:58:30 --> Output Class Initialized
INFO - 2024-12-29 19:58:30 --> Security Class Initialized
DEBUG - 2024-12-29 19:58:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:58:30 --> Input Class Initialized
INFO - 2024-12-29 19:58:30 --> Language Class Initialized
INFO - 2024-12-29 19:58:30 --> Loader Class Initialized
INFO - 2024-12-29 19:58:30 --> Helper loaded: form_helper
INFO - 2024-12-29 19:58:30 --> Helper loaded: url_helper
INFO - 2024-12-29 19:58:30 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:58:30 --> Helper loaded: download_helper
INFO - 2024-12-29 19:58:30 --> Helper loaded: string_helper
INFO - 2024-12-29 19:58:30 --> Helper loaded: general_helper
INFO - 2024-12-29 19:58:31 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:58:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:58:31 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:58:31 --> Form Validation Class Initialized
INFO - 2024-12-29 19:58:31 --> Upload Class Initialized
INFO - 2024-12-29 19:58:58 --> Config Class Initialized
INFO - 2024-12-29 19:58:58 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:58:58 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:58:58 --> Utf8 Class Initialized
INFO - 2024-12-29 19:58:58 --> URI Class Initialized
INFO - 2024-12-29 19:58:58 --> Router Class Initialized
INFO - 2024-12-29 19:58:58 --> Output Class Initialized
INFO - 2024-12-29 19:58:58 --> Security Class Initialized
DEBUG - 2024-12-29 19:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:58:58 --> Input Class Initialized
INFO - 2024-12-29 19:58:58 --> Language Class Initialized
INFO - 2024-12-29 19:58:58 --> Loader Class Initialized
INFO - 2024-12-29 19:58:58 --> Helper loaded: form_helper
INFO - 2024-12-29 19:58:58 --> Helper loaded: url_helper
INFO - 2024-12-29 19:58:58 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:58:58 --> Helper loaded: download_helper
INFO - 2024-12-29 19:58:58 --> Helper loaded: string_helper
INFO - 2024-12-29 19:58:58 --> Helper loaded: general_helper
INFO - 2024-12-29 19:58:58 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:58:58 --> Form Validation Class Initialized
INFO - 2024-12-29 19:58:58 --> Upload Class Initialized
INFO - 2024-12-29 19:59:24 --> Config Class Initialized
INFO - 2024-12-29 19:59:24 --> Hooks Class Initialized
DEBUG - 2024-12-29 19:59:24 --> UTF-8 Support Enabled
INFO - 2024-12-29 19:59:24 --> Utf8 Class Initialized
INFO - 2024-12-29 19:59:24 --> URI Class Initialized
INFO - 2024-12-29 19:59:24 --> Router Class Initialized
INFO - 2024-12-29 19:59:24 --> Output Class Initialized
INFO - 2024-12-29 19:59:24 --> Security Class Initialized
DEBUG - 2024-12-29 19:59:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 19:59:24 --> Input Class Initialized
INFO - 2024-12-29 19:59:24 --> Language Class Initialized
INFO - 2024-12-29 19:59:24 --> Loader Class Initialized
INFO - 2024-12-29 19:59:24 --> Helper loaded: form_helper
INFO - 2024-12-29 19:59:24 --> Helper loaded: url_helper
INFO - 2024-12-29 19:59:24 --> Helper loaded: directory_helper
INFO - 2024-12-29 19:59:24 --> Helper loaded: download_helper
INFO - 2024-12-29 19:59:24 --> Helper loaded: string_helper
INFO - 2024-12-29 19:59:24 --> Helper loaded: general_helper
INFO - 2024-12-29 19:59:24 --> Database Driver Class Initialized
DEBUG - 2024-12-29 19:59:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 19:59:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 19:59:24 --> Form Validation Class Initialized
INFO - 2024-12-29 19:59:24 --> Upload Class Initialized
INFO - 2024-12-29 20:08:39 --> Config Class Initialized
INFO - 2024-12-29 20:08:39 --> Hooks Class Initialized
DEBUG - 2024-12-29 20:08:39 --> UTF-8 Support Enabled
INFO - 2024-12-29 20:08:39 --> Utf8 Class Initialized
INFO - 2024-12-29 20:08:39 --> URI Class Initialized
INFO - 2024-12-29 20:08:39 --> Router Class Initialized
INFO - 2024-12-29 20:08:39 --> Output Class Initialized
INFO - 2024-12-29 20:08:39 --> Security Class Initialized
DEBUG - 2024-12-29 20:08:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 20:08:39 --> Input Class Initialized
INFO - 2024-12-29 20:08:39 --> Language Class Initialized
INFO - 2024-12-29 20:08:39 --> Loader Class Initialized
INFO - 2024-12-29 20:08:39 --> Helper loaded: form_helper
INFO - 2024-12-29 20:08:39 --> Helper loaded: url_helper
INFO - 2024-12-29 20:08:39 --> Helper loaded: directory_helper
INFO - 2024-12-29 20:08:39 --> Helper loaded: download_helper
INFO - 2024-12-29 20:08:39 --> Helper loaded: string_helper
INFO - 2024-12-29 20:08:39 --> Helper loaded: general_helper
INFO - 2024-12-29 20:08:39 --> Database Driver Class Initialized
DEBUG - 2024-12-29 20:08:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 20:08:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 20:08:39 --> Form Validation Class Initialized
INFO - 2024-12-29 20:08:39 --> Upload Class Initialized
INFO - 2024-12-29 20:13:16 --> Config Class Initialized
INFO - 2024-12-29 20:13:16 --> Hooks Class Initialized
DEBUG - 2024-12-29 20:13:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 20:13:16 --> Utf8 Class Initialized
INFO - 2024-12-29 20:13:16 --> URI Class Initialized
INFO - 2024-12-29 20:13:16 --> Router Class Initialized
INFO - 2024-12-29 20:13:16 --> Output Class Initialized
INFO - 2024-12-29 20:13:16 --> Security Class Initialized
DEBUG - 2024-12-29 20:13:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 20:13:16 --> Input Class Initialized
INFO - 2024-12-29 20:13:16 --> Language Class Initialized
INFO - 2024-12-29 20:13:16 --> Loader Class Initialized
INFO - 2024-12-29 20:13:16 --> Helper loaded: form_helper
INFO - 2024-12-29 20:13:16 --> Helper loaded: url_helper
INFO - 2024-12-29 20:13:16 --> Helper loaded: directory_helper
INFO - 2024-12-29 20:13:16 --> Helper loaded: download_helper
INFO - 2024-12-29 20:13:16 --> Helper loaded: string_helper
INFO - 2024-12-29 20:13:16 --> Helper loaded: general_helper
INFO - 2024-12-29 20:13:16 --> Database Driver Class Initialized
DEBUG - 2024-12-29 20:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 20:13:16 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 20:13:16 --> Form Validation Class Initialized
INFO - 2024-12-29 20:13:16 --> Upload Class Initialized
INFO - 2024-12-29 20:13:29 --> Config Class Initialized
INFO - 2024-12-29 20:13:29 --> Hooks Class Initialized
DEBUG - 2024-12-29 20:13:29 --> UTF-8 Support Enabled
INFO - 2024-12-29 20:13:29 --> Utf8 Class Initialized
INFO - 2024-12-29 20:13:29 --> URI Class Initialized
INFO - 2024-12-29 20:13:29 --> Router Class Initialized
INFO - 2024-12-29 20:13:29 --> Output Class Initialized
INFO - 2024-12-29 20:13:29 --> Security Class Initialized
DEBUG - 2024-12-29 20:13:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 20:13:29 --> Input Class Initialized
INFO - 2024-12-29 20:13:29 --> Language Class Initialized
INFO - 2024-12-29 20:13:29 --> Loader Class Initialized
INFO - 2024-12-29 20:13:29 --> Helper loaded: form_helper
INFO - 2024-12-29 20:13:29 --> Helper loaded: url_helper
INFO - 2024-12-29 20:13:29 --> Helper loaded: directory_helper
INFO - 2024-12-29 20:13:29 --> Helper loaded: download_helper
INFO - 2024-12-29 20:13:29 --> Helper loaded: string_helper
INFO - 2024-12-29 20:13:29 --> Helper loaded: general_helper
INFO - 2024-12-29 20:13:29 --> Database Driver Class Initialized
DEBUG - 2024-12-29 20:13:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 20:13:29 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 20:13:29 --> Form Validation Class Initialized
INFO - 2024-12-29 20:13:29 --> Upload Class Initialized
INFO - 2024-12-29 20:13:59 --> Config Class Initialized
INFO - 2024-12-29 20:13:59 --> Hooks Class Initialized
DEBUG - 2024-12-29 20:13:59 --> UTF-8 Support Enabled
INFO - 2024-12-29 20:13:59 --> Utf8 Class Initialized
INFO - 2024-12-29 20:13:59 --> URI Class Initialized
INFO - 2024-12-29 20:13:59 --> Router Class Initialized
INFO - 2024-12-29 20:13:59 --> Output Class Initialized
INFO - 2024-12-29 20:13:59 --> Security Class Initialized
DEBUG - 2024-12-29 20:13:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 20:13:59 --> Input Class Initialized
INFO - 2024-12-29 20:13:59 --> Language Class Initialized
INFO - 2024-12-29 20:13:59 --> Loader Class Initialized
INFO - 2024-12-29 20:13:59 --> Helper loaded: form_helper
INFO - 2024-12-29 20:13:59 --> Helper loaded: url_helper
INFO - 2024-12-29 20:13:59 --> Helper loaded: directory_helper
INFO - 2024-12-29 20:13:59 --> Helper loaded: download_helper
INFO - 2024-12-29 20:13:59 --> Helper loaded: string_helper
INFO - 2024-12-29 20:13:59 --> Helper loaded: general_helper
INFO - 2024-12-29 20:13:59 --> Database Driver Class Initialized
DEBUG - 2024-12-29 20:13:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 20:13:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 20:13:59 --> Form Validation Class Initialized
INFO - 2024-12-29 20:13:59 --> Upload Class Initialized
INFO - 2024-12-29 20:14:09 --> Config Class Initialized
INFO - 2024-12-29 20:14:09 --> Hooks Class Initialized
DEBUG - 2024-12-29 20:14:09 --> UTF-8 Support Enabled
INFO - 2024-12-29 20:14:09 --> Utf8 Class Initialized
INFO - 2024-12-29 20:14:09 --> URI Class Initialized
INFO - 2024-12-29 20:14:09 --> Router Class Initialized
INFO - 2024-12-29 20:14:09 --> Output Class Initialized
INFO - 2024-12-29 20:14:09 --> Security Class Initialized
DEBUG - 2024-12-29 20:14:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 20:14:09 --> Input Class Initialized
INFO - 2024-12-29 20:14:09 --> Language Class Initialized
INFO - 2024-12-29 20:14:09 --> Loader Class Initialized
INFO - 2024-12-29 20:14:09 --> Helper loaded: form_helper
INFO - 2024-12-29 20:14:09 --> Helper loaded: url_helper
INFO - 2024-12-29 20:14:09 --> Helper loaded: directory_helper
INFO - 2024-12-29 20:14:09 --> Helper loaded: download_helper
INFO - 2024-12-29 20:14:09 --> Helper loaded: string_helper
INFO - 2024-12-29 20:14:09 --> Helper loaded: general_helper
INFO - 2024-12-29 20:14:09 --> Database Driver Class Initialized
DEBUG - 2024-12-29 20:14:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 20:14:09 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 20:14:09 --> Form Validation Class Initialized
INFO - 2024-12-29 20:14:09 --> Upload Class Initialized
INFO - 2024-12-29 20:15:58 --> Config Class Initialized
INFO - 2024-12-29 20:15:58 --> Hooks Class Initialized
DEBUG - 2024-12-29 20:15:58 --> UTF-8 Support Enabled
INFO - 2024-12-29 20:15:58 --> Utf8 Class Initialized
INFO - 2024-12-29 20:15:58 --> URI Class Initialized
INFO - 2024-12-29 20:15:58 --> Router Class Initialized
INFO - 2024-12-29 20:15:58 --> Output Class Initialized
INFO - 2024-12-29 20:15:58 --> Security Class Initialized
DEBUG - 2024-12-29 20:15:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 20:15:58 --> Input Class Initialized
INFO - 2024-12-29 20:15:58 --> Language Class Initialized
INFO - 2024-12-29 20:15:58 --> Loader Class Initialized
INFO - 2024-12-29 20:15:58 --> Helper loaded: form_helper
INFO - 2024-12-29 20:15:58 --> Helper loaded: url_helper
INFO - 2024-12-29 20:15:58 --> Helper loaded: directory_helper
INFO - 2024-12-29 20:15:58 --> Helper loaded: download_helper
INFO - 2024-12-29 20:15:58 --> Helper loaded: string_helper
INFO - 2024-12-29 20:15:58 --> Helper loaded: general_helper
INFO - 2024-12-29 20:15:58 --> Database Driver Class Initialized
DEBUG - 2024-12-29 20:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 20:15:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 20:15:58 --> Form Validation Class Initialized
INFO - 2024-12-29 20:15:58 --> Upload Class Initialized
INFO - 2024-12-29 20:18:16 --> Config Class Initialized
INFO - 2024-12-29 20:18:16 --> Hooks Class Initialized
DEBUG - 2024-12-29 20:18:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 20:18:16 --> Utf8 Class Initialized
INFO - 2024-12-29 20:18:16 --> URI Class Initialized
INFO - 2024-12-29 20:18:16 --> Router Class Initialized
INFO - 2024-12-29 20:18:16 --> Output Class Initialized
INFO - 2024-12-29 20:18:16 --> Security Class Initialized
DEBUG - 2024-12-29 20:18:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 20:18:16 --> Input Class Initialized
INFO - 2024-12-29 20:18:16 --> Language Class Initialized
INFO - 2024-12-29 20:18:16 --> Loader Class Initialized
INFO - 2024-12-29 20:18:16 --> Helper loaded: form_helper
INFO - 2024-12-29 20:18:16 --> Helper loaded: url_helper
INFO - 2024-12-29 20:18:16 --> Helper loaded: directory_helper
INFO - 2024-12-29 20:18:16 --> Helper loaded: download_helper
INFO - 2024-12-29 20:18:16 --> Helper loaded: string_helper
INFO - 2024-12-29 20:18:16 --> Helper loaded: general_helper
INFO - 2024-12-29 20:18:16 --> Database Driver Class Initialized
DEBUG - 2024-12-29 20:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 20:18:16 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 20:18:16 --> Form Validation Class Initialized
INFO - 2024-12-29 20:18:16 --> Upload Class Initialized
INFO - 2024-12-29 20:18:41 --> Config Class Initialized
INFO - 2024-12-29 20:18:41 --> Hooks Class Initialized
DEBUG - 2024-12-29 20:18:41 --> UTF-8 Support Enabled
INFO - 2024-12-29 20:18:41 --> Utf8 Class Initialized
INFO - 2024-12-29 20:18:41 --> URI Class Initialized
INFO - 2024-12-29 20:18:41 --> Router Class Initialized
INFO - 2024-12-29 20:18:41 --> Output Class Initialized
INFO - 2024-12-29 20:18:41 --> Security Class Initialized
DEBUG - 2024-12-29 20:18:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 20:18:41 --> Input Class Initialized
INFO - 2024-12-29 20:18:41 --> Language Class Initialized
INFO - 2024-12-29 20:18:41 --> Loader Class Initialized
INFO - 2024-12-29 20:18:41 --> Helper loaded: form_helper
INFO - 2024-12-29 20:18:41 --> Helper loaded: url_helper
INFO - 2024-12-29 20:18:41 --> Helper loaded: directory_helper
INFO - 2024-12-29 20:18:41 --> Helper loaded: download_helper
INFO - 2024-12-29 20:18:41 --> Helper loaded: string_helper
INFO - 2024-12-29 20:18:41 --> Helper loaded: general_helper
INFO - 2024-12-29 20:18:41 --> Database Driver Class Initialized
DEBUG - 2024-12-29 20:18:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 20:18:41 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 20:18:41 --> Form Validation Class Initialized
INFO - 2024-12-29 20:18:41 --> Upload Class Initialized
INFO - 2024-12-29 21:07:14 --> Config Class Initialized
INFO - 2024-12-29 21:07:14 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:07:14 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:07:14 --> Utf8 Class Initialized
INFO - 2024-12-29 21:07:14 --> URI Class Initialized
INFO - 2024-12-29 21:07:14 --> Router Class Initialized
INFO - 2024-12-29 21:07:14 --> Output Class Initialized
INFO - 2024-12-29 21:07:14 --> Security Class Initialized
DEBUG - 2024-12-29 21:07:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:07:14 --> Input Class Initialized
INFO - 2024-12-29 21:07:14 --> Language Class Initialized
INFO - 2024-12-29 21:07:14 --> Loader Class Initialized
INFO - 2024-12-29 21:07:14 --> Helper loaded: form_helper
INFO - 2024-12-29 21:07:14 --> Helper loaded: url_helper
INFO - 2024-12-29 21:07:14 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:07:14 --> Helper loaded: download_helper
INFO - 2024-12-29 21:07:14 --> Helper loaded: string_helper
INFO - 2024-12-29 21:07:14 --> Helper loaded: general_helper
INFO - 2024-12-29 21:07:14 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:07:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:07:14 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:07:14 --> Form Validation Class Initialized
INFO - 2024-12-29 21:07:14 --> Upload Class Initialized
INFO - 2024-12-29 21:07:22 --> Config Class Initialized
INFO - 2024-12-29 21:07:22 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:07:22 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:07:22 --> Utf8 Class Initialized
INFO - 2024-12-29 21:07:22 --> URI Class Initialized
INFO - 2024-12-29 21:07:22 --> Router Class Initialized
INFO - 2024-12-29 21:07:22 --> Output Class Initialized
INFO - 2024-12-29 21:07:22 --> Security Class Initialized
DEBUG - 2024-12-29 21:07:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:07:22 --> Input Class Initialized
INFO - 2024-12-29 21:07:22 --> Language Class Initialized
INFO - 2024-12-29 21:07:22 --> Loader Class Initialized
INFO - 2024-12-29 21:07:22 --> Helper loaded: form_helper
INFO - 2024-12-29 21:07:22 --> Helper loaded: url_helper
INFO - 2024-12-29 21:07:22 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:07:22 --> Helper loaded: download_helper
INFO - 2024-12-29 21:07:22 --> Helper loaded: string_helper
INFO - 2024-12-29 21:07:22 --> Helper loaded: general_helper
INFO - 2024-12-29 21:07:22 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:07:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:07:22 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:07:22 --> Form Validation Class Initialized
INFO - 2024-12-29 21:07:22 --> Upload Class Initialized
INFO - 2024-12-29 21:07:24 --> Config Class Initialized
INFO - 2024-12-29 21:07:24 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:07:24 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:07:24 --> Utf8 Class Initialized
INFO - 2024-12-29 21:07:24 --> URI Class Initialized
INFO - 2024-12-29 21:07:24 --> Router Class Initialized
INFO - 2024-12-29 21:07:24 --> Output Class Initialized
INFO - 2024-12-29 21:07:24 --> Security Class Initialized
DEBUG - 2024-12-29 21:07:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:07:24 --> Input Class Initialized
INFO - 2024-12-29 21:07:24 --> Language Class Initialized
INFO - 2024-12-29 21:07:24 --> Loader Class Initialized
INFO - 2024-12-29 21:07:24 --> Helper loaded: form_helper
INFO - 2024-12-29 21:07:24 --> Helper loaded: url_helper
INFO - 2024-12-29 21:07:24 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:07:24 --> Helper loaded: download_helper
INFO - 2024-12-29 21:07:24 --> Helper loaded: string_helper
INFO - 2024-12-29 21:07:24 --> Helper loaded: general_helper
INFO - 2024-12-29 21:07:24 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:07:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:07:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:07:24 --> Form Validation Class Initialized
INFO - 2024-12-29 21:07:24 --> Upload Class Initialized
INFO - 2024-12-29 21:07:36 --> Config Class Initialized
INFO - 2024-12-29 21:07:36 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:07:36 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:07:36 --> Utf8 Class Initialized
INFO - 2024-12-29 21:07:36 --> URI Class Initialized
INFO - 2024-12-29 21:07:36 --> Router Class Initialized
INFO - 2024-12-29 21:07:36 --> Output Class Initialized
INFO - 2024-12-29 21:07:36 --> Security Class Initialized
DEBUG - 2024-12-29 21:07:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:07:36 --> Input Class Initialized
INFO - 2024-12-29 21:07:36 --> Language Class Initialized
INFO - 2024-12-29 21:07:36 --> Loader Class Initialized
INFO - 2024-12-29 21:07:36 --> Helper loaded: form_helper
INFO - 2024-12-29 21:07:36 --> Helper loaded: url_helper
INFO - 2024-12-29 21:07:36 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:07:36 --> Helper loaded: download_helper
INFO - 2024-12-29 21:07:36 --> Helper loaded: string_helper
INFO - 2024-12-29 21:07:36 --> Helper loaded: general_helper
INFO - 2024-12-29 21:07:36 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:07:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:07:36 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:07:36 --> Form Validation Class Initialized
INFO - 2024-12-29 21:07:36 --> Upload Class Initialized
INFO - 2024-12-29 21:07:38 --> Config Class Initialized
INFO - 2024-12-29 21:07:38 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:07:38 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:07:38 --> Utf8 Class Initialized
INFO - 2024-12-29 21:07:38 --> URI Class Initialized
INFO - 2024-12-29 21:07:38 --> Router Class Initialized
INFO - 2024-12-29 21:07:38 --> Output Class Initialized
INFO - 2024-12-29 21:07:38 --> Security Class Initialized
DEBUG - 2024-12-29 21:07:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:07:38 --> Input Class Initialized
INFO - 2024-12-29 21:07:38 --> Language Class Initialized
INFO - 2024-12-29 21:07:38 --> Loader Class Initialized
INFO - 2024-12-29 21:07:38 --> Helper loaded: form_helper
INFO - 2024-12-29 21:07:38 --> Helper loaded: url_helper
INFO - 2024-12-29 21:07:38 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:07:38 --> Helper loaded: download_helper
INFO - 2024-12-29 21:07:38 --> Helper loaded: string_helper
INFO - 2024-12-29 21:07:38 --> Helper loaded: general_helper
INFO - 2024-12-29 21:07:38 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:07:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:07:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:07:38 --> Form Validation Class Initialized
INFO - 2024-12-29 21:07:38 --> Upload Class Initialized
INFO - 2024-12-29 21:07:49 --> Config Class Initialized
INFO - 2024-12-29 21:07:49 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:07:49 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:07:49 --> Utf8 Class Initialized
INFO - 2024-12-29 21:07:49 --> URI Class Initialized
INFO - 2024-12-29 21:07:49 --> Router Class Initialized
INFO - 2024-12-29 21:07:49 --> Output Class Initialized
INFO - 2024-12-29 21:07:49 --> Security Class Initialized
DEBUG - 2024-12-29 21:07:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:07:49 --> Input Class Initialized
INFO - 2024-12-29 21:07:49 --> Language Class Initialized
INFO - 2024-12-29 21:07:49 --> Loader Class Initialized
INFO - 2024-12-29 21:07:49 --> Helper loaded: form_helper
INFO - 2024-12-29 21:07:49 --> Helper loaded: url_helper
INFO - 2024-12-29 21:07:49 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:07:49 --> Helper loaded: download_helper
INFO - 2024-12-29 21:07:49 --> Helper loaded: string_helper
INFO - 2024-12-29 21:07:49 --> Helper loaded: general_helper
INFO - 2024-12-29 21:07:49 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:07:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:07:49 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:07:49 --> Form Validation Class Initialized
INFO - 2024-12-29 21:07:49 --> Upload Class Initialized
INFO - 2024-12-29 21:07:54 --> Config Class Initialized
INFO - 2024-12-29 21:07:54 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:07:54 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:07:54 --> Utf8 Class Initialized
INFO - 2024-12-29 21:07:54 --> URI Class Initialized
INFO - 2024-12-29 21:07:54 --> Router Class Initialized
INFO - 2024-12-29 21:07:54 --> Output Class Initialized
INFO - 2024-12-29 21:07:54 --> Security Class Initialized
DEBUG - 2024-12-29 21:07:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:07:54 --> Input Class Initialized
INFO - 2024-12-29 21:07:54 --> Language Class Initialized
INFO - 2024-12-29 21:07:54 --> Loader Class Initialized
INFO - 2024-12-29 21:07:54 --> Helper loaded: form_helper
INFO - 2024-12-29 21:07:54 --> Helper loaded: url_helper
INFO - 2024-12-29 21:07:54 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:07:54 --> Helper loaded: download_helper
INFO - 2024-12-29 21:07:54 --> Helper loaded: string_helper
INFO - 2024-12-29 21:07:54 --> Helper loaded: general_helper
INFO - 2024-12-29 21:07:54 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:07:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:07:54 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:07:54 --> Form Validation Class Initialized
INFO - 2024-12-29 21:07:54 --> Upload Class Initialized
INFO - 2024-12-29 21:08:57 --> Config Class Initialized
INFO - 2024-12-29 21:08:57 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:08:57 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:57 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:57 --> URI Class Initialized
INFO - 2024-12-29 21:08:57 --> Router Class Initialized
INFO - 2024-12-29 21:08:57 --> Output Class Initialized
INFO - 2024-12-29 21:08:57 --> Security Class Initialized
DEBUG - 2024-12-29 21:08:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:57 --> Input Class Initialized
INFO - 2024-12-29 21:08:57 --> Language Class Initialized
INFO - 2024-12-29 21:08:57 --> Loader Class Initialized
INFO - 2024-12-29 21:08:57 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:57 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:57 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:57 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:57 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:57 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:57 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:58 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:58 --> Upload Class Initialized
INFO - 2024-12-29 21:08:58 --> Config Class Initialized
INFO - 2024-12-29 21:08:58 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:08:58 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:58 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:58 --> URI Class Initialized
INFO - 2024-12-29 21:08:58 --> Config Class Initialized
INFO - 2024-12-29 21:08:58 --> Config Class Initialized
INFO - 2024-12-29 21:08:58 --> Hooks Class Initialized
INFO - 2024-12-29 21:08:58 --> Router Class Initialized
INFO - 2024-12-29 21:08:58 --> Hooks Class Initialized
INFO - 2024-12-29 21:08:58 --> Output Class Initialized
DEBUG - 2024-12-29 21:08:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 21:08:58 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:58 --> Security Class Initialized
INFO - 2024-12-29 21:08:58 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:58 --> Utf8 Class Initialized
DEBUG - 2024-12-29 21:08:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:58 --> URI Class Initialized
INFO - 2024-12-29 21:08:58 --> URI Class Initialized
INFO - 2024-12-29 21:08:58 --> Input Class Initialized
INFO - 2024-12-29 21:08:58 --> Router Class Initialized
INFO - 2024-12-29 21:08:58 --> Router Class Initialized
INFO - 2024-12-29 21:08:58 --> Language Class Initialized
INFO - 2024-12-29 21:08:58 --> Output Class Initialized
INFO - 2024-12-29 21:08:58 --> Output Class Initialized
INFO - 2024-12-29 21:08:58 --> Loader Class Initialized
INFO - 2024-12-29 21:08:58 --> Security Class Initialized
INFO - 2024-12-29 21:08:58 --> Security Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: form_helper
DEBUG - 2024-12-29 21:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 21:08:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:58 --> Input Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:58 --> Input Class Initialized
INFO - 2024-12-29 21:08:58 --> Language Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:58 --> Language Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:58 --> Loader Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:58 --> Loader Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:58 --> Database Driver Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: string_helper
DEBUG - 2024-12-29 21:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:58 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:58 --> Database Driver Class Initialized
INFO - 2024-12-29 21:08:58 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:58 --> Database Driver Class Initialized
INFO - 2024-12-29 21:08:58 --> Upload Class Initialized
DEBUG - 2024-12-29 21:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 21:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:58 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:58 --> Upload Class Initialized
INFO - 2024-12-29 21:08:58 --> Config Class Initialized
INFO - 2024-12-29 21:08:58 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:08:58 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:58 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:58 --> URI Class Initialized
INFO - 2024-12-29 21:08:58 --> Router Class Initialized
INFO - 2024-12-29 21:08:58 --> Output Class Initialized
INFO - 2024-12-29 21:08:58 --> Security Class Initialized
DEBUG - 2024-12-29 21:08:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:58 --> Input Class Initialized
INFO - 2024-12-29 21:08:58 --> Language Class Initialized
INFO - 2024-12-29 21:08:58 --> Loader Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:58 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:58 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:58 --> Upload Class Initialized
INFO - 2024-12-29 21:08:58 --> Config Class Initialized
INFO - 2024-12-29 21:08:58 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:08:58 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:58 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:58 --> URI Class Initialized
INFO - 2024-12-29 21:08:58 --> Router Class Initialized
INFO - 2024-12-29 21:08:58 --> Output Class Initialized
INFO - 2024-12-29 21:08:58 --> Security Class Initialized
DEBUG - 2024-12-29 21:08:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:58 --> Input Class Initialized
INFO - 2024-12-29 21:08:58 --> Language Class Initialized
INFO - 2024-12-29 21:08:58 --> Loader Class Initialized
INFO - 2024-12-29 21:08:58 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:58 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:58 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:59 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:59 --> Upload Class Initialized
INFO - 2024-12-29 21:08:59 --> Config Class Initialized
INFO - 2024-12-29 21:08:59 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:08:59 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:59 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:59 --> URI Class Initialized
INFO - 2024-12-29 21:08:59 --> Router Class Initialized
INFO - 2024-12-29 21:08:59 --> Output Class Initialized
INFO - 2024-12-29 21:08:59 --> Security Class Initialized
DEBUG - 2024-12-29 21:08:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:59 --> Input Class Initialized
INFO - 2024-12-29 21:08:59 --> Language Class Initialized
INFO - 2024-12-29 21:08:59 --> Loader Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:59 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:08:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:59 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:59 --> Upload Class Initialized
INFO - 2024-12-29 21:08:59 --> Config Class Initialized
INFO - 2024-12-29 21:08:59 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:08:59 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:59 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:59 --> URI Class Initialized
INFO - 2024-12-29 21:08:59 --> Router Class Initialized
INFO - 2024-12-29 21:08:59 --> Output Class Initialized
INFO - 2024-12-29 21:08:59 --> Security Class Initialized
DEBUG - 2024-12-29 21:08:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:59 --> Input Class Initialized
INFO - 2024-12-29 21:08:59 --> Language Class Initialized
INFO - 2024-12-29 21:08:59 --> Loader Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:59 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:08:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:59 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:59 --> Upload Class Initialized
INFO - 2024-12-29 21:08:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:59 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:59 --> Upload Class Initialized
INFO - 2024-12-29 21:08:59 --> Config Class Initialized
INFO - 2024-12-29 21:08:59 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:08:59 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:59 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:59 --> URI Class Initialized
INFO - 2024-12-29 21:08:59 --> Router Class Initialized
INFO - 2024-12-29 21:08:59 --> Output Class Initialized
INFO - 2024-12-29 21:08:59 --> Security Class Initialized
DEBUG - 2024-12-29 21:08:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:59 --> Input Class Initialized
INFO - 2024-12-29 21:08:59 --> Language Class Initialized
INFO - 2024-12-29 21:08:59 --> Loader Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:59 --> Config Class Initialized
INFO - 2024-12-29 21:08:59 --> Config Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:59 --> Hooks Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:59 --> Hooks Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: download_helper
DEBUG - 2024-12-29 21:08:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 21:08:59 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:08:59 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:59 --> Utf8 Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:59 --> URI Class Initialized
INFO - 2024-12-29 21:08:59 --> URI Class Initialized
INFO - 2024-12-29 21:08:59 --> Router Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:59 --> Router Class Initialized
INFO - 2024-12-29 21:08:59 --> Output Class Initialized
INFO - 2024-12-29 21:08:59 --> Output Class Initialized
INFO - 2024-12-29 21:08:59 --> Security Class Initialized
INFO - 2024-12-29 21:08:59 --> Security Class Initialized
INFO - 2024-12-29 21:08:59 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:08:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:08:59 --> Input Class Initialized
DEBUG - 2024-12-29 21:08:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 21:08:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:59 --> Input Class Initialized
INFO - 2024-12-29 21:08:59 --> Language Class Initialized
INFO - 2024-12-29 21:08:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:59 --> Language Class Initialized
INFO - 2024-12-29 21:08:59 --> Loader Class Initialized
INFO - 2024-12-29 21:08:59 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:59 --> Loader Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:59 --> Upload Class Initialized
INFO - 2024-12-29 21:08:59 --> Helper loaded: form_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: url_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: download_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: string_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:59 --> Helper loaded: general_helper
INFO - 2024-12-29 21:08:59 --> Database Driver Class Initialized
INFO - 2024-12-29 21:08:59 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:08:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 21:08:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:08:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:59 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:59 --> Upload Class Initialized
INFO - 2024-12-29 21:08:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:08:59 --> Form Validation Class Initialized
INFO - 2024-12-29 21:08:59 --> Upload Class Initialized
INFO - 2024-12-29 21:09:02 --> Config Class Initialized
INFO - 2024-12-29 21:09:02 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:09:02 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:09:02 --> Utf8 Class Initialized
INFO - 2024-12-29 21:09:02 --> URI Class Initialized
INFO - 2024-12-29 21:09:02 --> Router Class Initialized
INFO - 2024-12-29 21:09:02 --> Output Class Initialized
INFO - 2024-12-29 21:09:02 --> Security Class Initialized
DEBUG - 2024-12-29 21:09:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:09:02 --> Input Class Initialized
INFO - 2024-12-29 21:09:02 --> Language Class Initialized
INFO - 2024-12-29 21:09:02 --> Loader Class Initialized
INFO - 2024-12-29 21:09:02 --> Helper loaded: form_helper
INFO - 2024-12-29 21:09:02 --> Helper loaded: url_helper
INFO - 2024-12-29 21:09:02 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:09:02 --> Helper loaded: download_helper
INFO - 2024-12-29 21:09:02 --> Helper loaded: string_helper
INFO - 2024-12-29 21:09:02 --> Helper loaded: general_helper
INFO - 2024-12-29 21:09:02 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:09:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:09:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:09:02 --> Form Validation Class Initialized
INFO - 2024-12-29 21:09:02 --> Upload Class Initialized
INFO - 2024-12-29 21:09:05 --> Config Class Initialized
INFO - 2024-12-29 21:09:05 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:09:05 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:09:05 --> Utf8 Class Initialized
INFO - 2024-12-29 21:09:05 --> URI Class Initialized
INFO - 2024-12-29 21:09:05 --> Router Class Initialized
INFO - 2024-12-29 21:09:05 --> Output Class Initialized
INFO - 2024-12-29 21:09:05 --> Security Class Initialized
DEBUG - 2024-12-29 21:09:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:09:05 --> Input Class Initialized
INFO - 2024-12-29 21:09:05 --> Language Class Initialized
INFO - 2024-12-29 21:09:05 --> Loader Class Initialized
INFO - 2024-12-29 21:09:05 --> Helper loaded: form_helper
INFO - 2024-12-29 21:09:05 --> Helper loaded: url_helper
INFO - 2024-12-29 21:09:05 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:09:05 --> Helper loaded: download_helper
INFO - 2024-12-29 21:09:05 --> Helper loaded: string_helper
INFO - 2024-12-29 21:09:05 --> Helper loaded: general_helper
INFO - 2024-12-29 21:09:05 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:09:05 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:09:05 --> Form Validation Class Initialized
INFO - 2024-12-29 21:09:05 --> Upload Class Initialized
INFO - 2024-12-29 21:09:16 --> Config Class Initialized
INFO - 2024-12-29 21:09:16 --> Hooks Class Initialized
INFO - 2024-12-29 21:09:16 --> Config Class Initialized
DEBUG - 2024-12-29 21:09:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:09:16 --> Hooks Class Initialized
INFO - 2024-12-29 21:09:16 --> Utf8 Class Initialized
INFO - 2024-12-29 21:09:16 --> URI Class Initialized
DEBUG - 2024-12-29 21:09:16 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:09:16 --> Utf8 Class Initialized
INFO - 2024-12-29 21:09:16 --> Router Class Initialized
INFO - 2024-12-29 21:09:16 --> Output Class Initialized
INFO - 2024-12-29 21:09:16 --> URI Class Initialized
INFO - 2024-12-29 21:09:16 --> Security Class Initialized
INFO - 2024-12-29 21:09:16 --> Router Class Initialized
DEBUG - 2024-12-29 21:09:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:09:16 --> Output Class Initialized
INFO - 2024-12-29 21:09:16 --> Input Class Initialized
INFO - 2024-12-29 21:09:16 --> Language Class Initialized
INFO - 2024-12-29 21:09:16 --> Security Class Initialized
ERROR - 2024-12-29 21:09:16 --> 404 Page Not Found: Assets/template
DEBUG - 2024-12-29 21:09:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:09:16 --> Input Class Initialized
INFO - 2024-12-29 21:09:16 --> Language Class Initialized
ERROR - 2024-12-29 21:09:16 --> 404 Page Not Found: Assets/template
INFO - 2024-12-29 21:18:35 --> Config Class Initialized
INFO - 2024-12-29 21:18:35 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:18:35 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:18:35 --> Utf8 Class Initialized
INFO - 2024-12-29 21:18:35 --> URI Class Initialized
INFO - 2024-12-29 21:18:35 --> Router Class Initialized
INFO - 2024-12-29 21:18:35 --> Output Class Initialized
INFO - 2024-12-29 21:18:35 --> Security Class Initialized
DEBUG - 2024-12-29 21:18:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:18:35 --> Input Class Initialized
INFO - 2024-12-29 21:18:35 --> Language Class Initialized
INFO - 2024-12-29 21:18:35 --> Loader Class Initialized
INFO - 2024-12-29 21:18:35 --> Helper loaded: form_helper
INFO - 2024-12-29 21:18:35 --> Helper loaded: url_helper
INFO - 2024-12-29 21:18:35 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:18:35 --> Helper loaded: download_helper
INFO - 2024-12-29 21:18:35 --> Helper loaded: string_helper
INFO - 2024-12-29 21:18:35 --> Helper loaded: general_helper
INFO - 2024-12-29 21:18:35 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:18:35 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:18:35 --> Form Validation Class Initialized
INFO - 2024-12-29 21:18:35 --> Upload Class Initialized
INFO - 2024-12-29 21:18:40 --> Config Class Initialized
INFO - 2024-12-29 21:18:40 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:18:40 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:18:40 --> Utf8 Class Initialized
INFO - 2024-12-29 21:18:40 --> URI Class Initialized
INFO - 2024-12-29 21:18:40 --> Router Class Initialized
INFO - 2024-12-29 21:18:40 --> Output Class Initialized
INFO - 2024-12-29 21:18:40 --> Security Class Initialized
DEBUG - 2024-12-29 21:18:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:18:40 --> Input Class Initialized
INFO - 2024-12-29 21:18:40 --> Language Class Initialized
INFO - 2024-12-29 21:18:40 --> Loader Class Initialized
INFO - 2024-12-29 21:18:40 --> Helper loaded: form_helper
INFO - 2024-12-29 21:18:40 --> Helper loaded: url_helper
INFO - 2024-12-29 21:18:40 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:18:40 --> Helper loaded: download_helper
INFO - 2024-12-29 21:18:40 --> Helper loaded: string_helper
INFO - 2024-12-29 21:18:40 --> Helper loaded: general_helper
INFO - 2024-12-29 21:18:40 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:18:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:18:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:18:40 --> Form Validation Class Initialized
INFO - 2024-12-29 21:18:40 --> Upload Class Initialized
INFO - 2024-12-29 21:19:13 --> Config Class Initialized
INFO - 2024-12-29 21:19:13 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:19:13 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:19:13 --> Utf8 Class Initialized
INFO - 2024-12-29 21:19:13 --> URI Class Initialized
INFO - 2024-12-29 21:19:13 --> Router Class Initialized
INFO - 2024-12-29 21:19:13 --> Output Class Initialized
INFO - 2024-12-29 21:19:13 --> Security Class Initialized
DEBUG - 2024-12-29 21:19:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:19:13 --> Input Class Initialized
INFO - 2024-12-29 21:19:13 --> Language Class Initialized
INFO - 2024-12-29 21:19:13 --> Loader Class Initialized
INFO - 2024-12-29 21:19:13 --> Helper loaded: form_helper
INFO - 2024-12-29 21:19:13 --> Helper loaded: url_helper
INFO - 2024-12-29 21:19:13 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:19:13 --> Helper loaded: download_helper
INFO - 2024-12-29 21:19:13 --> Helper loaded: string_helper
INFO - 2024-12-29 21:19:13 --> Helper loaded: general_helper
INFO - 2024-12-29 21:19:13 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:19:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:19:13 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:19:13 --> Form Validation Class Initialized
INFO - 2024-12-29 21:19:13 --> Upload Class Initialized
INFO - 2024-12-29 21:19:15 --> Config Class Initialized
INFO - 2024-12-29 21:19:15 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:19:15 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:19:15 --> Utf8 Class Initialized
INFO - 2024-12-29 21:19:15 --> URI Class Initialized
INFO - 2024-12-29 21:19:15 --> Router Class Initialized
INFO - 2024-12-29 21:19:15 --> Output Class Initialized
INFO - 2024-12-29 21:19:15 --> Security Class Initialized
DEBUG - 2024-12-29 21:19:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:19:15 --> Input Class Initialized
INFO - 2024-12-29 21:19:15 --> Language Class Initialized
INFO - 2024-12-29 21:19:15 --> Loader Class Initialized
INFO - 2024-12-29 21:19:15 --> Helper loaded: form_helper
INFO - 2024-12-29 21:19:15 --> Helper loaded: url_helper
INFO - 2024-12-29 21:19:15 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:19:15 --> Helper loaded: download_helper
INFO - 2024-12-29 21:19:15 --> Helper loaded: string_helper
INFO - 2024-12-29 21:19:15 --> Helper loaded: general_helper
INFO - 2024-12-29 21:19:15 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:19:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:19:15 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:19:15 --> Form Validation Class Initialized
INFO - 2024-12-29 21:19:15 --> Upload Class Initialized
INFO - 2024-12-29 21:19:17 --> Config Class Initialized
INFO - 2024-12-29 21:19:17 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:19:17 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:19:17 --> Utf8 Class Initialized
INFO - 2024-12-29 21:19:17 --> URI Class Initialized
INFO - 2024-12-29 21:19:17 --> Router Class Initialized
INFO - 2024-12-29 21:19:17 --> Output Class Initialized
INFO - 2024-12-29 21:19:17 --> Security Class Initialized
DEBUG - 2024-12-29 21:19:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:19:17 --> Input Class Initialized
INFO - 2024-12-29 21:19:17 --> Language Class Initialized
INFO - 2024-12-29 21:19:17 --> Loader Class Initialized
INFO - 2024-12-29 21:19:17 --> Helper loaded: form_helper
INFO - 2024-12-29 21:19:17 --> Helper loaded: url_helper
INFO - 2024-12-29 21:19:17 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:19:17 --> Helper loaded: download_helper
INFO - 2024-12-29 21:19:17 --> Helper loaded: string_helper
INFO - 2024-12-29 21:19:17 --> Helper loaded: general_helper
INFO - 2024-12-29 21:19:17 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:19:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:19:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:19:17 --> Form Validation Class Initialized
INFO - 2024-12-29 21:19:17 --> Upload Class Initialized
INFO - 2024-12-29 21:19:24 --> Config Class Initialized
INFO - 2024-12-29 21:19:24 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:19:24 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:19:24 --> Utf8 Class Initialized
INFO - 2024-12-29 21:19:24 --> URI Class Initialized
INFO - 2024-12-29 21:19:24 --> Router Class Initialized
INFO - 2024-12-29 21:19:24 --> Output Class Initialized
INFO - 2024-12-29 21:19:24 --> Security Class Initialized
DEBUG - 2024-12-29 21:19:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:19:24 --> Input Class Initialized
INFO - 2024-12-29 21:19:24 --> Language Class Initialized
INFO - 2024-12-29 21:19:24 --> Loader Class Initialized
INFO - 2024-12-29 21:19:24 --> Helper loaded: form_helper
INFO - 2024-12-29 21:19:24 --> Helper loaded: url_helper
INFO - 2024-12-29 21:19:24 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:19:24 --> Helper loaded: download_helper
INFO - 2024-12-29 21:19:24 --> Helper loaded: string_helper
INFO - 2024-12-29 21:19:24 --> Helper loaded: general_helper
INFO - 2024-12-29 21:19:24 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:19:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:19:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:19:24 --> Form Validation Class Initialized
INFO - 2024-12-29 21:19:24 --> Upload Class Initialized
INFO - 2024-12-29 21:23:30 --> Config Class Initialized
INFO - 2024-12-29 21:23:30 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:30 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:30 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:30 --> URI Class Initialized
INFO - 2024-12-29 21:23:30 --> Router Class Initialized
INFO - 2024-12-29 21:23:30 --> Output Class Initialized
INFO - 2024-12-29 21:23:30 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:30 --> Input Class Initialized
INFO - 2024-12-29 21:23:30 --> Language Class Initialized
INFO - 2024-12-29 21:23:30 --> Loader Class Initialized
INFO - 2024-12-29 21:23:30 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:30 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:30 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:30 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:30 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:31 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:31 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:31 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:31 --> Upload Class Initialized
INFO - 2024-12-29 21:23:31 --> Config Class Initialized
INFO - 2024-12-29 21:23:31 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:31 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:31 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:31 --> URI Class Initialized
INFO - 2024-12-29 21:23:31 --> Router Class Initialized
INFO - 2024-12-29 21:23:31 --> Output Class Initialized
INFO - 2024-12-29 21:23:31 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:31 --> Input Class Initialized
INFO - 2024-12-29 21:23:31 --> Language Class Initialized
ERROR - 2024-12-29 21:23:31 --> 404 Page Not Found: Assets/template
INFO - 2024-12-29 21:23:31 --> Config Class Initialized
INFO - 2024-12-29 21:23:31 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:31 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:31 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:31 --> URI Class Initialized
INFO - 2024-12-29 21:23:31 --> Router Class Initialized
INFO - 2024-12-29 21:23:31 --> Output Class Initialized
INFO - 2024-12-29 21:23:31 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:31 --> Input Class Initialized
INFO - 2024-12-29 21:23:31 --> Language Class Initialized
ERROR - 2024-12-29 21:23:31 --> 404 Page Not Found: Assets/template
INFO - 2024-12-29 21:23:31 --> Config Class Initialized
INFO - 2024-12-29 21:23:31 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:31 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:31 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:31 --> URI Class Initialized
INFO - 2024-12-29 21:23:31 --> Router Class Initialized
INFO - 2024-12-29 21:23:31 --> Output Class Initialized
INFO - 2024-12-29 21:23:31 --> Config Class Initialized
INFO - 2024-12-29 21:23:31 --> Config Class Initialized
INFO - 2024-12-29 21:23:31 --> Security Class Initialized
INFO - 2024-12-29 21:23:31 --> Hooks Class Initialized
INFO - 2024-12-29 21:23:31 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 21:23:31 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:31 --> Input Class Initialized
DEBUG - 2024-12-29 21:23:31 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:31 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:31 --> Language Class Initialized
INFO - 2024-12-29 21:23:31 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:31 --> URI Class Initialized
INFO - 2024-12-29 21:23:31 --> URI Class Initialized
INFO - 2024-12-29 21:23:31 --> Router Class Initialized
INFO - 2024-12-29 21:23:31 --> Loader Class Initialized
INFO - 2024-12-29 21:23:31 --> Router Class Initialized
INFO - 2024-12-29 21:23:31 --> Output Class Initialized
INFO - 2024-12-29 21:23:31 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:31 --> Output Class Initialized
INFO - 2024-12-29 21:23:31 --> Security Class Initialized
INFO - 2024-12-29 21:23:31 --> Security Class Initialized
INFO - 2024-12-29 21:23:31 --> Helper loaded: url_helper
DEBUG - 2024-12-29 21:23:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 21:23:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:31 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:31 --> Input Class Initialized
INFO - 2024-12-29 21:23:31 --> Input Class Initialized
INFO - 2024-12-29 21:23:31 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:31 --> Language Class Initialized
INFO - 2024-12-29 21:23:31 --> Language Class Initialized
INFO - 2024-12-29 21:23:31 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:31 --> Loader Class Initialized
INFO - 2024-12-29 21:23:31 --> Loader Class Initialized
INFO - 2024-12-29 21:23:31 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:31 --> Database Driver Class Initialized
INFO - 2024-12-29 21:23:31 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:31 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:31 --> Database Driver Class Initialized
INFO - 2024-12-29 21:23:31 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:31 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:31 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:31 --> Upload Class Initialized
DEBUG - 2024-12-29 21:23:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-12-29 21:23:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:32 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:32 --> Upload Class Initialized
INFO - 2024-12-29 21:23:32 --> Config Class Initialized
INFO - 2024-12-29 21:23:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:32 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:32 --> URI Class Initialized
INFO - 2024-12-29 21:23:32 --> Router Class Initialized
INFO - 2024-12-29 21:23:32 --> Output Class Initialized
INFO - 2024-12-29 21:23:32 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:32 --> Input Class Initialized
INFO - 2024-12-29 21:23:32 --> Language Class Initialized
INFO - 2024-12-29 21:23:32 --> Loader Class Initialized
INFO - 2024-12-29 21:23:32 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:32 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:32 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:32 --> Upload Class Initialized
INFO - 2024-12-29 21:23:32 --> Config Class Initialized
INFO - 2024-12-29 21:23:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:32 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:32 --> URI Class Initialized
INFO - 2024-12-29 21:23:32 --> Router Class Initialized
INFO - 2024-12-29 21:23:32 --> Output Class Initialized
INFO - 2024-12-29 21:23:32 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:32 --> Input Class Initialized
INFO - 2024-12-29 21:23:32 --> Language Class Initialized
INFO - 2024-12-29 21:23:32 --> Loader Class Initialized
INFO - 2024-12-29 21:23:32 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:32 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:32 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:32 --> Upload Class Initialized
INFO - 2024-12-29 21:23:32 --> Config Class Initialized
INFO - 2024-12-29 21:23:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:32 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:32 --> URI Class Initialized
INFO - 2024-12-29 21:23:32 --> Router Class Initialized
INFO - 2024-12-29 21:23:32 --> Output Class Initialized
INFO - 2024-12-29 21:23:32 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:32 --> Input Class Initialized
INFO - 2024-12-29 21:23:32 --> Language Class Initialized
INFO - 2024-12-29 21:23:32 --> Loader Class Initialized
INFO - 2024-12-29 21:23:32 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:32 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:32 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:32 --> Upload Class Initialized
INFO - 2024-12-29 21:23:32 --> Config Class Initialized
INFO - 2024-12-29 21:23:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:32 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:32 --> URI Class Initialized
INFO - 2024-12-29 21:23:32 --> Router Class Initialized
INFO - 2024-12-29 21:23:32 --> Output Class Initialized
INFO - 2024-12-29 21:23:32 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:32 --> Input Class Initialized
INFO - 2024-12-29 21:23:32 --> Language Class Initialized
INFO - 2024-12-29 21:23:32 --> Loader Class Initialized
INFO - 2024-12-29 21:23:32 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:32 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:32 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:32 --> Upload Class Initialized
INFO - 2024-12-29 21:23:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:32 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:32 --> Upload Class Initialized
INFO - 2024-12-29 21:23:32 --> Config Class Initialized
INFO - 2024-12-29 21:23:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:32 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:32 --> Config Class Initialized
INFO - 2024-12-29 21:23:32 --> URI Class Initialized
INFO - 2024-12-29 21:23:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:32 --> Router Class Initialized
INFO - 2024-12-29 21:23:32 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:32 --> Output Class Initialized
INFO - 2024-12-29 21:23:32 --> URI Class Initialized
INFO - 2024-12-29 21:23:32 --> Security Class Initialized
INFO - 2024-12-29 21:23:32 --> Router Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:32 --> Output Class Initialized
INFO - 2024-12-29 21:23:32 --> Input Class Initialized
INFO - 2024-12-29 21:23:32 --> Security Class Initialized
INFO - 2024-12-29 21:23:32 --> Language Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:32 --> Input Class Initialized
INFO - 2024-12-29 21:23:32 --> Loader Class Initialized
INFO - 2024-12-29 21:23:32 --> Language Class Initialized
INFO - 2024-12-29 21:23:32 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:32 --> Loader Class Initialized
INFO - 2024-12-29 21:23:32 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:32 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:32 --> Database Driver Class Initialized
INFO - 2024-12-29 21:23:32 --> Database Driver Class Initialized
INFO - 2024-12-29 21:23:32 --> Config Class Initialized
INFO - 2024-12-29 21:23:32 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:32 --> Session: Class initialized using 'files' driver.
DEBUG - 2024-12-29 21:23:32 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:32 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:32 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:32 --> URI Class Initialized
INFO - 2024-12-29 21:23:32 --> Upload Class Initialized
INFO - 2024-12-29 21:23:32 --> Router Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:32 --> Output Class Initialized
INFO - 2024-12-29 21:23:32 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:32 --> Input Class Initialized
INFO - 2024-12-29 21:23:32 --> Language Class Initialized
INFO - 2024-12-29 21:23:32 --> Loader Class Initialized
INFO - 2024-12-29 21:23:33 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:33 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:33 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:33 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:33 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:33 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:33 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:33 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:33 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:33 --> Upload Class Initialized
INFO - 2024-12-29 21:23:33 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:33 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:33 --> Upload Class Initialized
INFO - 2024-12-29 21:23:39 --> Config Class Initialized
INFO - 2024-12-29 21:23:39 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:39 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:39 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:39 --> URI Class Initialized
INFO - 2024-12-29 21:23:39 --> Router Class Initialized
INFO - 2024-12-29 21:23:39 --> Output Class Initialized
INFO - 2024-12-29 21:23:39 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:39 --> Input Class Initialized
INFO - 2024-12-29 21:23:39 --> Language Class Initialized
INFO - 2024-12-29 21:23:39 --> Loader Class Initialized
INFO - 2024-12-29 21:23:39 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:39 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:39 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:39 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:39 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:39 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:39 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:39 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:39 --> Upload Class Initialized
INFO - 2024-12-29 21:23:43 --> Config Class Initialized
INFO - 2024-12-29 21:23:43 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:23:43 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:23:43 --> Utf8 Class Initialized
INFO - 2024-12-29 21:23:43 --> URI Class Initialized
INFO - 2024-12-29 21:23:43 --> Router Class Initialized
INFO - 2024-12-29 21:23:43 --> Output Class Initialized
INFO - 2024-12-29 21:23:43 --> Security Class Initialized
DEBUG - 2024-12-29 21:23:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:23:43 --> Input Class Initialized
INFO - 2024-12-29 21:23:43 --> Language Class Initialized
INFO - 2024-12-29 21:23:43 --> Loader Class Initialized
INFO - 2024-12-29 21:23:43 --> Helper loaded: form_helper
INFO - 2024-12-29 21:23:43 --> Helper loaded: url_helper
INFO - 2024-12-29 21:23:43 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:23:43 --> Helper loaded: download_helper
INFO - 2024-12-29 21:23:43 --> Helper loaded: string_helper
INFO - 2024-12-29 21:23:43 --> Helper loaded: general_helper
INFO - 2024-12-29 21:23:43 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:23:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:23:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:23:43 --> Form Validation Class Initialized
INFO - 2024-12-29 21:23:43 --> Upload Class Initialized
INFO - 2024-12-29 21:29:35 --> Config Class Initialized
INFO - 2024-12-29 21:29:35 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:29:35 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:29:35 --> Utf8 Class Initialized
INFO - 2024-12-29 21:29:35 --> URI Class Initialized
INFO - 2024-12-29 21:29:35 --> Router Class Initialized
INFO - 2024-12-29 21:29:35 --> Output Class Initialized
INFO - 2024-12-29 21:29:35 --> Security Class Initialized
DEBUG - 2024-12-29 21:29:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:29:35 --> Input Class Initialized
INFO - 2024-12-29 21:29:35 --> Language Class Initialized
INFO - 2024-12-29 21:29:35 --> Loader Class Initialized
INFO - 2024-12-29 21:29:36 --> Helper loaded: form_helper
INFO - 2024-12-29 21:29:36 --> Helper loaded: url_helper
INFO - 2024-12-29 21:29:36 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:29:36 --> Helper loaded: download_helper
INFO - 2024-12-29 21:29:36 --> Helper loaded: string_helper
INFO - 2024-12-29 21:29:36 --> Helper loaded: general_helper
INFO - 2024-12-29 21:29:36 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:29:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:29:36 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:29:36 --> Form Validation Class Initialized
INFO - 2024-12-29 21:29:36 --> Upload Class Initialized
INFO - 2024-12-29 21:29:37 --> Config Class Initialized
INFO - 2024-12-29 21:29:37 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:29:37 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:29:37 --> Utf8 Class Initialized
INFO - 2024-12-29 21:29:37 --> URI Class Initialized
INFO - 2024-12-29 21:29:37 --> Router Class Initialized
INFO - 2024-12-29 21:29:37 --> Output Class Initialized
INFO - 2024-12-29 21:29:37 --> Security Class Initialized
DEBUG - 2024-12-29 21:29:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:29:37 --> Input Class Initialized
INFO - 2024-12-29 21:29:37 --> Language Class Initialized
INFO - 2024-12-29 21:29:37 --> Loader Class Initialized
INFO - 2024-12-29 21:29:37 --> Helper loaded: form_helper
INFO - 2024-12-29 21:29:37 --> Helper loaded: url_helper
INFO - 2024-12-29 21:29:37 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:29:37 --> Helper loaded: download_helper
INFO - 2024-12-29 21:29:37 --> Helper loaded: string_helper
INFO - 2024-12-29 21:29:37 --> Helper loaded: general_helper
INFO - 2024-12-29 21:29:37 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:29:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:29:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:29:38 --> Form Validation Class Initialized
INFO - 2024-12-29 21:29:38 --> Upload Class Initialized
INFO - 2024-12-29 21:29:40 --> Config Class Initialized
INFO - 2024-12-29 21:29:40 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:29:40 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:29:40 --> Utf8 Class Initialized
INFO - 2024-12-29 21:29:40 --> URI Class Initialized
INFO - 2024-12-29 21:29:40 --> Router Class Initialized
INFO - 2024-12-29 21:29:40 --> Output Class Initialized
INFO - 2024-12-29 21:29:40 --> Security Class Initialized
DEBUG - 2024-12-29 21:29:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:29:40 --> Input Class Initialized
INFO - 2024-12-29 21:29:40 --> Language Class Initialized
INFO - 2024-12-29 21:29:40 --> Loader Class Initialized
INFO - 2024-12-29 21:29:40 --> Helper loaded: form_helper
INFO - 2024-12-29 21:29:40 --> Helper loaded: url_helper
INFO - 2024-12-29 21:29:40 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:29:40 --> Helper loaded: download_helper
INFO - 2024-12-29 21:29:40 --> Helper loaded: string_helper
INFO - 2024-12-29 21:29:40 --> Helper loaded: general_helper
INFO - 2024-12-29 21:29:40 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:29:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:29:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:29:40 --> Form Validation Class Initialized
INFO - 2024-12-29 21:29:40 --> Upload Class Initialized
INFO - 2024-12-29 21:59:07 --> Config Class Initialized
INFO - 2024-12-29 21:59:07 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:59:07 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:59:07 --> Utf8 Class Initialized
INFO - 2024-12-29 21:59:07 --> URI Class Initialized
INFO - 2024-12-29 21:59:07 --> Router Class Initialized
INFO - 2024-12-29 21:59:07 --> Output Class Initialized
INFO - 2024-12-29 21:59:07 --> Security Class Initialized
DEBUG - 2024-12-29 21:59:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:59:07 --> Input Class Initialized
INFO - 2024-12-29 21:59:07 --> Language Class Initialized
INFO - 2024-12-29 21:59:07 --> Loader Class Initialized
INFO - 2024-12-29 21:59:07 --> Helper loaded: form_helper
INFO - 2024-12-29 21:59:07 --> Helper loaded: url_helper
INFO - 2024-12-29 21:59:07 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:59:07 --> Helper loaded: download_helper
INFO - 2024-12-29 21:59:07 --> Helper loaded: string_helper
INFO - 2024-12-29 21:59:07 --> Helper loaded: general_helper
INFO - 2024-12-29 21:59:07 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:59:07 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:59:07 --> Form Validation Class Initialized
INFO - 2024-12-29 21:59:07 --> Upload Class Initialized
INFO - 2024-12-29 21:59:10 --> Config Class Initialized
INFO - 2024-12-29 21:59:10 --> Hooks Class Initialized
DEBUG - 2024-12-29 21:59:10 --> UTF-8 Support Enabled
INFO - 2024-12-29 21:59:10 --> Utf8 Class Initialized
INFO - 2024-12-29 21:59:10 --> URI Class Initialized
INFO - 2024-12-29 21:59:10 --> Router Class Initialized
INFO - 2024-12-29 21:59:10 --> Output Class Initialized
INFO - 2024-12-29 21:59:10 --> Security Class Initialized
DEBUG - 2024-12-29 21:59:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 21:59:10 --> Input Class Initialized
INFO - 2024-12-29 21:59:10 --> Language Class Initialized
INFO - 2024-12-29 21:59:10 --> Loader Class Initialized
INFO - 2024-12-29 21:59:10 --> Helper loaded: form_helper
INFO - 2024-12-29 21:59:10 --> Helper loaded: url_helper
INFO - 2024-12-29 21:59:10 --> Helper loaded: directory_helper
INFO - 2024-12-29 21:59:10 --> Helper loaded: download_helper
INFO - 2024-12-29 21:59:10 --> Helper loaded: string_helper
INFO - 2024-12-29 21:59:10 --> Helper loaded: general_helper
INFO - 2024-12-29 21:59:10 --> Database Driver Class Initialized
DEBUG - 2024-12-29 21:59:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 21:59:10 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 21:59:10 --> Form Validation Class Initialized
INFO - 2024-12-29 21:59:10 --> Upload Class Initialized
INFO - 2024-12-29 22:00:07 --> Config Class Initialized
INFO - 2024-12-29 22:00:07 --> Hooks Class Initialized
DEBUG - 2024-12-29 22:00:07 --> UTF-8 Support Enabled
INFO - 2024-12-29 22:00:07 --> Utf8 Class Initialized
INFO - 2024-12-29 22:00:07 --> URI Class Initialized
INFO - 2024-12-29 22:00:07 --> Router Class Initialized
INFO - 2024-12-29 22:00:07 --> Output Class Initialized
INFO - 2024-12-29 22:00:07 --> Security Class Initialized
DEBUG - 2024-12-29 22:00:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 22:00:07 --> Input Class Initialized
INFO - 2024-12-29 22:00:07 --> Language Class Initialized
INFO - 2024-12-29 22:00:07 --> Loader Class Initialized
INFO - 2024-12-29 22:00:07 --> Helper loaded: form_helper
INFO - 2024-12-29 22:00:07 --> Helper loaded: url_helper
INFO - 2024-12-29 22:00:07 --> Helper loaded: directory_helper
INFO - 2024-12-29 22:00:07 --> Helper loaded: download_helper
INFO - 2024-12-29 22:00:07 --> Helper loaded: string_helper
INFO - 2024-12-29 22:00:07 --> Helper loaded: general_helper
INFO - 2024-12-29 22:00:07 --> Database Driver Class Initialized
DEBUG - 2024-12-29 22:00:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 22:00:07 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 22:00:07 --> Form Validation Class Initialized
INFO - 2024-12-29 22:00:07 --> Upload Class Initialized
INFO - 2024-12-29 22:00:15 --> Config Class Initialized
INFO - 2024-12-29 22:00:15 --> Hooks Class Initialized
DEBUG - 2024-12-29 22:00:15 --> UTF-8 Support Enabled
INFO - 2024-12-29 22:00:15 --> Utf8 Class Initialized
INFO - 2024-12-29 22:00:15 --> URI Class Initialized
INFO - 2024-12-29 22:00:15 --> Router Class Initialized
INFO - 2024-12-29 22:00:15 --> Output Class Initialized
INFO - 2024-12-29 22:00:15 --> Security Class Initialized
DEBUG - 2024-12-29 22:00:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-12-29 22:00:15 --> Input Class Initialized
INFO - 2024-12-29 22:00:15 --> Language Class Initialized
INFO - 2024-12-29 22:00:15 --> Loader Class Initialized
INFO - 2024-12-29 22:00:15 --> Helper loaded: form_helper
INFO - 2024-12-29 22:00:15 --> Helper loaded: url_helper
INFO - 2024-12-29 22:00:15 --> Helper loaded: directory_helper
INFO - 2024-12-29 22:00:15 --> Helper loaded: download_helper
INFO - 2024-12-29 22:00:15 --> Helper loaded: string_helper
INFO - 2024-12-29 22:00:15 --> Helper loaded: general_helper
INFO - 2024-12-29 22:00:15 --> Database Driver Class Initialized
DEBUG - 2024-12-29 22:00:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-12-29 22:00:15 --> Session: Class initialized using 'files' driver.
INFO - 2024-12-29 22:00:15 --> Form Validation Class Initialized
INFO - 2024-12-29 22:00:15 --> Upload Class Initialized
