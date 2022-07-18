<?php 
session_start();
include'./../app/configuracao.php';
include'./../app/libraries/Rota.php';
include'./../app/libraries/Controller.php';

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <link rel="stylesheet" href="<?=URL?>/public/dist/tailwind.css">
    <link rel="stylesheet" href="<?=URL?>/public/fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="<?=URL?>/public/css/mystyle.css">
</head>
<body>
 <?php 

 $rotas =new Rota();

 ?>   
 
 <script src="<?=URL?>/public/js/jQuery.js"></script>
 <script src="<?=URL?>/public/js/script.js"></script>
</body>
</html>