<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-25 11:07:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* LIKE '%fgfh%')
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 9 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid, `tbl_states`.`name` as `statename`
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `tbl_states` ON `sales`.`state`=`tbl_states`.`id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND (sales.* LIKE '%fgfh%')
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-09-25 11:07:10 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 119
ERROR - 2022-09-25 11:45:29 --> Query error: Unknown column 'services.name' in 'field list' - Invalid query: SELECT GROUP_CONCAT(DISTINCT(sale_service_brand.fk_service_id)), GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid, `tbl_states`.`name` as `statename`
FROM `sale_service_brand`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sale_service_brand`.`fk_sales_id` = '3'
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC
ERROR - 2022-09-25 11:45:29 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 192
ERROR - 2022-09-25 11:45:40 --> Query error: Unknown column 'services.name' in 'field list' - Invalid query: SELECT GROUP_CONCAT(DISTINCT(sale_service_brand.fk_service_id)), GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid, `tbl_states`.`name` as `statename`
FROM `sale_service_brand`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sale_service_brand`.`fk_sales_id` = '3'
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC
ERROR - 2022-09-25 11:45:40 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 192
ERROR - 2022-09-25 11:46:03 --> Query error: Unknown column 'services.name' in 'field list' - Invalid query: SELECT GROUP_CONCAT(DISTINCT(sale_service_brand.fk_service_id)), GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid, `tbl_states`.`name` as `statename`
FROM `sale_service_brand`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sale_service_brand`.`fk_sales_id` = '3'
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC
ERROR - 2022-09-25 11:46:03 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 192
ERROR - 2022-09-25 11:47:04 --> Query error: Unknown column 'services.name' in 'field list' - Invalid query: SELECT GROUP_CONCAT(DISTINCT(sale_service_brand.fk_service_id)), GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid, `tbl_states`.`name` as `statename`
FROM `sale_service_brand`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sale_service_brand`.`fk_sales_id` = '3'
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC
ERROR - 2022-09-25 14:04:30 --> Severity: error --> Exception: [] operator not supported for strings C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1488
ERROR - 2022-09-25 20:34:13 --> 404 Page Not Found: Scripts/server_processing.php
ERROR - 2022-09-25 20:34:53 --> 404 Page Not Found: Scripts/server_processing.php
ERROR - 2022-09-25 21:06:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC' at line 6 - Invalid query: SELECT GROUP_CONCAT(DISTINCT(services.name)) as services, GROUP_CONCAT(DISTINCT(sale_service_brand.brand_name)) as brand_name, GROUP_CONCAT(DISTINCT(sale_service_class.class_name)) as class_name
FROM `sale_service_brand`
LEFT JOIN `sale_service_class` ON `sale_service_class`.`fk_brand_id`=`sale_service_brand`.`id`
LEFT JOIN `services` ON `services`.`id`=`sale_service_brand`.`fk_service_id`
WHERE `sale_service_brand`.`fk_sales_id` = '4'
AND (sale_service_brand.brand_name LIKE '%Trademark Transfer%' OR sale_service_class.class_name LIKE '%Trademark Transfer%' OR services.name LIKE '%Trademark Transfer%'))
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC
ERROR - 2022-09-25 21:06:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 216
ERROR - 2022-09-25 21:07:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC' at line 6 - Invalid query: SELECT GROUP_CONCAT(DISTINCT(services.name)) as services, GROUP_CONCAT(DISTINCT(sale_service_brand.brand_name)) as brand_name, GROUP_CONCAT(DISTINCT(sale_service_class.class_name)) as class_name
FROM `sale_service_brand`
LEFT JOIN `sale_service_class` ON `sale_service_class`.`fk_brand_id`=`sale_service_brand`.`id`
LEFT JOIN `services` ON `services`.`id`=`sale_service_brand`.`fk_service_id`
WHERE `sale_service_brand`.`fk_sales_id` = '4'
AND (sale_service_brand.brand_name LIKE '%Trademark Transfer%' OR sale_service_class.class_name LIKE '%Trademark Transfer%' OR services.name LIKE '%Trademark Transfer%'))
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC
ERROR - 2022-09-25 21:07:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 216
ERROR - 2022-09-25 21:08:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC' at line 6 - Invalid query: SELECT GROUP_CONCAT(DISTINCT(services.name)) as services, GROUP_CONCAT(DISTINCT(sale_service_brand.brand_name)) as brand_name, GROUP_CONCAT(DISTINCT(sale_service_class.class_name)) as class_name
FROM `sale_service_brand`
LEFT JOIN `sale_service_class` ON `sale_service_class`.`fk_brand_id`=`sale_service_brand`.`id`
LEFT JOIN `services` ON `services`.`id`=`sale_service_brand`.`fk_service_id`
WHERE `sale_service_brand`.`fk_sales_id` = '4'
AND (sale_service_brand.brand_name LIKE '%Trademark Transfer%' OR sale_service_class.class_name LIKE '%Trademark Transfer%' OR services.name LIKE '%Trademark Transfer%'))
GROUP BY `sale_service_brand`.`id`
ORDER BY `sale_service_brand`.`id` DESC
ERROR - 2022-09-25 21:08:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 216
ERROR - 2022-09-25 21:35:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 39
ERROR - 2022-09-25 21:35:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 39
ERROR - 2022-09-25 21:35:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 39
ERROR - 2022-09-25 21:35:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 39
ERROR - 2022-09-25 21:36:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 39
ERROR - 2022-09-25 21:36:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 39
ERROR - 2022-09-25 21:36:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 39
ERROR - 2022-09-25 21:36:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 39
ERROR - 2022-09-25 21:38:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:38:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:39:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 21:39:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 40
ERROR - 2022-09-25 22:51:45 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 38
ERROR - 2022-09-25 22:51:45 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 45
ERROR - 2022-09-25 22:51:45 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 45
ERROR - 2022-09-25 22:51:47 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 38
ERROR - 2022-09-25 22:51:47 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 45
ERROR - 2022-09-25 22:51:47 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 45
ERROR - 2022-09-25 22:52:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 45
ERROR - 2022-09-25 22:52:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 45
