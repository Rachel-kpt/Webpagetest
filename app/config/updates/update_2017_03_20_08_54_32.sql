
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'system_217', 'frontend', 'Voucher code not applied.', 'script', '2017-03-20 08:54:22');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Voucher code not applied.', 'script');

COMMIT;