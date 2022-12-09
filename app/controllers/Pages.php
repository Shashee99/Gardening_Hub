<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function home(){
      $data = [
        'title' => 'MVC',
      ];
     
      $this->view('pages/home', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
    public function product(){
        $data = [];
        $this->view('pages/product',$data);
    }
    public function signup(){
        $data = [];
        $this->view('pages/signup',$data);
    }
  }