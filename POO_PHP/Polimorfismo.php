<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar (){
        echo "Olá sou {$this->nome} e tenho {$this->idade} anos
        <br>";
    }
}
class Aluno extends Pessoa{
    public function apresentar(){
        echo "Meu nome é {$this->nome} e estou estudando
        <br>";
    }

}
class Professor extends Pessoa{
    public function apresentar(){
        echo "Meu nome é {$this->nome} e estou dando aula
        <br>";
    }

}
$gutin = new Aluno ("Gutin", 15);
$pedro = new Professor ("Pedro", 25);

$gutin->apresentar();


$pedro->apresentar();

?>