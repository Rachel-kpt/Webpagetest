
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblOutOfStock', 'backend', 'Label / Out of stock', 'script', '2015-05-15 05:26:46');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Out of stock', 'script');

COMMIT;