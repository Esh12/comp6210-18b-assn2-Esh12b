use containerdb;


DROP TABLE IF EXISTS tbl_feedback;

Create Table tbl_feedback( 
      ID INT(20) AUTO_INCREMENT,
    NAME VARCHAR(60),
    EMAIL Varchar(86),
    SUBJECT Varchar(60),
    MESSAGE Varchar(800),
PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;







iNSERT INTO tbl_feedback(NAME, EMAIL, SUBJECT,MESSAGE ) VALUES ('TEST MONKEY', 'MONKEY IS TESTING','6','ASDASDAS');

SELECT * FROM tbl_feedback;