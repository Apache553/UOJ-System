ALTER TABLE user_info ADD nickname varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'nickname of a user';
UPDATE user_info SET nickname = username;
