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

class Professore extends Persona {
  public $specializzazione;
  public $paga;

  public function __construct($nome, $cognome, $indirizzo, $specializzazione, $paga) {

    parent::__construct($nome, $cognome, $indirizzo);
    $this -> specializzazione = $specializzazione;
    $this -> paga = $paga;
  }

  public function toString() {
    return  parent::toString() . '<br>' . 'Specializzazione: ' . $this -> specializzazione . '<br>' . 'Paga: ' . $this -> paga . 'Eur';
  }
};

$persona1 = new Persona ("Davide", "Fiore", "Via dei Matti");
$studente1 = new Studente ("Mario", "Rossi", "Via dei Matti", "Energetico", "Pagate");
$prof1 = new Professore ("Giovanni", "Verdi", "Via Bella", "Microtecnologie", 2500);

echo "<br> Persona: <br>" . $persona1 -> toString() . '<br><br>';
echo "Studente: <br>" . $studente1 -> toString() . '<br><br>';
echo "Professore: <br>" . $prof1 -> toString() . '<br><br>;'
?>
