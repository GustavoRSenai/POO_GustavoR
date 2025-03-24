<?php

class Aluno {
    public $nome;
    public $idade;
    private $nota;

    public function __construct($nome, $idade, $nota)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nota = $nota;
    }

    public function estudar (){
        echo "{$this->nome} esta estudando";
    }

    public function verNota (){
        return $this->nota;
    }

    public function Nota (){
        echo "{$this->nome} tirou {$this->verNota()}";
    }
}

$gutin = new Aluno ("Gutin", 18, 100);

$gutin->Nota();

?>