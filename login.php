<!DOCTYPE html>
<?php
session_start();
include("lib/conec.php");
$db = getDB();

?>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <title>CLEARMIN / LESS</title>
    <style></style>
  </head>
  <body class="cm-login">

    <div class="text-center" style="padding:30px 0 30px 0;background:#fff;border-bottom:1px solid #ddd">
      <img src="img/logoAlgoritmia.svg" width="225" height="225">
    </div>
    
    <div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
      <form method="post" action="index.html">
	<div class="col-xs-12">
          <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
	      <input type="text" name="username" class="form-control" placeholder="Nombre y Apellido">
	    </div>
          </div>
          <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon"><i class="fa fa-fw fa-at"></i></div>
	      <input type="password" name="password" class="form-control" placeholder="Correo">
	    </div>
          </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-fw fa-phone"></i></div>
                <input type="password" name="password" class="form-control" placeholder="Telefono">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-fw fa-bank"></i></div>
                <select name="Colegios" class="form-control">
                    <?php

                    $ress=$db->query("select * from colegio ORDER BY NOMBRE_COLEGIO ASC ");

                    ?>
                    <?php while ($row = $ress->fetch(PDO::FETCH_ASSOC) ) { ?>

                        <option value="<?php echo $row["NOMBRE_COLEGIO"];  ?>"><?php echo $row["NOMBRE_COLEGIO"];?></option>

                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
                <input type="password" name="password" class="form-control" placeholder="Clave">
            </div>
        </div>
        </div>
	<div class="col-xs-6">
        <!--  <div class="checkbox"><label><input type="checkbox"> Remember me</label></div> -->
	</div><div class="col-xs-6">
          <button type="submit" class="btn btn-block btn-primary">Iniciar</button>
        </div>
      </form>
    </div>
  </body>
</html>
