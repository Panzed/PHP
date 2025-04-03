<?php
class Materia
{
    public $nome;
    private $docente; //oggetto della classe Persona
    
    function __custruct($nome, $d = null)
    {
        $this->nome = $nome;
        //$this->docente = $d;
        $this->setDocente($d);
    }

    function setDocente($d)
    {
        //controllare se $d != null
        $this->docente = null;
        if( ! $d){
            return;
        }
        //controllare se $d è un docente!
        if ($d->getRuolo() == "docente")
            $this->docente = $d;        
    }
}
