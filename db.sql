CREATE DATABASE portfolio_db;
USE portfolio_db;

CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150),
  email VARCHAR(200),
  message TEXT,
  created_at DATETIME
);
