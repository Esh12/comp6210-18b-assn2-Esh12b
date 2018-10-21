<?php
  
    class Pages extends Controller {



      public function __construct() {
        $this->info = $this->model('_Pages');
     
      }

      
      public function index() {
        
       $data = [

         'info' => $this->info->getAllPosts(),

      ];
     
       
        $this->view('pages/index', $data);
       
      }
    }