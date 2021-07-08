<?php
    class Movies {
        public $title;
        public $plot;
        public $genre;
        public $year;
        public $cast;

        function __construct($title, $plot = "Unknown", $genre = "Unknown", $year = "Unknown", $cast = "Unknowns"){
            $this->title = $title;
            $this->plot = $plot;
            $this->genre = $genre;
            $this->year = $year;
            $this->cast = $cast;
        }
    }
