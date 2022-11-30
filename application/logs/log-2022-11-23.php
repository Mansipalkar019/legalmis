<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-23 11:49:55 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\legalmis\application\views\work_allocation.php 248
ERROR - 2022-11-23 12:20:20 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\legalmis\application\views\work_allocation.php 248
ERROR - 2022-11-23 16:17:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%q%'' at line 1 - Invalid query: SELECT * FROM services WHERE status='1'WHERE name LIKE '%q%'
ERROR - 2022-11-23 16:17:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-23 16:18:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%q%'' at line 1 - Invalid query: SELECT * FROM services WHERE status='1'WHERE name LIKE '%q%'
ERROR - 2022-11-23 16:18:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-23 16:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%g%'' at line 1 - Invalid query: SELECT * FROM document_list WHERE status='1'WHERE name LIKE '%g%'
ERROR - 2022-11-23 16:19:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-23 16:20:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%g%'' at line 1 - Invalid query: SELECT * FROM document_list WHERE status='1'WHERE name LIKE '%g%'
ERROR - 2022-11-23 16:20:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-23 16:20:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%t%'' at line 1 - Invalid query: SELECT * FROM document_list WHERE status='1'WHERE name LIKE '%t%'
ERROR - 2022-11-23 16:20:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-23 16:21:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%t%'' at line 1 - Invalid query: SELECT * FROM document_list WHERE status='1'WHERE name LIKE '%t%'
ERROR - 2022-11-23 16:21:23 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-23 16:24:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%b%'' at line 1 - Invalid query: SELECT * FROM payment_mode WHERE status='1'WHERE name LIKE '%b%'
ERROR - 2022-11-23 16:24:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-23 16:28:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%g%'' at line 1 - Invalid query: SELECT * FROM invoice_status WHERE status='1'WHERE name LIKE '%g%'
ERROR - 2022-11-23 16:28:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-23 16:43:28 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\legalmis\application\views\work_allocation.php 248
ERROR - 2022-11-23 16:45:54 --> Could not find the language line "form_validation_check_order_no"
ERROR - 2022-11-23 16:46:12 --> Could not find the language line "form_validation_check_order_no"
ERROR - 2022-11-23 16:46:25 --> Could not find the language line "form_validation_check_order_no"
ERROR - 2022-11-23 16:46:37 --> Could not find the language line "form_validation_check_order_no"
ERROR - 2022-11-23 16:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '')
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 10 - Invalid query: SELECT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid, `tbl_states`.`name` as `statename`
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `tbl_states` ON `sales`.`state`=`tbl_states`.`id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`sale_status` = 'Verified'
AND (sales.client_name LIKE '%'%' OR sales.company_name LIKE '%'%' OR sales.mobile_1 LIKE '%'%' OR sales.email_address LIKE '%'%' OR sales.invoice_number LIKE '%'%' OR sales.deal_id LIKE '%'%' OR sales.services LIKE '%'%' OR sales.sub_services LIKE '%'%' OR sales.mobile_2 LIKE '%'%')
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-11-23 16:47:05 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 339
ERROR - 2022-11-23 16:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '')
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10' at line 10 - Invalid query: SELECT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid, `tbl_states`.`name` as `statename`
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `tbl_states` ON `sales`.`state`=`tbl_states`.`id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`sale_status` = 'Verified'
AND (sales.client_name LIKE '%'%' OR sales.company_name LIKE '%'%' OR sales.mobile_1 LIKE '%'%' OR sales.email_address LIKE '%'%' OR sales.invoice_number LIKE '%'%' OR sales.deal_id LIKE '%'%' OR sales.services LIKE '%'%' OR sales.sub_services LIKE '%'%' OR sales.mobile_2 LIKE '%'%')
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-11-23 16:47:07 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\supermodel.php 339
ERROR - 2022-11-23 16:47:55 --> 404 Page Not Found: Uploads/images
ERROR - 2022-11-23 16:47:56 --> 404 Page Not Found: Uploads/images
ERROR - 2022-11-23 16:47:58 --> 404 Page Not Found: Uploads/images
ERROR - 2022-11-23 16:49:35 --> 404 Page Not Found: Uploads/images
