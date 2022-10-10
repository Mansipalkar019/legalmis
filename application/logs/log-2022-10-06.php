<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<<<<<<< HEAD
ERROR - 2022-10-06 11:24:38 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\legalmis\application\views\header.php 76
ERROR - 2022-10-06 11:24:59 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\legalmis\application\views\header.php 76
ERROR - 2022-10-06 11:32:38 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-06 11:32:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-06 11:32:44 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-06 11:32:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-06 11:33:14 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-06 11:33:14 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-06 11:34:09 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-06 11:34:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-06 11:50:24 --> Severity: error --> Exception: syntax error, unexpected '$user_id' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\models\supermodel.php 578
ERROR - 2022-10-06 11:54:18 --> Query error: Unknown column 'sales.id' in 'order clause' - Invalid query: SELECT GROUP_CONCAT(DISTINCT(allocated_service_users.created_on)) as created_on, GROUP_CONCAT(DISTINCT(users.username)) as username, GROUP_CONCAT(services.name) as servicename
FROM `allocated_service_users`
LEFT JOIN `services` ON `services`.`id`=`allocated_service_users`.`service`
LEFT JOIN `users` ON `users`.`user_id`=`allocated_service_users`.`user`
WHERE `allocated_service_users`.`status` = '1'
GROUP BY `users`.`user_id`, `sales`.`id`
ORDER BY `sales`.`id` DESC
 LIMIT 10
ERROR - 2022-10-06 11:55:15 --> Query error: Unknown column 'users.iuser_idd' in 'group statement' - Invalid query: SELECT GROUP_CONCAT(DISTINCT(allocated_service_users.created_on)) as created_on, GROUP_CONCAT(DISTINCT(users.username)) as username, GROUP_CONCAT(services.name) as servicename
FROM `allocated_service_users`
LEFT JOIN `services` ON `services`.`id`=`allocated_service_users`.`service`
LEFT JOIN `users` ON `users`.`user_id`=`allocated_service_users`.`user`
WHERE `allocated_service_users`.`status` = '1'
GROUP BY `users`.`iuser_idd`
ORDER BY `users`.`user_id` DESC
 LIMIT 10
ERROR - 2022-10-06 12:08:01 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 38
ERROR - 2022-10-06 12:08:01 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 38
ERROR - 2022-10-06 12:08:11 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 38
ERROR - 2022-10-06 12:08:11 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 38
ERROR - 2022-10-06 15:25:17 --> 404 Page Not Found: Uploads/images
=======
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\legalmis\application\views\update_sales.php 395
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Undefined index: name C:\xampp\htdocs\legalmis\application\views\update_sales.php 395
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 395
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 395
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 395
ERROR - 2022-10-06 11:31:08 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 395
ERROR - 2022-10-06 11:34:23 --> Severity: Notice --> Undefined index: sub_services_list C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1470
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Undefined index: name C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:03 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Undefined index: name C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:35:10 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\views\update_sales.php 396
ERROR - 2022-10-06 11:36:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:36:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:37:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:37:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:37:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:37:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:38:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:38:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:38:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:38:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:38:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:38:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:41:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:41:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:42:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:42:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:42:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:42:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:42:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:42:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 388
ERROR - 2022-10-06 11:42:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:42:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:43:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:43:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 389
ERROR - 2022-10-06 11:45:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-10-06 11:45:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-10-06 12:22:02 --> Severity: Notice --> Undefined index: sale_service_id C:\xampp\htdocs\legalmis\application\views\update_sales.php 356
ERROR - 2022-10-06 13:57:13 --> Query error: Unknown column 'services_id' in 'field list' - Invalid query: SELECT `id`, `name`, `services_id`
FROM `sub_services`
WHERE `status` = '1'
AND `service_id` = '1'
ERROR - 2022-10-06 13:57:14 --> Query error: Unknown column 'services_id' in 'field list' - Invalid query: SELECT `id`, `name`, `services_id`
FROM `sub_services`
WHERE `status` = '1'
AND `service_id` = '1'
ERROR - 2022-10-06 13:59:17 --> Query error: Unknown column 'services_id' in 'field list' - Invalid query: SELECT `id`, `name`, `services_id`
FROM `sub_services`
WHERE `status` = '1'
AND `service_id` = '1'
ERROR - 2022-10-06 13:59:18 --> Query error: Unknown column 'services_id' in 'field list' - Invalid query: SELECT `id`, `name`, `services_id`
FROM `sub_services`
WHERE `status` = '1'
AND `service_id` = '1'
ERROR - 2022-10-06 13:59:19 --> Query error: Unknown column 'services_id' in 'field list' - Invalid query: SELECT `id`, `name`, `services_id`
FROM `sub_services`
WHERE `status` = '1'
AND `service_id` = '1'
ERROR - 2022-10-06 14:03:14 --> Query error: Unknown column 'services_id' in 'field list' - Invalid query: SELECT `id`, `name`, `services_id`
FROM `sub_services`
WHERE `status` = '1'
AND `service_id` = '1'
ERROR - 2022-10-06 14:03:15 --> Query error: Unknown column 'services_id' in 'field list' - Invalid query: SELECT `id`, `name`, `services_id`
FROM `sub_services`
WHERE `status` = '1'
AND `service_id` = '1'
ERROR - 2022-10-06 14:03:16 --> Query error: Unknown column 'services_id' in 'field list' - Invalid query: SELECT `id`, `name`, `services_id`
FROM `sub_services`
WHERE `status` = '1'
AND `service_id` = '1'
ERROR - 2022-10-06 15:00:52 --> Severity: Warning --> array_diff(): Expected parameter 2 to be an array, string given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1967
ERROR - 2022-10-06 15:00:52 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, string given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1968
ERROR - 2022-10-06 15:01:22 --> Severity: Warning --> array_diff(): Expected parameter 2 to be an array, string given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1967
ERROR - 2022-10-06 15:01:22 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, string given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1968
ERROR - 2022-10-06 15:05:50 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1966
ERROR - 2022-10-06 15:21:10 --> Severity: Compile Error --> Cannot use [] for reading C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1777
ERROR - 2022-10-06 15:36:20 --> Severity: Warning --> Use of undefined constant sub_services_data - assumed 'sub_services_data' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1779
ERROR - 2022-10-06 15:36:20 --> Severity: Warning --> Use of undefined constant sub_services_data - assumed 'sub_services_data' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1779
ERROR - 2022-10-06 15:36:20 --> Severity: Warning --> Use of undefined constant sub_services_data - assumed 'sub_services_data' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1779
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Undefined variable: delete_sale_service_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1982
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1982
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Undefined variable: delete_sale_service_key C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1982
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1982
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:57:39 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:58:06 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:58:06 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:58:06 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:58:06 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:58:06 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 15:58:06 --> Severity: Notice --> Uninitialized string offset: 1 C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1990
ERROR - 2022-10-06 16:18:53 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1921
ERROR - 2022-10-06 16:18:54 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1921
ERROR - 2022-10-06 16:18:55 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1921
ERROR - 2022-10-06 16:19:02 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1921
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:20:20 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 16:40:14 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-10-06 17:30:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1472
ERROR - 2022-10-06 17:30:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-10-06 17:31:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1472
ERROR - 2022-10-06 17:31:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-10-06 17:51:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1472
ERROR - 2022-10-06 17:51:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-10-06 17:51:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:29:22 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:30:03 --> Severity: Notice --> Undefined index: terms C:\xampp\htdocs\legalmis\application\controllers\Masters.php 83
ERROR - 2022-10-06 18:32:33 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 656
>>>>>>> ede66fac92f93976a0df3d953065fe2fd6ef26c6
