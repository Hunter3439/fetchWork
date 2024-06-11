    CREATE DATABASE `social` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

    CREATE TABLE `social`.`posts`(
        `id` INTEGER UNSIGNED AUTO_INCREMENT NOT NULL,
        `name` VARCHAR(100) NOT NULL,
        `description` TEXT NULL,
        PRIMARY KEY(`id`)
    ) ENGINE = InnoDB;

    INSERT INTO `social`.`posts`(`id`,`name`,`description`) VALUE
    (DEFAULT, "Test", "Descriptioon");