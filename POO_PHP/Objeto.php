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

<<<<<<< HEAD
$aluno["apresentar"]();
?>
=======
$aluno["apresentar"]();
>>>>>>> 3b1cddbb1a96b0b041c3fd86b67aaa9f40b101d2
