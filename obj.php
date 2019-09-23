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

class Studente extends Persona {
  public $pianoStudi;
  public $tasse;

  public function __construct($nome, $cognome, $indirizzo, $pianoStudi, $tasse) {

    parent::__construct($nome, $cognome, $indirizzo);
    $this -> pianoStudi = $pianoStudi;
    $this -> tasse = $tasse;
  }

  public function toString() {
    return  parent::toString() . '<br>' . 'Piano di Studi: ' . $this -> pianoStudi . '<br>' . 'Tasse: ' . $this -> tasse;
  }
};

$persona1 = new Persona ("Davide", "Fiore", "Via dei Matti");
$studente1 = new Studente ("Mario", "Rossi", "Via dei Matti", "Energetico", "Pagate");

echo "<br> Persona: <br>" . $persona1 -> toString() . '<br><br>';
echo "Studente: <br>" . $studente1 -> toString() . '<br><br>';

?>
