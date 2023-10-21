<?php
    include_once 'functions/server.php';
?>
<?php
    include_once '../functions/server.php'
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=baseURL()?>/css/header.css">
    <link rel="stylesheet" href="<?=baseURL()?>/css/sobremim.css">
    <link rel="stylesheet" href="<?=baseURL()?>/css/cursos.css">
</head>
<body>
    <header>
        <nav>
            <a href="<?=baseURL()?>">Página Inicial</a>
            <a href="<?=baseURL()?>/pages/cursos.php">Cursos</a>
            <a href="<?=baseURL()?>/pages/sobremim.php">Sobre Mim</a>
            <a href="#">Contatos</a>
        </nav>
    </header>
</body>
</html>
