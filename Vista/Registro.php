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
    <img src="../Img/6.jpg">
    <div class="h1">UNETE A LA CREW</div>
  </div>
  <form action="../Controlador/registro.php" method = "POST">
  <div class="login-right">
    <div class="h2">Registrate</div>
    <div class="form-group">
      <input type="text" name ="phone" "id="full-name" placeholder="telefono">
      <label for="full-name">Telefono</label>    
    </div>
    <div class="form-group">
      <input type="text" name ="user" id="Email" placeholder="Usuario">
      <label for="Email">Usuario</label>    
    </div>
    <div class="form-group">
      <input type="password" name ="pass" id="Password" placeholder="contraseña">
      <label for="Password">Contraseña</label>    
    </div>
    <div class="button-area">

    <input type="submit" value = "Registro">

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

