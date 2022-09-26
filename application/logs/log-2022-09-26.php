<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<<<<<<< HEAD
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
=======
ERROR - 2022-09-26 10:56:23 --> Severity: Notice --> Undefined index: gst_amount  C:\xampp\htdocs\legalmis\application\views\update_sales.php 299
ERROR - 2022-09-26 10:56:23 --> Severity: Notice --> Undefined index: gst_amount  C:\xampp\htdocs\legalmis\application\views\update_sales.php 307
ERROR - 2022-09-26 10:56:58 --> Severity: Notice --> Undefined index: gst_amount  C:\xampp\htdocs\legalmis\application\views\update_sales.php 299
ERROR - 2022-09-26 10:56:58 --> Severity: Notice --> Undefined index: outstanding_followup_date  C:\xampp\htdocs\legalmis\application\views\update_sales.php 307
ERROR - 2022-09-26 11:12:17 --> Severity: Notice --> Undefined index: gst_amount  C:\xampp\htdocs\legalmis\application\views\update_sales.php 299
ERROR - 2022-09-26 11:12:17 --> Severity: Notice --> Undefined index: outstanding_followup_date  C:\xampp\htdocs\legalmis\application\views\update_sales.php 307
ERROR - 2022-09-26 11:13:28 --> Severity: Notice --> Undefined index: gst_amount  C:\xampp\htdocs\legalmis\application\views\update_sales.php 299
ERROR - 2022-09-26 11:13:28 --> Severity: Notice --> Undefined index: outstanding_followup_date  C:\xampp\htdocs\legalmis\application\views\update_sales.php 307
ERROR - 2022-09-26 11:14:06 --> Severity: Notice --> Undefined index: gst_amount  C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:14:06 --> Severity: Notice --> Undefined index: outstanding_followup_date  C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 165
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 166
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: sale_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 43
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: client_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 52
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: deal_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 60
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: mobile_1 C:\xampp\htdocs\legalmis\application\views\update_sales.php 67
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: mobile_2 C:\xampp\htdocs\legalmis\application\views\update_sales.php 75
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: alternate_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 82
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: email_address C:\xampp\htdocs\legalmis\application\views\update_sales.php 91
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: alternate_email C:\xampp\htdocs\legalmis\application\views\update_sales.php 99
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: street C:\xampp\htdocs\legalmis\application\views\update_sales.php 109
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: gst_no C:\xampp\htdocs\legalmis\application\views\update_sales.php 185
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: date_of_birth C:\xampp\htdocs\legalmis\application\views\update_sales.php 192
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: industry C:\xampp\htdocs\legalmis\application\views\update_sales.php 200
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: invoice_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 208
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: lead_source C:\xampp\htdocs\legalmis\application\views\update_sales.php 215
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: legal_remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 222
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 229
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: company_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 236
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: deal_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 244
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: amount_received C:\xampp\htdocs\legalmis\application\views\update_sales.php 252
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: outstanding C:\xampp\htdocs\legalmis\application\views\update_sales.php 260
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: tcs C:\xampp\htdocs\legalmis\application\views\update_sales.php 268
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: govt_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 275
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: associate_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 283
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: net_income C:\xampp\htdocs\legalmis\application\views\update_sales.php 291
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: gst_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: outstanding_followup_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:50:19 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 165
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 166
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: sale_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 43
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: client_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 52
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: deal_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 60
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: mobile_1 C:\xampp\htdocs\legalmis\application\views\update_sales.php 67
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: mobile_2 C:\xampp\htdocs\legalmis\application\views\update_sales.php 75
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: alternate_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 82
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: email_address C:\xampp\htdocs\legalmis\application\views\update_sales.php 91
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: alternate_email C:\xampp\htdocs\legalmis\application\views\update_sales.php 99
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: street C:\xampp\htdocs\legalmis\application\views\update_sales.php 109
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: gst_no C:\xampp\htdocs\legalmis\application\views\update_sales.php 185
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: date_of_birth C:\xampp\htdocs\legalmis\application\views\update_sales.php 192
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: industry C:\xampp\htdocs\legalmis\application\views\update_sales.php 200
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: invoice_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 208
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: lead_source C:\xampp\htdocs\legalmis\application\views\update_sales.php 215
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: legal_remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 222
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 229
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: company_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 236
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: deal_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 244
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: amount_received C:\xampp\htdocs\legalmis\application\views\update_sales.php 252
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: outstanding C:\xampp\htdocs\legalmis\application\views\update_sales.php 260
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: tcs C:\xampp\htdocs\legalmis\application\views\update_sales.php 268
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: govt_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 275
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: associate_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 283
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: net_income C:\xampp\htdocs\legalmis\application\views\update_sales.php 291
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: gst_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: outstanding_followup_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:51:00 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 165
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 166
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: sale_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 43
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: client_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 52
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: deal_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 60
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: mobile_1 C:\xampp\htdocs\legalmis\application\views\update_sales.php 67
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: mobile_2 C:\xampp\htdocs\legalmis\application\views\update_sales.php 75
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: alternate_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 82
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: email_address C:\xampp\htdocs\legalmis\application\views\update_sales.php 91
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: alternate_email C:\xampp\htdocs\legalmis\application\views\update_sales.php 99
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: street C:\xampp\htdocs\legalmis\application\views\update_sales.php 109
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: gst_no C:\xampp\htdocs\legalmis\application\views\update_sales.php 185
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: date_of_birth C:\xampp\htdocs\legalmis\application\views\update_sales.php 192
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: industry C:\xampp\htdocs\legalmis\application\views\update_sales.php 200
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: invoice_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 208
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: lead_source C:\xampp\htdocs\legalmis\application\views\update_sales.php 215
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: legal_remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 222
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 229
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: company_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 236
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: deal_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 244
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: amount_received C:\xampp\htdocs\legalmis\application\views\update_sales.php 252
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: outstanding C:\xampp\htdocs\legalmis\application\views\update_sales.php 260
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: tcs C:\xampp\htdocs\legalmis\application\views\update_sales.php 268
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: govt_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 275
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: associate_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 283
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: net_income C:\xampp\htdocs\legalmis\application\views\update_sales.php 291
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: gst_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: outstanding_followup_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:52:57 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 165
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 166
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: sale_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 43
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: client_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 52
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: deal_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 60
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: mobile_1 C:\xampp\htdocs\legalmis\application\views\update_sales.php 67
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: mobile_2 C:\xampp\htdocs\legalmis\application\views\update_sales.php 75
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: alternate_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 82
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: email_address C:\xampp\htdocs\legalmis\application\views\update_sales.php 91
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: alternate_email C:\xampp\htdocs\legalmis\application\views\update_sales.php 99
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: street C:\xampp\htdocs\legalmis\application\views\update_sales.php 109
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: gst_no C:\xampp\htdocs\legalmis\application\views\update_sales.php 185
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: date_of_birth C:\xampp\htdocs\legalmis\application\views\update_sales.php 192
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: industry C:\xampp\htdocs\legalmis\application\views\update_sales.php 200
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: invoice_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 208
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: lead_source C:\xampp\htdocs\legalmis\application\views\update_sales.php 215
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: legal_remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 222
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 229
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: company_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 236
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: deal_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 244
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: amount_received C:\xampp\htdocs\legalmis\application\views\update_sales.php 252
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: outstanding C:\xampp\htdocs\legalmis\application\views\update_sales.php 260
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: tcs C:\xampp\htdocs\legalmis\application\views\update_sales.php 268
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: govt_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 275
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: associate_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 283
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: net_income C:\xampp\htdocs\legalmis\application\views\update_sales.php 291
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: gst_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: outstanding_followup_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:53:15 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 165
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 166
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: sale_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 43
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: client_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 52
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: deal_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 60
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: mobile_1 C:\xampp\htdocs\legalmis\application\views\update_sales.php 67
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: mobile_2 C:\xampp\htdocs\legalmis\application\views\update_sales.php 75
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: alternate_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 82
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: email_address C:\xampp\htdocs\legalmis\application\views\update_sales.php 91
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: alternate_email C:\xampp\htdocs\legalmis\application\views\update_sales.php 99
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: street C:\xampp\htdocs\legalmis\application\views\update_sales.php 109
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: gst_no C:\xampp\htdocs\legalmis\application\views\update_sales.php 185
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: date_of_birth C:\xampp\htdocs\legalmis\application\views\update_sales.php 192
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: industry C:\xampp\htdocs\legalmis\application\views\update_sales.php 200
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: invoice_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 208
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: lead_source C:\xampp\htdocs\legalmis\application\views\update_sales.php 215
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: legal_remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 222
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 229
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: company_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 236
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: deal_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 244
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: amount_received C:\xampp\htdocs\legalmis\application\views\update_sales.php 252
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: outstanding C:\xampp\htdocs\legalmis\application\views\update_sales.php 260
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: tcs C:\xampp\htdocs\legalmis\application\views\update_sales.php 268
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: govt_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 275
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: associate_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 283
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: net_income C:\xampp\htdocs\legalmis\application\views\update_sales.php 291
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: gst_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: outstanding_followup_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:25 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 165
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 166
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: sale_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 43
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: client_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 52
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: deal_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 60
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: mobile_1 C:\xampp\htdocs\legalmis\application\views\update_sales.php 67
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: mobile_2 C:\xampp\htdocs\legalmis\application\views\update_sales.php 75
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: alternate_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 82
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: email_address C:\xampp\htdocs\legalmis\application\views\update_sales.php 91
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: alternate_email C:\xampp\htdocs\legalmis\application\views\update_sales.php 99
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: street C:\xampp\htdocs\legalmis\application\views\update_sales.php 109
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: gst_no C:\xampp\htdocs\legalmis\application\views\update_sales.php 185
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: date_of_birth C:\xampp\htdocs\legalmis\application\views\update_sales.php 192
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: industry C:\xampp\htdocs\legalmis\application\views\update_sales.php 200
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: invoice_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 208
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: lead_source C:\xampp\htdocs\legalmis\application\views\update_sales.php 215
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: legal_remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 222
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 229
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: company_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 236
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: deal_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 244
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: amount_received C:\xampp\htdocs\legalmis\application\views\update_sales.php 252
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: outstanding C:\xampp\htdocs\legalmis\application\views\update_sales.php 260
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: tcs C:\xampp\htdocs\legalmis\application\views\update_sales.php 268
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: govt_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 275
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: associate_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 283
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: net_income C:\xampp\htdocs\legalmis\application\views\update_sales.php 291
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: gst_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: outstanding_followup_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:43 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 164
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 165
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: sale_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 43
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: client_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 52
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: deal_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 60
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: mobile_1 C:\xampp\htdocs\legalmis\application\views\update_sales.php 67
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: mobile_2 C:\xampp\htdocs\legalmis\application\views\update_sales.php 75
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: alternate_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 82
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: email_address C:\xampp\htdocs\legalmis\application\views\update_sales.php 91
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: alternate_email C:\xampp\htdocs\legalmis\application\views\update_sales.php 99
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: street C:\xampp\htdocs\legalmis\application\views\update_sales.php 109
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: gst_no C:\xampp\htdocs\legalmis\application\views\update_sales.php 185
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: date_of_birth C:\xampp\htdocs\legalmis\application\views\update_sales.php 192
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: industry C:\xampp\htdocs\legalmis\application\views\update_sales.php 200
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: invoice_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 208
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: lead_source C:\xampp\htdocs\legalmis\application\views\update_sales.php 215
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: legal_remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 222
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 229
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: company_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 236
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: deal_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 244
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: amount_received C:\xampp\htdocs\legalmis\application\views\update_sales.php 252
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: outstanding C:\xampp\htdocs\legalmis\application\views\update_sales.php 260
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: tcs C:\xampp\htdocs\legalmis\application\views\update_sales.php 268
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: govt_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 275
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: associate_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 283
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: net_income C:\xampp\htdocs\legalmis\application\views\update_sales.php 291
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: gst_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: outstanding_followup_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:50 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:58:57 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 163
ERROR - 2022-09-26 11:58:57 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 164
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 163
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 164
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: sale_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 43
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: client_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 52
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: deal_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 60
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: mobile_1 C:\xampp\htdocs\legalmis\application\views\update_sales.php 67
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: mobile_2 C:\xampp\htdocs\legalmis\application\views\update_sales.php 75
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: alternate_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 82
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: email_address C:\xampp\htdocs\legalmis\application\views\update_sales.php 91
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: alternate_email C:\xampp\htdocs\legalmis\application\views\update_sales.php 99
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: street C:\xampp\htdocs\legalmis\application\views\update_sales.php 109
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\views\update_sales.php 123
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: gst_no C:\xampp\htdocs\legalmis\application\views\update_sales.php 185
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: date_of_birth C:\xampp\htdocs\legalmis\application\views\update_sales.php 192
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: industry C:\xampp\htdocs\legalmis\application\views\update_sales.php 200
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: invoice_number C:\xampp\htdocs\legalmis\application\views\update_sales.php 208
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: lead_source C:\xampp\htdocs\legalmis\application\views\update_sales.php 215
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: legal_remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 222
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: remarks C:\xampp\htdocs\legalmis\application\views\update_sales.php 229
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: company_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 236
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: deal_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 244
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: amount_received C:\xampp\htdocs\legalmis\application\views\update_sales.php 252
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: outstanding C:\xampp\htdocs\legalmis\application\views\update_sales.php 260
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: tcs C:\xampp\htdocs\legalmis\application\views\update_sales.php 268
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: govt_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 275
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: associate_fees C:\xampp\htdocs\legalmis\application\views\update_sales.php 283
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: net_income C:\xampp\htdocs\legalmis\application\views\update_sales.php 291
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: gst_amount C:\xampp\htdocs\legalmis\application\views\update_sales.php 298
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: outstanding_followup_date C:\xampp\htdocs\legalmis\application\views\update_sales.php 306
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 319
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 11:59:12 --> Severity: Notice --> Undefined index: primary_caller C:\xampp\htdocs\legalmis\application\views\update_sales.php 340
ERROR - 2022-09-26 12:00:06 --> Severity: Notice --> Undefined index: state C:\xampp\htdocs\legalmis\application\controllers\Sales.php 163
ERROR - 2022-09-26 12:00:06 --> Severity: Notice --> Undefined index: city C:\xampp\htdocs\legalmis\application\controllers\Sales.php 164
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 12:56:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:33:43 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 13:34:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:10 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\legalmis\application\views\update_sales.php 415
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:29 --> Severity: Notice --> Undefined index: brand_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 413
ERROR - 2022-09-26 14:54:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 413
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:54:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\legalmis\application\views\update_sales.php 414
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:55:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:56:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:57:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 14:59:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
ERROR - 2022-09-26 15:00:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 386
>>>>>>> 1d33d86d104220bc0c033d71cedc2145b7a9ce5a
ERROR - 2022-09-26 15:33:59 --> 404 Page Not Found: Sale/index
ERROR - 2022-09-26 15:47:46 --> Severity: error --> Exception: syntax error, unexpected '<<' (T_SL), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\legalmis\application\models\supermodel.php 209
ERROR - 2022-09-26 15:47:54 --> Severity: error --> Exception: syntax error, unexpected '<<' (T_SL), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\legalmis\application\models\supermodel.php 209
ERROR - 2022-09-26 15:48:03 --> Severity: error --> Exception: syntax error, unexpected '<<' (T_SL), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\legalmis\application\models\supermodel.php 209
ERROR - 2022-09-26 18:09:03 --> Severity: Compile Error --> Cannot redeclare Sales::getsalesrecord() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 73
