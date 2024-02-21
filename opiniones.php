<?php 
  require_once "config.php";
  $stmt = $db->query("SELECT AVG(value) as media FROM voto WHERE _visible = 1");
  $avg = $stmt->fetch();
  
  function calcularColor($media) {
    switch ($media) {
      case ($media<=30):
        $color = "red";
        $nmb = 1;
        break;
      case ($media > 30 && $media<=60):
        $color = "orange";
        $nmb = 2;
        break;
      case ($media > 60 && $media<=80):
        $color = "blue";
        $nmb = 3;
        break;
      case ($media>80):
        $color = "green";
        $nmb = 4;
        break;
    }
    return ($values = array("color" => $color, "nmb" => $nmb));
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opiniones Humanas</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: <?php echo calcularColor($avg["media"])["color"] ?>;
    }

    img {
      top: 50%;
      left: 50%;
      position: absolute;
      transform: translate(-60%, -60%);
    }
  </style>
</head>
<body>
    <img src=<?php echo "./img/sonrisometro".calcularColor($avg["media"])["nmb"].".png" ?> alt="">
</body>
</html>