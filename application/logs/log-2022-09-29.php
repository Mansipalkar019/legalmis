<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<<<<<<< HEAD
ERROR - 2022-09-29 10:23:48 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT GROUP_CONCAT(sub_services.name) as subservicename, GROUP_CONCAT(sales_sub_services.services_id) as subserviceid
FROM `sales_sub_services`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`services_id`
WHERE `sales_sub_services`.`services_id` = Array
GROUP BY `sales_sub_services`.`id`
ERROR - 2022-09-29 12:28:29 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT GROUP_CONCAT(sub_services.name) as subservicename, GROUP_CONCAT(sales_sub_services.sub_services_id ) as subserviceid, GROUP_CONCAT(sales_sub_services.sales_id ) as sales_id
FROM `sales_sub_services`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales_sub_services`.`sales_id` = '1'
AND `sales_sub_services`.`services_id` = Array
GROUP BY `sales_sub_services`.`id`
ERROR - 2022-09-29 13:32:12 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1703
ERROR - 2022-09-29 13:32:12 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1704
ERROR - 2022-09-29 13:32:12 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1705
ERROR - 2022-09-29 13:32:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1705
ERROR - 2022-09-29 14:17:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1069
ERROR - 2022-09-29 14:17:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1069
ERROR - 2022-09-29 15:05:30 --> Severity: error --> Exception: Too few arguments to function Sales::getsalesdocimages(), 0 passed in C:\xampp\htdocs\legalmis\system\core\CodeIgniter.php on line 533 and exactly 1 expected C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1694
ERROR - 2022-09-29 15:06:01 --> Severity: error --> Exception: Too few arguments to function Sales::getsalesdocimages(), 0 passed in C:\xampp\htdocs\legalmis\system\core\CodeIgniter.php on line 533 and exactly 1 expected C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1694
ERROR - 2022-09-29 15:09:37 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1698
ERROR - 2022-09-29 15:11:45 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1699
ERROR - 2022-09-29 15:25:55 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:27:59 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:30:17 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:35:25 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:37:25 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:37:25 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:38:25 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:49:35 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:49:35 --> 404 Page Not Found: Uploads/images
ERROR - 2022-09-29 15:50:10 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1708
ERROR - 2022-09-29 15:50:10 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1709
ERROR - 2022-09-29 15:50:10 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1710
ERROR - 2022-09-29 15:50:10 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1710
ERROR - 2022-09-29 15:52:01 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1708
ERROR - 2022-09-29 15:52:01 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1709
ERROR - 2022-09-29 15:52:01 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1710
ERROR - 2022-09-29 15:52:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1710
ERROR - 2022-09-29 17:52:22 --> Severity: error --> Exception: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 140
ERROR - 2022-09-29 18:28:14 --> Severity: error --> Exception: Parameter $source should be an array. C:\xampp\htdocs\legalmis\application\third_party\PHPExcel\Worksheet.php 2446
ERROR - 2022-09-29 18:39:55 --> Severity: error --> Exception: syntax error, unexpected 'header' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 211
=======
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:04:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:30:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:30:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:30:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:34:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:34:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:34:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:34:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:44:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:44:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:44:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:44:46 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\legalmis\application\views\update_sales.php 678
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:46:27 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:46:27 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:46:27 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:46:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:47:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:47:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:47:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:47:40 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\legalmis\application\views\update_sales.php 678
ERROR - 2022-09-29 10:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:47:41 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\legalmis\application\views\update_sales.php 678
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 10:48:05 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:48:05 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:48:05 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 10:48:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 11:46:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 11:46:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 11:46:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 11:52:58 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 11:52:58 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 11:52:58 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 11:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 318
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 318
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 318
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 13:33:28 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 13:33:28 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 13:33:28 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 13:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 13:38:24 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 673
ERROR - 2022-09-29 13:39:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1063
ERROR - 2022-09-29 13:39:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1063
ERROR - 2022-09-29 13:39:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1063
ERROR - 2022-09-29 13:39:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1063
ERROR - 2022-09-29 14:00:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 313
ERROR - 2022-09-29 14:00:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 313
ERROR - 2022-09-29 14:00:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 313
ERROR - 2022-09-29 14:00:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 313
ERROR - 2022-09-29 14:00:05 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:00:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:00:05 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:00:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:00:05 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:00:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:00:05 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:00:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:08 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:08 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:08 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:08 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:08:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:08:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:10 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:10 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:10 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-29 14:34:35 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:35 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:35 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:34:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:40:19 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:40:19 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:40:19 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:40:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:44:53 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:44:53 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:44:53 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:44:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:12 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:13 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:13 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:46:14 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:14 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:14 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:46:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:48:49 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:48:49 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:48:49 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:48:49 --> Severity: Notice --> Undefined variable: payment_mode C:\xampp\htdocs\legalmis\application\views\update_sales.php 431
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 431
ERROR - 2022-09-29 14:48:49 --> Severity: Notice --> Undefined variable: invoice_type C:\xampp\htdocs\legalmis\application\views\update_sales.php 445
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 445
ERROR - 2022-09-29 14:48:49 --> Severity: Notice --> Undefined variable: invoice_status C:\xampp\htdocs\legalmis\application\views\update_sales.php 459
ERROR - 2022-09-29 14:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 459
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 14:51:21 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:51:21 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:51:21 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 14:51:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:00:36 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:00:36 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:00:36 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:00:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:02:01 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:02:01 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:02:01 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:02:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:24 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:24 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:24 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:26 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:27 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:28 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:28 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:28 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:29 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:29 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:30 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 15:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:44 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:44 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:44 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:46 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 16:51:48 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:48 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:48 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 16:51:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 17:00:36 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 629
ERROR - 2022-09-29 17:00:57 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 629
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:12:32 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 17:12:32 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 17:12:32 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 17:12:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:16:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:18:47 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 17:23:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-09-29 18:17:33 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 532
ERROR - 2022-09-29 18:17:38 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 532
>>>>>>> 2669bbf24e6c66e18223f384e081942217915409
