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
