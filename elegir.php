

<!DOCTYPE html>

<html>
<head>
 <title> Semaforo proyecto </title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


 <style>

body {
   background-color: #22282e;
}

.oliver {
  position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);

   background-color: #ffffff;
   width: 400px;
   height: 400px;

    color: black;
  box-shadow: -5px 6px 3px -4px rgba(0,0,0,0.75);

}




 </style>
</head>


    <body>
  <div class="oliver">
      <h3 class="text-center"> Selecciona la calle</h3>

<br>

<div class="semaforo">
<div class="text-center">

<a href="index.php?calle=A" class="btn btn-default"> Calle A </a>
<a href="index.php?calle=B" class="btn btn-default"> Calle B </a>
<a href="config.php" class="btn btn-danger"> Configuracion </a> 
</div>
      </div>
</div>




    </body>


    </html>
