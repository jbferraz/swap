

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of restricaoDataHorarioInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/restricaoDataHorarioDAO.php");
$restricaoDataHorarioDAO = new restricaoDataHorarioDAO();

$dataRestricao = strtoupper(utf8_decode($_POST['dataRestricao']));
$justificativaRestricao = strtoupper(utf8_decode($_POST['justificativaRestricao']));
$idturno = strtoupper(utf8_decode($_POST['idturno']));

$fields = "dataRestricao,justificativaRestricao,idturno";
$params = array("$dataRestricao","$justificativaRestricao","$idturno");
$rs = $restricaoDataHorarioDAO->insert($fields,$params);
//var_dump($rs);
header("location: ../view/restricaoDataHorarioCadastro.php");
