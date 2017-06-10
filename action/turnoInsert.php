

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turnoInsert
 *
 * @author jairb
 */
require_once("../includes/conexao.inc.php");
include_once("../dao/turnoDAO.php");
$turnoDAO = new turnoDAO();

$turno = strtoupper(utf8_decode($_POST['turno']));

$fields = "turno";
$params = array("$turno");
$rs = $turnoDAO->insert($fields,$params);
var_dump($rs);
