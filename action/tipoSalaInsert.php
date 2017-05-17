

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tipoSalaInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/tipoSalaDAO.php");
$tipoSalaDAO = new tipoSalaDAO();

$descricaoTipoSala = strtoupper(utf8_decode($_POST['descricaoTipoSala']));

$fields = "descricaoTipoSala";
$params = array("$descricaoTipoSala");
$rs = $tipoSalaDAO->insert($fields,$params);
var_dump($rs);
