CREATE DATABASE testdb;
USE testdb;

CREATE TABLE person (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    alamat VARCHAR(200)
);

CREATE TABLE hobi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    person_id INT,
    hobi VARCHAR(100),
    FOREIGN KEY (person_id) REFERENCES person(id)
);

-- contoh data
INSERT INTO person (nama, alamat) VALUES
('Andi', 'Bandung'),
('Budi', 'Jakarta'),
('Citra', 'Surabaya');

INSERT INTO hobi (person_id, hobi) VALUES
(1, 'Membaca'),
(1, 'Sepak Bola'),
(2, 'Bernyanyi'),
(3, 'Renang'),
(3, 'Traveling');
