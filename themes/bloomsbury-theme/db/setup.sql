// Chat Channels table
CREATE TABLE `bloomsbury`.`re11ac_chat_channels` ( `channel_id` BIGINT NOT NULL AUTO_INCREMENT , `channel_name` VARCHAR(200) NOT NULL , PRIMARY KEY (`channel_id`)) ENGINE = InnoDB;
CREATE TABLE `bloomsbury`.`re11ac_chat_channel_users` ( `channel_id` BIGINT NOT NULL , `user_id` BIGINT NOT NULL) ENGINE = InnoDB;
CREATE TABLE `bloomsbury`.`re11ac_chat_messages` ( `message_id` BIGINT NOT NULL AUTO_INCREMENT , `content` TEXT NOT NULL , `message_author_id` BIGINT NOT NULL , `channel_id` BIGINT NOT NULL , `created_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`message_id`)) ENGINE = InnoDB;
