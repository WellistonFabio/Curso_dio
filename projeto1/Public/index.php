<?php
session_start();
//Configuração do Sistema
include './../App/confphp.php';
//inicialização de class automática
include './../App/autoload.php';
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Desafio de Projeto Git/GitHob">
    <meta name="author" content="Welliston Jesuino">
    <!-- Box Icons Font CDN LINk-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="#">
    <title><?= APP_NOME ?></title>
    <!--Link Css Welliston-->
    <link rel="stylesheet" href="<?= URL?>/Public/assets/css/estilos.css">
</head>
<body>

<body>
<!--Cabeçalho-->
<header><?php include_once '../App/Views/hearder.php'?></header>
<!--Principal-->
<section><?php $rotas= new Rota();?></section>
<!--Rodapé-->
<footer><?php include_once '../App/Views/footer.php'?></footer>
<!--javascript-->
<script src="<?= URL?>/Public/assets/js/script.js"></script>
</body>
</html>
