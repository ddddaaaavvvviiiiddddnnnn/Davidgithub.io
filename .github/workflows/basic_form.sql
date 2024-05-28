CREATE DATABASE IF NOT EXISTS basic_form;

USE basic_form;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(50) NOT NULL,
    profile_picture VARCHAR(255) NOT NULL
);
