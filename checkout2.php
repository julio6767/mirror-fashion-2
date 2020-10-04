<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout	Mirror	Fashion</title>
    <link	rel="stylesheet" href="css/bootstrap.css">
    <link	rel="stylesheet" href="css/checkout.css">
  
</head>
<body>

    <?php
            $conexao = mysqli_connect("sql3.freemysqlhosting.net","sql3368812","4yninEjVgf","sql3368812");
            $dados = mysqli_query($conexao,"SELECT * FROM produtos WHERE id = $_POST[id]");
            $produto = mysqli_fetch_array($dados);

            $produto['preco'] = substr($produto['preco'], 2);  
        
        
        ?>
 
  
    <nav	class="navbar	navbar-expand-lg	navbar-light	bg-light">
        <button	class="navbar-toggler" type="button"
        data-toggle="collapse" data-target="#navbarToggleExternalContent">
        <span	class="navbar-toggler-icon"></span> 
       
        </button>
        <a	class="navbar-brand" href="index.php">Mirror	Fashion</a>
                <div	class="collapse	navbar-collapse" id="navbarToggleExternalContent">
                    <ul	class="navbar-nav">
                        <li	class="nav-item	active">
                         <a	class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li	class="nav-item">
                          <a	class="nav-link" href="#">Ajuda</a>
                        </li>
                        <li	class="nav-item">
                         <a	class="nav-link" href="#">Perguntas	frequentes</a>
                        </li>
                        <li	class="nav-item">
                         <a	class="nav-link" href="#">Entre	em	contato</a>
                        </li>
                    </ul>
            </div>
    </nav>


    <div class="jumbotron jumbotron-fluid">


        <div class="container">

    
    <h1 class="display-4">Ótima escolha!</h1>
    <p class="lead">Obrigado	por	comprar	na	Mirror	Fashion!
        Preencha	seus	dados	para	efetivar	a	compra.</p>

    </div><!--	fim	.container	dentro	do	jumbotron	-->
</div><!--	fim	.jumbotron	-->

        <div class="container"> <!--card-container-->

            <div class="row"> 
            
                <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-header">

              Sua compra

            </div> <!--	fim	.card-header	-->

            <div class="card-body">
                <img src="img/produtos/foto<?= $produto['id']?>-<?= $_POST['cor']?>.png" alt="Fuzzy	Cardigan" class="img-thumbnail mb-3">
        <dl>
            <dt>Produto</dt>
            <dd><?= $produto['nome']?></dd>

            <dt>Cor</dt>
            <dd><?= $_POST['cor']?></dd>

            <dt>Tamanho</dt>
            <dd><?= $_POST['tamanho']?></dd>

            <dt>Preço:</dt>
            <dd><?= $produto['preco']?></dd>
        </dl>

             </div><!--	fim	.card-body	-->
    </div><!--	fim	.card mb-3	-->

    <div class="card mb-3">
        <div class="card-body">

            <div class="form-group">
                <label for="qtd">Quantidade</label>
                <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">

            </div>

            <div class="form-group">
                <label for="total">Total:</label>
                <output id="total" class="form-control"><?= $produto['preco']?></output>



               

            </div>


        </div>

    </div>

    <dd id="preço" hidden ><?= $produto['preco']?></dd>

              

                <!-- <output  for="qtd preço" id="total" class="form-control"><?= $produto['preco']?></output>-->
                
  


</div> <!--fim .col-md-4-->
 <form class="col-md-8" >
    <form>
        <div class="row">

        <fieldset class="col-lg-6">
            <legend>Dados pessoais:</legend>
            <div class="form-group">
                <label for="nome">Nome completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" autofocus required>


            </div>


           
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
                

            </div>


           
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                

            </div>


          
            <div class="form-group	custom-control	custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
               <label class="custom-control-label" for="newsletter">
                      Quero	receber	Newsletter	da	Mirror	Fashion
               </label>
                

            </div>
        </fieldset>

        <fieldset class="col-lg-6">
            <legend>Cartão de crédito</legend>

            <div class="form-group">
                <label for="numero-cartao">Número - CVV</label>
                <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                

            </div>


            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="bandeira-cartao">Bandeira</label>

                    </div>

                
                
                <select class="custom-select" id="bandeira-cartao">
                        <option disabled selected>Selecione uma opção...</option>
                        <option value="master">MasterCard</option>
                        <option value="visa">VISA</option>
                        <option value="amex">American Express</option>
                </select>

            </div>
        </div>

            <div class="form-group">
                <label for="validade-cartao">Validade:</label>
                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                
                
            </div>
        </fieldset>

    </div> <!--fim .div-row-->

        <button type="submit" onclick="myfunction()" class="btn btn-primary btn-lg" >
        <span class="iconify" data-icon="oi-thumb-up" data-inline="false"></span>
            Confirmar Pedido
            
    
        </button>
    </form>

</form> <!--fim .form col-md-8 -->
   
  </div> <!--fim.Div Row-->

 </div><!--	fim	.container	da	pagina	-->



<script type="text/javascript">
function myfunction (){
alert ("pedido finalizado")
}
    
</script>

 <script	type="text/javascript" src="js/jquery.js"></script>
 <script	type="text/javascript" src="js/bootstrap.js"></script>
 <script	type="text/javascript" src="js/total.js"></script>
 <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


</body>
</html>
