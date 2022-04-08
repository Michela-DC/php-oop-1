<?php

class Movie {

    public $title;
    public $vote;
    public $language;

    function __construct(string $_title, float $_vote, string $_language){
        $this->title = $_title;
        $this->vote = $_vote;
        $this->language = $_language;
    }
}

$spirited_away = new Movie("Spirited Away", 8.6, "Japanese");
$lord_rings = new Movie("The Lord of the Rings - The Return of the King", 9, "English");

// var_dump($spirited_away);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Class</title>
</head>
<body>

<div style="margin-bottom: 20px">
    <h3 style="margin: 0">
        Title: <?php echo $spirited_away->title; ?>
    </h3>
    <div>
        Vote: <?php echo $spirited_away->vote; ?>
    </div>
    <div>
        Language: <?php echo $spirited_away->language ?>
    </div>
</div>

<div>
    <h3 style="margin: 0">
        Title: <?php echo $lord_rings->title; ?>
    </h3>
    <div>
        Vote: <?php echo $lord_rings->vote; ?>
    </div>
    <div>
        Language: <?php echo $lord_rings->language ?>
    </div>
</div>
    
</body>
</html>
