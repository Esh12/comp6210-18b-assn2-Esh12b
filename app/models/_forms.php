<?php

class _forms {

    private $db;

    public function __construct() {
        $this->db = new DataBase;
    }
   
    public function getAllPosts() {
        $this->db->query("SELECT * FROM tbl_feedback");
        return $this->db->resultSet();
    }


    public function addPerson($name, $email, $subject, $message) {
        $this->db->query('INSERT INTO tbl_feedback(NAME, EMAIL, SUBJECT, MESSAGE) VALUES (:name, :email, :subject, :message)');
   
        $this->db->bind(':name', $name);
        $this->db->bind(':email', $email);
        $this->db->bind(':subject', $subject);

        $this->db->bind(':message', $message);
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getAllMessages() {
        $this->db->query('SELECT * FROM tbl_emails');
        return $this->db->resultSet();
      }
    public function addMessage($em, $msg) {
      
        //Adding data to database
        $this->db->query('INSERT INTO tbl_emails (EMAIL, MSG) VALUES (:em, :msg)');
        //Binding Variables
        $this->db->bind(':em', $em);
        $this->db->bind(':msg', $msg);
        //Return true or false, based on if query is successful or not
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
      }
          
}

?>
