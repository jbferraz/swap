<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professorCursoMinistraInsert
 *
 * @author jairb
 */
require_once("../includes/conexao.inc.php");
include_once("../dao/professorCursoMinistraDAO.php");
$professorCursoMinistraDAO = new professorCursoMinistraDAO();

$idprofessor = $_POST['idprofessor'];
$idcurso = $_POST['idcurso'];

$fields = "idcurso,idprofessor";
$params = array($idcurso, $idprofessor);
$rs=$professorCursoMinistraDAO->insert($fields, $params);
var_dump($rs);
