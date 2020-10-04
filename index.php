 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta	name="viewport" content="width=device-width">
     <title>Mirror fashion</title>

     
     <link	rel="stylesheet" href="estilos homepage.css">
     <link rel="stylesheet" href="css/reset.txt">
     <link  href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" rel="stylesheet">
   
 </head>

 <body>


  <?php
  $cabeçalho_title = "Mirror Fashion";
  include("cabeçalho.php");

  ?>



                <div	class="container	destaque">
                    <section	class="busca">
                        <h2>Busca</h2>
                          <form>
                          <input	type="search">
                          <button>Buscar</button>
                          </form>
                    </section>
                    <!--	fim	.busca	-->
                    <section	class="menu-departamentos">
                        <h2>Departamentos</h2>
                        <nav>
                          <ul>
                            <li>
                              <a	href="#">Blusas	e	Camisas</a>

                            <ul>
                                <li><a href="#">Manga curta</a></li>
                                <li><a href="#">Manga comprida</a></li>
                                <li><a href="#">Manga social</a></li>
                                <li><a href="#">Manga casual</a></li>
                            </ul>
                          </li>

                            <li><a	href="#">Calças</a></li>
                            <li><a	href="#">Saias</a></li>
                            <li><a	href="#">Vestidos</a></li>
                            <li><a	href="#">Sapatos</a></li>
                            <li><a	href="#">Bolsas	e	Carteiras</a></li>
                            <li><a	href="#">Acessórios</a></li>
                          </ul>
                        </nav>
                    </section>
                    <!--	fim	.menu-departamentos	-->
                    <section	class="banner-destaque">
                        <figure>
                            <img src="img\destaque-home.png"   alt="Promoção:	Big	City	Night" id="foto" >
                        </figure>
                    </section>

                    
                    <!--	fim	.banner-destaque	-->
                    </div>
                    <!--	fim	.container	.destaque	-->
                    

                  <div class="container paineis">

                    <section class="painel novidades" class="painel-aberto">
                      <h2>novidades</h2>
                      
                          <OL>
                            <?php
                                $conexao = mysqli_connect ("sql3.freemysqlhosting.net","sql3368812","4yninEjVgf","sql3368812");
                                $dados = mysqli_query ($conexao,"SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");

                                while ($produto = mysqli_fetch_array($dados)):
                            ?>

                            <li>
                                <a href="produto.php?id=<?= $produto['id']?>">
                                    <figure>
                                        <img src="img/produtos/miniatura<?= $produto['id']?>.png"
                                         alt="<?= $produto['nome']?>">
                                        <figcaption><?= $produto['nome']?> por <?= $produto['preco']?></figcaption>

                                    </figure>
                              
                              </a>
                            </li>
<?php endwhile; ?>
                          </OL>



                      <button type="button">Mostrar mais</button>

                    </section>

                    <section class="painel Mais-vendidos" class="painel-aberto">
                      <h2>Mais vendidos</h2>
                   
                      <OL>
                            <?php
                                $conexao = mysqli_connect ("sql3.freemysqlhosting.net","sql3368812","4yninEjVgf","sql3368812");
                                $dados = mysqli_query ($conexao,"SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");

                                while ($produto = mysqli_fetch_array($dados)):
                            ?>

                            <li>
                                <a href="produto.php?id=<?= $produto['id']?>">
                                    <figure>
                                        <img src="img/produtos/miniatura<?= $produto['id']?>.png"
                                         alt="<?= $produto['nome']?>">
                                        <figcaption><?= $produto['nome']?> por <?= $produto['preco']?></figcaption>

                                    </figure>
                              
                              </a>
                            </li>
<?php endwhile; ?>
                          </OL>


                      <button type="button">Mostrar mais</button>


                    </section>

                  </div>


                  <?php include("rodape.php");?>


    
      
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/banner.js"></script>
        <script type="text/javascript" src="js/home.js"></script>


    </body>

    </html>
