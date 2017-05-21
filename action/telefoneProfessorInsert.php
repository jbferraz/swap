

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professorInsert
 *
 * @author jairb
 */
require_once("../includes/conexao.inc.php");
include_once("../dao/telefoneProfessorDAO.php");
$telefoneProfessorDAO = new telefoneProfessorDAO();

$numTelefone = strtoupper(utf8_decode($_POST['numTelefone']));
$idprofessor = strtoupper(utf8_decode($_POST['idprofessor']));
$numPrincipal = strtoupper(utf8_decode($_POST['numPrincipal']));

$fields = "numTelefone,idprofessor,numPrincipal";
$params = array("$numTelefone", "$idprofessor", "$numPrincipal");
$rs = $telefoneProfessorDAO->insert($fields, $params);
var_dump($rs);
