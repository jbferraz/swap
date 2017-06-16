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
            <h2 class="mdl-card__title-text">Restrição de Datas/Turno</h2>
        </div>
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
            <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Data</th>
                    <th class="mdl-data-table__cell--non-numeric">Justificativa</th>
                    <th class="mdl-data-table__cell--non-numeric">Turno</th>
                </tr>
            </thead>
            <tbody>
                <?php
                ini_set('default_charset', 'UTF-8');
                require_once ("../includes/conexao.inc.php");
                include_once ("../dao/restricaoDataHorarioDAO.php");
                include_once ("../dao/turnoDAO.php");

                $restricaoDataHorarioDAO = new restricaoDataHorarioDAO();
                $fields = "*";
                $add = "order by dataRestricao";
                $arr = $restricaoDataHorarioDAO->load($fields, $add);

                foreach ($arr as $value => $row) {
                    $turnoDAO = new turnoDAO();
                    $fieldsT = "*";
                    $addT = "where idturno=" . $row->getIdturno();
                    $arr2 = $turnoDAO->load($fieldsT, $addT);
                    foreach ($arr2 as $value2 => $row2) {
                        
                    }
                    echo "<tr><td>" . date('d/m/Y', strtotime($row->getDataRestricao())) . "</td>"
                    . "<td>" . strtoupper(utf8_decode($row->getJustificativaRestricao())) . "</td>"
                    . "<td>" . strtoupper(utf8_decode($row2->getTurno())) . "</td></tr>";
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
