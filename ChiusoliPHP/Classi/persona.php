<?php
class Persona
{
    public $nome;
    public $cognome;
    private $ruolo = "studente"; //studente | docente
    private $materie = []; //array bidimensionale di oggetti di Materia e voto
    /**
     * [ 
     *  ['oggetto'=> $oggMateriaPHP, 'voto' =>30], 
     *  ['oggetto'=> $oggMateriaDB, 'voto' =>20]
     * ]
     */



    function __construct($nome, $cognome)
    {
        //echo "costruttore di Persona";
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    function setAsDocente()
    {
        $this->ruolo = "docente";
    }
    function setAsStudente()
    {
        $this->ruolo = "studente";
    }
    function getRuolo()
    {
        return $this->ruolo;
    }

    function presentati()
    {
        echo "Ciao, sono " . $this->nome . " " . $this->cognome . ", " . $this->ruolo . "<br>";
    }

    function addMateria($materia, $voto = null)
    {
        //$this->materie[] = $materia;
        //verifica se la materia è già presente
        if (! $this->materiaGiaPresente($materia->nome))
            $this->materie[]  = ['oggetto' => $materia, 'voto' => $voto];
    }
    function setMaterie($materie)
    {
        //controllo che sia un array
        if (is_array($materie)) {
            //$this->materie = array_merge($this->materie, $materie);
            foreach ($materie as $materia) {
                $this->addMateria($materia);
            }
        } else {
            $this->addMateria($materie);
        }
    }
    function materiaGiaPresente($nome)
    {
        //TODO
        //cerca se in $this->materie esiste un oggetto Materia con questo nome
        return false;
    }
}


//funzione che può essere richiamata da dentro la classe
function miaFunzione()
{
    return true;
}
