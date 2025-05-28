-- Drop tables if they exist
DROP TABLE IF EXISTS contact_submissions;
DROP TABLE IF EXISTS users;

-- Create the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    is_verified TINYINT(1) DEFAULT 0,
    verification_token VARCHAR(64) DEFAULT NULL,
    verification_token_expires DATETIME DEFAULT NULL,
    reset_token VARCHAR(64) DEFAULT NULL,
    reset_token_expires DATETIME DEFAULT NULL,
    remember_token VARCHAR(64) DEFAULT NULL,
    remember_token_expires DATETIME DEFAULT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create the contact_submissions table
CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    submitted_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ip_address VARCHAR(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;