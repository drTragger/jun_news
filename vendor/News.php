<?php


class News
{
    public $news;
    public $title;
    public $content;
    //private $news = [];
    private $db;
    private $oneitem;


    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);

    }

   public function getAllNews(){

        $query = "SELECT * FROM news item;";
        $result = $this->db->query($query);
        if($result){
            while($tmp = $result->fetch_assoc()){
                $this->news[] = $tmp;
            }
        }
        return $this->news;
    }

    public function addNewsItem($oneitem){
//        $query =
//        redirect($_SERVER['PHP_SELF']);
//        return $db->query($query);
    }


}