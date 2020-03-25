CREATE DATABASE IF NOT EXISTS website;
USE website;

CREATE TABLE customer(
	customer_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstName varchar(50) NOT NULL,
    lastName varchar(50) NOT NULL,
    address varchar(100) NOT NULL,
    state varchar(2) NOT NULL,
    zipcode varchar(5) NOT NULL,
    email varchar(50) NOT NULL
);

CREATE TABLE login(
	login_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    customer_id INTEGER NOT NULL,
    login_password varchar(50) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer (customer_id)
);

CREATE TABLE orders(
	order_number INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    order_date DATE NOT NULL,
    customer_id INTEGER NOT NULL,
    isDelivered BOOLEAN NOT NULL,
	FOREIGN KEY (customer_id) REFERENCES customer (customer_id)
);

CREATE TABLE payment(
	payment_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    payment_type varchar(50) NOT NULL,
    payment_date date NOT NULL,
    payment_amount INTEGER NOT NULL,
    order_number INTEGER NOT NULL,
    FOREIGN KEY (order_number) REFERENCES orders (order_number)
);

CREATE TABLE category(
	category_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    category_name varchar(50) NOT NULL
);

CREATE TABLE product(
	product_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    product_name varchar(50) NOT NULL,
    category_id INTEGER NOT NULL,
    price INTEGER NOT NULL,
    product_image varchar(100),
    description varchar(200),
    FOREIGN KEY (category_id) REFERENCES category (category_id)
);

CREATE TABLE stock(
	stock_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    product_id INTEGER,
    quantity INTEGER,
    stock_date DATE,
	FOREIGN KEY (product_id) REFERENCES product (product_id)
);

CREATE TABLE OrderDetails(
	order_number INTEGER,
    product_id INTEGER,
    quantity INTEGER,
    FOREIGN KEY (order_number) REFERENCES orders (order_number),
    FOREIGN KEY (product_id) REFERENCES product (product_id)
);

CREATE TABLE shipment(
	ship_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    shipment_address varchar(50) NOT NULL,
    shipment_state varchar(2) NOT NULL,
    shipment_zip varchar(5) NOT NULL,
    shipment_date DATE NOT NULL,
    note varchar(200),
    order_number INTEGER NOT NULL,
    FOREIGN KEY (order_number) REFERENCES orders (order_number)
);