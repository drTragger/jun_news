<?php


class News
{
    private $news = [];
    private $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);
        $this->getAllNews();
    }

   public function getAllNews(){
        $query = "SELECT * FROM 'news item';";
        $result = $this->db->query($query);
        if($result){
            while($tmp = $result->fetch_assoc()){
                $this->news[] = $tmp;
            }
        }
        return $this->news;
    }

    public function addNewsItem($newNews){ //TODO check DB
        $title = $newNews['title'];
        $oneItem = $newNews['content'];
        $query = "INSERT INTO 'news item' (title, text) VALUES ('$title','$oneItem');";
        //header('Location:' . $_SERVER['PHP_SELF']);  //TODO make redirect
        return $this->db->query($query);
    }

    public function getNewsItem($id){   //check
        $query = "SELECT * FROM `news item` WHERE id = $id";
        return $this->db->query($query);
    }

}