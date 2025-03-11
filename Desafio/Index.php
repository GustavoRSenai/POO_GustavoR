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
    <title>Hospital do Povo</title>
</head>
<body>
    <a href="Login.php" id="bot" class="btn btn-dark ">Login</a>
    <div class="d-flex quadrado ">
        <button id="ant" class="btn btn-dark mt-3"><i class="bi-arrow-left"></i></button>
        <button id="prox" class="btn btn-dark mt-3"><i class="bi-arrow-right"></i></button>
        <div class="item ativo">
            <h1 class="text-center">Lista de Funcionários</h1>
            <table class="table table-primary mt-3 table-hover table-bordered border-primary">
                <tr>
                    <th>Funcionários</th>
                    <th>Idade</th>
                    <th>Cpf</th>
                    <th>Data de Nascimento</th>
                </tr>
                <tr>
                    <th id="Funcionario1"></th>
                    <th id="idade1"></th>
                    <th id="Cpf1"></th>
                    <th id="Nascimento1"></th>
                </tr>
                <tr>
                    <th id="Funcionario2"></th>
                    <th id="idade2"></th>
                    <th id="Cpf2"></th>
                    <th id="Nascimento2"></th>
                </tr>
                <tr>
                    <th id="Funcionario3"></th>
                    <th id="idade3"></th>
                    <th id="Cpf3"></th>
                    <th id="Nascimento3"></th>
                </tr>
                <tr>
                    <th id="Funcionario4"></th>
                    <th id="idade4"></th>
                    <th id="Cpf4"></th>
                    <th id="Nascimento4"></th>
                </tr>
            </table>
            
        </div>

        <div class="item  ">
            <h1 class="text-center">Lista de Pacientes
            </h1>
            <table class="table table-primary mt-3 table-hover table-bordered border-primary">
                <tr>
                    <th>Pacientes</th>
                    <th>Idade</th>
                    <th>Cpf</th>
                    <th>Data de Nascimento</th>
                </tr>
                <tr>
                    <th id="Paciente1"></th>
                    <th id="idade5"></th>
                    <th id="Cpf5"></th>
                    <th id="Nascimento5"></th>
                </tr>
                <tr>
                    <th id="Paciente2"></th>
                    <th id="idade6"></th>
                    <th id="Cpf6"></th>
                    <th id="Nascimento6"></th>
                </tr>
                <tr>
                    <th id="Paciente3"></th>
                    <th id="idade7"></th>
                    <th id="Cpf7"></th>
                    <th id="Nascimento7"></th>
                </tr>
            </table>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>