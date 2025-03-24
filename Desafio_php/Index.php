<?php

class Pessoa {
    public $nome;
    public $idade;
    private $RM;

    public function __construct($nome, $idade, $RM)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->RM = $RM;
    }
    public function verRM (){
        return $this->RM;
    }
}
class Aluno extends Pessoa{

    public function Falar(){
        echo "olá sou {$this->nome}, tenho {$this->idade} anos e estudo no senai meu RM é {$this->verRM()}
        <br>";
    }


}
class Professor extends Pessoa{
    public function Falar(){
        echo "olá sou {$this->nome}, tenho {$this->idade} anos e trabalho no senai como professor
        <br>";
    }

}
class Secretaria extends Pessoa{
    public function Falar(){
        echo "olá sou {$this->nome}, tenho {$this->idade} anos e trabalho no senai como secretaria
        <br>";
    }

}
class Diretor extends Pessoa{
    public function Falar(){
        echo "olá sou {$this->nome}, tenho {$this->idade} anos e sou diretor do senai
        <br>";
    }

}

$gutin = new Aluno ("Gutin", 18, 5332);
$miguel = new Aluno ("Miguel", 23, 5444);
$pedro = new Professor ("Pedro", 25, 0);
$Clara = new Professor ("Clara", 32, 0);
$Fatima = new Secretaria ("Fátima", 45, 0);
$Sueli = new Secretaria ("Sueli", 30, 0);
$Clóvis = new Professor ("Clóvis", 56, 0);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
    <!-- CSS customizado -->
    <link rel="stylesheet" href="style.css">
    <title>Desafio php</title>
</head>
<body>
<p>
    <?php $gutin->Falar(); ?>
    <?php $miguel->Falar(); ?>
</p>

<p>
    <?php $Clara->Falar(); ?>
    <?php $pedro->Falar(); ?>
</p>

<p>
    <?php $Fatima->Falar(); ?>
    <?php $Sueli->Falar(); ?>
</p>

<p>
    <?php $Clóvis->Falar(); ?>
</p>
</body>
</html>