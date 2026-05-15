-- Run once in phpMyAdmin or: mysql -u root website_requirements < sql/admin_users.sql

CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Default login: admin / Admin@Prima2026
INSERT INTO admin_users (username, password_hash)
SELECT 'admin', '$2y$10$cw6F7JDQr2QtsCqj7sEiwOEyEA8VQYYzh9n16ApTJORAN8mb90yOO'
FROM DUAL
WHERE NOT EXISTS (SELECT 1 FROM admin_users WHERE username = 'admin');
