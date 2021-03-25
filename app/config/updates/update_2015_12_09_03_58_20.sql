
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'front_btn_remove_discount', 'frontend', 'Button / Remove discount', 'script', '2015-12-09 03:58:10');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Remove discount', 'script');

COMMIT;