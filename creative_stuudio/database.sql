
CREATE DATABASE IF NOT EXISTS creative_stuudio;
USE creative_stuudio;

CREATE TABLE messages(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(150),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
