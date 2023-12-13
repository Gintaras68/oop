<?php
  class Plant {
    private $name;       //  buitinis pavadinimas
    private $nameLatin;  //  lotyni6kas pavadinimas
    private $isOneYear;   //  vienmetis augalas ar ne
    private $continent;   //  kontitnentas kur auga
    private $height;      //  suaugusio augalo aukstis
    private $isEaten;     //  yra valgomas ar ne

    public function __construct($name = "", $nameLatin = "", $isOneYear = false, $continent = "", $height = 0, $isEaten = false) {
      $this->name = $name;
      $this->nameLatin = $nameLatin;
      $this->isOneYear = $isOneYear;
      $this->continent = $continent;
      $this->height = $height;
      $this->isEaten = $isEaten;
    }
    
    
    public function set_name($name) {
      $this->name = $name;
    }
    public function get_name() {
      return $this->name;
    }

    public function set_nameLatin($nameLatin) {
      $this->nameLatin = $nameLatin;
    }
    public function get_nameLatin() {
      return $this->nameLatin;
    }

    public function set_isOneYear($isOneYear) {
      $this->isOneYear = $isOneYear;
    }
    public function get_isOneYear() {
      return $this->isOneYear;
    }
   
    public function set_continent($continent) {
      $this->continent = $continent;
    }
    public function get_continent() {
      return $this->continent;
    }
    
    public function set_height($height) {
      $this->height = $height;
    }
    public function get_height() {
      return $this->height;
    }
    
    public function set_isEaten($isEaten) {
      $this->isEaten = $isEaten;
    }
    public function get_isEaten() {
      return $this->isEaten;
    }
  }
?>