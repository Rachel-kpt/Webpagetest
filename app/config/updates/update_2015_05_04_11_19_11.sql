
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblProductsOrderedToday', 'backend', 'Label / products ordered today', 'script', '2015-05-04 06:19:43');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'products ordered today', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblProductOrderedToday', 'backend', 'Label / product ordered today', 'script', '2015-05-04 06:20:03');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'product ordered today', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblDashProductsOrderedToday', 'backend', 'Label / Products ordered today', 'script', '2015-05-04 07:11:45');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Products ordered today', 'script');

INSERT INTO `fields` VALUES (NULL, 'menuReport', 'backend', 'Menu / Report', 'script', '2015-05-04 07:33:57');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Report', 'script');

INSERT INTO `fields` VALUES (NULL, 'infoReportTitle', 'backend', 'Infobox / Report', 'script', '2015-05-04 07:32:01');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Report', 'script');

INSERT INTO `fields` VALUES (NULL, 'infoReportDesc', 'backend', 'Infobox / Report', 'script', '2015-05-04 07:33:22');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Select date range and view a report for all completed orders during that period.', 'script');

INSERT INTO `fields` VALUES (NULL, 'btnReport', 'backend', 'Button / Report', 'script', '2015-05-04 07:34:18');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Report', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblFromDate', 'backend', 'Label / From date', 'script', '2015-05-04 07:36:43');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'From date', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblToDate', 'backend', 'Label / To date', 'script', '2015-05-04 07:37:03');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'To date', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblUpTotalOrders', 'backend', 'Label / Total orders', 'script', '2015-05-04 07:51:20');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Total orders', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblTotalAmount', 'backend', 'Label / Total amount', 'script', '2015-05-04 07:57:24');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Total amount', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblUniqueClients', 'backend', 'Label / Unqiue clients', 'script', '2015-05-04 08:07:54');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Unique clients', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblFirstTimeClients', 'backend', 'Label / First time clients', 'script', '2015-05-04 08:28:08');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'First time clients', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblAvgOrderAmount', 'backend', 'Label / Average order amount', 'script', '2015-05-04 09:36:56');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Average order amount', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblMinOrderAmount', 'backend', 'Label / Min order amount', 'script', '2015-05-04 09:37:21');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Min order amount', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblMaxOrderAmount', 'backend', 'Label / Max order amount', 'script', '2015-05-04 09:37:43');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Max order amount', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblAverageProductsPerOrder', 'backend', 'Label / Average products per order', 'script', '2015-05-04 10:32:47');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Average products per order', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblMinProductsPerOrder', 'backend', 'Label / Min products per order', 'script', '2015-05-04 10:33:12');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Min products per order', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblMaxProductsPerOrder', 'backend', 'Label / Max products per order', 'script', '2015-05-04 10:33:41');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Max products per order', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblMostPopularProduct', 'backend', 'Label / Most popular product', 'script', '2015-05-04 11:15:43');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Most popular product', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblSoldTimes', 'backend', 'Label / Sold times', 'script', '2015-05-04 10:35:14');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'sold {NUM} times', 'script');

COMMIT;