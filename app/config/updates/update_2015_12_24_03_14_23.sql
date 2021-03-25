
START TRANSACTION;

ALTER TABLE `vouchers` ADD COLUMN `apply` enum('total','each') DEFAULT 'each' AFTER `type`;

INSERT INTO `fields` VALUES (NULL, 'lblApplyDiscountFor', 'backend', 'Label / Apply discount for', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Apply discount for', 'script');

INSERT INTO `fields` VALUES (NULL, 'apply_arr_ARRAY_total', 'arrays', 'apply_arr_ARRAY_total', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Order total amount', 'script');

INSERT INTO `fields` VALUES (NULL, 'apply_arr_ARRAY_each', 'arrays', 'apply_arr_ARRAY_each', 'script', NULL);

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Each product', 'script');

COMMIT;