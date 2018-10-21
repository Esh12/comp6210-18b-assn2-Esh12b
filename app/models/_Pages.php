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
    public function getImages(){
  
      $this->db->query("SELECT * FROM tbl_pic");
    
    return $this->db->resultSet();
    }
    public function getyearclass(){
  
      $this->db->query("SELECT * FROM tbl_twentyseventeen");
    
    return $this->db->resultSet();
    }
    public function getgrades(){
  
      $this->db->query("SELECT * FROM tbl_mymarks");
    
    return $this->db->resultSet();
    }

    public function mypic(){
  
      $this->db->query("SELECT * FROM tbl_mypic");
    
    return $this->db->resultSet();
    }
}


?> 