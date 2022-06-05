<?php include_once("Config/url.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">

    <!-- CSS Personalizado-->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css"/>

    <title>Agenda</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <a class="navbar-brand" href="<?=$BASE_URL?>index.php">   
        <img src="<?=$BASE_URL?>img/logo.svg">
        </a>

        <div>
            <div class="navbar-nav">
            <a class="navbar-link active" id="home-link" href="<?=$BASE_URL?>index.php"> Agenda </a>    
            <a class="navbar-link active" id="home-link" href="<?=$BASE_URL?>create.php"> Adicionar Contatos</a>
            </div>
        </div>
    </nav>
</header>