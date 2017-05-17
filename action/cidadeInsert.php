

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cidadeInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/cidadeDAO.php");
$cidadeDAO = new cidadeDAO();

$nomeCidade = strtoupper(utf8_decode($_POST['nomeCidade']));
$nomeCidadeCurto = strtoupper(utf8_decode($_POST['nomeCidadeCurto']));
$estado_idestado = strtoupper(utf8_decode($_POST['estado_idestado']));

$fields = "nomeCidade,nomeCidadeCurto,estado_idestado";
$params = array("$nomeCidade","$nomeCidadeCurto","$estado_idestado");
$rs = $cidadeDAO->insert($fields,$params);
var_dump($rs);
