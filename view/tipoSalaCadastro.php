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

<main class="mdl-layout__content" >
    <div class="page-content ">
        <div class="demo-container mdl-grid">
            <div class="mdl-cell mdl-cell--5-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--5-col">
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
                        <input type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
                        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="<?php echo BASE_URL; ?>/index.php" id="addTelefone">
                            Cancelar
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "../template/footer.php" ?>
