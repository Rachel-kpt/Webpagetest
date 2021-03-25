
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblValidateTime', 'backend', 'Label / Validate time', 'script', '2016-06-03 05:56:11');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'End time must be greater than start time.', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblValidateVoucherDateTime', 'backend', 'Label / Validate date time', 'script', '2016-06-03 05:56:45');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'From date/time must be greater than To date/time.', 'script');

COMMIT;