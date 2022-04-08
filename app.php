<?php

class Movie {

    public $poster;
    public $title;
    public $vote;
    public $language;
    public $subtitles;

    function __construct(string $_poster, string $_title, float $_vote, string $_language, string $_subs){
        $this->poster = $_poster;
        $this->title = $_title;
        $this->vote = $_vote;
        $this->language = $_language;
        $this->subtitles = $_subs;
    }

    public function getLangSubs(){
        return $this->language . ' -> Subtitles: ' . $this->subtitles;
    }
    
}

$movies = [

    $harry_potter = new Movie(
        "http://image.tmdb.org/t/p/original/qMn0YCWKxt7xg8nqRnRj2Ei9qgx.jpg",
        "Harry Potter and the Prisoner of Azkaban", 
        8.6, 
        "English", 
        "Italian"
    ),

    $lord_rings = new Movie(
        "https://m.media-amazon.com/images/M/MV5BNzA5ZDNlZWMtM2NhNS00NDJjLTk4NDItYTRmY2EwMWZlMTY3XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg",
        "The Lord of the Rings - The Return of the King", 
        9, 
        "English", 
        "Italian"
    ),

    $spirited_away = new Movie(
        "https://cdn.shopify.com/s/files/1/0581/5012/5749/products/fefab4_27d87781f56b4c50b6ef5c18e83c11e4_mv2_475x700.jpg?v=1625650528",
        "Spirited Away", 
        8.6, 
        "Japanese", 
        "English"
    )
];



// var_dump($spirited_away);

?>