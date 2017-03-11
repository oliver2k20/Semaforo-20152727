<?php

if($_POST) {
  file_put_contents('config.txt', json_encode($_POST));


}
  $datos = json_decode(file_get_contents('config.txt'),1);
?>

<!DOCTYPE html>

<html>

<head>

  <title> Panel de administracion </title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <style type="text/css">

 body {;

   background-color: #22282e;
 }

 form {
   position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
 }

 h3 {
   color: #cccccc;
 }

 p {
   color: #cccccc;
   margin: 2px;
 }
 </style>
</head>

<body>

<form method="post" action="">
  <h3 clas="text-center"> Panel de administracion </h3>
  <hr>

  <br>
  <p>Transicion verde <input val="<?php echo $datos['verde']; ?>" class="form-control" style="max-width:350px;" type="text" name="verde"/></p>
<p>  Transicion rojo <input val="<?php echo $datos['rojo'];?>" class="form-control" style="max-width:350px;" type="text"  name ="rojo"/></p>
<br>
<button type="submit" style="width:350px; height:30px;"class="btn btn-danger"> Guardar </button>
</form>
</body>

</html>
