
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'front_field_required', 'frontend', 'Field ', 'script', '2015-07-20 04:36:29');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Field is required.', 'script');

COMMIT;