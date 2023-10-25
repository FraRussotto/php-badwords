<?php

var_dump($_GET);

$testo = $_GET['text'];
$secret_word = $_GET['secret_word'];

$testocensured = str_replace($secret_word, '***', $testo);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css" integrity="sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==" crossorigin="anonymous"/>

  <title>php-badwords</title>
</head>
<body>
  <div class="container my-3 text-center">
    <h1>Risultati</h1>
    <p>Testo: <?php echo $testo ?> <?php echo strlen( $testo ) ?>
    <p>Testo censurato: <?php echo $testocensured ?> <?php echo strlen( $testocensured ) ?> </p>
  </div>
</body>
</html>