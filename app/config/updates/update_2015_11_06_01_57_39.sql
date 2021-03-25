
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'product_history_price_before', 'backend', 'Label / Price before', 'script', '2015-11-03 03:13:32');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Price before', 'script');

INSERT INTO `fields` VALUES (NULL, 'product_history_price_after', 'backend', 'Label / Price after', 'script', '2015-11-03 03:14:14');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Price after', 'script');

INSERT INTO `fields` VALUES (NULL, 'product_history_attribute', 'backend', 'Label / Attribute', 'script', '2015-11-03 03:41:35');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Attribute', 'script');

COMMIT;