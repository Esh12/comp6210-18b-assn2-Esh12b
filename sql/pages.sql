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
IMAGE VARCHAR(25),
Social VARCHAR(25),
 Class VARCHAR(60),
    CAbout VARCHAR(255),
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;

INSERT INTO tbl_info (FNAME, LNAME, Dname, DOB,Pname, PHONE, Ename, EMAIL) VALUES ('Esheel', 'Anand', 'My date of birth', '1999/02/04', 'Phone', 0274430978, 'My email', 'esheelroy@gmail.com');

iNSERT INTO tbl_info(About, Reason) VALUES ('About the website', 'This website will show what Ive learnt during my time in tech. This will also show my skills at building MVC websites');
INSERT INTO tbl_info(IMAGE) VALUES ('icon');
INSERT INTO tbl_info(Social) VALUES ('facebook');
INSERT INTO tbl_info(Social) VALUES ('md_5a9797d083160');
INSERT INTO tbl_info(Social) VALUES ('instagram');
INSERT INTO tbl_info(Social) VALUES ('bitbucket-512');
INSERT INTO tbl_info(Social) VALUES ('Octocat');
iNSERT INTO tbl_info(Class, CAbout) VALUE('COMP.5201	Information Technology Operations', 'In this class we learnt to put computers together and learnt a bit about networking');
iNSERT INTO tbl_info(Class, CAbout) VALUE('COMP.5202	Fundamentals of Programming and Problem Solving', 'We Learnt how to  draw flow diagrams and/or pseudo code we also learnt about classes');
iNSERT INTO tbl_info(Class, CAbout) VALUE('COMP.5203	Professional Practice', 'We learnt about legal and ethical behavuiors in a work place');
iNSERT INTO tbl_info(Class, CAbout) VALUE('COMP.5204	Enterprise',  'We learnt about Develop life cycle and bussines concepts');

SELECT * FROM tbl_info;

