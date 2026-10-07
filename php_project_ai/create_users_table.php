<?php

require_once __DIR__ . '/dbconfig.php';

$sql = <<<'SQL'
CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY uq_users_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL;

if (!$conn->query($sql)) {
    die('Database error: ' . $conn->error);
}

header('Content-Type: text/plain; charset=utf-8');
echo 'User table created successfully in database: ' . $db . PHP_EOL;
