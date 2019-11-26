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
        <li class="active"><a href="pratosPrincipais.php">Pratos Principais</a></li>
        <li><a href="Bebidas.php">Bebidas</a></li>
        <li class="divider"></li>
        <li><a href="porcoes.php">Porções</a></li>
        <li><a href="sobremesa.php">Sobremesa</a></li>
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
  
             <form action="#" method="POST" enctype="multipart/form-data"> 
       <div class="card">
         <div class="circle-photo">
           <img src="imagens/pato.jpg" alt="" class="t" width="180" height="180px">
         </div>

     <div class="paragarph-center">
     <h2 class="title">Cadastro dos Pratos Principais</h2>
       <div class="categoria">
    <form method="post" enctype="multipart/form-data">
        <label for="produto">Produto</label>
        <input type="text" class="form-control" name="produto" id="produto" placeholder="Insira o nome do produtos">
              <label for="valor">Valor</label>
              <input type="text" class="form-control" name="valor" id="valorprod" placeholder="R$"> 

        <div class="input-field col s12" id="select">     
            <select class="browser-default" id="batatinhas" name="categoria">
                <option value="" disabled selected>Selecione a categoria</option>
                <?php
              $categoryselect = $mysql->query('SELECT * FROM tb_categoria');
              while($cat = mysqli_fetch_array($categoryselect))
              {
            ?>
            <option value="<?php echo $cat['cd_categoria'];?>"><?php echo $cat['nm_categoria'];?></option>
            <?php
              };
            ?>
              </select>
          </div>
          <button class="btn btn-dark " type="submit" id="submit">Salvar  <i class="far fa-save"></i></button>


      </form> 
  </div>
  </div>

                    <button class="btn btn-dark " type="submit" id="submit">Salvar  <i class="far fa-save"></i></button>
</body>
</html>
<?php 
    $mysql= new mysqli('localhost','root','usbw','db_mcsujos');

  if(!$mysql== true){
    echo $mysqli->error;
  }
    if(isset($_POST['produto'])) {
    $produto= $_POST['produto'];
    $valor= $_POST['valor'];
    $categoria= $_POST['categoria'];
    
    //mysql insert//
    $catinsert= "INSERT INTO tb_produto  VALUES (NULL, '".$produto."', '".$valor."', '".$categoria."')";
    if ($mysql->query($catinsert)) {
      header("location:index.html");
    } else {
        echo "Error: " . $catinsert . "<br>" .$mysqli->error;
    }
  }
?>
<style type="text/css">
  #select{
    width: 30%;
    height: 25px;
  }
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
});
</script>

