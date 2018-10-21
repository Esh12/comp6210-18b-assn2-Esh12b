use containerdb;

DROP TABLE IF EXISTS tbl_Application_Testing_and_Maintenance;


create  Table tbl_Application_Testing_and_Maintenance(
ID INT(20) AUTO_INCREMENT,
CName VARCHAR(60),
Discription VARCHAR(2555),

 
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;
INSERT INTO tbl_Application_Testing_and_Maintenance(CName, Discription) VALUEs  ('Application Testing and Maintenance', 'On successful completion, students will be able to:

Migrate a web solution from development to a testing environment.
Create and use a test plan for a web solution.
Move a solution from a test environment to a live platform.
Configure applications to meet requirements and obtain client acceptances.
Produce user training material.');
SELECT * FROM tbl_Application_Testing_and_Maintenance;


DROP TABLE IF EXISTS tbl_Programming;


create  Table tbl_Programming(
ID INT(20) AUTO_INCREMENT,
CName VARCHAR(60),
Discription VARCHAR(2555),

 
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;
INSERT INTO tbl_Programming(CName, Discription) VALUEs  ('Programming', 'On successful completion, students will be able to:

On successful completion, students will be able to:

Use procedural and Object Oriented programming.
Write applications using design patterns.
Write applications using appropriate data structures and algorithms.
Select and apply appropriate data validation techniques.
');
SELECT * FROM tbl_Programmings;






