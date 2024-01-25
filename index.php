<?php 

class Movie {
    public $title;
    public $director;
    public $releaseYear;
    public $genre;
    public $rating;

    public function __construct($_title, $_director, $_releaseYear, $_genre, $_rating){
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->genre = $_genre;
        $this->rating = $_rating;
    }
}