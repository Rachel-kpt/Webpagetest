
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblSameVoucherCode', 'backend', 'Label / ', 'script', '2015-05-14 02:46:52');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Voucher code is already in use.', 'script');

COMMIT;