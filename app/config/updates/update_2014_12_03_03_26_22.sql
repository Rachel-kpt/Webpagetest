
START TRANSACTION;

INSERT INTO `fields` VALUES (NULL, 'lblNoImageUploaded', 'backend', 'Label / No image uploaded', 'script', '2014-12-03 03:05:45');

SET @id := (SELECT LAST_INSERT_ID());

INSERT INTO `multi_lang` VALUES (NULL, @id, 'pjField', '::LOCALE::', 'title', 'There are no images uploaded for this product. You need to upload at least one image per product.', 'script');

COMMIT;