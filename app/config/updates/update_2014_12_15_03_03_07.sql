
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblViewStock', 'backend', 'Label / View Stock', 'script', '2014-12-15 03:00:36');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'View Stock', 'script');

COMMIT;