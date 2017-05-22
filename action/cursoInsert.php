

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cursoInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/cursoDAO.php");
$cursoDAO = new cursoDAO();

$nomeCurso = strtoupper(utf8_decode($_POST['nomeCurso']));
$ideixoTecnologico = strtoupper(utf8_decode($_POST['ideixoTecnologico']));
$idtipoCurso = strtoupper(utf8_decode($_POST['idtipoCurso']));

$fields = "nomeCurso,ideixoTecnologico,idtipoCurso";
$params = array("$nomeCurso","$ideixoTecnologico","$idtipoCurso");
$rs = $cursoDAO->insert($fields,$params);
var_dump($rs);
