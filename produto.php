<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta	name="viewport" content="width=device-width">
   

     
     
     <link rel="stylesheet" href="css/reset.txt">
     <link  href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" rel="stylesheet">
     <link rel="stylesheet" href="/produtos.css">
     
    
</head>
<body>

    <?php
        $conexao = mysqli_connect("sql3.freemysqlhosting.net","sql3368812","4yninEjVgf","sql3368812");
        $dados = mysqli_query($conexao,"SELECT * FROM produtos WHERE id = $_GET[id]");
        $produto = mysqli_fetch_array($dados);
    
    
    ?>

    <?php
         $cabeçalho_title = $produto['nome'];
         include("cabeçalho.php");
    
    ?>

            
    <div class="produto-back">

    

<div class="container">

    <div class="produto">
        <h1><?=$produto['nome']?></h1>
        <p><?=$produto['preco']?></p>

            <div class="redes">
            <!-- botão facebook de curtir-->
            <div	class="fb-like" data-href="http://www.mirrorfashion.net" data-send="false" data-layout="box_count" data-width="58" data-show-faces="false"></div>
             <!-- botão twitter-->
             <a	href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a>
             
             </div>
          
     

        <form action="checkout2.php" method="POST" >

            <input type="hidden" name="id" value="<?= $produto['id']?>"> 

            <input type="hidden" name="nome" value="<?=$produto['nome']?>">
            <input type="hidden" name="preço" value="<?=$produto['preco']?>">


            <fieldset class="cores" required>
                <legend>Escolha a cor:</legend>

                <input type="radio" name="cor" value="verde" id="verde" checked >
                <label for="verde">
                    <img src="img\produtos\foto<?= $produto['id']?>-verde.png" alt="produto na cor verde">
                </label>


                <input type="radio" name="cor" value="rosa" id="rosa" >
                <label for="rosa">
                    <img src="img\produtos\foto<?= $produto['id']?>-rosa.png" alt="produto na cor rosa">
                </label>


                
                <input type="radio" name="cor" value="azul" id="azul" >
                <label for="azul">
                    <img src="img\produtos\foto<?= $produto['id']?>-azul.png" alt="produto na cor azul">
                </label>


            </fieldset>

            <fieldset class="tamanhos">
                <legend>Escolha o tamanho:</legend>

                <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                <output for="tamanho" name="valorTamanho">42</output>


            </fieldset>
            
            <button class="comprar" >Comprar</button>
        </form>


    </div>

    <div class="detalhes">
        <h2>Detalhes do produto</h2>
        <p><?=$produto['descricao']?></p>

            <table>
                
                <thead>
                    <tr>
                        <th>Características</th>
                        <th>Detalhes</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã 7845</td>

                    </tr>

                    <tr>
                        <td>Material</td>
                        <Td>Algodão e poliester</Td>

                    </tr>

                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e verde</td>

                    </tr>

                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>
                </tbody>


            </table>


    </div>


</div>

</div>


    <!-- botão facebook de curtir-->
    <div	id="fb-root"></div>
<script>(function(d,	s,	id) {
var	js,	fjs	=	d.getElementsByTagName(s)[0];
if	(d.getElementById(id))	return;
			js	=	d.createElement(s);	js.id	=	id;
			js.src	=	"http://connect.facebook.net/pt_BR/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js,	fjs);
	}(document,	'script',	'facebook-jssdk'));</script>

<!-- botão twitter-->
    <script>
    !function(d,s,id){var	js,fjs=d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
    js.src="http://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>



    <?php include("rodape.php");?>


  



    <script type="text/javascript" src="js/produto.js"></script>
    
</body>
</html>
