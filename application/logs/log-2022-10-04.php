<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<<<<<<< HEAD
ERROR - 2022-10-04 09:49:40 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `id` = '4'
ERROR - 2022-10-04 09:49:40 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 459
ERROR - 2022-10-04 09:50:57 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `id` = '4'
ERROR - 2022-10-04 09:50:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 459
ERROR - 2022-10-04 09:51:30 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `id` IS NULL
ERROR - 2022-10-04 09:51:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 459
ERROR - 2022-10-04 09:54:39 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `users`
WHERE `id` = '4'
ERROR - 2022-10-04 09:54:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\xampp\htdocs\legalmis\application\models\model.php 459
ERROR - 2022-10-04 10:29:24 --> 404 Page Not Found: Uploads/images
ERROR - 2022-10-04 10:45:07 --> 404 Page Not Found: AddBackendUser/index
ERROR - 2022-10-04 10:45:10 --> 404 Page Not Found: AddBackendUser/index
ERROR - 2022-10-04 10:50:19 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\legalmis\application\controllers\AddBackendUsers.php 136
ERROR - 2022-10-04 10:50:19 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\legalmis\application\controllers\AddBackendUsers.php 136
ERROR - 2022-10-04 10:50:20 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\legalmis\application\controllers\AddBackendUsers.php 136
ERROR - 2022-10-04 10:50:20 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\legalmis\application\controllers\AddBackendUsers.php 136
ERROR - 2022-10-04 10:50:36 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\legalmis\application\controllers\AddBackendUsers.php 136
ERROR - 2022-10-04 10:51:11 --> Severity: error --> Exception: Too few arguments to function Model::updateData(), 2 passed in C:\xampp\htdocs\legalmis\application\controllers\AddBackendUsers.php on line 123 and exactly 3 expected C:\xampp\htdocs\legalmis\application\models\model.php 335
ERROR - 2022-10-04 11:25:54 --> 404 Page Not Found: Workallocation/work_allocation_user
ERROR - 2022-10-04 11:42:35 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_driver.php 1484
ERROR - 2022-10-04 11:42:35 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `allocated_service_users` (`user`, `service`, `status`) VALUES ('4', Array, '1')
ERROR - 2022-10-04 11:50:27 --> 404 Page Not Found: Workallocation/getsalesrecord
ERROR - 2022-10-04 12:07:13 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT GROUP_CONCAT(services.name) as serviceid, GROUP_CONCAT(users.username) as userid
FROM `allocated_service_users`
LEFT JOIN `services` ON `services`.`id`=`allocated_service_users`.`service`
LEFT JOIN `users` ON `users`.`user_id`=`allocated_service_users`.`user`
WHERE `status` = '1'
 LIMIT 10
