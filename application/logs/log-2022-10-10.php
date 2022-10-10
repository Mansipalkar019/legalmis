<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<<<<<<< HEAD
ERROR - 2022-10-10 10:35:55 --> Query error: Unknown column 'left' in 'from clause' - Invalid query: SELECT `sales_services`.*, `services`.`name` as `servicename`
FROM `sales_services`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
JOIN `users` USING (`left`)
WHERE `sales_services`.`sales_id` = '9'
GROUP BY `sales_services`.`id`
ORDER BY `sales_services`.`id` DESC
=======
ERROR - 2022-10-10 10:14:05 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-10 10:14:05 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-10 10:14:09 --> Severity: Notice --> Trying to access array offset on value of type bool C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-10 10:14:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\controllers\Welcome.php 44
ERROR - 2022-10-10 10:28:47 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\legalmis\application\views\update_sales.php 385
ERROR - 2022-10-10 10:30:40 --> Severity: Notice --> Undefined index: class_name C:\xampp\htdocs\legalmis\application\views\update_sales.php 441
ERROR - 2022-10-10 10:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\legalmis\application\views\update_sales.php 441
>>>>>>> ede66fac92f93976a0df3d953065fe2fd6ef26c6
