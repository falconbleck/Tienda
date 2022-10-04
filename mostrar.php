<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
	<link rel="stylesheet" type="text/css" href="css/datatable.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.5/datatables.min.css"/> -->

	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="	sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->



</head>


  <header>
    <ul>
      <a href="index.php"><li>-> Volver a Inicio <-</li></a>
      <!-- Disculpar el spam de codigo, pero el resultado luce bien -->
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
      <img src="https://img.icons8.com/material-outlined/24/000000/shop-department.png"/>
    </ul>  
  </header>



<body>
<div class="col" style="position: relative; left: 480px; top: 100px">
<p class= "description">
  Historial de Compras
</p>
</div>
<!-- <div class="col" style="position: relative; left: 2px; top: 80px">	
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="20%">
	<thead>
		<tr>
			<th>ID Cliente</th>
			<th>Nombre Cliente</th>
			<th>Apellido Cliente</th>
			<th>Rut</th>
			<th>Seguro</th>
			<th>Edad</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Alphabet puzzle</td>
			<td>2016/01/15</td>
			<td>Done</td>
			<td data-order="1000">€1.000,00</td>
		</tr>-->
		<!-- <?php			include 'controller/showProducts.php';?>-->
	<!--</tbody>-->

<div class="col" style="position: relative; left: 2px; top: 0px">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
	<thead>
		<tr>
			
			<th>Item</th>
			<th>Cantidad</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		<?php
		  $nombre = $_POST['nom'];
		  $rut = $_POST['rut'];

		  try{
		    $base = new PDO('mysql:host=localhost; dbname=secure','root','');
		    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $base->exec("SET CHARACTER SET Utf8");
		    $sql = "SELECT item, cant, precio FROM compras WHERE idClientes = (SELECT idClientes FROM clientes WHERE nombre = '". $nombre ."' AND rut = '". $rut ."' )";
		    $resultado = $base->prepare($sql);
		    $resultado->execute(array('compras'));
		    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
					
					echo '<tr>';
		      echo '<td>' .$registro['item']. '</td>';
		      echo '<td>' .$registro['cant']. '</td>';
		      echo '<td>' .$registro['precio']. '</td>';
		      echo '</tr>';
		    }
		  }
		  catch(Exception $e){
		    die("Error" .$e->GetMessage());
		  }
		  finally{
		    $base=null;
		  }


		?>
	</tbody>
</table>
</div>

      <div class="col" style="position: relative; top: 80px;">
        <div><img src="https://assets.nintendo.com/image/upload/q_60/f_auto/dpr_2.0/Dev/IS%20Page%20Placeholders/store/bg2.jpg" width="100%" height="70%"></div>
        </div>
      </div>


</body>


  <footer>
    <p>Copyright Tienda</p>
  </footer>


</html>


<!-- DATATABLE SCRIPT -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.5/datatables.min.js"></script> 

<script src="js/datatable.js"></script>