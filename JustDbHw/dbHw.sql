
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