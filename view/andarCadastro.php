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
                        <h2 class="mdl-card__title-text">Cadastro de Andar</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form name="Cadastro de Andar" action="../action/andarInsert.php" method="POST" enctype="multipart/form-data">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" required="required" name="numAndarPredio" id="numAndarPredio">
                                <label class="mdl-textfield__label" for="numAndarPredio">Andar</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="predio_idpredio" id="predio_idpredio">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/predioDAO.php");

                                    $predioDAO = new predioDAO();
                                    $arr = $predioDAO->load();

                                    foreach ($arr as $value => $row) {
                                        echo "<option id='" . predio_idpredio . "' value=" . $row->getIdpredio() . ">" . $row->getDescricaoPredio() . "</option>";
                                    }
                                    ?>
                                </select>
                                <label class="mdl-textfield__label" for="predio_idpredio">Descrição Prédio</label><br/>
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
