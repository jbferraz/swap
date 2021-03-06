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
            <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--6-col">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Professor Restrição Data/Turno</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <form name="Professor Restrição Data/Turno" action="../action/professorRestricaoDataHorarioInsert.php" method="POST" enctype="multipart/form-data">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="idprofessor" id="idprofessor">
                                <option value=""></option>
                                <?php
                                require_once ("../includes/conexao.inc.php");
                                include_once ("../dao/professorDAO.php");

                                $professorDAO = new professorDAO();
                                $fields = "*";
                                $add = "where status='1' order by nomeProfessor";
                                $arr = $professorDAO->load($fields, $add);

                                foreach ($arr as $value => $row) {
                                    echo "<option id='" . idprofessor . "' value='" . $row->getIdprofessor() . "'>" . $row->getNomeProfessor() . "</option>";
                                }
                                ?>
                                <!--<option ID="pais_IdPais" value="1">ARGENTINA</option>--> 
                            </select>
                            <label class="mdl-textfield__label" for="idprofessor">Professor</label><br/>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="date" required="required" name="dataRestricao" id="dataRestricao">
                            <label class="mdl-textfield__label" for="dataRestricao">Data Restrição</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select class="mdl-textfield__input" aria-label="ngSelected demo" required="required" name="idturno" id="idturno">
                                <option value=""></option>
                                <?php
                                require_once ("../includes/conexao.inc.php");
                                include_once ("../dao/turnoDAO.php");

                                $turnoDAO = new turnoDAO();
                                $arr = $turnoDAO->load();

                                foreach ($arr as $value => $row) {
                                    echo "<option id='" . idturno . "' value=" . $row->getIdTurno() . ">" . $row->getTurno() . "</option>";
                                }
                                ?>
                            </select>
                            <label class="mdl-textfield__label" for="idturno">Turno</label><br/>
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
