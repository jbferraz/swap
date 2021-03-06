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
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Lista de Turno</h2>
        </div>
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
            <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Turno</th>
                </tr>
            </thead>
            <tbody>
                <?php
                ini_set('default_charset', 'UTF-8');
                require_once ("../includes/conexao.inc.php");
                include_once ("../dao/turnoDAO.php");

                $turnoDAO = new turnoDAO();
                $arr = $turnoDAO->load();

                foreach ($arr as $value => $row) {
                    echo "<tr><td>" . strtoupper(utf8_decode($row->getTurno())) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
        </br>
        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="<?php echo BASE_URL; ?>/index.php" id="addTelefone">
            Voltar
        </a>
    </div>
</main>
<?php include "../template/footer.php" ?>
