

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datasCronogramaTurmaInsert
 *
 * @author jairb
 */
require_once("../includes/conexao.inc.php");
include_once("../dao/datasCronogramaTurmaDAO.php");
$datasCronogramaTurmaDAO = new datasCronogramaTurmaDAO();

$idcronogramaTurma = strtoupper(utf8_decode($_POST['idcronogramaTurma']));
$data = strtoupper(utf8_decode($_POST['data']));
$idunidadeCurricular = strtoupper(utf8_decode($_POST['idunidadeCurricular']));
$idprofessor = strtoupper(utf8_decode($_POST['idprofessor']));
$idsalaAndar = strtoupper(utf8_decode($_POST['idsalaAndar']));

try {
    $fieldsC = "*";
    $add = "where idcronogramaTurma=" . $idcronogramaTurma . " and data=" . $data . "and idunidadeCurricular=" .
            $idunidadeCurricular . " and idunidadeCurricular=" . $idunidadeCurricular . " and idprofessor=" .
            $idprofessor . "and idsalaAndar=" . $idsalaAndar;
    $arr = $datasCronogramaTurmaDAO->load($fieldsC, $add);
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

$fields = "idcronogramaTurma,data,idunidadeCurricular,idprofessor,idsalaAndar";
$params = array("$idcronogramaTurma", "$data", "$idunidadeCurricular", "$idprofessor", "$idsalaAndar");
$rs = $datasCronogramaTurmaDAO->insert($fields, $params);
var_dump($rs);
