

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of planoCursoModuloCursoInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/planoCursoModuloCursoDAO.php");
$planoCursoModuloCursoDAO = new planoCursoModuloCursoDAO();

$idplanoCurso = strtoupper(utf8_decode($_POST['idplanoCurso']));
$idmoduloCurso = strtoupper(utf8_decode($_POST['idmoduloCurso']));
$idunidadeCurricular = strtoupper(utf8_decode($_POST['idunidadeCurricular']));

$fields = "idplanoCurso,idmoduloCurso,idunidadeCurricular";
$params = array("$idplanoCurso","$idmoduloCurso","$idunidadeCurricular");
$rs = $planoCursoModuloCursoDAO->insert($fields,$params);
var_dump($rs);
