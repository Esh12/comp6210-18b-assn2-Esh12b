use containerdb;
DROP TABLE IF EXISTS tbl_Systems_Analysis_and_Design;

create  Table tbl_Systems_Analysis_and_Design(
ID INT(20) AUTO_INCREMENT,
CName VARCHAR(60),
Discription VARCHAR(2555),

 
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;
INSERT INTO tbl_Systems_Analysis_and_Design(CName, Discription) VALUEs  ('Systems Analysis and Design  3', 'On successful completion, students will be able to:

On successful completion, students will be able to:

Use a server side scripting language to create web applications incorporating data base connectivity; dynamic page generation, authentication and demonstrating data security.
Understand service orientation.
Create and utilise one or more web services.
Write a web application that utilises an external web service.
Analyse issues that exist in a server-side programming environment.
Perform testing and maintenance on Web Applications.
');
SELECT * FROM tbl_Systems_Analysis_and_Design;