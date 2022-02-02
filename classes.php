<?php

class UserAccount{
    private $display_name;
    private $pass_word;
    private $picture;

    protected $posts;
    protected $upvotes;
    protected $downvotes;
    protected $comments;

    function __construct($display_name, $pass_word, $picture)
    {
       $this->display_name = $display_name;
       $this->pass_word = $pass_word;
       $this->picture = $picture;
    }

    function get_posts($posts){
        echo $this->$posts;
    }

    function get_upvotes($upvotes){
        echo $this->$upvotes;
    }

    function get_downvotes($downvotes){
        echo $this->$downvotes;
    }

    function get_comments($comments){
        echo $this->$comments;
    }
}



?>