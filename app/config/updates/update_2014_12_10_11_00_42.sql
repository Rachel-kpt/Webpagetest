
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblPositiveNumber', 'backend', 'Label / Please enter positive number', 'script', '2014-12-10 10:48:43');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Please enter positive number.', 'script');

COMMIT;