

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eixoTecnologicoInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/eixoTecnologicoDAO.php");
$eixoTecnologicoDAO = new eixoTecnologicoDAO();

$eixoTecnologico = strtoupper(utf8_decode($_POST['eixoTecnologico']));

$fields = "eixoTecnologico";
$params = array("$eixoTecnologico");
$rs = $eixoTecnologicoDAO->insert($fields,$params);
var_dump($rs);
