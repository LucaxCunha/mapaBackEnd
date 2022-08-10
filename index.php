<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marmitaria Dona Rita</title>
    <link rel="stylesheet" href="css\style.css"/>
   
  </head>
  <body>
    <?php include 'pages/header.php';?>
    <?php 
        $pagina = $_GET['p'];
        if($pagina == '') {include 'pages/home.php';}
        if($pagina == 'home.php') {include 'pages/home.php';}
        if($pagina == 'quemsomos.php') {include 'pages/quemsomos.php';}
        if($pagina == 'contato.php') {include 'pages/contato.php';}
        if($pagina == 'produto.php') {include 'pages/produto.php';}
    ?>  
    <?php include 'pages/footer.php';?>
  </body> 
</html>
