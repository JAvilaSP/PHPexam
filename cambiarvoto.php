<?php
require_once "config.php";
if (isset($_GET["email"]) && $_GET["email"] != "") {
  $stmt = $db->prepare("SELECT email, _visible as visible FROM voto WHERE email = :email");
  $stmt->bindParam(":email",$_GET["email"]);
  $stmt->execute();
  $result = $stmt->fetch();

  if ($result["visible"] == 1) {
    $stmt = $db->prepare("UPDATE voto SET _visible = 0 WHERE voto.email = :email");
    $stmt->bindParam(":email", $result["email"]);
    $stmt->execute();
    
  } else {
    $stmt = $db->prepare("UPDATE voto SET _visible = 1 WHERE voto.email = :email");
    $stmt->bindParam(":email", $result["email"]);
    $stmt->execute();
    
  }
}
header("Location: admin.php");