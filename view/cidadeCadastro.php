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
                        <h2 class="mdl-card__title-text">Cadastro de Cidade</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form name="Cadastro de Cidade" action="../action/cidadeInsert.php" method="POST" enctype="multipart/form-data">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="nomeCidade" id="nomeCidade">
                                <label class="mdl-textfield__label" for="nomeCidade">Nome Cidade</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="nomeCidadeCurto" id="nomeCidadeCurto">
                                <label class="mdl-textfield__label" for="nomeCidadeCurto">Nome Cidade Curto</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="estado_idestado" id="estado_idestado">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/estadoDAO.php");

                                    $estadoDAO = new estadoDAO();
                                    $arr = $estadoDAO->load();

                                    foreach ($arr as $value => $row) {
                                        echo "<option id='" . estado_idestado . "' value=" . $row->getIdEstado() . ">" . $row->getNomeEstado() . "</option>";
                                    }
                                    ?>
                                    <!--<option ID="pais_IdPais" value="1">ARGENTINA</option>--> 
                                </select>
                                <label class="mdl-textfield__label" for="estado_idestado">Estado</label><br/>
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
