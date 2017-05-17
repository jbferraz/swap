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
                        <h2 class="mdl-card__title-text">Cadastro de Prédio</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form name="Cadastro de Predio" action="../action/predioInsert.php" method="POST" enctype="multipart/form-data">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="descricaoPredio" id="descricaoPredio">
                                <label class="mdl-textfield__label" for="descricaoPredio">Descrição Prédio</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="endereco" id="endereco">
                                <label class="mdl-textfield__label" for="endereco">Endereço</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="numEndereco" id="numEndereco">
                                <label class="mdl-textfield__label" for="numEndereco">Número</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="idcidade" id="idcidade">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/estadoDAO.php");

                                    $estadoDAO = new estadoDAO();
                                    $arr = $estadoDAO->load();

                                    foreach ($arr as $value => $row) {
                                        echo "<option id='" . idcidade . "' value=" . $row->getIdEstado() . ">" . $row->getNomeEstado() . "</option>";
                                    }
                                    ?>
                                </select>
                                <label class="mdl-textfield__label" for="idcidade">Cidade</label><br/>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="idestado" id="idestado">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/estadoDAO.php");

                                    $estadoDAO = new estadoDAO();
                                    $arr = $estadoDAO->load();

                                    foreach ($arr as $value => $row) {
                                        echo "<option id='" . idestado . "' value=" . $row->getIdEstado() . ">" . $row->getNomeEstado() . "</option>";
                                    }
                                    ?>
                                </select>
                                <label class="mdl-textfield__label" for="idestado">Estado</label><br/>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" pattern="-?[0-9]*(\.[0-9]+)?" name="numTelefone" id="numTelefone">
                                <label class="mdl-textfield__label" for="numTelefone">Telefone</label>
                                <span class="mdl-textfield__error">Esta valor não é um número!</span>
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
