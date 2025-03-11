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
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body >
    <main>
        <div class="login">
            <div class="logoLogin"><img class="logo2" src="assets/logo2.png" alt="logo"></div>
            <div class="containercenter">
                <h2>Login</h2>
                <form method="post" action="">
                <div class="col-sm-6 mb-3">
                    <label for="nome" class="form-label custom-input">Nome:</label>
                    <div class="input-group">

                        <span class="input-group-text custom-icon ">
                            <i class="bi-person-fill"></i>
                        </span>

                        <input type="text" name="usuario" class="form-control custom-input" placeholder="Digite seu Nome" required>
                    </div>
                    <label for="Senha" class="form-label custom-input">Senha:</label>
                    <div class="input-group">

                        <span class="input-group-text custom-icon ">
                            <i class="bi-key-fill"></i>
                        </span>

                        <input type="password" name="senha" class="form-control custom-input" placeholder="Digite sua senha" required>
                    </div>
                </div>
                    <button type="submit" id="bot" class="btn btn-dark mt-3">Entrar</button>
                    <?php if (isset($error)) echo "<p class='message error'>$error</p>"; ?>
                </form>
            </div>
        </div>
    </main>
</body>
</html>