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
                        <h2 class="mdl-card__title-text">Cadastro de Curso</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form name="Cadastro de Curso" action="../action/cursoInsert.php" method="POST" enctype="multipart/form-data">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="nomeCurso" id="nomeCurso">
                                <label class="mdl-textfield__label" for="nomeCurso">Curso</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="ideixoTecnologico" id="ideixoTecnologico">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/eixoTecnologicoDAO.php");

                                    $eixoTecnologicoDAO = new eixoTecnologicoDAO();
                                    $arr = $eixoTecnologicoDAO->load();

                                    foreach ($arr as $value => $row) {
                                        echo "<option id='" . ideixoTecnologico . "' value=" . $row->getIdeixoTecnologico() . ">" . $row->getEixoTecnologico() . "</option>";
                                    }
                                    ?>
                                </select>
                                <label class="mdl-textfield__label" for="ideixoTecnologico">Eixo Tecnológico</label><br/>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="idtipoCurso" id="idtipoCurso">
                                    <option value=""></option>
                                    <?php
                                    require_once ("../includes/conexao.inc.php");
                                    include_once ("../dao/tipoCursoDAO.php");

                                    $tipoCursoDAO = new tipoCursoDAO();
                                    $arr2 = $tipoCursoDAO->load();

                                    foreach ($arr2 as $value => $row) {
                                        echo "<option id='" . idtipoCurso . "' value=" . $row->getIdtipoCurso() . ">" . $row->getDescricaoTipoCurso() . "</option>";
                                    }
                                    ?>
                                </select>
                                <label class="mdl-textfield__label" for="idtipoCurso">Tipo Curso</label><br/>
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
    </div>
</main>
<?php include "../template/footer.php" ?>
