<?php
class Movie
{
    public $id;
    public $title;
    public $overview;
    public $poster_path;
    public $vote_average;
    public $original_language;

    function __construct($_id, $_title, $_overview, $_image, $_vote, $_language)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->overview = $_overview;
        $this->poster_path = $_image;
        $this->vote_average = $_vote;
        $this->original_language = $_language;
    }

    public function displayCard()
    {
        include __DIR__ . "/../Views/card.php";
    }
}

// test funzionamento funzione construct
// $nuovaCard = new Movie("1", "Ciao", "ciao mamma", "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg", "5.65", "en");
// var_dump($nuovaCard);

$movieString = file_get_contents("movie_db.json");
$movieArray = json_decode($movieString, true);
// var_dump($movieArray);

$movieList = [];


//creazione nuovi oggetti secondo file movie_db.json
foreach ($movieArray as $item) {
    $movieList[] = new Movie($item["id"], $item["title"], $item["overview"], $item["poster_path"], $item["vote_average"], $item["original_language"]);
}
var_dump($movieList);



?>