<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM funcionarios WHERE nome='$usuario' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $_SESSION['usuario'] = $usuario;
        header('location: index.php');
    } else {
        $error = "Usuário ou senha inválidos";
    }
}
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

        <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container col-sm-5 p-4 m-3 custom-container">
        <h1 class=" custom-h1 h2 text-center fs-2 fw-bolder">Preencha o Formulário Abaixo:</h1>
        <form action="" class="">
            <div class="">
                <label for="nome" class="form-label custom-label fs-5 fw-bolder mt-2">Nome:</label>
                <div class="input-group">
    
                    <span class="input-group-text custom-icon ">
                        <i class="bi-person-fill"></i>
                    </span>
    
                    <input type="text" class="form-control custom-input p-2" placeholder="Digite seu Nome">
                </div>
                
                <label for="senha" class="form-label custom-label fs-5 fw-bolder mt-2">Senha:</label>
                <div class="input-group">
    
                    <span class="input-group-text custom-icon ">
                        <i class="bi-lock-fill"></i>
                    </span>
    
                    <input type="password" class="form-control custom-input p-2" placeholder="Digite sua Senha">
                </div>
            </div>
            <div class="d-grid custom-div">
                <button type="submit" id="bot" class="btn btn-dark p-2 custom-button"><i class="bi-arrow-right"></i></button>
            </div>
        </form>
    </div> 
</body>
</html>