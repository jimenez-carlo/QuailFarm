ALTER TABLE `db_menor`.`tbl_product` 
ADD COLUMN `is_deleted` INT NULL DEFAULT 0 AFTER `created_by`;
CREATE TABLE `db_menor`.`tbl_inventory_history` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NULL,
  `qty` INT NULL,
  `created_by` INT NULL,
  `date_created` DATETIME NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`));
ALTER TABLE `db_menor`.`tbl_inventory_history` 
ADD COLUMN `original_qty` INT NULL AFTER `product_id`;
