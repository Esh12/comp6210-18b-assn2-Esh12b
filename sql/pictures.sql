use containerdb;

DROP TABLE IF EXISTS tbl_pic;
Create Table tbl_pic( 
 ID INT(20) AUTO_INCREMENT,
IMAGE VARCHAR(25),
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;
INSERT INTO tbl_pic(IMAGE) VALUES ('facebook');
INSERT INTO tbl_pic(IMAGE) VALUES ('md_5a9797d083160');
INSERT INTO tbl_pic(IMAGE) VALUES ('instagram');
INSERT INTO tbl_pic(IMAGE) VALUES ('bitbucket-512');
INSERT INTO tbl_pic(IMAGE) VALUES ('Octocat');
SELECT * FROM tbl_pic;