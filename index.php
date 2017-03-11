<?php

if (!isset($_GET['calle'])){

  header("Location:elegir.php");
}

$calle = $_GET['calle'];
  $datos = json_decode(file_get_contents('config.txt'),1);
?>


<!DOCTYPE html>

<html>
<head>
 <title> Semaforo proyecto </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


 <style>
.luz {
height:150px;
width: 150px;
margin-bottom:10px;
border-radius: 50%;
-moz-border-radius: 50%;
    -webkit-border-radius: 50%;

    position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);


}

h3 {
  margin-left: 50%;
  margin-right: 50%;


}
.semaforo {


}

 </style>
</head>


    <body>



<br>

<div class="semaforo">

      <div class="row">
          <h1 class="text-center"> Semaforo <?php echo $calle ?></h1>
        <div id="rojo" class="label-danger luz">

        </div>


      </div>


      <div class="row">
        <div id="amarillo"  class="label-warning luz">

        </div>


      </div>

      <div  class="row">
        <div id="verde" class="label-success luz">

        </div>

</div>
      </div>

      <?php if($calle =='B'): ?>
<script>
var color = "rojo";


var tiempo = 0;

function ciclo () {
$.ajax({
  url:'server.php',
  method:'get',
  success:function(info){
  color = info;

  }
});

if(color == 'rojo') {
  color = 'verde';
} else if (color == 'verde') {
  color = 'rojo';
} else if (color =='amarillo'){
  color = 'rojo';
}
$(".luz").hide();

$("#"+color).show();

}

$(".luz").hide();

$("#"+color).show();

setInterval(ciclo,100);


</script>

      <?php endif; ?>


<?php if($calle =='A'): ?>
<script>

var color = "rojo";

var tiempo = 0;


$(".luz").hide();

$("#"+color).show();

function ciclo() {

if (color == "rojo"&& tiempo > <?php echo $datos['rojo']; ?>) {
  color = "verde";
tiempo = 0;
actualizarServidor(color);
} else if (color =="amarillo"&& tiempo >2) {
  color ="rojo";
  tiempo = 0;
  actualizarServidor(color);

}else if(color =="verde"&& tiempo > <?php echo $datos['verde']; ?>) {
  color ="amarillo"

  tiempo=0;
  actualizarServidor(color);
}

$(".luz").hide();

$("#"+color).show();

tiempo++;
}

function actualizarServidor (ccc) {
$.ajax({
  url:'server.php',
  method:'post',
  data: {'color':color},
  success:function(info) {
    console.log(info);
  }

});

}


setInterval(ciclo,1000);

</script>
<?php endif; ?>


    </body>


    </html>
