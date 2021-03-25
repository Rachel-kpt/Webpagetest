
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'opt_o_email_send_to_friend', 'backend', 'Options / Send to friend', 'script', '2014-12-10 10:10:53');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Send to friend', 'script');

INSERT INTO `fields` VALUES (NULL, 'send_to_friend_tokens', 'backend', 'Label / Send to friend tokens', 'script', '2014-12-11 04:00:02');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', '<u>Available tokens:</u><br/>\r\n{FriendName}<br/>\r\n{FriendEmail}<br/>\r\n{YourName}<br/>\r\n{YourEmail}<br/>\r\n{URL}<br/>', 'script');

INSERT INTO `multi_lang` VALUES (NULL, 1, 'pjOption', '::LOCALE::', 'send_to_subject', 'Shopping Cart / Product', 'script');

INSERT INTO `multi_lang` VALUES (NULL, 1, 'pjOption', '::LOCALE::', 'send_to_tokens', 'Dear {FriendName},\r\n\r\nYour friend {YourName} thinks this may be interested you:\r\n{URL}', 'script');

COMMIT;