ERROR - 2022-10-04 12:24:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'DISTINCT(users.username) as userid
FROM `allocated_service_users`
LEFT JOIN `...' at line 1 - Invalid query: SELECT `allocated_service_users`.*, DISTINCT(users.username) as userid
FROM `allocated_service_users`
LEFT JOIN `services` ON `services`.`id`=`allocated_service_users`.`service`
LEFT JOIN `users` ON `users`.`user_id`=`allocated_service_users`.`user`
WHERE `allocated_service_users`.`status` = '1'
 LIMIT 10
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 136
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 137
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: roles_name C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 142
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: mobile_no C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 144
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: email C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 145
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 136
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: user_id C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 137
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: roles_name C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 142
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: mobile_no C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 144
ERROR - 2022-10-04 12:42:19 --> Severity: Notice --> Undefined index: email C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 145
ERROR - 2022-10-04 13:44:53 --> 404 Page Not Found: ViewSales/view_sales
ERROR - 2022-10-04 13:45:26 --> 404 Page Not Found: ViewSales/view_sales
ERROR - 2022-10-04 13:45:53 --> 404 Page Not Found: ViewSales/view_sales
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:48:29 --> Severity: Notice --> Undefined variable: services C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: edit C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: invoice C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: delete C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:49:08 --> Severity: Notice --> Undefined variable: image_documents C:\xampp\htdocs\legalmis\application\controllers\ViewSales.php 47
ERROR - 2022-10-04 13:57:51 --> Severity: Notice --> Undefined index: created_on C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 138
ERROR - 2022-10-04 13:57:51 --> Severity: Notice --> Undefined index: created_on C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 138
ERROR - 2022-10-04 13:57:51 --> Severity: Notice --> Undefined index: created_on C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 138
ERROR - 2022-10-04 13:58:31 --> Severity: Notice --> Undefined index: created_on C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 138
ERROR - 2022-10-04 13:58:31 --> Severity: Notice --> Undefined index: created_on C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 138
ERROR - 2022-10-04 13:58:31 --> Severity: Notice --> Undefined index: created_on C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 138
ERROR - 2022-10-04 14:29:58 --> Severity: Notice --> Undefined index: firstname C:\xampp\htdocs\legalmis\application\controllers\Masters.php 518
ERROR - 2022-10-04 14:29:58 --> Severity: Notice --> Undefined index: lastname C:\xampp\htdocs\legalmis\application\controllers\Masters.php 519
ERROR - 2022-10-04 14:29:58 --> Severity: Notice --> Undefined index: mobile_no C:\xampp\htdocs\legalmis\application\controllers\Masters.php 520
ERROR - 2022-10-04 14:29:58 --> Severity: Notice --> Undefined index: email C:\xampp\htdocs\legalmis\application\controllers\Masters.php 521
ERROR - 2022-10-04 14:39:50 --> Severity: Notice --> Undefined index: firstname1 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 627
ERROR - 2022-10-04 14:39:50 --> Severity: Notice --> Undefined index: lastname1 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 628
ERROR - 2022-10-04 14:39:50 --> Severity: Notice --> Undefined index: mobile_no1 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 629
ERROR - 2022-10-04 14:39:50 --> Severity: Notice --> Undefined index: email1 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 630
ERROR - 2022-10-04 14:40:36 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:40:36 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:40:36 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:40:36 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:40:36 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `users` SET `username` = 'stzsoft', `password` = 'false', `roles_name` = 'Administrator', `roles_id` = '1'
WHERE `user_id` = '1'
AND `firstname` = Array
AND `lastname` = Array
AND `mobile_no` = Array
AND `email` = Array
ERROR - 2022-10-04 14:42:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:42:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:42:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:42:29 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:42:29 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `users` SET `username` = 'stzsoft', `password` = 'false', `roles_name` = 'Administrator', `roles_id` = '1'
WHERE `user_id` = '1'
AND `firstname` = Array
AND `lastname` = Array
AND `mobile_no` = Array
AND `email` = Array
ERROR - 2022-10-04 14:42:57 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:42:57 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:42:57 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:42:57 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 14:42:57 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `users` SET `username` = 'stzsoft', `password` = 'false', `roles_name` = 'Administrator', `roles_id` = '1'
WHERE `user_id` = '1'
AND `firstname` = Array
AND `lastname` = Array
AND `mobile_no` = Array
AND `email` = Array
ERROR - 2022-10-04 14:43:52 --> Severity: Notice --> Undefined index: firstname1 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 627
ERROR - 2022-10-04 14:43:52 --> Severity: Notice --> Undefined index: lastname1 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 628
ERROR - 2022-10-04 14:43:52 --> Severity: Notice --> Undefined index: mobile_no1 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 629
ERROR - 2022-10-04 14:43:52 --> Severity: Notice --> Undefined index: email1 C:\xampp\htdocs\legalmis\application\controllers\Masters.php 630
=======
ERROR - 2022-10-04 10:48:29 --> Severity: Notice --> Undefined variable: class_name C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1923
ERROR - 2022-10-04 10:48:29 --> Severity: Warning --> array_diff(): Expected parameter 2 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1923
ERROR - 2022-10-04 11:11:18 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, bool given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:18 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, bool given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:18 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, bool given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:18 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, bool given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:18 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, bool given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:18 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, bool given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:44 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:44 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:44 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:44 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:44 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:11:44 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:18:23 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:18:23 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:18:23 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:18:23 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:18:23 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:18:23 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1927
ERROR - 2022-10-04 11:24:58 --> Severity: Warning --> array_diff(): Expected parameter 2 to be an array, null given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1925
ERROR - 2022-10-04 11:34:16 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 657
ERROR - 2022-10-04 11:36:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1047
ERROR - 2022-10-04 11:38:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1908
ERROR - 2022-10-04 11:38:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1958
ERROR - 2022-10-04 11:38:34 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1971
ERROR - 2022-10-04 11:38:34 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1971
ERROR - 2022-10-04 11:38:34 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1971
ERROR - 2022-10-04 11:38:34 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1971
ERROR - 2022-10-04 11:57:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1908
ERROR - 2022-10-04 11:57:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1958
ERROR - 2022-10-04 12:34:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1908
ERROR - 2022-10-04 12:34:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1962
ERROR - 2022-10-04 12:39:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1908
ERROR - 2022-10-04 12:39:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1962
ERROR - 2022-10-04 13:35:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1908
ERROR - 2022-10-04 13:35:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1957
ERROR - 2022-10-04 13:35:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1908
ERROR - 2022-10-04 13:35:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1957
ERROR - 2022-10-04 13:36:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1959
ERROR - 2022-10-04 13:53:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1941
ERROR - 2022-10-04 13:53:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1941
ERROR - 2022-10-04 13:53:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1941
ERROR - 2022-10-04 13:53:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1941
ERROR - 2022-10-04 13:53:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1941
ERROR - 2022-10-04 13:53:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1941
ERROR - 2022-10-04 13:53:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1941
ERROR - 2022-10-04 14:48:02 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1984
ERROR - 2022-10-04 14:48:02 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1984
ERROR - 2022-10-04 14:48:02 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1984
ERROR - 2022-10-04 14:48:02 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1984
ERROR - 2022-10-04 14:48:02 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1984
ERROR - 2022-10-04 14:48:02 --> Severity: Notice --> Undefined variable: brand_name_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1984
ERROR - 2022-10-04 15:50:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 330
ERROR - 2022-10-04 18:18:09 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 18:18:09 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `id`, `name`, `brand_name`, `class_name`
FROM `services`
WHERE `id` = Array
AND `status` = '1'
ERROR - 2022-10-04 18:18:09 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 18:18:09 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `id`, `name`, `brand_name`, `class_name`
FROM `services`
WHERE `id` = Array
AND `status` = '1'
ERROR - 2022-10-04 18:18:10 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 18:18:10 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `id`, `name`, `brand_name`, `class_name`
FROM `services`
WHERE `id` = Array
AND `status` = '1'
ERROR - 2022-10-04 18:18:11 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 18:18:11 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `id`, `name`, `brand_name`, `class_name`
FROM `services`
WHERE `id` = Array
AND `status` = '1'
ERROR - 2022-10-04 18:18:11 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 18:18:11 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `id`, `name`, `brand_name`, `class_name`
FROM `services`
WHERE `id` = Array
AND `status` = '1'
ERROR - 2022-10-04 18:18:11 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\system\database\DB_query_builder.php 2443
ERROR - 2022-10-04 18:18:11 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `id`, `name`, `brand_name`, `class_name`
FROM `services`
WHERE `id` = Array
AND `status` = '1'
>>>>>>> ede66fac92f93976a0df3d953065fe2fd6ef26c6
