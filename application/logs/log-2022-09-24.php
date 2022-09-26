<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-24 09:13:28 --> Severity: error --> Exception: Invalid size representation "100% !important" C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 30562
ERROR - 2022-09-24 09:13:47 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:14:04 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:14:47 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:14:55 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:26:11 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:27:20 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
<<<<<<< HEAD
ERROR - 2022-09-24 12:05:57 --> Severity: Notice --> Undefined property: Sales::$column_search C:\xampp\htdocs\legalmis\system\core\Model.php 74
ERROR - 2022-09-24 12:05:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\legalmis\application\models\supermodel.php 131
ERROR - 2022-09-24 12:05:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC' at line 10 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(sub_services.name) as subserviceid
=======
ERROR - 2022-09-24 10:33:00 --> Severity: error --> Exception: syntax error, unexpected 'base_url' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 88
ERROR - 2022-09-24 10:33:01 --> Severity: error --> Exception: syntax error, unexpected 'base_url' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 88
ERROR - 2022-09-24 10:33:01 --> Severity: error --> Exception: syntax error, unexpected 'base_url' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 88
ERROR - 2022-09-24 10:34:07 --> Severity: error --> Exception: syntax error, unexpected 'base64_encode' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 88
ERROR - 2022-09-24 10:34:30 --> 404 Page Not Found: Sales/edit_sales
ERROR - 2022-09-24 10:53:34 --> Severity: error --> Exception: syntax error, unexpected 'sales' (T_STRING), expecting ')' C:\xampp\htdocs\legalmis\application\models\supermodel.php 189
ERROR - 2022-09-24 11:06:09 --> Query error: Unknown column 'sale_service_brand.id' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(sales_services.id) as sales_services_id, GROUP_CONCAT(sales_services.services_id) as services_id, GROUP_CONCAT(sales_sub_services.id) as sales_sub_services_id, GROUP_CONCAT(sales_sub_services.sub_services_id) as sub_services_id, GROUP_CONCAT(sale_service_brand.id) as sale_service_brand_id, GROUP_CONCAT(sale_service_brand.brand_name)
>>>>>>> 1d33d86d104220bc0c033d71cedc2145b7a9ce5a
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
<<<<<<< HEAD
AND   (
`id` LIKE '%g%' ESCAPE '!'
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC
ERROR - 2022-09-24 12:05:58 --> Severity: Notice --> Undefined property: Sales::$column_search C:\xampp\htdocs\legalmis\system\core\Model.php 74
ERROR - 2022-09-24 12:05:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\legalmis\application\models\supermodel.php 131
ERROR - 2022-09-24 12:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC' at line 10 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(sub_services.name) as subserviceid
=======
AND `sales`.`id` = '2'
GROUP BY `sales`.`id`
ERROR - 2022-09-24 11:10:32 --> Query error: Unknown column 'sale_service_brand.fk_sale_id' in 'on clause' - Invalid query: SELECT `sales`.*, GROUP_CONCAT(sales_services.id) as sales_services_id, GROUP_CONCAT(sales_services.services_id) as services_id, GROUP_CONCAT(sales_sub_services.id) as sales_sub_services_id, GROUP_CONCAT(sales_sub_services.sub_services_id) as sub_services_id, GROUP_CONCAT(sale_service_brand.id) as sale_service_brand_id, GROUP_CONCAT(sale_service_brand.brand_name) as brand_name, GROUP_CONCAT(sale_service_class.id) as sale_service_class_id, GROUP_CONCAT(sale_service_class.class_name) as class_name
>>>>>>> 1d33d86d104220bc0c033d71cedc2145b7a9ce5a
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
<<<<<<< HEAD
WHERE `sales`.`status` = 1
AND   (
`id` LIKE '%gdf%' ESCAPE '!'
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC
ERROR - 2022-09-24 12:10:45 --> Severity: Notice --> Undefined property: Sales::$column_search C:\xampp\htdocs\legalmis\system\core\Model.php 74
ERROR - 2022-09-24 12:10:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\legalmis\application\models\supermodel.php 131
ERROR - 2022-09-24 12:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC' at line 10 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND   (
`id` LIKE '%fhdgjkfb%' ESCAPE '!'
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC
ERROR - 2022-09-24 12:10:59 --> Severity: Notice --> Undefined property: Sales::$column_search C:\xampp\htdocs\legalmis\system\core\Model.php 74
ERROR - 2022-09-24 12:10:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\legalmis\application\models\supermodel.php 131
ERROR - 2022-09-24 12:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC' at line 10 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND   (
`id` LIKE '%fhdgjkf%' ESCAPE '!'
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC
ERROR - 2022-09-24 12:11:31 --> Severity: Notice --> Undefined property: Sales::$column_search C:\xampp\htdocs\legalmis\system\core\Model.php 74
ERROR - 2022-09-24 12:11:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\legalmis\application\models\supermodel.php 131
ERROR - 2022-09-24 12:11:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC' at line 10 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND   (
`id` LIKE '%fhdgjk%' ESCAPE '!'
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC
ERROR - 2022-09-24 13:19:55 --> Severity: Warning --> Illegal string offset 'start' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 83
ERROR - 2022-09-24 13:19:55 --> Severity: Warning --> Illegal string offset 'length' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 84
ERROR - 2022-09-24 13:19:55 --> Severity: Warning --> Illegal string offset 'search' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 85
ERROR - 2022-09-24 13:19:55 --> Severity: Warning --> Illegal string offset 'value' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 85
ERROR - 2022-09-24 13:19:55 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 115
ERROR - 2022-09-24 13:19:55 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 115
ERROR - 2022-09-24 13:19:55 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 115
ERROR - 2022-09-24 13:19:55 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 115
ERROR - 2022-09-24 13:19:55 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 115
ERROR - 2022-09-24 13:19:55 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 115
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 83
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 84
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 85
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 85
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:21:52 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:22:04 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:22:04 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:22:04 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:22:04 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:22:04 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:22:04 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 113
ERROR - 2022-09-24 13:24:19 --> Severity: error --> Exception: Call to undefined method supermodel::_getsalesrecord_query() C:\xampp\htdocs\legalmis\application\models\supermodel.php 124
ERROR - 2022-09-24 13:25:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* LIKE '%gjhgjhj% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (`sales`.* LIKE '%gjhgjhj% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-09-24 13:34:05 --> Severity: Warning --> Illegal string offset 'start' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 83
ERROR - 2022-09-24 13:34:05 --> Severity: Warning --> Illegal string offset 'length' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 84
ERROR - 2022-09-24 13:34:05 --> Severity: Warning --> Illegal string offset 'search' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 85
ERROR - 2022-09-24 13:34:05 --> Severity: Warning --> Illegal string offset 'value' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 85
ERROR - 2022-09-24 13:34:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* LIKE '%{% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 0' at line 8 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (`sales`.* LIKE '%{% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 0
ERROR - 2022-09-24 13:34:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* LIKE '%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (`sales`.* LIKE '%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-09-24 13:35:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* LIKE '%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (`sales`.* LIKE '%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-09-24 13:38:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (`sales`.`client_name` LIKE '%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-09-24 13:40:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (`sales`.`client_name` LIKE '%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-09-24 13:41:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (`sales`.`client_name` LIKE '%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-09-24 13:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (`sales`.`client_name` LIKE '%fhdgjkfb% )
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-09-24 14:27:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:28:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:28:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:31:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:31:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:33:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:36:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:43:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:45:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:46:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:47:49 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 484
ERROR - 2022-09-24 14:48:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:49:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:55:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:57:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 14:57:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:00:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:02:25 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 484
ERROR - 2022-09-24 15:04:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:10:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:14:39 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 484
ERROR - 2022-09-24 15:20:58 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 484
ERROR - 2022-09-24 15:22:28 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 484
ERROR - 2022-09-24 15:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:23:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:23:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:26:14 --> 404 Page Not Found: Sales/cal_tcs_outstanding
ERROR - 2022-09-24 15:27:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 819
ERROR - 2022-09-24 15:29:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 819
ERROR - 2022-09-24 15:39:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:41:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:49:24 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 484
ERROR - 2022-09-24 15:50:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:50:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 15:51:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 16:00:19 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 484
ERROR - 2022-09-24 16:00:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 16:01:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 16:01:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 16:01:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 16:53:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 872
ERROR - 2022-09-24 16:57:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 874
ERROR - 2022-09-24 21:02:08 --> Severity: error --> Exception: syntax error, unexpected '$nestedData' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 134
ERROR - 2022-09-24 22:50:08 --> 404 Page Not Found: Person/ajax_edit
ERROR - 2022-09-24 22:53:36 --> Severity: error --> Exception: Call to a member function get_by_id() on null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1487
ERROR - 2022-09-24 22:53:43 --> Severity: error --> Exception: Call to a member function get_by_id() on null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1487
ERROR - 2022-09-24 22:54:42 --> Severity: error --> Exception: Call to a member function get_by_id() on null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1487
ERROR - 2022-09-24 22:55:36 --> Severity: error --> Exception: Call to a member function get_by_id() on null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1487
ERROR - 2022-09-24 22:56:44 --> Severity: error --> Exception: Too few arguments to function Sales::ajax_edit(), 0 passed in C:\xampp\htdocs\legalmis\system\core\CodeIgniter.php on line 533 and exactly 1 expected C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1485
ERROR - 2022-09-24 22:56:48 --> Severity: error --> Exception: Call to a member function get_by_id() on null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1487
ERROR - 2022-09-24 22:56:58 --> Severity: error --> Exception: Call to a member function get_by_id() on null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1487
ERROR - 2022-09-24 22:58:45 --> Severity: error --> Exception: Call to a member function get_by_id() on null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1487
ERROR - 2022-09-24 23:00:10 --> Severity: error --> Exception: Too few arguments to function Sales::ajax_edit(), 0 passed in C:\xampp\htdocs\legalmis\system\core\CodeIgniter.php on line 533 and exactly 1 expected C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1485
ERROR - 2022-09-24 23:00:36 --> Severity: error --> Exception: Too few arguments to function Sales::ajax_edit(), 0 passed in C:\xampp\htdocs\legalmis\system\core\CodeIgniter.php on line 533 and exactly 1 expected C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1485
=======
LEFT JOIN `sale_service_brand` ON `sales`.`id`=`sale_service_brand`.`fk_sale_id`
LEFT JOIN `sale_service_class` ON `sale_service_class`.`fk_sale_id`=`sales`.`id`
WHERE `sales`.`id` = '2'
AND `sales`.`status` = 1
GROUP BY `sales`.`id`
ERROR - 2022-09-24 11:19:53 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 482
ERROR - 2022-09-24 11:37:23 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 482
ERROR - 2022-09-24 12:03:56 --> Severity: error --> Exception: Call to undefined method supermodel::get_sale_service_brand() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 160
ERROR - 2022-09-24 12:10:24 --> Severity: Compile Error --> Cannot redeclare supermodel::get_sale_sub_service() C:\xampp\htdocs\legalmis\application\models\supermodel.php 213
ERROR - 2022-09-24 12:10:26 --> Severity: Compile Error --> Cannot redeclare supermodel::get_sale_sub_service() C:\xampp\htdocs\legalmis\application\models\supermodel.php 213
ERROR - 2022-09-24 12:10:54 --> Severity: error --> Exception: Call to undefined method supermodel::get_sale_service_class() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 161
>>>>>>> 1d33d86d104220bc0c033d71cedc2145b7a9ce5a
