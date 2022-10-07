<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

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
