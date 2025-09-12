DROP DATABASE userRegistry;
CREATE DATABASE IF NOT EXISTS userRegistry;
USE userRegistry;
create user IF NOT EXISTS 'phpAccess'@'localhost' identified by 'phpHasPassword';
GRANT ALL ON userRegistry.* TO 'phpAccess'@'localhost';
flush privileges;
-- username, password, email, phone,website;
-- age, birthday, satisfaction, favcolor,country,city,avatar,interests,subscribe-level
CREATE TABLE subscriptionLevel(
    levelID int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    PRIMARY KEY (levelID)
);
INSERT INTO subscriptionLevel (name) VALUES ("Basico"),("Premium");
/*CREATE TABLE interests(
    interestID int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    PRIMARY KEY (interestID)
);
INSERT INTO interests (name) VALUES ("Tecnologia"),("Deportes");
*/
CREATE TABLE userTable (
    userID int NOT NULL AUTO_INCREMENT,
    username varchar(255),
    password  varchar(255),
    email varxchar(255),
    phone varchar(255),
    website varchar(255),
    age int,
    birthday date, 
    satisfaction int, 
    favcolor varchar(10),
    country varchar(255),
    city varchar(255),
    avatar varchar(255), 
    subscribeLevel int,
    interests varchar(255),
    PRIMARY KEY (userID),
    FOREIGN KEY (subscribeLevel) REFERENCES subscriptionLevel(levelID)
);
/*
CREATE TABLE interestedUser (
    userID int,
    interestID int,
    FOREIGN KEY (userID) REFERENCES userTable(userID),
    FOREIGN KEY (interestID) REFERENCES interests(interestID)
);
*/