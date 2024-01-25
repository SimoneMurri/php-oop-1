<?php 

class Movie {
    public $title;
    public $director;
    public $releaseYear;
    public $genre;
    public $platform;

    public function __construct($_title, $_director, $_releaseYear, $_genre, $_platform){
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->genre = $_genre;
        $this->platform = $_platform;
    }
}
?>