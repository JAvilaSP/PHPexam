<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel Admin</title>
  <style>
    p {
      color: grey
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<body>
  <h1>Aqui puedes manipular las elecciones!</h1>
  <p>Cualquier parecido con la realidad es mera coincidencia</p>
  <table>
    <tr>
      <th>correo</th>
      <th>valor</th>
      <th>visible</th>
    </tr>
    <?php
      require_once "config.php";
      $stmt = $db->query("SELECT * FROM voto");
      $votos = $stmt->fetchAll();
      foreach ($votos as $voto) {
        echo "<tr>";
        echo "<th>".$voto["email"]."</th>";
        echo "<th>".$voto["value"]."</th>";
        echo "<th>".$voto["_visible"]." <a href='cambiarvoto.php?email=".$voto['email']."'>Cambiar</a> </th>";
        echo "</tr>";
      }
      
    ?>
  </table>
</body>
</html>
