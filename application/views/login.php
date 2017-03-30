<?php
$mensaje="";

if($_POST){
  $sql="select * from usuarios where usuario = ? and clave= ? ";
  $CI =& get_instance();
  $correo=$_POST['email'];
  $clave=$_POST['clave'];
  $rs=$CI->db->query($sql, array($correo, $clave));

  $rs=$rs->result();
  if(count($rs)>0){
$_SESSION['gale_user']=$rs[0];
redirect('web/subir');

  }else{

    $mensaje="Usuario o clave no Validos";
  }

}




 ?>

 		<!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<div class="row">

<div class="col col-sm-4 col-sm-offset-4">
  <form method="post" action="">
    <h3>Ingrese al sistema</h3>
    <div class="form-group input-group">
<label class="input-group-addon">Usuario: </label>
      <input type="text" name="email" class="form-control" />
    </div>

    <div class="form-group input-group">
    <label class="input-group-addon">Clave: </label>
      <input type="password" name="clave" class="form-control" />
</div>
<div style="color:red">

  <?php echo $mensaje; ?>
</div>
        <div class="text-center">
            <button class="btn btn-primary">Ingresar</button>


    </div>

  </form>

</div>

</div>
