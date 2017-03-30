<!DOCTYPE html>
<html>
<html style="background: url(wallpaper_blue.jpg) no-repeat center center fixed; ">

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




  <head>
    <meta charset="utf-8">
    <title>Electrodomesticos</title>
  </head>
  <body>
    <header>
		<div class="alert alert-info" ><center>
			<h1>Electrodomesticos</h1></center> </div></header>


<div class="container">
  <div class="text-right">
 <a class="btn btn-success" href="<?php echo site_url('web/login');?>">Ingresar</a>

  </div>
</div>


					<div class="container">
					<h3>Electrodomesticos Registrados</h3>



<table  class="table table-striped table-bordered">

  <thead class="thead-inverse" style="background-color:lightblue">
	<tr>
			<th>Marca</th>
			<th>Fecha de compra</th>
			<th>Tipo</th>
			<th>Peso</th>
      <th>Color</th>
      <th>Foto</th>
      <th>Comentario</th>

    </tr>
	</thead>

<?php
  $CI =& get_instance() or die (mysql_error());
  $foto="foto";

	$rs=$CI->db->query("SELECT marca, fecha, tipo, peso, color, id,comentario FROM electrodomesticos ")or die (mysql_error()) ;
	$datos2=$rs->result()or die (mysql_error()) ;



	foreach($datos2 as $persona){

		echo '<tr>
				<td>'.$persona->marca.'</td>
				<td>'.$persona->fecha.'</td>
				<td>'.$persona->tipo.'</td>
				<td>'.$persona->peso.'</td>
        <td>'.$persona->color.'</td>
        <td>'.$persona->id.'</td>
        <td>'.$persona->comentario.'</td>
				</tr>';

	} ?>

</table>



</div>

  </body>
</html>
