ALTER TABLE `services` ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `status`, ADD `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `created_at`;
ALTER TABLE `sub_services` ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `status`, ADD `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `created_at`;
ALTER TABLE `document_list` ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `status`, ADD `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `created_at`;
ALTER TABLE `document_list` CHANGE `name` `name` TINYTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `document_list` CHANGE `id` `id` BIGINT(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `services` ADD INDEX(`id`);
ALTER TABLE `services` ADD INDEX(`name`);
ALTER TABLE `services` ADD INDEX(`brand_name`);
ALTER TABLE `services` ADD INDEX(`class_name`);
ALTER TABLE `services` CHANGE `id` `id` BIGINT(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `sub_services` ADD INDEX(`id`);
ALTER TABLE `sub_services` ADD INDEX(`name`);
ALTER TABLE `sub_services` CHANGE `service_id` `service_id` INT(11) NULL DEFAULT NULL;
ALTER TABLE `sub_services` CHANGE `name` `name` TINYTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;