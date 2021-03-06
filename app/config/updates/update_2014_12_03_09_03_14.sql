
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblInstallCategory', 'backend', 'Label / Category', 'script', '2014-12-03 08:57:27');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Category', 'script');

INSERT INTO `fields` VALUES (NULL, 'lblAllCatgories', 'backend', 'Label / All categories', 'script', '2014-12-03 08:57:53');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'All categories', 'script');

SET @id := (SELECT `id` FROM `fields` WHERE `key` = "lblInstallConfig");

UPDATE `multi_lang` SET `content` = 'Language and Categories' WHERE `foreign_id` = @id AND `model` = "pjField" AND `field` = "title";

COMMIT;