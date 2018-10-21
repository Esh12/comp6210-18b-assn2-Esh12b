use containerdb;



DROP TABLE IF EXISTS tbl_info;

Create Table tbl_info( 
ID INT(20) AUTO_INCREMENT,
FNAME VARCHAR(30),
LNAME VARCHAR(59),
Dname  Varchar(20),
DOB DATE ,
Pname VARCHAR (59),
PHONE INT(10),
Ename VARCHAR(29),
EMAIL VARCHAR(50),
About VARCHAR(50),
Reason VARCHAR(255),

 
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;

INSERT INTO tbl_info (FNAME, LNAME, Dname, DOB,Pname, PHONE, Ename, EMAIL) VALUES ('Esheel', 'Anand', 'My date of birth', '1999/02/04', 'Phone', 0274430978, 'My email', 'esheelroy@gmail.com');

iNSERT INTO tbl_info(About, Reason) VALUES ('About the website', 'This website will show what Ive learnt during my time in tech. This will also show my skills at building MVC websites');




SELECT * FROM tbl_info;

DROP TABLE IF EXISTS tbl_mypic;




Create Table tbl_mypic( 
ID INT(20) AUTO_INCREMENT,
IMAGE VARCHAR(25),
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;

INSERT INTO tbl_mypic(IMAGE) VALUES ('icon');
SELECT * FROM tbl_mypic;