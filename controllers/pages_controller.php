<?php
// only use the following line for ending session when joining the about/home page
// need to decide about page session solution :) 

class PagesController {
   
    public function home() {
        session_start();
        if(!empty($_SESSION)){
            $_SESSION = array();
            session_destroy();
      //example data to use in the home page
      require_once('views/posts/home.php');
    }
    if(empty($_SESSION)){
        require_once('views/pages/home.php');
    }
        else {
            require_once('views/pages/error.php');
        }
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
    public function about() {
        session_start();
            $_SESSION = array();
            session_destroy();
        if(empty($_SESSION)){
            require_once('views/pages/about.php');
        }
        else{
            require_once('views/pages/error.php');
        }
    }
        public function contact() {
        session_start();
            $_SESSION = array();
            session_destroy();
        if(empty($_SESSION)){
            require_once('views/pages/contact.php');
        }
        else{
            require_once('views/pages/error.php');
        }
    }
        public function portfolio() {
        session_start();
            $_SESSION = array();
            session_destroy();
        if(empty($_SESSION)){
            require_once('views/pages/portfolio.php');
            require_once('project_controller.php');
        }
        else{
            require_once('views/pages/error.php');
        }
    }
//    
//        public function readAll() {
//        
//        if(!empty($_SESSION)){
//          
//      // we store all the posts in a variable
//        $count = Post::count(); //$posts is used within the view
//        $posts = Post::all();
//     
//      require_once('views/posts/readAll.php');
//    }
//    else{
//            //return call('pages', 'home');
//            $posts = Post::featall();
//            $pagposts = Post::paginationselect();
//            require_once('views/posts/home.php');
//        }
//    }
}
