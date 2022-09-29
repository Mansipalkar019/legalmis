<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-29 10:23:48 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT GROUP_CONCAT(sub_services.name) as subservicename, GROUP_CONCAT(sales_sub_services.services_id) as subserviceid
FROM `sales_sub_services`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`services_id`
WHERE `sales_sub_services`.`services_id` = Array
GROUP BY `sales_sub_services`.`id`
ERROR - 2022-09-29 12:28:29 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT GROUP_CONCAT(sub_services.name) as subservicename, GROUP_CONCAT(sales_sub_services.sub_services_id ) as subserviceid, GROUP_CONCAT(sales_sub_services.sales_id ) as sales_id
FROM `sales_sub_services`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales_sub_services`.`sales_id` = '1'
AND `sales_sub_services`.`services_id` = Array
GROUP BY `sales_sub_services`.`id`
