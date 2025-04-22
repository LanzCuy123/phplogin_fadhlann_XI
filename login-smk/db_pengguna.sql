CREATE DATABASE IF NOT EXISTS db_pengguna;
USE db_pengguna;
CREATE TABLE pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50)
    password VARCHAR(50)
)

INSERT INTO pengguna (username,password) VALUES
('admin','admin123')
('guru','guru123')
('siswa','siswa123')