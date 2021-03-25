
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'front_choose', 'frontend', 'Label / Choose', 'script', '2015-05-12 06:26:35');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Choose', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblDashNoProductsOrderedToday', 'backend', 'Label / No products ordered today', 'script', '2015-05-12 07:32:04');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'No products ordered today', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblDashNoOrdersFound', 'backend', 'Label / No orders found', 'script', '2015-05-12 07:33:19');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'No orders found', 'script');

COMMIT;