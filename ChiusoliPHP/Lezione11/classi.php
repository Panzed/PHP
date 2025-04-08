<?php

// esempio di costante  

define("COSTANTE", 1);
echo COSTANTE; //stampa 1

// Le classi sono una raccolta di metodi e proprietà che possono poi essere ripescate e utilizzate
// Le funzioni all'interno di una classe sono definiti metodi
// Variabili, proprietà e altri elementi vengono considerate proprietà della funzione

class Esempio
{
    const PI = 3.14; //costante di classe, non può essere modificata e non può essere usata $this->PI, ma con self::PI

    //proprietà e metodi...
    protected $nome; //private è visibile solo all'interno della classe, protected è visibile anche nelle classi figlie
    static $n; // una proprietà è static quando è condivisa tra tutte le istanze della classe


    public function __construct()
    {
        self::$n++;  // self è un modo per accedere a una proprietà statica della classe
    }

    function saluto()
    {
        echo "Ciao";
    }
    //getter setter di una proprietà private
    function getNome()
    {
        return $this->nome;
    }
    function setNome($name)
    {
        $this->nome = ucwords($name); //tutte le iniziali maiuscole  // this è un modo per accedere a una proprietà della classe
    }
}


class SottoEsempio extends Esempio {}  //classe figlia di esempio che eredita le proprietà e i metodi della classe padre






//istanza di un oggetto
$e0 = new Esempio();
//metodo\
$e0->saluto();
$e0->setNome("gian luigi rossi");
echo "<br>nome di e: " . $e0->getNome();

$e1 = new Esempio();
$e1->setNome("e1");
echo "<br>nome di e1: " . ($e1->getNome());

//proprietà statica

$e0::$n = 1;
echo Esempio::$n; //stampa 1