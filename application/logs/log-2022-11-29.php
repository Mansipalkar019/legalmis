<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-29 10:03:54 --> Could not find the language line "form_validation_"
ERROR - 2022-11-29 10:04:06 --> Could not find the language line "form_validation_"
ERROR - 2022-11-29 10:12:15 --> Severity: Notice --> Undefined variable: username C:\xampp\htdocs\legalmis\application\controllers\AddBackendUsers.php 69
ERROR - 2022-11-29 10:12:15 --> Query error: Column 'username' cannot be null - Invalid query: INSERT INTO `users` (`firstname`, `lastname`, `mobile_no`, `email`, `username`, `password`, `roles_id`, `roles_name`) VALUES ('Shirin', 'Ragbansingh', '8010597075', 'ragbansinghshirin@gmail.com', NULL, 'ad81ff30cc3d30b424097ea5502809f46dc4784de56b088d0ccd112c698fdc56b103b04e4e032421b9491784ccbe5612fb65d4bf64ccf0b2f680e480a7dd4d2dcmE9O16nOj2MrKkQ9/yCEqHzfsyUpxvjUoeK1mflkZg=', '3', 'BackEnd User')
ERROR - 2022-11-29 10:12:20 --> Severity: Notice --> Undefined variable: username C:\xampp\htdocs\legalmis\application\controllers\AddBackendUsers.php 69
ERROR - 2022-11-29 10:12:20 --> Query error: Column 'username' cannot be null - Invalid query: INSERT INTO `users` (`firstname`, `lastname`, `mobile_no`, `email`, `username`, `password`, `roles_id`, `roles_name`) VALUES ('Shirin', 'Ragbansingh', '8010597075', 'ragbansinghshirin@gmail.com', NULL, '91cfe5c31baa137a3aa558272e1d55573f3ca51df09b100a053f7b385914af75917a0c6e950492f26f8daf22ee12bc957d169198bbf39a3a84f2a075d8c9b2a8ekxhoZ5U/dudS9JXw2stQLdi4jbNxSylrZdgWtBuxLU=', '3', 'BackEnd User')
ERROR - 2022-11-29 10:45:10 --> 404 Page Not Found: Master/add_state
ERROR - 2022-11-29 10:49:04 --> 404 Page Not Found: Master/add_state
ERROR - 2022-11-29 10:49:05 --> 404 Page Not Found: Master/add_state
ERROR - 2022-11-29 10:49:06 --> 404 Page Not Found: Master/add_state
ERROR - 2022-11-29 10:49:11 --> 404 Page Not Found: Master/add_state
ERROR - 2022-11-29 10:50:05 --> 404 Page Not Found: Master/add_state
ERROR - 2022-11-29 10:50:06 --> 404 Page Not Found: Master/add_state
ERROR - 2022-11-29 12:33:36 --> Query error: Unknown column 'status' in 'where clause' - Invalid query: SELECT *
FROM `tbl_cities`
WHERE `name` = 'sss'
AND `state_id` = '1'
AND `status` = '1'
ERROR - 2022-11-29 12:46:53 --> 404 Page Not Found: Master/display_all_city_data
ERROR - 2022-11-29 12:47:21 --> Query error: Unknown column 'tbl_cities.states_id' in 'on clause' - Invalid query: SELECT `tbl_states`.`name`, GROUP_CONCAT(tbl_cities.name) as city_name
FROM `tbl_cities`
LEFT JOIN `tbl_states` ON `tbl_states`.`id`=`tbl_cities`.`states_id`
GROUP BY `tbl_states`.`id`
ORDER BY `tbl_cities`.`id` DESC
ERROR - 2022-11-29 15:39:05 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 45
ERROR - 2022-11-29 15:39:05 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 48
ERROR - 2022-11-29 15:39:05 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 52
ERROR - 2022-11-29 15:39:18 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 45
ERROR - 2022-11-29 15:39:18 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 48
ERROR - 2022-11-29 15:39:18 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 52
ERROR - 2022-11-29 15:39:27 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 45
ERROR - 2022-11-29 15:39:27 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 48
ERROR - 2022-11-29 15:39:27 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 52
ERROR - 2022-11-29 15:39:53 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-11-29 15:39:53 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 47
ERROR - 2022-11-29 15:39:53 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 51
ERROR - 2022-11-29 15:39:55 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-11-29 15:39:55 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 47
ERROR - 2022-11-29 15:39:55 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 51
ERROR - 2022-11-29 15:40:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-11-29 15:40:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 47
ERROR - 2022-11-29 15:40:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 51
ERROR - 2022-11-29 15:40:40 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 45
ERROR - 2022-11-29 15:40:40 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 48
ERROR - 2022-11-29 15:40:40 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 52
ERROR - 2022-11-29 15:40:49 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 48
ERROR - 2022-11-29 15:40:49 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 52
ERROR - 2022-11-29 15:40:53 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 48
ERROR - 2022-11-29 15:40:53 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 52
ERROR - 2022-11-29 15:41:42 --> Query error: Unknown column 'tbl_states.name' in 'field list' - Invalid query: SELECT `tbl_cities`.*, `tbl_states`.`name` as `state_name`
FROM `tbl_cities`
WHERE `tbl_cities`.`status` = 1
ORDER BY `tbl_cities`.`id` DESC
ERROR - 2022-11-29 15:42:31 --> Query error: Unknown column 'tbl_states.name' in 'field list' - Invalid query: SELECT `tbl_cities`.*, `tbl_states`.`name` as `state_name`
FROM `tbl_cities`
WHERE `tbl_cities`.`status` = 1
ORDER BY `tbl_cities`.`id` DESC
ERROR - 2022-11-29 16:18:52 --> Severity: Notice --> Undefined variable: city C:\xampp\htdocs\legalmis\application\views\add_pincode.php 29
ERROR - 2022-11-29 16:18:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\add_pincode.php 29
ERROR - 2022-11-29 16:19:13 --> Severity: Notice --> Undefined variable: city C:\xampp\htdocs\legalmis\application\views\add_pincode.php 29
ERROR - 2022-11-29 16:19:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\add_pincode.php 29
ERROR - 2022-11-29 16:20:18 --> Query error: Table 'dynamic_crm.tbl_city_datas' doesn't exist - Invalid query: SELECT *
FROM `tbl_city_datas`
WHERE `status` = 1
