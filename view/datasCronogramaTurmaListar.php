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
            <h2 class="mdl-card__title-text">Datas Cronograma Turma</h2>
        </div>
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
            <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Data</th>
                    <th class="mdl-data-table__cell--non-numeric">Unidade Curricular</th>
                    <th class="mdl-data-table__cell--non-numeric">CH</th>
                    <th class="mdl-data-table__cell--non-numeric">Prof.</th>
                    <th class="mdl-data-table__cell--non-numeric">Sala</th>
                </tr>
            </thead>
            <tbody>
                <?php
                ini_set('default_charset', 'UTF-8');
                require_once ("../includes/conexao.inc.php");
                include_once ("../dao/cronogramaTurmaDAO.php");
                include_once ("../dao/turnoDAO.php");
                include_once ("../dao/turmaDAO.php");
                include_once ("../dao/periodoAulaDAO.php");
                include_once ("../dao/horariosAulaDAO.php");
                include_once ("../dao/aulaDiaSemanaDAO.php");
                include_once ("../dao/cursoDAO.php");
                include_once ("../dao/moduloCursoDAO.php");
                include_once ("../dao/planoCursoModuloCursoDAO.php");
                include_once ("../dao/unidadeCurricularDAO.php");
                include_once ("../dao/restricaoDataHorarioDAO.php");

                $chMC = 0;
                $horasAula = 0;
                $qtAulaSemana = 0;

                $cronogramaTurmaDAO = new cronogramaTurmaDAO();
                $fieldsCT = "*";
                $addCT = "where finalizado=0 and idcronogramaTurma=1"; //pegar o idcronogramaTurma
                $arrCT = $cronogramaTurmaDAO->load($fieldsCT, $addCT);
                foreach ($arrCT as $keyCT => $rowCT) {
                    $dataInicioModulo = $rowCT->getDataInicioModulo();
                    $idturma = $rowCT->getIdturma();
                    $idmoduloCurso = $rowCT->getIdmoduloCurso();
                    echo date('d/m/Y', strtotime($dataInicioModulo)) . "<br>";
                    echo date('d/m/Y', strtotime('+1 days', strtotime($dataInicioModulo))) . "<br>";

                    echo ($diasemana_numero = date('w', strtotime($dataInicioModulo)) + 1) . "<br>";

                    $moduloCursoDAO = new moduloCursoDAO();
                    $fieldsMC = "*";
                    $addMC = "where idmoduloCurso=" . $idmoduloCurso;
                    $arrMC = $moduloCursoDAO->load($fieldsMC, $addMC);
                    foreach ($arrMC as $keyMC => $rowMC) {
                        $idmoduloCursoMC = $rowMC->getIdmoduloCurso();

                        $planoCursoModuloCursoDAO = new planoCursoModuloCursoDAO();
                        $fieldsPCMC = "*";
                        $addPCMC = "where idmoduloCurso=" . $idmoduloCursoMC;
                        $arrPCMC = $planoCursoModuloCursoDAO->load($fieldsPCMC, $addPCMC);
                        foreach ($arrPCMC as $keyPCMC => $rowPCMC) {
                            $idunidadeCurricular = $rowPCMC->getIdunidadeCurricular();

                            $unidadeCurricularDAO = new unidadeCurricularDAO();
                            $fieldsUC = "*";
                            $addUC = "where idunidadeCurricular=" . $idunidadeCurricular;
                            $arrUC = $unidadeCurricularDAO->load($fieldsUC, $addUC);
                            foreach ($arrUC as $keyUC => $rowUC) {

                                $chMC = $chMC + ($rowUC->getCargaHoraria());
                            }
                        }
                    }

                    $turmaDAO = new turmaDAO();
                    $fieldsT = "*";
                    $addT = "where idturma=" . $idturma;
                    $arrT = $turmaDAO->load($fieldsT, $addT);
                    foreach ($arrT as $keyT => $rowT) {
                        $idperiodoAula = $rowT->getIdperiodoAula();

                        $periodoAulaDAO = new periodoAulaDAO();
                        $fieldsPA = "*";
                        $addPA = "where idperiodoAula=" . $idperiodoAula;
                        $arrPA = $periodoAulaDAO->load($fieldsPA, $addPA);
                        foreach ($arrPA as $keyPA => $rowPA) {
                            $idhorariosAula = $rowPA->getIdhorariosAula();

                            $horariosAulaDAO = new horariosAulaDAO();
                            $fieldsHA = "*";
                            $addHA = "where idhorariosAula=" . $idhorariosAula;
                            $arrHA = $horariosAulaDAO->load($fieldsHA, $addHA);
                            foreach ($arrHA as $keyHA => $rowHA) {
                                $horasAula = $rowHA->getHorasAula();
                            }

                            $aulaDiaSemanaDAO = new aulaDiaSemanaDAO();
                            $fieldsADS = "*";
                            $addADS = "where idperiodoAula=" . $idperiodoAula;
                            $arrADS = $aulaDiaSemanaDAO->load($fieldsADS, $addADS);
                            foreach ($arrADS as $keyADS => $rowADS) {
                                $qtAulaSemana = $qtAulaSemana + 1;
                            }
                        }
                    }
                }
                $qtAulaModulo = (int) ($chMC / $horasAula);
                $i = 0;
                $data = $dataInicioModulo;
                while ($i <= $qtAulaModulo) {
                    if ($i==0){
                        $i = $i + 1;
                    }else{
                        $data = date('d/m/Y', strtotime('+'.$i.' days', strtotime($dataInicioModulo)));
                        $i = $i + 1;
                    }

                    echo "<tr><td>" . strtoupper(utf8_decode(date('d/m/Y', strtotime($data)))) . "</td>"
                    . "<td>" . strtoupper(utf8_decode("")) . "</td>"
                    . "<td>" . strtoupper(utf8_decode("")) . "</td>"
                    . "<td>" . strtoupper(utf8_decode("")) . "</td>"
                    . "<td>" . strtoupper(utf8_decode("")) . "</td></tr>";
                    
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
