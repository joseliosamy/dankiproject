<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>styles/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras-chave,do,site">
    <title>Projeto one</title>
</head>
<body>  
    <header>
        <div class="w75 center">
        <div class="logo"><a href="<?php echo INCLUDE_PATH; ?>home">Logo</a></div>
        <nav class="desktop">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>#">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile">
            <div class="hamburguer">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>#">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        </div>
        
    </header>


    <?php

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            include('pages/404.php');
        }
    
    ?>

    <footer>
        <div class="center">
            <p>Josélio Samy - Todos os direitos reservados</p>
        </div>
    </footer>
    
    <script src="https://use.fontawesome.com/6811180638.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/home.js"></script>
</body>
</html>