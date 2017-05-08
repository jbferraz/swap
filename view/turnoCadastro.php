<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../js/material.min.css">
<script src="../js/material.min.js"></script>

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" sizes="192x192" href="../images/android-desktop.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Material Design Lite">
<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

<!-- Tile icon for Win8 (144x144 + tile color) -->
<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#3372DF">

<link rel="shortcut icon" href="../imagens/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-orange.min.css">
<link rel="stylesheet" href="../js/styles.css">

<style>
    #view-source {
        position: fixed;
        display: block;
        right: 0;
        bottom: 0;
        margin-right: 40px;
        margin-bottom: 40px;
        z-index: 900;
    }

    .demo-card-wide.mdl-card {
        width: 512px;
    }
    .demo-card-wide > .mdl-card__title {
        color: #fff;
        height: 176px;
        background: url('https://getmdl.io/assets/demos/welcome_card.jpg') center / cover;
    }
    .demo-card-wide > .mdl-card__menu {
        color: #fff;
    }


</style>


<!--<div class="container">
    <div class="col-sm-4">
        <form name="Cadastro de Turno" action="../action/turnoInsert.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="turno" id="nome" placeholder="Turno" /><br/>
            </br>
            <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>
        </form>
    </div>
</div>-->
<!-- Textfield with Floating Label -->

<form name="Cadastro de Turno" action="../action/turnoInsert.php" method="POST" enctype="multipart/form-data">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="turno" id="nome">
        <label class="mdl-textfield__label" for="turno">Turno</label>
    </div>
    </br>
    <input type="submit" name="acao" value="Salvar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
</form>


