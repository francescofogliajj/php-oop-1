<?php

  class Book {

    public $title;
    public $author;
    public $publisher;
    public $year;
    public $plot;
    public $new_release;


    function __construct($title, $author, $publisher, $year) {
      $this->title = $title;
      $this->author = $author;
      $this->publisher = $publisher;
      $this->year = $year;
    }


    public function newRelease($year, $this_year) {
      if($year >= $this_year) {
        $this->new_release = true;
      } else {
        $this->new_release = false;
      }
    }

  }


  $current_year = date("Y");


  $too_cold_for_september = new Book("Troppo freddo per Settembre", "Maurizio De Giovanni", "Einaudi", 2020);
  $too_cold_for_september->plot = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime suscipit, quaerat dolorum, aperiam laborum accusantium cupiditate fugiat inventore officiis quae in provident, impedit itaque doloribus omnis adipisci voluptatem, consequatur perspiciatis esse aliquam minima id? Sit velit fugit nemo facere qui reprehenderit, rerum. Quas, explicabo architecto? Necessitatibus amet neque error quia.";
  $too_cold_for_september->newRelease($too_cold_for_september->year, $current_year);

  $penelope_s_discipline = new Book("La disciplina di Penelope", "Gianrico Carofiglio", "Mondadori", 2021);
  $penelope_s_discipline->plot = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor debitis ex dolores recusandae distinctio, sint ad quis cumque fugit, esse voluptatem voluptatibus deleniti quas, possimus dolorum accusamus quia, laboriosam commodi illo a. Veniam at id voluptatum, assumenda nemo cupiditate nobis unde eveniet, similique, nisi, perspiciatis et. Porro praesentium sit asperiores.";
  $penelope_s_discipline->newRelease($penelope_s_discipline->year, $current_year);

?>
