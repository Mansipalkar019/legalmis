<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 10:23:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 10:23:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 10:23:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 11:33:47 --> Severity: Notice --> Undefined property: Sales::$column_search C:\xampp\htdocs\legalmis\system\core\Model.php 74
ERROR - 2022-09-28 11:33:47 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\legalmis\application\models\supermodel.php 131
ERROR - 2022-09-28 11:33:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC' at line 10 - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(DISTINCT(services.name)) as serviceid, GROUP_CONCAT(sub_services.name) as subserviceid
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND   (
`id` LIKE '%s%' ESCAPE '!'
GROUP BY `sales`.`id`
ORDER BY `sales`.`id` DESC, `id` ASC
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:02:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 12:02:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 12:02:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:04:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:05:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 12:05:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 12:05:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 186
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:06:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:08:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:14:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:17:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:22 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:19:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 12:47:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 09:49:50 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 09:49:50 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 09:49:50 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 195
ERROR - 2022-09-28 09:49:50 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 195
ERROR - 2022-09-28 09:49:50 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 264
ERROR - 2022-09-28 11:31:11 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 11:31:11 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 11:31:11 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 195
ERROR - 2022-09-28 11:31:11 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 195
ERROR - 2022-09-28 11:31:11 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 264
ERROR - 2022-09-28 11:47:36 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 11:47:36 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 11:47:36 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 195
ERROR - 2022-09-28 11:47:36 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 195
ERROR - 2022-09-28 11:49:21 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 11:49:21 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 11:49:21 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 195
ERROR - 2022-09-28 11:49:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 195
ERROR - 2022-09-28 12:02:53 --> Severity: Notice --> Undefined variable: from_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 12:02:53 --> Severity: Notice --> Undefined variable: to_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 12:03:13 --> Severity: Notice --> Undefined variable: from_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 12:03:13 --> Severity: Notice --> Undefined variable: to_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 12:03:13 --> Severity: Notice --> Undefined variable: from_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 196
ERROR - 2022-09-28 12:03:13 --> Severity: Notice --> Undefined variable: to_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 196
ERROR - 2022-09-28 12:03:13 --> Severity: Notice --> Undefined variable: from_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 197
ERROR - 2022-09-28 12:03:13 --> Severity: Notice --> Undefined variable: to_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 197
ERROR - 2022-09-28 12:05:48 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:05:48 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:05:48 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:05:48 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:05:48 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:07:02 --> Severity: Warning --> Illegal string offset 'start' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:07:02 --> Severity: Warning --> Illegal string offset 'length' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:07:02 --> Severity: Warning --> Illegal string offset 'search' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:07:02 --> Severity: Warning --> Illegal string offset 'value' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:07:02 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:07:21 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:07:21 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:07:21 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:07:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:07:21 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:07:42 --> Severity: Warning --> Illegal string offset 'start' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:07:42 --> Severity: Warning --> Illegal string offset 'length' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:07:42 --> Severity: Warning --> Illegal string offset 'search' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:07:42 --> Severity: Warning --> Illegal string offset 'value' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:07:42 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined variable: from_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined variable: to_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 194
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined variable: from_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 196
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined variable: to_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 196
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined variable: from_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 197
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined variable: to_date C:\xampp\htdocs\legalmis\application\controllers\Sales.php 197
ERROR - 2022-09-28 12:18:25 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:19:47 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:19:47 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:19:47 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:19:47 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:19:47 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:36:57 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:36:57 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:36:57 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:36:57 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:36:57 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:37:40 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:37:40 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:37:40 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:37:40 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:37:40 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:37:51 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 191
ERROR - 2022-09-28 12:37:51 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 192
ERROR - 2022-09-28 12:37:51 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:37:51 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 193
ERROR - 2022-09-28 12:37:51 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 263
ERROR - 2022-09-28 12:41:51 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:41:51 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:41:51 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:41:51 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:41:51 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1666
ERROR - 2022-09-28 12:44:42 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:44:42 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:44:42 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:44:42 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:44:42 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1666
ERROR - 2022-09-28 12:45:01 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:45:01 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:45:01 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:45:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:45:01 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1666
ERROR - 2022-09-28 12:45:13 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:45:13 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:45:13 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:45:13 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:45:13 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1666
ERROR - 2022-09-28 12:46:00 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:46:00 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:46:00 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:46:00 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:46:00 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1666
ERROR - 2022-09-28 12:46:35 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:46:35 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:46:35 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:46:35 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:47:06 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:47:06 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:47:06 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:47:06 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:47:06 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1666
ERROR - 2022-09-28 12:51:40 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:51:40 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:51:40 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:51:40 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:51:40 --> Severity: Notice --> Undefined index: draw C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1666
ERROR - 2022-09-28 12:52:21 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:52:21 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:52:21 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:52:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:52:52 --> Severity: Notice --> Undefined index: start C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1644
ERROR - 2022-09-28 12:52:52 --> Severity: Notice --> Undefined index: length C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1645
ERROR - 2022-09-28 12:52:52 --> Severity: Notice --> Undefined index: search C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:52:52 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1646
ERROR - 2022-09-28 12:55:31 --> Severity: error --> Exception: syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 188
ERROR - 2022-09-28 12:55:42 --> Severity: error --> Exception: syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 188
ERROR - 2022-09-28 12:55:46 --> Severity: error --> Exception: syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 188
ERROR - 2022-09-28 13:33:21 --> Severity: error --> Exception: Call to undefined method supermodel::edit_sales_data() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 283
ERROR - 2022-09-28 13:33:54 --> Severity: Compile Error --> Cannot redeclare Sales::edit_sales() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 1762
ERROR - 2022-09-28 13:34:30 --> Severity: error --> Exception: Call to undefined method supermodel::edit_sales_data() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 283
ERROR - 2022-09-28 13:34:45 --> Severity: error --> Exception: Call to undefined method supermodel::edit_sales_data() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 283
ERROR - 2022-09-28 13:35:17 --> Severity: error --> Exception: Call to undefined method supermodel::get_sale_service() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 284
ERROR - 2022-09-28 13:35:18 --> Severity: error --> Exception: Call to undefined method supermodel::get_sale_service() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 284
ERROR - 2022-09-28 13:35:19 --> Severity: error --> Exception: Call to undefined method supermodel::get_sale_service() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 284
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 13:35:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:35:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:11 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:37:14 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:31 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:32 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:38:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 14:39:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:02:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:03:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 417
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 416
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 416
ERROR - 2022-09-28 15:10:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 416
ERROR - 2022-09-28 15:15:46 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp\htdocs\legalmis\application\views\update_sales.php 681
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 15:15:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\views\update_sales.php 420
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 15:27:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:42:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:45:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:45:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:45:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:46:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:46:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:46:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:56:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:56:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 15:56:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 16:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 16:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 16:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 17:02:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 17:02:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 17:02:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 17:37:22 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 294
ERROR - 2022-09-28 17:37:22 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 294
ERROR - 2022-09-28 17:37:22 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 294
ERROR - 2022-09-28 17:37:22 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 294
ERROR - 2022-09-28 17:37:22 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 294
ERROR - 2022-09-28 17:37:22 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 294
ERROR - 2022-09-28 17:37:22 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 294
ERROR - 2022-09-28 17:37:22 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 294
ERROR - 2022-09-28 17:37:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 293
ERROR - 2022-09-28 17:38:17 --> Severity: error --> Exception: syntax error, unexpected ''<pre>'' (T_CONSTANT_ENCAPSED_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:39:09 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 17:39:09 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 17:39:09 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 17:39:09 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 17:39:09 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 17:39:09 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 17:39:09 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 17:39:09 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 295
ERROR - 2022-09-28 17:42:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:42:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:42:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:47:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:47:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:47:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:47:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:47:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:47:25 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:47:25 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:47:25 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:25 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:25 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:25 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:25 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:48 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:48 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:48 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:48 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:48 --> Severity: Notice --> Undefined index: fk_brand_id C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:48 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:48 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:48 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Sales.php 291
ERROR - 2022-09-28 17:48:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:48:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:48:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:55:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:55:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 17:55:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:04:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:04:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:04:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:29:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:29:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:29:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:30:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:30:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:30:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:31:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:31:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:31:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 18:32:30 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 415
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 18:32:30 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 415
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 18:32:30 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 415
ERROR - 2022-09-28 18:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 419
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:17 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 415
ERROR - 2022-09-28 18:33:17 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 415
ERROR - 2022-09-28 18:33:17 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 415
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:34:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:34:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:34:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:34:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:34:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:34:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:35:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:08 --> Severity: error --> Exception: syntax error, unexpected '@' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:36:14 --> Severity: error --> Exception: syntax error, unexpected '@' C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:36:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:36:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:36:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:36:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:20 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:36:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:36:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:36:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:35 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:37:35 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:37:35 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:55 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:37:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:38:41 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:38:41 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:38:41 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:39:50 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:39 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:41:39 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:41:39 --> Severity: Notice --> Undefined index: sale_service_class C:\xampp\htdocs\legalmis\application\views\update_sales.php 418
ERROR - 2022-09-28 18:41:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:41:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:41:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 290
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
ERROR - 2022-09-28 18:41:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\legalmis\application\views\update_sales.php 387
