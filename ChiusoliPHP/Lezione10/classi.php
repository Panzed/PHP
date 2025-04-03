<?php
// Le classi sono una raccolta di metodi e proprietà che possono poi essere ripescate e utilizzate
// Le funzioni all'interno di una classe sono definiti metodi
// Variabili, proprietà e altri elementi vengono considerate proprietà della funzione

class Esempio
{
    //proprietà e metodi...
    private $nome; //private
    function saluto()
    {
        echo "Ciao";
    }
    //getter setter di una proprietà private
    function getNome()
    {
        return $this->nome;
    }
    function setNome($n)
    {
        $this->nome = ucwords($n); //tutte le iniziali maiuscole
    }
}

//istanza di un oggetto
$e = new Esempio();
//metodo
$e->saluto();
$e->setNome("gian luigi rossi");
echo "<br>nome di e: " . $e->getNome();

$e1 = new Esempio();
$e1->setNome("e1");
echo "<br>nome di e1: " . ($e1->getNome());
