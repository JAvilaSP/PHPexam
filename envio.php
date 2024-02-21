<?php
require_once "config.php";

if (isset($_GET["email"]) && $_GET["email"] != "") {
  if (isset($_GET["opinion"])) {
    $stmt = $db->prepare("SELECT * FROM valores WHERE input = :opinion");
    $stmt->bindParam(":opinion",$_GET["opinion"]);
    $stmt->execute();
    $opinion = $stmt->fetch();

    // echo "<pre>"; print_r ($opinion); echo "</pre>";

    $stmt = $db->prepare("INSERT INTO `voto` (`email`, `value`, `_visible`) VALUES (:email, ".$opinion["value"].", 1);");
    $stmt->bindParam(":email", $_GET["email"]);
    // if ($stmt->execute()) {
    //   echo "Voto enviado satisfactoriamente";
    // } else {
    //   echo "Por favor, intentelo de nuevo mas tarde";
    // }
    try {
      $stmt->execute();
      echo "Su opinion es extremadamente extrema para nosotros";
    } catch (PDOException $pDOException) {
      echo "No veas payo la que me has liado";
    }
  }
} else {
  echo "No me toques las palmas que me conozco...";
}