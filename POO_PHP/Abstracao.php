<?php

 abstract class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}
class Aluno extends Pessoa{
}

$gutin = new Aluno ("Gutin", 15);
echo $gutin->nome . " é ele";
?>