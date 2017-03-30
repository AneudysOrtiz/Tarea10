<?php
$mensaje="";
$CI=& get_instance();

  if($_POST){


    $datos=$_POST;
    $datos['fecha']=date('Y-m-d H:i:s');
  	$CI->db->insert('electrodomesticos', $datos);
  	$mensaje="Registro Recibido";

    $cod =$this->db->insert_id();
    $foto=$_FILES['foto'];
    if($foto['error']==0){
      $tmp="fotos/$cod.jpg";
      move_uploaded_file($foto['tmp_name'],$tmp);}



  }

  ?>





 <html>


 <html style="background: url(wallpaper_blue.jpg) no-repeat center center fixed; ">

 		<!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


 <header>
 <div class="alert alert-info" ><center>
   <h1>Electrodomesticos</h1></center> </div></header>

<div class="container">


 <div class="text-right">
<a class="btn btn-danger" href="<?php echo site_url('web/salir')?>">Salir</a>
</div>
 </div>


<div class="container mt">


 <fieldset>
   <h3>Registrar Electrodomestico</h3>

   <div style="color:green">

     <?php echo $mensaje; ?>
   </div>

   <form enctype="multipart/form-data" method="post" >
     <div class="col col-sm-4">
     <div class="form-group input-group">
       <label class="input grop-addon">Marca: </label>
       <input type="text" required name="marca" class="form-control" />
     </div>
     <div class="form-group input-group">
       <label class="input grop-addon">Tipo: </label>
       <input type="text" required name="tipo" class="form-control" />
     </div>

     <div class="form-group input-group">
       <label class="input grop-addon">Peso: </label>
       <input type="text" required name="peso" class="form-control" />
     </div>

     <div class="form-group input-group">
       <label class="input grop-addon">Color: </label>
       <input type="text" required name="color" class="form-control" />
     </div>
     <div class="form-group input-group">
       <label class="input grop-addon">Imagen: </label>
       <input  type="file" name="foto" class="form-control" />
     </div>
     <div class="form-group input-group">
       <label class="input grop-addon">Comentario: </label>
       <textarea class="form-control" name="comentario"></textarea>
       </div>

     <div>
 <button type="submit" class="btn btn-success">Guardar</button>


     </div>
 </div>
   </form>

   </div>





 </html>
