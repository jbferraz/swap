

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turmaInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/turmaDAO.php");
$turmaDAO = new turmaDAO();

$idturma = strtoupper(utf8_decode($_POST['idturma']));
$nomeTurma = strtoupper(utf8_decode($_POST['nomeTurma']));
$dataInicioTurma = strtoupper(utf8_decode($_POST['dataInicioTurma']));
$idcurso = strtoupper(utf8_decode($_POST['idcurso']));
$idperiodoAula = strtoupper(utf8_decode($_POST['idperiodoAula']));
$entregueSecretaria = strtoupper(utf8_decode($_POST['entregueSecretaria']));

$fields = "idturma,nomeTurma,dataInicioTurma,idcurso,idperiodoAula,entregueSecretaria";
$params = array("$idturma","$nomeTurma","$dataInicioTurma","$idcurso","$idperiodoAula","$entregueSecretaria");
$rs = $turmaDAO->insert($fields,$params);
var_dump($rs);
