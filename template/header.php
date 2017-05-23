<?php
session_start();
//define('BASE_URL', 'http://swap-edu-br.umbler.net');
define('BASE_URL', 'http://localhost/swap');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SWAP - Sistema Web de Apoio Pedagógico</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/js/estilo.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/js/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/js/material.indigo-orange.min.css" />
        <!--<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-orange.min.css" /> -->
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/imagens/favicon.png">

        <link href="<?php echo BASE_URL; ?>/js/material.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>/js/material.css" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/js/font.css">
    </head>
    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
                <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;SWAP - Sistema Web de Apoio Pedagógico</h5>
                </div>     
<!--                <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                    <a href="<?php echo BASE_URL; ?>/index.php" class="mdl-layout__tab is-active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Página Inicial</a>
                    <a href="#features" class="mdl-layout__tab">Cronogramas</a>
                    <a href="#features" class="mdl-layout__tab">Parâmetros</a>
                    <a href="#features" class="mdl-layout__tab">Cadastros</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/turnoCadastro.php">Turno</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/paisCadastro.php">Pais</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/estadoCadastro.php">Estado</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/cidadeCadastro.php">Cidade</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/predioCadastro.php">Prédio</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/andarCadastro.php">Andar</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/tipoSalaCadastro.php">Tipo Sala</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/salaCadastro.php">Sala</a>
                    <a class="mdl-layout__tab" href="<?php echo BASE_URL; ?>/view/professorCadastro.php">Professor</a>
                </div>-->
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">SWAP</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/index.php">Página Inicial</a>
                    <a class="mdl-navigation__link" href="">Cronogramas</a>
                    <a class="mdl-navigation__link" href="">Parâmetros</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/restricaoDataHorarioCadastro.php">Restrição Data/Turno</a>
                    <a class="mdl-navigation__link" href="">Cadastros</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/turnoCadastro.php">Turno</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/turnoListar.php">Lista Turno</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/paisCadastro.php">Pais</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/estadoCadastro.php">Estado</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/cidadeCadastro.php">Cidade</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/predioCadastro.php">Prédio</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/andarCadastro.php">Andar</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/tipoSalaCadastro.php">Tipo Sala</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/salaCadastro.php">Sala</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/professorCadastro.php">Professor</a>
                    <a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/view/cursoCadastro.php">Curso</a>
                </nav>
            </div>
            <main class="demo-main mdl-layout__content ">
            </main>
        </div>

