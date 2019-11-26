<!DOCTYPE html>
<html lang="port">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MÉQUI Sujo's</title>

    <script src="https://kit.fontawesome.com/bc58fc4108.js" crossorigin="anonymous"></script>
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/acao.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="materialize.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="components/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
<div class="row">
    <div class="col s12">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="pratosPrincipais.php">Pratos Principais</a></li>
        <li><a href="Bebidas.php">Bebidas</a></li>
        <li class="divider"></li>
        <li><a href="porcoes.php">Porções</a></li>
        <li class="active"><a href="sobremesa.php">Sobremesa</a></li>
      </ul>

          <nav>
            <div class="nav-wrapper">
              <a href="index.html" class="brand-logo center"> Restaurante </a>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="cozinh.html"> Cozinha </a></li>
                <li><a href="cardapio.html"> Cardapio</a></li>
                <li><a class="dropdown-trigger" href="#" data-target="dropdown1">Administração</a></li>
              </ul>
            </div>
          </nav>

    </div>
</div>

<div class="container">





<div class="row">


  <div class="col-md-6">
    <div class="ps6">
       <div class="card">
         <div class="circle-photo">
           <img src="imagens/pato.jpg" alt="" class="t" width="180" height="180px">
         </div>
     <div class="paragarph-center">
     <h2 class="title">Cadastro das Bebidas</h2>
       <label for="bebidas"> Nome da Bebida: </label>
       <input type="text" name="nome">
      </div>

     <div class="paragarph-center">
       <label for="pratoP"> Valor da Bebida: </label>
       <input type="text" name="valor">
     </div>

       <div class="paragarph-center">
       <label for="porcoes"> Categoria: </label>
       <input type="text" name="categoria">
     </div>


       <div class="paragarph-center">
         <button id="botão" class="btn btn-warning"> Pedido Finalizado</button>
       </div>
   </div>
   </div>
  </div>
</div>



</div>

<?php
      if (!empty($_POST)) 
      {
        include_once('conexao.php');
        
        $nome  = $_POST['nome'];
        $cpf   = $_POST['valor']; 
        $rg    = $_POST['categoria'];
        
        $stmt = $con->prepare("INSERT INTO tb_produto(nm_produto, 
                                                      vl_produto,
                                                      cd_categoriaProduto) 
                     VALUES(?, ?, ?)");
                     
        $stmt->bindParam(1,$nome);
        $stmt->bindParam(2,$cpf);
        $stmt->bindParam(3,$rg);
        
        $stmt->execute();
        
        echo "<script>
            alert('Cadastrado com Sucesso!');
            </script>";
      }
    ?>


</body>
</html>