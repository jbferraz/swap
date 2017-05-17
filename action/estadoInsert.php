<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estadoInsert
 *
 * @author jairb
 */

require_once("../includes/conexao.inc.php");
include_once("../dao/estadoDAO.php");
$estadoDAO = new estadoDAO();

$nomeEstado = strtoupper(utf8_decode($_POST['nomeEstado']));
$nomeEstadoCurto = strtoupper(utf8_decode($_POST['nomeEstadoCurto']));
$pais_IdPais = strtoupper(utf8_decode($_POST['pais_IdPais']));

$fields = "nomeEstado,nomeEstadoCurto,pais_IdPais";
$params = array("$nomeEstado","$nomeEstadoCurto","$pais_IdPais");
$rs = $estadoDAO->insert($fields,$params);
var_dump($rs);
