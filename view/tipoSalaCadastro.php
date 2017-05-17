<?php

include "../template/header.php";
?>

<style>
    .demo-card-wide.mdl-card {
        width: 400px;
    }
    .demo-card-wide > .mdl-card__title {
        height: 100px;
    }
</style>

<main class="mdl-layout__content">
    <div class="page-content ">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp ">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Cadastro de Tipo de Sala</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form name="Cadastro de Tipo de Sala" action="../action/tipoSalaInsert.php" method="POST" enctype="multipart/form-data">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="descricaoTipoSala" id="descricaoTipoSala">
                                <label class="mdl-textfield__label" for="descricaoTipoSala">Descricao Tipo Sala</label>
                            </div>
                            </br>
                            <input type="submit" name="acao" value="Salvar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "../template/footer.php" ?>
