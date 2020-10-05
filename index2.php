
<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

if((strlen($name) >= 3) && is_numeric($age) && (strpos($email, "@") !== false) && (strpos($email, ".") !== false)) {
  echo "Accesso riuscito";
  } else {
  echo "Accesso negato";
  }
?>
