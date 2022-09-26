<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-24 09:13:28 --> Severity: error --> Exception: Invalid size representation "100% !important" C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 30562
ERROR - 2022-09-24 09:13:47 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:14:04 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:14:47 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:14:55 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:26:11 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 09:27:20 --> Severity: error --> Exception: Unable to create output file: C:\xampp\htdocs\legalmis\uploads/invoice/legal.pdf C:\xampp\htdocs\legalmis\application\third_party\mpdf\mpdf.php 9442
ERROR - 2022-09-24 10:33:00 --> Severity: error --> Exception: syntax error, unexpected 'base_url' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 88
ERROR - 2022-09-24 10:33:01 --> Severity: error --> Exception: syntax error, unexpected 'base_url' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 88
ERROR - 2022-09-24 10:33:01 --> Severity: error --> Exception: syntax error, unexpected 'base_url' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 88
ERROR - 2022-09-24 10:34:07 --> Severity: error --> Exception: syntax error, unexpected 'base64_encode' (T_STRING) C:\xampp\htdocs\legalmis\application\controllers\Sales.php 88
ERROR - 2022-09-24 10:34:30 --> 404 Page Not Found: Sales/edit_sales
ERROR - 2022-09-24 10:53:34 --> Severity: error --> Exception: syntax error, unexpected 'sales' (T_STRING), expecting ')' C:\xampp\htdocs\legalmis\application\models\supermodel.php 189
ERROR - 2022-09-24 11:06:09 --> Query error: Unknown column 'sale_service_brand.id' in 'field list' - Invalid query: SELECT DISTINCT `sales`.*, GROUP_CONCAT(sales_services.id) as sales_services_id, GROUP_CONCAT(sales_services.services_id) as services_id, GROUP_CONCAT(sales_sub_services.id) as sales_sub_services_id, GROUP_CONCAT(sales_sub_services.sub_services_id) as sub_services_id, GROUP_CONCAT(sale_service_brand.id) as sale_service_brand_id, GROUP_CONCAT(sale_service_brand.brand_name)
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
WHERE `sales`.`status` = 1
AND `sales`.`id` = '2'
GROUP BY `sales`.`id`
ERROR - 2022-09-24 11:10:32 --> Query error: Unknown column 'sale_service_brand.fk_sale_id' in 'on clause' - Invalid query: SELECT `sales`.*, GROUP_CONCAT(sales_services.id) as sales_services_id, GROUP_CONCAT(sales_services.services_id) as services_id, GROUP_CONCAT(sales_sub_services.id) as sales_sub_services_id, GROUP_CONCAT(sales_sub_services.sub_services_id) as sub_services_id, GROUP_CONCAT(sale_service_brand.id) as sale_service_brand_id, GROUP_CONCAT(sale_service_brand.brand_name) as brand_name, GROUP_CONCAT(sale_service_class.id) as sale_service_class_id, GROUP_CONCAT(sale_service_class.class_name) as class_name
FROM `sales`
LEFT JOIN `sales_services` ON `sales_services`.`sales_id`=`sales`.`id`
LEFT JOIN `sales_sub_services` ON `sales_sub_services`.`sales_id`=`sales`.`id`
LEFT JOIN `services` ON `services`.`id`=`sales_services`.`services_id`
LEFT JOIN `sub_services` ON `sub_services`.`id`=`sales_sub_services`.`sub_services_id`
LEFT JOIN `sale_service_brand` ON `sales`.`id`=`sale_service_brand`.`fk_sale_id`
LEFT JOIN `sale_service_class` ON `sale_service_class`.`fk_sale_id`=`sales`.`id`
WHERE `sales`.`id` = '2'
AND `sales`.`status` = 1
GROUP BY `sales`.`id`
ERROR - 2022-09-24 11:19:53 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 482
ERROR - 2022-09-24 11:37:23 --> Severity: Notice --> Undefined variable: tcs C:\xampp\htdocs\legalmis\application\controllers\Sales.php 482
ERROR - 2022-09-24 12:03:56 --> Severity: error --> Exception: Call to undefined method supermodel::get_sale_service_brand() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 160
ERROR - 2022-09-24 12:10:24 --> Severity: Compile Error --> Cannot redeclare supermodel::get_sale_sub_service() C:\xampp\htdocs\legalmis\application\models\supermodel.php 213
ERROR - 2022-09-24 12:10:26 --> Severity: Compile Error --> Cannot redeclare supermodel::get_sale_sub_service() C:\xampp\htdocs\legalmis\application\models\supermodel.php 213
ERROR - 2022-09-24 12:10:54 --> Severity: error --> Exception: Call to undefined method supermodel::get_sale_service_class() C:\xampp\htdocs\legalmis\application\controllers\Sales.php 161
