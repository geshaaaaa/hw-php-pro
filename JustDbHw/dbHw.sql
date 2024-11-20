use php_10_24_db;
CREATE TABLE parks
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    adress varchar(250) NOT NULL
);

CREATE TABLE cars
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    park_id INT,
    model varchar(250) NOT NULL,
    price FLOAT NOT NULL,
    FOREIGN KEY (park_id) REFERENCES parks(id)
);

CREATE TABLE drivers
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    car_id INT,
    name varchar(250) NOT NULL,
    phone varchar(250),
    FOREIGN KEY (car_id) REFERENCES cars(id)
);


CREATE TABLE orders
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    driver_id INT NOT NULL ,
    customer_id INT NOT NULL ,
    start text NOT NULL,
    finish text NOT NULL,
    total float NOT NULL,
    FOREIGN KEY (driver_id) REFERENCES drivers(id),
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

CREATE TABLE customers
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(250) NOT NULL,
    phone varchar(250)
);


DROP TABLE parks;

DROP TABLE cars;

DROP TABLE drivers;

DROP TABLE orders;

CREATE TABLE product
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand_name char(250),
    category_name char(250),
    size varchar(10),
    price INT,
    availability bool
);

CREATE TABLE orders
(
    id INT AUTO_INCREMENT PRIMARY KEY ,
    product_id INT,
    customer_id INT,
    created_at DATETIME ,
    FOREIGN KEY (product_id) REFERENCES  product(id),
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

ALTER TABLE product
    MODIFY brand_name char(250) NOT NULL,
    MODIFY category_name char(250) NOT NULL,
    MODIFY size varchar(10) NOT NULL,
    MODIFY price INT NOT NULL,
    MODIFY availability bool NOT NULL;

ALTER TABLE product
    CHANGE availability available bool NOT NULL;

ALTER TABLE product
    ADD COLUMN product_name char(250) NOT NULL;

INSERT INTO customers
(name, phone)
VALUES
    ('Hennadii', 06744444444),
    ('Ugin', 06730320002),
    ('Elizabeth', 0679052250);

INSERT INTO product
(brand_name, category_name, size, price, available, product_name)
VALUES
    ('Nike', 'Кросівки','43',4500,true, 'Air Force'),
    ('Asics', 'Кофта','M', 2900 ,true,'BY KIKO KOSTADINOV BIXANCE HOODIE'),
    ('Clottee', 'Кофта','L', 3200,false,'PIXEL CLOUD HOODIE'),
    ('Oakley', 'Окуляри', 'O/S', 13000,true,'PLANTARIS'),
    ('Nike', 'Головний убор','O/S', 1900, true, 'X NOCTA RUNNING CAP'),
    ('Adidas', 'Спортивні штани', 'L', 3500, true, 'TIRO 23 CLUB PANTS'),
    ('New Balance', 'Кросівки', '42', 7200, true, '574 CORE');

INSERT INTO orders (product_id, customer_id, created_at)
VALUES
    (1, 2, '2024-11-17 14:30:00'),
    (2, 1, '2024-11-16 11:15:00'),
    (3, 1, '2024-11-15 18:45:00'),
    (4, 3, '2024-11-14 09:20:00'),
    (5, 2, '2024-11-13 16:50:00'),
    (6, 3, '2024-11-12 12:10:00'),
    (7, 2, '2024-11-13 16:50:00'),
    (1, 3, '2024-11-12 12:10:00');

UPDATE product
SET price = price + 1000
WHERE brand_name = 'Nike';

UPDATE product
SET available = false
WHERE  brand_name = 'New Balance';

DELETE FROM orders
WHERE id = 4 AND 6;

SELECT * FROM product, orders
WHERE product.id = orders.product_id;



SELECT * FROM orders;

SELECT * FROM product
WHERE price > 4000 AND available = true;

SELECT  product_name AS name, size FROM product
WHERE category_name = 'Кросівки';


SELECT  orders.id ,product.product_name, orders.created_at
FROM product
         INNER JOIN orders
                    ON product.id = orders.product_id
WHERE product.brand_name = 'Nike';

SELECT  orders.id ,product.product_name, customers.name,orders.created_at
FROM orders
         INNER JOIN product ON product.id = orders.product_id
         INNER JOIN customers ON customers.id = orders.customer_id
WHERE customers.name = 'Hennadii';