<?php
  include "book.php";
  include "plant.php";

  $bookOne = new Book();
  $bookOne->set_title("Kaip pasaulis švenčia Kalėdas");
  $bookOne->set_pages(40);
  $bookOne->set_releaseYear(2023);

  $bookTwo = new Book();
  $bookTwo->set_title("Bado žaidynės. Pirmoji trilogijos dalis");
  $bookTwo->set_pages(352);
  $bookTwo->set_releaseYear(2021);

  $bookThree = new Book();
  $bookThree->set_title("Žuvis vandenyje");
  $bookThree->set_pages(240);
  $bookThree->set_releaseYear(2023);

  $bookFour = new Book("Harry Potter and the Deathly Hallows", 607, 2007);
  $bookFive = new Book("The Da Vinci Code", 489, 2003);
  $bookSix = new Book("Watership Down", 413, 1972);
  
  $books = [];
  array_push($books, $bookOne, $bookTwo, $bookThree, $bookFour, $bookFive, $bookSix);
  
  // *  ----------    antra užduotis ...  ---------------
  $plants = [];
  $plant1 = new Plant();
  $plant1->set_name("Morka");
  $plant1->set_nameLatin("Daucus");
  $plant1->set_isOneYear(true);
  $plant1->set_continent("Š. Amerika");
  $plant1->set_height(0.3);
  $plant1->set_isEaten(true);

  $plant2 = new Plant();
  $plant2->set_name("Pomidoras");
  $plant2->set_nameLatin("Solanum lycopersicum");
  $plant2->set_isOneYear(true);
  $plant2->set_continent("P. Amerika");
  $plant2->set_height(1.3);
  $plant2->set_isEaten(true);

  // ? pavadinimas - Lotyniskai - vienmetis - kontinentas - aukstis - valgomas
  $plant3 = new Plant("Bananas", "Musa", false, "Indonezija", 2, true );
  $plant4 = new Plant("Papartis", "Dryopteris", false, "Eurazija", 1, false);
  
  $plants = [];
  array_push($plants, $plant1, $plant2, $plant3, $plant4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klase  Books</title>
</head>
<body>
  <h1>Pirma užduotis - knygos</h1>
  <?php
    // for ($i=0; $i < count($books); $i++) { 
    //   echo '<p>Knyga "'.$books[$i]->get_title().'" išleista '.$books[$i]->get_releaseYear().'m. ir turi '.$books[$i]->get_pages().' puslapių.';
    // }

    foreach ($books as $key => $book) {
      echo '<p>Knyga "'.$book->get_title().'" išleista '.$book->get_releaseYear().'m. ir turi '.$book->get_pages().' puslapių.';
    }
  ?>

  <h1>Antra užduotis - augalai</h1>
  <?php
   
  //  $plant->get_isEaten()

    foreach ($plants as $key => $plant) {
        echo '<p>'.$plant->get_name().' (lot. "'.$plant->get_nameLatin().'") - tai '.($plant->get_isEaten() ? "valgomas" : "nevalgomas").' '.($plant->get_isOneYear() ? "vienmetis" : "daugiametis").' augalas, kilęs iš '.$plant->get_continent().' , užaugantis iki '.$plant->get_height().' metro.</p>';
    }
  ?>

</body>
</html>