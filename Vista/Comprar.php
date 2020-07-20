<?php 

session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Img/favi.icon.png" type="image/x-icon">
  <link rel="stylesheet" href="../Css/Login.css">
  <title>FIXED GEAR</title>
</head>
<body>
  



<!------------ Thanks Daniel Almeida for the reference  ----------->
<!-- https://dribbble.com/shots/4027518-Login-screen-interaction -->

<div class="login-wrapper">
  <div class="login-left">
    <img src="../Img/seoul3.jpg">
    <div class="h1">Comprar</div>
  </div>
  <form action="../Controlador/comprar.php" method = "POST">
  <div class="login-right">
    <div class="h2">Carro</div>
    <div class="form-group">
      <input type="text" name ="id" placeholder="Carbono DOSNUEVE" disabled>
    </div>
    <div class="form-group">
      <input type="text" name ="precio" placeholder="Valor $500.000" disabled>    
    </div>
    <div class="form-group">
      <input type="number" name ="cantidad"  placeholder="Cantidad">  
    </div>
    <div class="form-group">
     <label class="h3"><input type="checkbox" name ="nombre" id = "Email"> Agregar al carro </label>
    </div>
    
    <div class="button-area">

    <input type="submit" value = "Comprar">

    <input type="submit" value = "Seguir comprando">

    </div>
  
  </div>
  </form>
</div>

<script>

var openLoginRight = document.querySelector('.h1');
var loginWrapper = document.querySelector('.login-wrapper');

openLoginRight.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});

</script>

</body>
</html>

