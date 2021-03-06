
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'titles_ARRAY_AP09', 'arrays', 'titles_ARRAY_AP09', 'script', '2015-04-14 09:43:30');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Image could not be uploaded', 'script');

INSERT INTO `fields` VALUES (NULL, 'errors_ARRAY_AP09', 'arrays', 'errors_ARRAY_AP09', 'script', '2015-04-14 09:44:08');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Product image could not be uploaded because the file is too big. Maximum allowed file size is {SIZE}. Please, upload smaller file.', 'script');

INSERT INTO `fields` VALUES (NULL, 'titles_ARRAY_AP10', 'arrays', 'titles_ARRAY_AP10', 'script', '2015-04-14 09:44:30');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'Upload error', 'script');

INSERT INTO `fields` VALUES (NULL, 'errors_ARRAY_AP10', 'arrays', 'errors_ARRAY_AP10', 'script', '2015-04-14 09:44:50');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'The product has been updated, but file could not be uploaded successfully.', 'script');

COMMIT;