<?php
  
  class Pages extends Controller {
    public function __construct() {
      $this->info  = $this->model('_Pages');
      
   
    }
   
    
    public function index() {
      
     $data = [
       'info' => $this->info->getAllPosts(),
       'pic' =>  $this->info->getImages(),
       'mypic' =>  $this->info->mypic(),
       
    ];
   
     
      $this->view('pages/index', $data);
     
    }
   
    public function twentyseventeen() {
      
      $data = [
        'twentyseventeen' => $this->info->getyearclass(),
        'pic'  => $this->info->getImages(),
        'mypic' =>  $this->info->mypic()
        

     ];
           
       $this->view('pages/twentyseventeen', $data);
      
     }
   
     public function credits() {
      
      $data = [
        'mymarks' => $this->info->getgrades(),
        'pic' =>  $this->info->getImages(),
        'mypic' =>  $this->info->mypic()

     ];
    
      
       $this->view('pages/credits', $data);
      
     }
  }