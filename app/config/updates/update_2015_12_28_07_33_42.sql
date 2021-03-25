
START TRANSACTION;

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "apply_arr_ARRAY_total");
UPDATE `multi_lang` SET `content` = 'Products total amount' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

COMMIT;