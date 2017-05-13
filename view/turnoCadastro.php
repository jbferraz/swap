<?php
include "../template/header.php";
?>

<main class="mdl-layout__content">
    <div class="page-content">
    <form name="Cadastro de Turno" action="../action/turnoInsert.php" method="POST" enctype="multipart/form-data">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="turno" id="nome">
            <label class="mdl-textfield__label" for="turno">Turno</label>
        </div>
        </br>
        <input type="submit" name="acao" value="Salvar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
    </form>
    </div>
</main>

<?php include "../template/footer.php" ?>
