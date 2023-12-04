<?php
class Genres
{
    public $type;

    function __construct($_type)
    {
        $this->type = $_type;
    }
}

//prova funzionamento function construct
// $nuovoGenere = new Genres("Series");
// var_dump($nuovoGenere)


?>