<?php
require('config.php');
//require('firewall.php');

Class Functions {
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getConfig($value)
    {
        $getdata = $this->database->prepare('SELECT * FROM configuration WHERE name=?');
        $getdata->execute([$value]);
        $result = $getdata -> fetch(PDO::FETCH_ASSOC);
        return $result['value'];
    }

    public function getSubtitles()
    {
        $query = $this->database->prepare('SELECT * FROM subtitles');
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }       
    }

    public function getSocialMediaLinks()
    {
        $query = $this->database->prepare('SELECT * FROM social_media');
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }       
    }

    public function getSkills($name)
    {
        $query = $this->database->prepare('SELECT * FROM '.$name);
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

    public function getGalleryCategories()
    {
        $query = $this->database->prepare('SELECT * FROM gallery_categories');
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

    public function getAllGalleryPhotos()
    {
        $query = $this->database->prepare('SELECT * FROM gallery_photos');
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

    public function getGalleryCategoryInfo($name)
    {
        $getdata = $this->database->prepare('SELECT * FROM gallery_categories WHERE slug=?');
        $getdata->execute([$name]);
        $result = $getdata -> fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getKnowledges()
    {
        $query = $this->database->prepare('SELECT * FROM knowledges');
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

    public function getSchools()
    {
        $query = $this->database->prepare('SELECT * FROM educations ORDER BY id desc');
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

    public function getWorks()
    {
        $query = $this->database->prepare('SELECT * FROM works ORDER BY id desc');
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

    public function getBlogPosts()
    {
        $query = $this->database->prepare('SELECT * FROM blog_posts ORDER BY id desc');
        $query->execute();
        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

    public function getPost($Slug)
    {
        $getdata = $this->database->prepare('SELECT * FROM blog_posts WHERE slug=?');
        $getdata->execute([$Slug]);
        $result = $getdata -> fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUserInfo($ID)
    {
        $getdata = $this->database->prepare('SELECT * FROM users WHERE id=?');
        $getdata->execute([$ID]);
        $result = $getdata -> fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

$Utils = new Functions($database);
//$Firewall = new xWAF();
//$Firewall->start();
?>