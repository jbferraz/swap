

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of andarInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/andarDAO.php");
$andarDAO = new andarDAO();

$numAndarPredio = strtoupper(utf8_decode($_POST['numAndarPredio']));
$predio_idpredio = strtoupper(utf8_decode($_POST['predio_idpredio']));

$fields = "numAndarPredio,predio_idpredio";
$params = array("$numAndarPredio","$predio_idpredio");
$rs = $andarDAO->insert($fields,$params);
var_dump($rs);
