
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'front_na', 'frontend', 'Label / n/a', 'script', '2015-04-13 07:42:00');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'n/a', 'script');

COMMIT;