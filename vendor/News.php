<?php


class News
{
    private $news = [];
    private $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);
    }

   public function getAllNews(){
        $query = "SELECT * FROM `news item`;";
        $result = $this->db->query($query);
        if($result){
            while($tmp = $result->fetch_assoc()){
                $this->news[] = $tmp;
            }
        }
        return $this->news;
    }

    public function addNewsItem($newNews){
        $title = $newNews['title'];
        $oneItem = $newNews['content'];
        $query = "INSERT INTO `news item` (id, title, content) VALUES (NULL, '$title', '$oneItem');";
        return $this->db->query($query);
    }

    public function getNewsItem($id){
        $query = "SELECT * FROM `news item` WHERE id = $id";
        return $this->db->query($query);
    }

}