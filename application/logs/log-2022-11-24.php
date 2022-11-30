<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-24 11:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Order BY='DESC'' at line 1 - Invalid query: SELECT * FROM services WHERE status='1' and Order BY='DESC'
ERROR - 2022-11-24 11:05:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-24 11:17:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY name asc LIMIT 0 ,10' at line 1 - Invalid query: SELECT * FROM services WHERE status='1' ORDER BY 'id'; ORDER BY name asc LIMIT 0 ,10 
ERROR - 2022-11-24 11:17:20 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\model.php 369
ERROR - 2022-11-24 11:18:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY name asc LIMIT 0 ,10' at line 1 - Invalid query: SELECT * FROM services WHERE status='1' ORDER BY id; ORDER BY name asc LIMIT 0 ,10 
ERROR - 2022-11-24 11:18:27 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\model.php 369
ERROR - 2022-11-24 11:19:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE status='1'' at line 1 - Invalid query: SELECT * FROM services ORDER BY id WHERE status='1' ;
ERROR - 2022-11-24 11:19:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-24 11:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY name asc LIMIT 0 ,10' at line 1 - Invalid query: SELECT * FROM services WHERE status='1'; ORDER BY name asc LIMIT 0 ,10 
ERROR - 2022-11-24 11:20:06 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\model.php 369
ERROR - 2022-11-24 11:27:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY name asc LIMIT 0 ,10' at line 1 - Invalid query: SELECT * FROM services WHERE status='1' ORDER BY id DESC ORDER BY name asc LIMIT 0 ,10 
ERROR - 2022-11-24 11:27:43 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\model.php 369
ERROR - 2022-11-24 11:27:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''DESC'' at line 1 - Invalid query: SELECT * FROM services WHERE status='1' ORDER BY id 'DESC'
ERROR - 2022-11-24 11:27:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-24 11:28:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY name asc LIMIT 0 ,10' at line 1 - Invalid query: SELECT * FROM services WHERE status='1' ORDER BY 'id' 'DESC' ORDER BY name asc LIMIT 0 ,10 
ERROR - 2022-11-24 11:28:07 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\model.php 369
ERROR - 2022-11-24 11:33:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%x%'' at line 1 - Invalid query: SELECT * FROM services WHERE status='1'WHERE name LIKE '%x%'
ERROR - 2022-11-24 11:33:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-24 14:58:17 --> Severity: error --> Exception: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) C:\xampp\htdocs\legalmis\application\controllers\Masters.php 74
ERROR - 2022-11-24 15:56:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%z%'' at line 1 - Invalid query: SELECT * FROM services WHERE status='1'WHERE name LIKE '%z%'
ERROR - 2022-11-24 15:56:53 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-24 15:58:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%s%'' at line 1 - Invalid query: SELECT * FROM services WHERE status='1'WHERE name LIKE '%s%'
ERROR - 2022-11-24 15:58:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 91
ERROR - 2022-11-24 16:01:53 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\legalmis\application\views\work_allocation.php 248
ERROR - 2022-11-24 16:29:20 --> Query error: Unknown column 'tbl_bank_details.id' in 'order clause' - Invalid query: SELECT *
FROM `services`
WHERE `services`.`status` = '1'
ORDER BY `tbl_bank_details`.`id` DESC, `name` ASC
ERROR - 2022-11-24 16:29:20 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\Service_model.php 65
ERROR - 2022-11-24 16:29:33 --> Query error: Unknown column 'tbl_bank_details.id' in 'order clause' - Invalid query: SELECT *
FROM `services`
WHERE `services`.`status` = '1'
ORDER BY `tbl_bank_details`.`id` DESC, `name` ASC
ERROR - 2022-11-24 16:29:33 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\Service_model.php 65
ERROR - 2022-11-24 16:30:17 --> Query error: Unknown column 'tbl_bank_details.id' in 'order clause' - Invalid query: SELECT *
FROM `services`
WHERE `services`.`status` = '1'
ORDER BY `tbl_bank_details`.`id` DESC, `name` ASC
ERROR - 2022-11-24 16:30:17 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\Service_model.php 65
ERROR - 2022-11-24 16:34:16 --> Query error: Unknown column 'tbl_bank_details.id' in 'order clause' - Invalid query: SELECT *
FROM `services`
WHERE `services`.`status` = '1'
ORDER BY `tbl_bank_details`.`id` DESC
ERROR - 2022-11-24 16:34:16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\Service_model.php 65
ERROR - 2022-11-24 16:35:10 --> Query error: Unknown column 'tbl_bank_details.id' in 'order clause' - Invalid query: SELECT *
FROM `services`
WHERE `services`.`status` = '1'
ORDER BY `tbl_bank_details`.`id` DESC
ERROR - 2022-11-24 16:35:10 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\Service_model.php 65
ERROR - 2022-11-24 16:35:27 --> Query error: Unknown column 'tbl_bank_details.id' in 'order clause' - Invalid query: SELECT *
FROM `services`
WHERE `services`.`status` = '1'
ORDER BY `tbl_bank_details`.`id` DESC
ERROR - 2022-11-24 16:35:27 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\legalmis\application\models\Service_model.php 65
ERROR - 2022-11-24 16:54:31 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\models\Sub_services_model.php 20
ERROR - 2022-11-24 16:55:52 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\models\Sub_services_model.php 20
ERROR - 2022-11-24 16:57:15 --> Severity: Notice --> Undefined index: count C:\xampp\htdocs\legalmis\application\controllers\Masters.php 90
ERROR - 2022-11-24 16:57:15 --> Severity: Notice --> Undefined index: count_filtered C:\xampp\htdocs\legalmis\application\controllers\Masters.php 90
ERROR - 2022-11-24 16:57:19 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\models\Sub_services_model.php 20
ERROR - 2022-11-24 16:57:48 --> Severity: Notice --> Undefined index: count C:\xampp\htdocs\legalmis\application\controllers\Masters.php 210
ERROR - 2022-11-24 16:57:48 --> Severity: Notice --> Undefined index: count_filtered C:\xampp\htdocs\legalmis\application\controllers\Masters.php 210
ERROR - 2022-11-24 16:58:28 --> Severity: Notice --> Undefined index: count C:\xampp\htdocs\legalmis\application\controllers\Masters.php 90
ERROR - 2022-11-24 16:58:28 --> Severity: Notice --> Undefined index: count_filtered C:\xampp\htdocs\legalmis\application\controllers\Masters.php 90
ERROR - 2022-11-24 17:04:46 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\models\Sub_services_model.php 63
ERROR - 2022-11-24 17:04:46 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\models\Sub_services_model.php 64
ERROR - 2022-11-24 17:04:46 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\models\Sub_services_model.php 64
ERROR - 2022-11-24 17:31:45 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 438
ERROR - 2022-11-24 17:31:45 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Masters.php 438
ERROR - 2022-11-24 17:31:57 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 438
ERROR - 2022-11-24 17:31:57 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Masters.php 438
ERROR - 2022-11-24 17:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%s%'' at line 1 - Invalid query: SELECT * FROM payment_mode WHERE status='1'WHERE name LIKE '%s%'
ERROR - 2022-11-24 17:50:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE name LIKE '%s%'' at line 1 - Invalid query: SELECT * FROM invoice_type WHERE status='1'WHERE name LIKE '%s%'
ERROR - 2022-11-24 18:30:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE username LIKE '%s%'' at line 1 - Invalid query: SELECT * FROM users WHERE status='1'WHERE username LIKE '%s%'
ERROR - 2022-11-24 18:42:47 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Masters.php 887
ERROR - 2022-11-24 18:42:47 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Masters.php 888
ERROR - 2022-11-24 18:42:47 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Masters.php 887
ERROR - 2022-11-24 18:42:47 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Masters.php 888
ERROR - 2022-11-24 18:42:47 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Masters.php 887
ERROR - 2022-11-24 18:42:47 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Masters.php 888
