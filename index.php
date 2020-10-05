<!-- creazione array in php -->
<?php
  $matches = [
    [
    "casa" => "Miami Heat",
    "trasferta" => "Boston Celtics",
    "punteggio_casa" => "66",
    "punteggio_trasferta" => "60",
    ],
    [
    "casa" => "LA Lakers",
    "trasferta" => "Orlando Magic",
    "punteggio_casa" => "70",
    "punteggio_trasferta" => "63",
    ],
    [
    "casa" => "Chicago Bulls"
    "trasferta" => "San Antonio Spurs",
    "punteggio_casa" => "80",
    "punteggio_trasferta" => "70",
    ],
    [
    "casa" => "Golden State Warriors",
    "trasferta" => "Phoenix Suns",
    "punteggio_casa" => "99",
    "punteggio_trasferta" => "86",
    ]
  ];
?>

<!-- corpo html -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>snack1</title>
  </head>
  <body>
    <h1>Risultati di giornata : </h1>
    <!-- ciclo php e print -->
    <h3><?php
    for ($i=0; $i < count($matches); $i++) {
     echo .$matches[$i]['casa']." - ".$matches[$i]['trasferta']." | ".$matches[$i]['punteggio_casa']."-".$matches[$i]['punteggio_trasferta'];
     }
    ?></h3>
  </body>
</html>
