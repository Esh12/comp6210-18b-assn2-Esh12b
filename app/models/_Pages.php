<?php
Class _Pages {
    private $db;
    public function __construct() {
        $this->db = new DataBase;
    }
    public function getAllPosts() {
        $this->db->query("SELECT * FROM tbl_info");
     
        return $this->db->resultSet();
        
}

}
?> 