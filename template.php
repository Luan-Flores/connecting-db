<link rel="stylesheet" href="style2.css">

<div id="agaum">
<h1>Funcionários Cadastrados</h1>
</div>
<div class="card-funcionario">
    <header>
        <h2>Nome: <?=$funcionario['nome']?></h2>
        <p>Cargo: <?=$funcionario["cargo"]?></p>
        <p>Idade: <?=$funcionario["idade"]?></p>
    </header>
    <footer>    
        <a href="tel:">Telefone: <?=$funcionario['telefone']?></a>
    <br>
        <span>ID: <?=$funcionario['id']?></span>
    </footer>
</div>