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
            <div class="mdl-cell mdl-cell--6-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <div class="demo-content mdl-color--white mdl-shadow--6dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Professor/Curso Ministra</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <form name="Professor" action="?profSelecionado" method="POST" enctype="multipart/form-data">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select onchange='this.form.submit()' class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="idprofessor" id="idprofessor">
                                <option value="0">Selecione...</option>
                                <?php
                                require_once ("../includes/conexao.inc.php");
                                include_once ("../dao/professorDAO.php");

                                $professorDAO = new professorDAO();
                                $fields = "*";
                                $add = "where status='1' order by nomeProfessor";
                                $arr = $professorDAO->load($fields, $add);

                                $profSelecionado = "";
                                $idProf = 0;
                                if (isset($_POST["idprofessor"]))
                                    $idProf = $_POST["idprofessor"];

                                foreach ($arr as $value => $row) {
                                    if ($idProf == $row->getIdprofessor())
                                        $profSelecionado = "selected";
                                    else
                                        $profSelecionado = "";
                                    echo "<option " . $profSelecionado . " id='" . idprofessor . "' value='" . $row->getIdprofessor() . "'>" . $row->getNomeProfessor() . "</option>";
                                }
                                ?>
                                <!--<option ID="pais_IdPais" value="1">ARGENTINA</option>--> 
                            </select>
                            <label class="mdl-textfield__label" for="idprofessor">Professor</label><br/>
                        </div>
                    </form> 
                    <?php
                    if (isset($_REQUEST["profSelecionado"])) {
                        ?>
                        <form name="Professor/Curso Ministra" action="../action/professorCursoMinistraInsert.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="idprofessor" value="<?php echo $_POST["idprofessor"]; ?>" />

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <?php
                                require_once ("../includes/conexao.inc.php");
                                include_once ("../dao/cursoDAO.php");
                                include_once ("../dao/professorCursoMinistraDAO.php");

                                $cursoDAO = new cursoDAO();
                                $fields = "*";
                                $add = "order by nomeCurso";
                                $arr = $cursoDAO->load($fields, $add);

                                $professorCursoMinistraDAO = new professorCursoMinistraDAO();
                                $fieldsPC = "*";
                                $addPC = "where idprofessor=" . $_POST["idprofessor"];
                                $arrPC = $professorCursoMinistraDAO->load($fieldsPC, $addPC);

                                foreach ($arr as $value => $row) {
                                    $checado = "";
                                    foreach ($arrPC as $PC) {
                                        if ($PC->getIdcurso() == $row->getIdcurso())
                                            $checado = "checked";
                                    }

                                    echo "<br><input " . $checado . " class='mdl-checkbox__input' type='checkbox' name='" . $row->getIdcurso() . "' id='" . $row->getIdcurso() . "'>" . $row->getNomeCurso();
                                }
                                ?>
                            </div>
                            </br>
                            <input type="submit" name="acao" value="Salvar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
                            <input type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="<?php echo BASE_URL; ?>/index.php" id="cancelar">
                                Cancelar
                            </a>
                        </form>
    <?php
}
?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "../template/footer.php" ?>
