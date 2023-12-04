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
}



?>