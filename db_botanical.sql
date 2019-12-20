CREATE TABLE `botanical_db`.`user_table` (
    `id_user` INT NOT NULL AUTO_INCREMENT ,  
    `nama` VARCHAR(64) NOT NULL ,  
    `usr_name` VARCHAR(16) NOT NULL ,
    `alamat` VARCHAR(255) NOT NULL ,    
    `pass` VARCHAR(16) NOT NULL ,      
    PRIMARY KEY  (`id_user`)
) ENGINE = InnoDB;

CREATE TABLE `botanical_db`.`admin_table` (
    `id_admin` INT NOT NULL AUTO_INCREMENT ,  
    `nama` VARCHAR(64) NOT NULL ,  
    `usr_name` VARCHAR(16) NOT NULL ,
    `alamat` VARCHAR(255) NOT NULL ,    
    `pass` VARCHAR(16) NOT NULL ,      
    PRIMARY KEY  (`id_admin`)
) ENGINE = InnoDB;

CREATE TABLE `botanical_db`.`diagnosa_table` (
    `id_diagnose` INT NOT NULL AUTO_INCREMENT ,  
    `hasil` VARCHAR(100) NOT NULL ,  
    `id_user` INT NOT NULL ,
    PRIMARY KEY  (`id_diagnose`)
) ENGINE = InnoDB;



