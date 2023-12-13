<?php
  class Book {
    private $title;
    private $pages;
    private $releaseYear;
    
    function __construct($title = "", $pages = 0, $releaseYear = 0) {
      $this->title = $title;
      $this->pages = $pages;
      $this->releaseYear = $releaseYear;
    }

    function set_title($title) {
      $this->title = $title;
    }
    function get_title() {
      return $this->title;
    }

    function set_pages($pages) {
      $this->pages = $pages;
    }
    function get_pages() {
      return $this->pages;
    }

    function set_releaseYear($releaseYear) {
      $this->releaseYear = $releaseYear;
    }
    function get_releaseYear() {
      return $this->releaseYear;
    }
  }
?>