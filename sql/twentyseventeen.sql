use containerdb;

DROP TABLE IF EXISTS tbl_twentyseventeen;

CREATE TABLE tbl_twentyseventeen(
    ID INT(20) AUTO_INCREMENT,
    Class VARCHAR(60),
    About VARCHAR(255) NOT NULL,
PRIMARY KEY (ID)
) AUTO_INCREMENT = 1;

iNSERT INTO tbl_twentyseventeen(Class, about) VALUE('COMP.5201	Information Technology Operations', 'In this class we learnt to put computers together and learnt a bit about networking');
iNSERT INTO tbl_twentyseventeen(Class, about) VALUE('COMP.5202	Fundamentals of Programming and Problem Solving', 'We Learnt how to  draw flow diagrams and/or pseudo code we also learnt about classes');
iNSERT INTO tbl_twentyseventeen(Class, about) VALUE('COMP.5203	Professional Practice', 'We learnt about legal and ethical behavuiors in a work place');
iNSERT INTO tbl_twentyseventeen(Class, about) VALUE('COMP.5204	Enterprise',  'We learnt about Develop life cycle and bussines concepts');

Select * From tbl_twentyseventeen;