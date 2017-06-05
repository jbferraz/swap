

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

$iddatasCronogramaTurma = strtoupper(utf8_decode($_POST['iddatasCronogramaTurma']));
$idcronogramaTurma = strtoupper(utf8_decode($_POST['idcronogramaTurma']));
$data = strtoupper(utf8_decode($_POST['data']));
$idunidadeCurricular = strtoupper(utf8_decode($_POST['idunidadeCurricular']));
$idprofessor = strtoupper(utf8_decode($_POST['idprofessor']));
$idsalaAndar = strtoupper(utf8_decode($_POST['idsalaAndar']));

$fields = "iddatasCronogramaTurma,idcronogramaTurma,data,idunidadeCurricular,idprofessor,idsalaAndar";
$params = array("$iddatasCronogramaTurma","$idcronogramaTurma","$data","$idunidadeCurricular","$idprofessor","$idsalaAndar");
$rs = $datasCronogramaTurmaDAO->insert($fields,$params);
var_dump($rs);
