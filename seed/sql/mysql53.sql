CREATE TABLE IF NOT EXISTS fruit_stock (
    id INT(11) NOT NULL auto_increment PRIMARY KEY,
    fruit varchar(255),
    number int(11),
    price int(11),
    madein varchar(255)
) DEFAULT CHARSET=utf8;

INSERT IGNORE INTO `customer_data` VALUES ( 1, 'りんご',33,100,'日本');
INSERT IGNORE INTO `customer_data` VALUES ( 2, 'オレンジ',40,120,'日本');
INSERT IGNORE INTO `customer_data` VALUES ( 3, 'イチゴ',10,250,'日本');
INSERT IGNORE INTO `customer_data` VALUES ( 4, 'ぶどう',25,240,'アメリカ');
INSERT IGNORE INTO `customer_data` VALUES ( 5, 'ナシ',23,150,'日本');
INSERT IGNORE INTO `customer_data` VALUES ( 6, 'パイナップル',15,230,'フィリピン');
