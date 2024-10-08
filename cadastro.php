<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionarios</title>
    <link rel="stylesheet" href="style2.css">
    
</head>
<body>
<div class="box-cadastro">    
<div class='outdoor'>
        <h1>Cadastro de Funcionários</h1>
    </div>
<section class="form-box">
        <form action="" method="post">
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
        
        <input type="submit" value="Enviar" id='enviar'>
    </form>
</section>
</div>

</body>
<?php
$servidor ='localhost';
$usuario ='root';
$senha='';
$banco_de_dados='caique1';

$conexao = mysqli_connect(hostname: $servidor, username: $usuario, password: $senha, database: $banco_de_dados);
if (isset($_POST['nome'],$_POST['cargo'],$_POST['idade'],$_POST['salario'],$_POST['telefone'])) {
    
    // Verifica se o formulário foi enviado
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $idade = $_POST['idade'];
    $salario = $_POST['salario'];
    $telefone = $_POST['telefone'];
    
    
    $insert = $conexao->query(query:"insert into funcionario(nome, cargo, idade, salario, telefone) values ('$nome', '$cargo', '$idade', '$salario' , '$telefone')");
    
    $conexao->close();
}
$conexao = mysqli_connect(hostname: $servidor, username: $usuario, password: $senha, database: $banco_de_dados);

$selectFunc = $conexao->query(query: 'select * from funcionario');

$rowsFunc = $selectFunc->fetch_all(MYSQLI_ASSOC);


function renderTemplate($funcionario){
    include "template.php";
}

foreach($rowsFunc as $funcionario){
    renderTemplate($funcionario);
}   
$conexao->close();

?>
    
    
    </html>