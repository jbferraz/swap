

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cronogramaTurmaInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/cronogramaTurmaDAO.php");
$cronogramaTurmaDAO = new cronogramaTurmaDAO();

$idcronogramaTurma = strtoupper(utf8_decode($_POST['idcronogramaTurma']));
$idturma = strtoupper(utf8_decode($_POST['idturma']));
$idmoduloCurso = strtoupper(utf8_decode($_POST['idmoduloCurso']));
$dataInicioModulo = strtoupper(utf8_decode($_POST['dataInicioModulo']));
$finalizado = strtoupper(utf8_decode($_POST['finalizado']));

$fields = "idcronogramaTurma,idturma,idmoduloCurso,dataInicioModulo,finalizado";
$params = array("$idcronogramaTurma","$idturma","$idmoduloCurso","$dataInicioModulo","$finalizado");
$rs = $cronogramaTurmaDAO->insert($fields,$params);
var_dump($rs);
