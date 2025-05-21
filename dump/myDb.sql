CREATE TABLE IF NOT EXISTS persons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT
);

INSERT INTO persons (name, age) VALUES
('Алиса', 30),
('Таня', 25);
