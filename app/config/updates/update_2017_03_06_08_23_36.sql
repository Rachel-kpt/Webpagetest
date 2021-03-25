
START TRANSACTION;

INSERT INTO `options` (`foreign_id`, `key`, `tab_id`, `value`, `label`, `type`, `order`, `is_visible`, `style`) VALUES
(1, 'o_sender_email', 1, 'admin@admin.com', NULL, 'string', 16, 1, NULL);

INSERT INTO `fields` VALUES (NULL, 'opt_o_sender_email', 'backend', 'Options / Email sender', 'plugin', NULL);
SET @id := (SELECT LAST_INSERT_ID());
INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Sender email (for email notifications)', 'plugin');

COMMIT;