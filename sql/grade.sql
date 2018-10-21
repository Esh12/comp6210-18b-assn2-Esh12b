use containerdb;


DROP TABLE IF EXISTS tbl_mymarks;

Create Table tbl_mymarks( 
      ID INT(20) AUTO_INCREMENT,
    Class VARCHAR(60),
    finalmark Varchar(8),
    finalresults Varchar(8),
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;







iNSERT INTO tbl_mymarks(Class, finalmark, finalresults) VALUES ('COMP.5211	Application Testing and Maintenance',	'69.00%','B-');
iNSERT INTO tbl_mymarks(Class, finalmark, finalresults) VALUES ('COMP.5210	Web Application Implementation',	'80.00%','A-');
iNSERT INTO tbl_mymarks(Class, finalmark, finalresults) VALUES ('COMP.5209	Interface Analysis and Design',	'78.00%','B+');
iNSERT INTO tbl_mymarks(Class, finalmark, finalresults) VALUES ('COMP.5204	Enterprise',	'75.00%','B+');
iNSERT INTO tbl_mymarks(Class, finalmark, finalresults) VALUES ('COMP.5203	Professional Practice',	'71.00%','B');
iNSERT INTO tbl_mymarks(Class, finalmark, finalresults) VALUES ('COMP.5202	Fundamentals of Programming and Problem Solving',	'76.00%','B+');
iNSERT INTO tbl_mymarks(Class, finalmark, finalresults) VALUES ('COMP.5201	Information Technology Operations',	'78.00%','C+');
iNSERT INTO tbl_mymarks(Class, finalmark, finalresults) VALUES ('COMP.5212	Programming',	'78.00%','B+');
SELECT * FROM tbl_mymarks;