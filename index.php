<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Funcionarios</title>
</head>
<body>
<section id="funcionario">
    <?php
    
    
    $servidor ='localhost';
    $usuario ='root';
    $senha='';
    $banco_de_dados='caique1';
    
    $conexao = mysqli_connect(hostname: $servidor, username: $usuario, password: $senha, database: $banco_de_dados);
    
    // $consulta = $conexao->query(query:'insert into funcionario(nome, cargo, idade, salario, telefone) values
    // ("Pelé", "Profissional de Coleta de Resíduos Metálicos Recicláveis", "25", 120 ,"6790800782")');
    
    
    
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

    </section>
    </body>
    </html>