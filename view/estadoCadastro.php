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
                        <h2 class="mdl-card__title-text">Cadastro de Pais</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form name="Cadastro de Estado" action="../action/estadoInsert.php" method="POST" enctype="multipart/form-data">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="nomeEstado" id="nomeEstado">
                                <label class="mdl-textfield__label" for="nomeEstado">Nome Estado</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="nomeEstadoCurto" id="nomeEstadoCurto">
                                <label class="mdl-textfield__label" for="nomeEstadoCurto">Nome Estado Curto</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="pais_IdPais" id="pais_IdPais">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/paisDAO.php");

                                    $paisDAO = new paisDAO();
                                    $arr = $paisDAO->load();

                                    foreach ($arr as $value => $row) {
                                        echo "<option id='" . pais_IdPais . "' value=" . $row->getIdPais() . ">" . $row->getNomePais() . "</option>";
                                    }
                                    ?>
                                    <!--<option ID="pais_IdPais" value="1">ARGENTINA</option>--> 
                                </select>
                                <label class="mdl-textfield__label" for="pais_IdPais">Pais</label><br/>
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
