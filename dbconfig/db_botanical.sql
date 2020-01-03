CREATE TABLE `user_table` (
    `id_user` INT NOT NULL AUTO_INCREMENT ,  
    `nama` VARCHAR(64) NOT NULL ,  
    `usr_name` VARCHAR(16) NOT NULL ,
    `alamat` VARCHAR(255) NOT NULL ,    
    `pass` VARCHAR(16) NOT NULL ,      
    PRIMARY KEY  (`id_user`)
) ENGINE = InnoDB;

CREATE TABLE `admin_table` (
    `id_admin` INT NOT NULL AUTO_INCREMENT ,  
    `nama` VARCHAR(64) NOT NULL ,  
    `usr_name` VARCHAR(16) NOT NULL ,
    `alamat` VARCHAR(255) NOT NULL ,    
    `pass` VARCHAR(16) NOT NULL ,      
    PRIMARY KEY  (`id_admin`)
) ENGINE = InnoDB;

CREATE TABLE `diagnose_table` (
    `id_diagnosa` INT NOT NULL AUTO_INCREMENT ,  
    `hasil` VARCHAR(64) NOT NULL ,  
    `id_user` VARCHAR(16) NOT NULL ,
    `waktu_diagnosa` DATETIME NOT NULL ,         
    PRIMARY KEY  (`id_diagnosa`)
) ENGINE = InnoDB;

CREATE TABLE `list_kelayakan` (
    `id_kelayakan` INT NOT NULL AUTO_INCREMENT ,  
    `Kode` VARCHAR(10),
    `hasil` VARCHAR(64) NOT NULL ,         
    PRIMARY KEY  (`id_kelayakan`)
) ENGINE = InnoDB;

INSERT INTO list_kelayakan (Kode, hasil) VALUES ('P0001', 'Biji anda sangat layak'),
('P0002', 'Biji anda 80% layak'),
('P0003', 'Biji anda 60% layak'),
('P0004', 'Sebaiknya biji diganti')


