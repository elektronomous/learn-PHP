/* create a user first */
CREATE USER 'elektrone' @'localhost' IDENTIFIED BY 'elektron3@';

GRANT ALL PRIVILEGES ON sale.* TO 'elektrone' @'localhost' IDENTIFIED BY 'elektron3@';