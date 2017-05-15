

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paisInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/paisDAO.php");
$paisDAO = new paisDAO();

$nomePais = strtoupper(utf8_decode($_POST['nomePais']));
$nomePaisCurto = strtoupper(utf8_decode($_POST['nomePaisCurto']));

$fields = "nomePais,nomePaisCurto";
$params = array("$nomePais","$nomePaisCurto");
$rs = $paisDAO->insert($fields,$params);
var_dump($rs);
