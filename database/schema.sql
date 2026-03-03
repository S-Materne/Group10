CREATE DATABASE ines_ticket_app;
USE ines_ticket_app;

CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    ticket_code VARCHAR(20) UNIQUE NOT NULL,
    checked_in TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);