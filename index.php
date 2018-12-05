<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login/Logout animation concept</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="cont">
  <div class="demo">
    <div class="login">
      <img src="../RodoX/imag/logo.png" style="display: block; margin-left: auto; margin-right: auto;">
      <div class="login__form">
        <form class="form-login" name="Form" method="post" id="formulario" action="Welcome">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" placeholder="Username" name="USERVALIDA" required />
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" placeholder="Password" name="SENHAVALIDA" required />
        </div>
        <button type="submit" class="login__submit">Sign in</button>
        <p class="login__signup"> &nbsp;<a>Gestão Desempenho Rodobens</a></p>
      </form>
      </div>
    </div>
  </div>
</div>
  <script src='js/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>