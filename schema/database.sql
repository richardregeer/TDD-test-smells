SET FOREIGN_KEY_CHECKS=0;

CREATE TABLE IF NOT EXISTS addresses (
  address_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  street VARCHAR(255) NOT NULL,
  house_number VARCHAR(10) NOT NULL,
  city VARCHAR(255),
  zipcode VARCHAR(6) NOT NULL,
  datetime DATETIME NOT NULL,
  PRIMARY KEY (address_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE IF NOT EXISTS customers (
  customer_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  date_of_birth DATETIME,
  gender VARCHAR(1) NOT NULL,
  email VARCHAR(255),
  phone VARCHAR(25),
  address_id BIGINT UNSIGNED,
  PRIMARY KEY (customer_id),
  CONSTRAINT `address_id_fk` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`address_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

SET FOREIGN_KEY_CHECKS=1;
