ALTER TABLE `db_menor`.`tbl_product` 
ADD COLUMN `is_deleted` INT NULL DEFAULT 0 AFTER `created_by`;
