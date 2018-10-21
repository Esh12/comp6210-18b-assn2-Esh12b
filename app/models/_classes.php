<?php
Class _classes {
    private $db;
    public function __construct() {
        $this->db = new DataBase;
    }
    public function getAllPosts() {

    $this->db->query("SELECT * FROM tbl_Application_Testing_and_Maintenance");
        
        return $this->db->resultSet();
    }
    public function progPosts() {

        $this->db->query("SELECT * FROM tbl_Programming");
            
            return $this->db->resultSet();
        }
        public function sysPosts() {

            $this->db->query("SELECT * FROM tbl_Systems_Analysis_and_Design");
                
                return $this->db->resultSet();
            }
}

    ?>