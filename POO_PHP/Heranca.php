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
// Herdando da classe pessoa

class Aluno extends Pessoa{
    public function estudar(){
        echo "{$this->nome} está estudando
        <br>";
    }

}
class Professor extends Pessoa{
    public function trabalhar(){
        echo "{$this->nome} está dando aula
        <br>";
    }

}


// Criando objetos

$gutin = new Aluno ("Gutin", 15);
$pedro = new Professor ("Pedro", 25);

$gutin->apresentar();


$gutin->estudar();


$pedro->apresentar();


$pedro->trabalhar();

?>