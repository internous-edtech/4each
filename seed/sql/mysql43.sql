CREATE TABLE IF NOT EXISTS customer_data (
    id INT(11) NOT NULL auto_increment PRIMARY KEY,
    name varchar(255),
    mail varchar(255),
    tel varchar(255),
) DEFAULT CHARSET=utf8;

INSERT IGNORE INTO `customer_data` VALUES ( 1, '山田太郎','y.taro@gmail.com','03-1511-3333');
INSERT IGNORE INTO `customer_data` VALUES ( 2, '佐藤花子','h.sato@yahoo.co.jp','090-7724-8842');
INSERT IGNORE INTO `customer_data` VALUES ( 3, '田中次郎','tziro@gmail.com','080-8824-4445');
INSERT IGNORE INTO `customer_data` VALUES ( 4, '鈴木三郎','sabuszk@gmail.com','090-2224-8424');
