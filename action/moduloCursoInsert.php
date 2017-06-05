

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of moduloCursoInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/moduloCursoDAO.php");
$moduloCursoDAO = new moduloCursoDAO();

$idmoduloCurso = strtoupper(utf8_decode($_POST['idmoduloCurso']));
$nomeModulo = strtoupper(utf8_decode($_POST['nomeModulo']));
$nomeCurto = strtoupper(utf8_decode($_POST['nomeCurto']));
$descicaoFormacao = strtoupper(utf8_decode($_POST['descicaoFormacao']));

$fields = "idmoduloCurso,nomeModulo,nomeCurto,descicaoFormacao";
$params = array("$idmoduloCurso","$nomeModulo","$nomeCurto","$descicaoFormacao");
$rs = $moduloCursoDAO->insert($fields,$params);
var_dump($rs);
