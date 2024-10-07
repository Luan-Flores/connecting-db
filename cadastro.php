<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionarios</title>
</head>
<body>
<form action="" method="get">
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome" required>
    
    <label for="cargo">Cargo: </label>
    <input type="text" id="cargo" name="cargo" required>
    
    <label for="idade">Idade: </label>
    <input type="number" id="idade" name="idade" required>
    
    <label for="idade">Salario: </label>
    <input type="float" id="idade" name="salario" required>
    
    <label for="telefone">Telefone: </label>
    <input type="tel" id="telefone" name="telefone" required>
    
    <input type="submit" value="Enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Verifica se o formulário foi enviado
    $nome = isset($_GET['nome']);
    $cargo = isset($_GET['cargo']);
    $idade = isset($_GET['idade']);
    $salario = isset($_GET['salario']);
    $telefone = isset($_GET['telefone']);

    // Aqui você pode executar a lógica que precisar com os dados
    echo "Nome: $nome <br>";
    echo "Cargo: $cargo <br>";
    echo "Idade: $idade <br>";
    echo "Idade: $salario <br>";
    echo "Telefone: $telefone <br>";
}
    $insert = $conexao->query(query:'insert into funcionario(nome, cargo, idade, salario, telefone) values
    ($nome, $cargo, $idade, $salario , $telefone)');
    var_dump($insert)
    ?>
    

</body>
</html>