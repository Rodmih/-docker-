CREATE TABLE IF NOT EXISTS persons (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    age INT
);

INSERT INTO persons (name, age) VALUES
('Родион', 28),
('Игнат', 35);
