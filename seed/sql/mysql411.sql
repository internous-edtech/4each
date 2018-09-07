CREATE TABLE IF NOT EXISTS user (
    id INT(11) NOT NULL auto_increment PRIMARY KEY,
    name varchar(255),
    mail varchar(255),
    tel varchar(255),
) DEFAULT CHARSET=utf8;

INSERT IGNORE INTO `user` VALUES ( 1, '加藤太郎','k.taro@gmail.com','090-1111-2222');
INSERT IGNORE INTO `user` VALUES ( 2, '阿部次郎','jiroabe@yahoo.co.jp','080-7777-5555');
INSERT IGNORE INTO `user` VALUES ( 3, '井上広子','h.inoue@gmail.com','080-2222-6666');
INSERT IGNORE INTO `user` VALUES ( 4, '渡邊恵子','keiko.w@gmail.com','090-3333-8888');
