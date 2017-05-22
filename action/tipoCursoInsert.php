

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tipoCursoInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/tipoCursoDAO.php");
$tipoCursoDAO = new tipoCursoDAO();

$descricaoTipoCurso = strtoupper(utf8_decode($_POST['descricaoTipoCurso']));
$descricaoTipoCursoCurto = strtoupper(utf8_decode($_POST['descricaoTipoCursoCurto']));


$fields = "descricaoTipoCurso,descricaoTipoCursoCurto";
$params = array("$descricaoTipoCurso","$descricaoTipoCursoCurto");
$rs = $tipoCursoDAO->insert($fields,$params);
var_dump($rs);
