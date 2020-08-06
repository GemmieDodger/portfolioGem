<?php
// only use the following line for ending session when joining the about/home page
// need to decide about page session solution :) 

class PortfolioController {
   

    
        public function readAll() {
        
     
        $portfolio = Portfolio::all();
             require_once('views/portfolio/readAll.php');
        }
        
        public function read() {
      if (!isset($_GET['projectID']))
        return call('pages', 'error');
      try {
      $portfolio = Portfolio::find($_GET['projectID']);
      
      if (!isset($_GET['projectID'])) {
          $projectID = 1;
        } else{
            $projectID = $_GET['projectID'];
            
            
        }
        
        $next = Portfolio::nextpage($_GET['projectID']);
        $previous = Portfolio::previouspage($_GET['projectID']);
        require_once('views/portfolio/read.php');
        
   }
      
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    
       public function rps() {
            require_once('views/portfolio/rps.php');    
       }
    
}
