
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'front_select_attribute', 'frontend', 'Label / You need to select select product attribute first.', 'script', '2016-05-31 06:30:38');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'You need to select select product attribute first.', 'script');

COMMIT;