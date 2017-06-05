

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of unidadeCurricularInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/unidadeCurricularDAO.php");
$unidadeCurricularDAO = new unidadeCurricularDAO();

$idunidadeCurricular = strtoupper(utf8_decode($_POST['idunidadeCurricular']));
$unidadeCurricular = strtoupper(utf8_decode($_POST['unidadeCurricular']));
$cargaHoraria = strtoupper(utf8_decode($_POST['cargaHoraria']));
$idUnidadeCurricularPreReq = strtoupper(utf8_decode($_POST['idUnidadeCurricularPreReq']));

$fields = "idunidadeCurricular,unidadeCurricular,cargaHoraria,idUnidadeCurricularPreReq";
$params = array("$idunidadeCurricular","$unidadeCurricular","$cargaHoraria","$idUnidadeCurricularPreReq");
$rs = $unidadeCurricularDAO->insert($fields,$params);
var_dump($rs);
