

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of salaInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/salaDAO.php");
$salaDAO = new salaDAO();

$numSalaAndar = strtoupper(utf8_decode($_POST['numSalaAndar']));
$descricaoSala = strtoupper(utf8_decode($_POST['descricaoSala']));
$capacidadeAlunoSala = strtoupper(utf8_decode($_POST['capacidadeAlunoSala']));
$idtipoSala = strtoupper(utf8_decode($_POST['idtipoSala']));
$idandarPredio = strtoupper(utf8_decode($_POST['idandarPredio']));

$fields = "numSalaAndar,descricaoSala,capacidadeAlunoSala,idtipoSala,idandarPredio";
$params = array("$numSalaAndar","$descricaoSala","$capacidadeAlunoSala","$idtipoSala","$idandarPredio");
$rs = $salaDAO->insert($fields,$params);
var_dump($rs);
