<?php

class Portfolio {

    public $projectID;
    public $title;
    public $technologies;
    public $content;
    public $link;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    
        public function __construct($projectID, $title, $technologies, $content, $link, $image1, $image2, $image3, $image4, $image5) {
        $this->projectID = $projectID;
        $this->title = $title;
        $this->technologies = $technologies;
        $this->content = $content;
        $this->link = $link;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
    }

        public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT projectID, title, technologies, content, link, image1, image2, image3, image4, image5 FROM project');
        foreach ($req->fetchAll() as $portfolio) {
            $list[] = new Portfolio($portfolio['projectID'], $portfolio['title'], $portfolio['technologies'], $portfolio['content'], $portfolio['link'], $portfolio['image1'], $portfolio['image2'], $portfolio['image3'], $portfolio['image4'], $portfolio['image5']);
        }
        return $list;
    }
    
           public static function find($projectID) {
        $db = Db::getInstance();
        $projectID = intval($projectID); // no need to sanitize futher, this checks that projectID is an integer
        $req = $db->prepare('SELECT projectID, title, technologies, content, link, image1, image2, image3, image4, image5 FROM project WHERE projectID=:projectID');
        $req->execute(array('projectID' => $projectID));
        $portfolio = $req->fetch();
        if ($portfolio) {
            return new Portfolio($portfolio['projectID'], $portfolio['title'], $portfolio['technologies'], $portfolio['content'], $portfolio['link'], $portfolio['image1'], $portfolio['image2'], $portfolio['image3'], $portfolio['image4'], $portfolio['image5']);
        } else {
            throw new Exception('Your project could not be found');
        }
    }  
    
            public static function nextpage($projectID){
	$db = Db::getInstance();
	$projectID = intval($projectID);
	$req = $db->prepare('SELECT projectID FROM project');
	$req->execute();
	$allID = $req->fetchAll(\PDO::FETCH_ASSOC);
	$key = array_search($projectID, array_column($allID, 'projectID'));
        $newkey = $key +1;
	
        if(empty($allID[($newkey)])){
        $nextpage = min($allID);}
        else{
        $nextpage = $allID[($newkey)];}
        return implode(array_values($nextpage));
        
}
public static function previouspage($projectID){
	$db = Db::getInstance();
	$projectID = intval($projectID);
	$req = $db->prepare('SELECT projectID FROM project');
	$req->execute();
        $allID = $req->fetchAll(\PDO::FETCH_ASSOC);
	$key = array_search($projectID, array_column($allID, 'projectID'));
        $newkey = $key -1;
        if(empty($allID[($newkey)])){
        $previouspage = max($allID);}
        else{
        $previouspage = $allID[($newkey)];}
        return implode(array_values($previouspage));
	
        
}


    
}