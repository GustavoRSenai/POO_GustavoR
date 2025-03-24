<?php
$aluno = [
    "nome" => "Pedro",
    "idade" => 15,

    "estudar" => function() use (&$aluno) {
        echo "{$aluno['nome']} está estudando <br>";
    },

    "apresentar" => function() use (&$aluno) {
        echo "{$aluno['nome']} tem {$aluno['idade']}";
    },


];
$aluno["estudar"]();

$aluno["apresentar"]();
?>