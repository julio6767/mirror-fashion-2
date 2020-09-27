<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Mirror Fashion</title>
</head>
<body>

<?php
        $conexao = mysqli_connect("localhost:3307","root","676767","wd43");
        $dados = mysqli_query($conexao,"SELECT * FROM produtos WHERE id = $_POST[id]");
        $produto = mysqli_fetch_array($dados);
    
    
    ?>


<h1>Ótima	escolha!</h1>
<p>Obrigado	por	comprar	na	Mirror	Fashion! Preencha	seus	dados	para	efetivar	a	compra.</p>

<h2>Sua Compra</h2>

    <dl>
        <dt>Produto</dt>
        <dd><?= $produto['nome']?></dd>

        <dt>Preço</dt>
        <dd>R$: <?= $produto['preco']?></dd>

        <dt>Cor</dt>
        <dd><?= $_POST['cor']?></dd>

        <dt>Tamanho</dt>
        <dd><?= $_POST['tamanho']?></dd>
    </dl>

    <!-- antigo 

 <dt>Produto</dt>
        <dd><?= $_POST['nome']?></dd>

        <dt>Preço</dt>
        <dd>R$: <?= $_POST['preço']?></dd>

        <dt>Cor</dt>
        <dd><?= $_POST['cor']?></dd>

        <dt>Tamanho</dt>
        <dd><?= $_POST['tamanho']?></dd>
    </dl>
-->
    
</body>
</html> 