<?php  
class Movie
{
public $title;
public $movie_director;
public $genre;

function __construct($_title, $_movie_director, $_genre){
$this->title = $_title;
$this->movie_director = $_movie_director;
$this->genre = $_genre;
}


}
$movie1 = new Movie('Il signore degli anelli','Peter Jackson', 'fantasy' );


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $movie1->title ?></h1>
    <h2><?= $movie1->movie_director ?></h2>
    <p><?= $movie1->genre ?></p>
    
</body>
</html>