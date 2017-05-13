<?php
session_start();
define('BASE_URL', 'http://swap-edu-br.umbler.net');
//define('BASE_URL', 'http://localhost/swap');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SWAP - Sistema Web de Apoio Pedagógico</title>
        <!--<link rel="stylesheet" href="../js/material.css">-->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/js/estilo.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/js/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-orange.min.css">
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/imagens/favicon.png">

        <link href="<?php echo BASE_URL; ?>/js/material.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>/js/material.css" rel="stylesheet">
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">SWAP - Sistema Web de Apoio Pedagógico</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation -->
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/index.php">Pagina Inicial</a>
                        <a class="mdl-navigation__link" href="">Dashboard</a>
                        <a class="mdl-navigation__link" href="">Cronogramas</a>
                        <a class="mdl-navigation__link" href="">Parâmetros</a>
                        <a class="mdl-navigation__link" href="">Cadastros</a>
                        <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/turnoCadastro.php">Turno</a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">SWAP</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Dashboard</a>
                    <a class="mdl-navigation__link" href="">Cronogramas</a>
                    <a class="mdl-navigation__link" href="">Parâmetros</a>
                    <a class="mdl-navigation__link" href="">Cadastros</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/turnoCadastro.php">Turno</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
            </main>
        </div>

        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>