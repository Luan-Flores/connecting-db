<link rel="stylesheet" href="style.css">
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