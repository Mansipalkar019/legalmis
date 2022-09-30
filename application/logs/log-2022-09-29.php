<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

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
