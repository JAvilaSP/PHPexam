<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Examen Final</title>
  <style>
    .listacaras {
      display: flex;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <?php 
    if (isset($_GET["error"])) {
      echo "<h4 class='error'>Por favor introduzca un email valido</h4>";
    }
  ?>
  <form action="envio.php" method="get">
    <label for="email">Tu correo:</label>
    <input type="email" name="email" id="email"> <br>
    <label for="opinion">¿Cual es su grado de satisfacción con nuestro servicio?</label> <br>
    <select name="opinion" id="opinion">
      <?php
        require_once "config.php";

        $opciones = $db->query("SELECT * FROM valores");
        $opciones = $opciones->fetchAll();
        foreach($opciones as $opcion) {
          echo "<option value='".$opcion["input"]."'>".$opcion["face"]."</option>";
        }
      ?>
    </select>
    <button type="submit">Enviar</button>
  </form>

  
</body>
</html>
<?php

