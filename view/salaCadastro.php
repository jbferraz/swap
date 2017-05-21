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
                        <h2 class="mdl-card__title-text">Cadastro de Sala</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form name="Cadastro de Sala" action="../action/salaInsert.php" method="POST" enctype="multipart/form-data">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="idandarPredio" id="idandarPredio">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/andarDAO.php");

                                    $andarDAO = new andarDAO();
                                    $arr = $andarDAO->load();

                                    foreach ($arr as $value => $row) {
                                        echo "<option id='" . idandarPredio . "' value=" . $row->getIdandarPredio() . ">" . $row->getNumAndarPredio() . "</option>";
                                    }
                                    ?>
                                    <!--<option ID="pais_IdPais" value="1">ARGENTINA</option>--> 
                                </select>
                                <label class="mdl-textfield__label" for="idandarPredio">Andar</label><br/>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="numSalaAndar" id="numSalaAndar">
                                <label class="mdl-textfield__label" for="numSalaAndar">Sala</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="descricaoSala" id="descricaoSala">
                                <label class="mdl-textfield__label" for="descricaoSala">Descrição Sala</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="capacidadeAlunoSala" id="capacidadeAlunoSala">
                                <label class="mdl-textfield__label" for="capacidadeAlunoSala">Capacidade Alunos Sala</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="idtipoSala" id="idtipoSala">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/tipoSalaDAO.php");

                                    $tipoSalaDAO = new tipoSalaDAO();
                                    $arr = $tipoSalaDAO->load();

                                    foreach ($arr as $value => $row) {
                                        echo "<option id='" . idtipoSala . "' value=" . $row->getIdtipoSala() . ">" . $row->getDescricaoTipoSala() . "</option>";
                                    }
                                    ?>
                                    <!--<option ID="pais_IdPais" value="1">ARGENTINA</option>--> 
                                </select>
                                <label class="mdl-textfield__label" for="idtipoSala">Tipo Sala</label><br/>
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
