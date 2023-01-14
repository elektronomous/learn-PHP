/* create a database */
CREATE DATABASE IF NOT EXISTS sale;

/* move the database that we've just created */
USE sale;

/* create the table for the db */
CREATE TABLE product(
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NULL,
    product_price DOUBLE NULL,
    product_stock INT NULL,
    product_exp_date DATE NULL,
    product_up_date DATE
);