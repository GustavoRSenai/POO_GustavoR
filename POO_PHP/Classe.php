<?php

class Aluno {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function estudar (){
        echo "{$this->nome} esta estudando";
    }
}

// Criando objetos

$gutin = new Aluno ("Gutin", 15);
$pedro = new Aluno ("Pedro", 15);



$gutin->estudar();


?>