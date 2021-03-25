
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'front_show_password', 'frontend', 'Label / Show password', 'script', '2015-11-27 09:35:27');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Show password', 'script');

INSERT INTO `fields` VALUES (NULL, 'front_hide_password', 'frontend', 'Label / Hide password', 'script', '2015-11-27 09:35:52');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Hide password', 'script');

COMMIT;