

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfilAcessoInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/perfilAcessoDAO.php");
$perfilAcessoDAO = new perfilAcessoDAO();

$nomePerfil = strtoupper(utf8_decode($_POST['nomePerfil']));

$fields = "nomePerfil";
$params = array("$nomePerfil");
$rs = $perfilAcessoDAO->insert($fields,$params);
var_dump($rs);
