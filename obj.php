<?php
Class Persona {

  public $nome;
  public $cognome;
  public $indirizzo;

  public function __construct($nome, $cognome, $indirizzo) {

    $this -> nome = $nome;
    $this -> cognome = $cognome;
    $this -> indirizzo = $indirizzo;
  }

  public function toString() {

    return '<br>' . 'Nome: ' . $this -> nome . '<br>' . 'Cognome: ' . $this -> cognome . '<br>' . 'Indirizzo: ' . $this -> indirizzo;
  }



};

$persona1 = new Persona ("Davide", "Fiore", "Via dei Matti");

echo $persona1 -> toString();

?>
