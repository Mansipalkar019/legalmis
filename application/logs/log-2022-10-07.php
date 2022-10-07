<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-10-07 10:47:45 --> Severity: error --> Exception: syntax error, unexpected 'sales' (T_STRING), expecting ')' C:\xampp\htdocs\legalmis\application\models\supermodel.php 743
ERROR - 2022-10-07 12:15:59 --> 404 Page Not Found: Workallocation/getcity
ERROR - 2022-10-07 12:50:59 --> 404 Page Not Found: Sales/undefined
ERROR - 2022-10-07 12:51:16 --> 404 Page Not Found: Sales/undefined
ERROR - 2022-10-07 12:51:40 --> 404 Page Not Found: Sales/undefined
ERROR - 2022-10-07 12:52:34 --> 404 Page Not Found: Workallocation/getcity
ERROR - 2022-10-07 13:24:17 --> Severity: error --> Exception: Too few arguments to function supermodel::get_all_dealid(), 0 passed in C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php on line 18 and exactly 1 expected C:\xampp\htdocs\legalmis\application\models\supermodel.php 740
ERROR - 2022-10-07 13:24:37 --> Severity: error --> Exception: Too few arguments to function supermodel::get_all_dealid(), 0 passed in C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php on line 18 and exactly 1 expected C:\xampp\htdocs\legalmis\application\models\supermodel.php 740
ERROR - 2022-10-07 13:26:38 --> Severity: error --> Exception: Too few arguments to function supermodel::get_all_dealid(), 0 passed in C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php on line 18 and exactly 1 expected C:\xampp\htdocs\legalmis\application\models\supermodel.php 740
ERROR - 2022-10-07 13:26:39 --> Severity: error --> Exception: Too few arguments to function supermodel::get_all_dealid(), 0 passed in C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php on line 18 and exactly 1 expected C:\xampp\htdocs\legalmis\application\models\supermodel.php 740
ERROR - 2022-10-07 13:27:16 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:28:42 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:28:43 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:29:00 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:29:01 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:29:01 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:29:02 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:29:02 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:29:02 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:29:02 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:29:32 --> Severity: error --> Exception: Call to undefined method supermodel::get_all_dealid() C:\xampp\htdocs\legalmis\application\controllers\Workallocation.php 18
ERROR - 2022-10-07 13:30:00 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 28
ERROR - 2022-10-07 13:30:00 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 28
ERROR - 2022-10-07 13:30:23 --> Severity: Notice --> Undefined variable: rowperpage C:\xampp\htdocs\legalmis\application\models\supermodel.php 28
ERROR - 2022-10-07 13:30:23 --> Severity: Notice --> Undefined variable: rowno C:\xampp\htdocs\legalmis\application\models\supermodel.php 28
ERROR - 2022-10-07 13:37:52 --> Query error: Unknown column 'sales.id' in 'order clause' - Invalid query: SELECT `sales_services`.*
FROM `sales_services`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
WHERE `sales_services`.`sales_id` = '11'
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC
