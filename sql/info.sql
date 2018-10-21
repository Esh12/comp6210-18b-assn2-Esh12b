use containerdb;

DROP TABLE IF EXISTS tbl_webinfo;

CREATE TABLE tbl_webinfo(
    ID INT(20) AUTO_INCREMENT,
    About VARCHAR(50),
    Reason VARCHAR(255) NOT NULL,
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;

INSERT INTO tbl_webinfo(About, Reason) VALUES ('About the website', 'This website will show what Ive learnt during my time in tech.');
INSERT INTO tbl_webinfo(Reason) VALUES ('This will also show my skills at building MVC websites');

SELECT * FROM tbl_webinfo;