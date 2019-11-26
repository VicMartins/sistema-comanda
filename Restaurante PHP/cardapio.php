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

<style>
	img{
		height: 100px;
	}	
	.a{
		margin-left: -100px;
	}
    .c{
		margin-left: -100px;
	}
	.b{
		margin-left: -100px;
		margin-top: -622px;
	}
	.d{
		margin-left: -100px;
		margin-top: -622px;
	}
</style>

<body>
<div class="row">
    <div class="col s12">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="pratosPrincipais.php">Pratos Principais</a></li>
        <li class="active"><a href="Bebidas.php">Bebidas</a></li>
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
	<div class="col s6">
		<h1> Selecione a mesa e o Pedido:</h1>
	</div>

	<div class="col s6">
		<img src="imagens/menu.png">
	</div>
</div>

<div class="row">
	<div class="col s8">
		  <select class="browser-default">
		    <option value="" disabled selected>Selecione a mesa: </option>
		    <option value="1"> Mesa 01</option>
		    <option value="2"> Mesa 02 </option>
		    <option value="3"> Mesa 03 </option>
		    <option value="4"> Mesa 04 </option>
		    <option value="5"> Mesa 05 </option>
		    <option value="6"> Mesa 06 </option>
		    <option value="7"> Mesa 07 </option>
		    <option value="8"> Mesa 08 </option>
		    <option value="9"> Mesa 09 </option>
		    <option value="10">Mesa 10 </option>
		  </select>
            
	</div>
</div>


  <div class="row a">	
  	<div class="col s6">	
  		<div class="card">

  		<div class="row">
  			<div class="col s8">
  				<h1> Pratos Principais</h1>
  			</div>

  			<div class="col s4">
  				<img src="imagens/1.png">
  			</div>
  		</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomePrato"> Nome do Prato: </label>	
  				<input type="text" name="nomePrato">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoPrato"> Valor do Prato: </label>	
  				<input type="number" name="precoPrato">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomePrato"> Nome do Prato: </label>	
  				<input type="text" name="nomePrato">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoPrato"> Valor do Prato: </label>	
  				<input type="number" name="precoPrato">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomePrato"> Nome do Prato: </label>	
  				<input type="text" name="nomePrato">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoPrato"> Valor do Prato: </label>	
  				<input type="number" name="precoPrato">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomePrato"> Nome do Prato: </label>	
  				<input type="text" name="nomePrato">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoPrato"> Valor do Prato: </label>	
  				<input type="number" name="precoPrato">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>


  		</div>	
  	</div>
  </div>


 <div class="row b">	
  	<div class="col s6">	
  		<div class="card">

  		<div class="row">
  			<div class="col s8">
  				<h1> Porções </h1>
  			</div>

  			<div class="col s4">
  				<img src="imagens/sushi.png">
  			</div>
  		</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomePrato"> Nome do Prato: </label>	
  				<input type="text" name="nomePrato">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoPrato"> Valor do Prato: </label>	
  				<input type="number" name="precoPrato">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomePrato"> Nome do Prato: </label>	
  				<input type="text" name="nomePrato">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoPrato"> Valor do Prato: </label>	
  				<input type="number" name="precoPrato">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomePrato"> Nome do Prato: </label>	
  				<input type="text" name="nomePrato">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoPrato"> Valor do Prato: </label>	
  				<input type="number" name="precoPrato">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomePrato"> Nome do Prato: </label>	
  				<input type="text" name="nomePrato">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoPrato"> Valor do Prato: </label>	
  				<input type="number" name="precoPrato">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>


  		</div>	
  	</div>
  </div>

   <div class="row c">	
  	<div class="col s6">	
  		<div class="card">

  		<div class="row">
  			<div class="col s8">
  				<h1> Sobremesa </h1>
  			</div>

  			<div class="col s4">
  				<img src="imagens/2.png">
  			</div>
  		</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomeSobremesa"> Nome da Sobremesa: </label>	
  				<input type="text" name="nomeSobremesa" id="sobremesa">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoSobremesa"> Valor da Sobremesa: </label>	
  				<input type="number" name="precoSobremesa">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomeSobremesa"> Nome da Sobremesa: </label>	
  				<input type="text" name="nomeSobremesa" id="sobremesa">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoSobremesa"> Valor da Sobremesa: </label>	
  				<input type="number" name="precoSobremesa">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomeSobremesa"> Nome da Sobremesa: </label>	
  				<input type="text" name="nomeSobremesa" id="sobremesa">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoSobremesa"> Valor da Sobremesa: </label>	
  				<input type="number" name="precoSobremesa">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomeSobremesa"> Nome da Sobremesa: </label>	
  				<input type="text" name="nomeSobremesa" id="sobremesa">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoSobremesa"> Valor da Sobremesa: </label>	
  				<input type="number" name="precoSobremesa">
  		</div>



  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>


  		</div>	
  	</div>
  </div>


  <div class="row d">	
  	<div class="col s6">	
  		<div class="card">

  		<div class="row">
  			<div class="col s8">
  				<h1> Bebidas </h1>
  			</div>

  			<div class="col s4">
  				<img src="imagens/3.png">
  			</div>
  		</div>

  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomeSobremesa"> Nome da Bebida: </label>	
  				<input type="text" name="nomeBebida" id="bebida">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoBebida"> Valor da Bebida: </label>	
  				<input type="number" name="precoBebida">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomeSobremesa"> Nome da Bebida: </label>	
  				<input type="text" name="nomeBebida" id="bebida">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoBebida"> Valor da Bebida: </label>	
  				<input type="number" name="precoBebida">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomeSobremesa"> Nome da Bebida: </label>	
  				<input type="text" name="nomeBebida" id="bebida">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoBebida"> Valor da Bebida: </label>	
  				<input type="number" name="precoBebida">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	  	<div class="row">
  		<div class="col s7">	
  		  		<label for="nomeSobremesa"> Nome da Bebida: </label>	
  				<input type="text" name="nomeBebida" id="bebida">
  		</div>

  		  <div class="col s3">	
  		  		<label for="precoBebida"> Valor da Bebida: </label>	
  				<input type="number" name="precoBebida">
  		</div>

  		  <div class="col s2">	
  		  		<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
  		</div>
  	</div>

  	  


  		</div>	
  	</div>
  </div>




</div>
</body>
</html>