<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of predioInsert
 *
 * @author jairb
 */

require_once("../includes/conexao.inc.php");
include_once("../dao/predioDAO.php");
$predioDAO = new predioDAO();

$descricaoPredio = strtoupper(utf8_decode($_POST['descricaoPredio']));
$endereco = strtoupper(utf8_decode($_POST['endereco']));
$numEndereco = strtoupper(utf8_decode($_POST['numEndereco']));
$idestado = strtoupper(utf8_decode($_POST['idestado']));
$idcidade = strtoupper(utf8_decode($_POST['idcidade']));
$numTelefone = strtoupper(utf8_decode($_POST['numTelefone']));

$fields = "descricaoPredio,endereco,numEndereco,idestado,idcidade,numTelefone";
$params = array("$descricaoPredio","$endereco","$numEndereco","$idestado","$idcidade","$numTelefone");
$rs = $predioDAO->insert($fields,$params);
var_dump($rs);