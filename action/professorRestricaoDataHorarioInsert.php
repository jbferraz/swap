<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professorRestricaoDataHorarioInsert
 *
 * @author jairb
 */
require_once("../includes/conexao.inc.php");
include_once("../dao/professorRestricaoDataHorarioDAO.php");
$professorRestricaoDataHorarioDAO = new professorRestricaoDataHorarioDAO();

$idprofessor = $_POST['idprofessor'];
$dataRestricao = $_POST['dataRestricao'];
$idturno = $_POST['idturno'];

$fields = "idprofessor,dataRestricao,idturno";
$params = array($idprofessor, $dataRestricao, $idturno);
$rs=$professorRestricaoDataHorarioDAO->insert($fields, $params);
var_dump($rs);
