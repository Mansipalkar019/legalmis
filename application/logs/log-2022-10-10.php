<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-10-10 10:35:55 --> Query error: Unknown column 'left' in 'from clause' - Invalid query: SELECT `sales_services`.*, `services`.`name` as `servicename`
FROM `sales_services`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
JOIN `users` USING (`left`)
WHERE `sales_services`.`sales_id` = '9'
GROUP BY `sales_services`.`id`
ORDER BY `sales_services`.`id` DESC
