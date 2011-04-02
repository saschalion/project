ALTER TABLE `sf_guard_user` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci
ALTER TABLE `sf_guard_user` CHANGE `first_name` `first_name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `last_name` `last_name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `email_address` `email_address` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
CHANGE `username` `username` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
CHANGE `algorithm` `algorithm` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'sha1',
CHANGE `salt` `salt` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `password` `password` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL 