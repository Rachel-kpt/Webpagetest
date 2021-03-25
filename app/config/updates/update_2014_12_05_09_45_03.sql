
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblNoAddressBook', 'backend', 'Label / No address book', 'script', '2014-12-04 06:28:43');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'There are no addresses. Manage client''s address book [STAG]here[ETAG].', 'script');

INSERT INTO `fields` VALUES (NULL, 'btnRecalcualteThePrice', 'backend', 'Button / Recalculate the price', 'script', '2014-12-04 06:30:27');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Recalculate the price', 'script');

INSERT INTO `fields` VALUES (NULL, 'btnAddProduct', 'backend', 'Button / Add product', 'script', '2014-12-04 06:31:11');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', '+ Add product', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_new_clients_today', 'backend', 'Label / new clients today', 'script', '2014-12-04 10:22:25');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'new clients today', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_new_client_today', 'backend', 'Label / new client today', 'script', '2014-12-04 10:22:46');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'new client today', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblTotalOrders', 'backend', 'Label / total orders', 'script', '2014-12-04 10:27:20');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'total orders', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblTotalOrder', 'backend', 'Label / total order', 'script', '2014-12-04 10:27:49');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'total order', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblViewAll', 'backend', 'Label / view all', 'script', '2014-12-04 10:37:45');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'view all', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblBrief', 'backend', 'Label / Brief', 'script', '2014-12-04 10:39:08');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Brief', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblNewOrders', 'backend', 'Label / new orders', 'script', '2014-12-05 07:48:36');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'new orders', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblNewOrder', 'backend', 'Label / new order', 'script', '2014-12-05 07:48:52');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'new order', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblPendingOrder', 'backend', 'Label / pending order', 'script', '2014-12-05 07:52:08');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'pending order', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblPendingOrders', 'backend', 'Label / pending orders', 'script', '2014-12-05 07:52:24');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'pending orders', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_active_products', 'backend', 'Dashboard / active products', 'script', '2014-12-05 07:59:04');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'active products', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_active_product', 'backend', 'Dashboard / active product', 'script', '2014-12-05 07:59:20');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'active product', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_product_out_of_stock', 'backend', 'Dashboard / product out of stock', 'script', '2014-12-05 08:21:15');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'product out of stock', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_products_out_of_stock', 'backend', 'Dashboard / products out of stock', 'script', '2014-12-05 08:21:31');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'products out of stock', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_active_products_out_of_stock', 'backend', 'Dashboard / active products out of stock', 'script', '2014-12-05 08:24:11');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'active products out of stock', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_active_product_out_of_stock', 'backend', 'Dashboard / active product out of stock', 'script', '2014-12-05 08:24:34');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'active product out of stock', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_active_vouchers', 'backend', 'Dashboard / active voucher', 'script', '2014-12-05 08:29:19');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Active Vouchers at the moment', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_categories_in_use', 'backend', 'Dashboard / categories in use', 'script', '2014-12-05 09:05:52');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'categories in use', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_category_in_use', 'backend', 'Dashboard / category in use', 'script', '2014-12-05 09:06:04');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'category in use', 'script');
INSERT INTO `fields` VALUES (NULL, 'dashboard_languages_in_use', 'backend', 'Dashboard / Languages in use', 'script', '2014-12-05 09:07:14');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Languages in use', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_registration_date', 'backend', 'Dashboard / Registration date', 'script', '2014-12-05 09:16:16');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Registration date', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_date_time', 'backend', 'Dashboard / Date & time', 'script', '2014-12-05 09:20:47');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Date & time', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_status', 'backend', 'Dashboard / Status', 'script', '2014-12-05 09:24:36');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Status', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_payment', 'backend', 'Dashboard / Payment', 'script', '2014-12-05 09:26:11');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Payment', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_client', 'backend', 'Dashboard / Client', 'script', '2014-12-05 09:30:46');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Client', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_total', 'backend', 'Dashboard / Total', 'script', '2014-12-05 09:37:33');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Total', 'script');
INSERT INTO `fields` VALUES (NULL, 'dashboard_products_ordered', 'backend', 'Dashboard / Products ordered', 'script', '2014-12-05 09:40:40');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Products ordered', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_quantity', 'backend', 'Dashboard / Quantity', 'script', '2014-12-05 09:41:01');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Quantity', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_voucher', 'backend', 'Dashboard / Voucher', 'script', '2014-12-05 09:41:27');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Voucher', 'script');

INSERT INTO `fields` VALUES (NULL, 'dashboard_none', 'backend', 'Dashboard / none', 'script', '2014-12-05 09:41:59');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'none', 'script');

COMMIT;