

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of planoCursoInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/planoCursoDAO.php");
$planoCursoDAO = new planoCursoDAO();

$idplanoCurso = strtoupper(utf8_decode($_POST['idplanoCurso']));
$vigencia = strtoupper(utf8_decode($_POST['vigencia']));
$idcurso = strtoupper(utf8_decode($_POST['idcurso']));
$status = strtoupper(utf8_decode($_POST['status']));

$fields = "idplanoCurso,vigencia,idcurso,status";
$params = array("$idplanoCurso","$vigencia","$idcurso","$status");
$rs = $planoCursoDAO->insert($fields,$params);
var_dump($rs);
