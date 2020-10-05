<!-- dichiaro variabili php e controlli -->
<?php
// controllo Nome

  $name = $_GET["nome"];
  if (!strlen($name) > 3) {
    $name = "Il nome inserito non è valido";
  }
  // controllo email

  $email = $_GET["email"];
  if (!strpos($email, "@") || !strpos($email, ".")) {
    $email = "L'email inserita non è valida";
  }
// controllo età

  $age = $_GET["età"];
  if (!is_numeric($age)) {
    $age = "L'età inserita non è valida";
  }
?>

<!-- corpo html -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>snack 2</title>
  </head>
  <body>
    <h1>Accesso: </h1>
  </body>
</html>
