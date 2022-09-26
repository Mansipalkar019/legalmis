<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-26 10:13:10 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:13:10 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:13:28 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:13:28 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:13:37 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:13:37 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:14:02 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:14:02 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:14:37 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:14:37 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:14:38 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:14:38 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:15:15 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:15:15 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:15:16 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:15:16 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:15:17 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:15:17 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:15:49 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:15:49 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:16:32 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:16:32 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:16:33 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:16:33 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:16:33 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:16:33 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 10:17:52 --> Query error: Unknown column 'services.terms' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(services.terms)) as term, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '3'
GROUP BY `sales`.`id`
ERROR - 2022-09-26 10:17:52 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 181
ERROR - 2022-09-26 11:28:04 --> Severity: error --> Exception: syntax error, unexpected 'error_reporting' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 48
ERROR - 2022-09-26 11:54:09 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:54:21 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:54:46 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:55:12 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:55:20 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:55:36 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:55:37 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:55:57 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:56:01 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 301
ERROR - 2022-09-26 11:56:19 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\legalmis\application\views\printinvoice\print_sale_page1.php 300
ERROR - 2022-09-26 12:42:41 --> Severity: Warning --> Use of undefined constant base_path - assumed 'base_path' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\views\sales-index.php 32
ERROR - 2022-09-26 12:42:41 --> Severity: Warning --> Use of undefined constant base_path - assumed 'base_path' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\views\sales-index.php 72
ERROR - 2022-09-26 12:42:41 --> 404 Page Not Found: Base_pathassets/img
ERROR - 2022-09-26 12:42:42 --> 404 Page Not Found: Booking/getlocwisebooking
ERROR - 2022-09-26 12:43:44 --> Severity: Warning --> Use of undefined constant base_path - assumed 'base_path' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\views\sales-index.php 29
ERROR - 2022-09-26 12:43:44 --> Severity: Warning --> Use of undefined constant base_path - assumed 'base_path' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\views\sales-index.php 61
ERROR - 2022-09-26 12:43:44 --> 404 Page Not Found: Base_pathassets/img
ERROR - 2022-09-26 12:43:45 --> 404 Page Not Found: Booking/getlocwisebooking
ERROR - 2022-09-26 12:45:14 --> Severity: Warning --> Use of undefined constant base_path - assumed 'base_path' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\views\sales-index.php 44
ERROR - 2022-09-26 12:45:14 --> 404 Page Not Found: Base_pathassets/img
ERROR - 2022-09-26 12:45:15 --> 404 Page Not Found: Booking/getlocwisebooking
ERROR - 2022-09-26 12:45:25 --> Severity: Warning --> Use of undefined constant base_path - assumed 'base_path' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\views\sales-index.php 44
ERROR - 2022-09-26 12:45:25 --> 404 Page Not Found: Base_pathassets/img
ERROR - 2022-09-26 12:45:26 --> 404 Page Not Found: Booking/getlocwisebooking
ERROR - 2022-09-26 12:46:15 --> 404 Page Not Found: Booking/getlocwisebooking
ERROR - 2022-09-26 13:24:38 --> 404 Page Not Found: Booking/from_location_wise_booking_statements
ERROR - 2022-09-26 13:25:00 --> 404 Page Not Found: Booking/from_location_wise_booking_statements
ERROR - 2022-09-26 13:35:04 --> 404 Page Not Found: Booking/from_location_wise_booking_statements
ERROR - 2022-09-26 13:35:08 --> 404 Page Not Found: Booking/from_location_wise_booking_statements
ERROR - 2022-09-26 13:43:21 --> Severity: Warning --> Illegal string offset 'from_date' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 72
ERROR - 2022-09-26 13:51:39 --> Severity: Warning --> Illegal string offset 'from_date' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 72
ERROR - 2022-09-26 13:52:02 --> Severity: Warning --> Illegal string offset 'from_date' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 72
ERROR - 2022-09-26 13:52:58 --> Severity: Warning --> Illegal string offset 'from_date' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 73
