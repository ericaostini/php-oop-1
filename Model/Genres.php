<?php
class Genres
{
    public $type;

    function __construct($_type)
    {
        $this->type = $_type;
    }
}

$genreString = file_get_contents(__DIR__ . "/genre_db.json");
$genreArray = json_decode($genreString, true);
var_dump($genreArray);

//prova funzionamento function construct
// $nuovoGenere = new Genres("Series");
// var_dump($nuovoGenere)


?>