

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professorInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/professorDAO.php");
$professorDAO = new professorDAO();

$matricula = strtoupper(utf8_decode($_POST['matricula']));
$nomeProfessor = strtoupper(utf8_decode($_POST['nomeProfessor']));
$salarioHora = strtoupper(utf8_decode($_POST['salarioHora']));
$email = strtoupper(utf8_decode($_POST['email']));
$curriculo = strtoupper(utf8_decode($_POST['curriculo']));
$foto = strtoupper(utf8_decode($_POST['foto']));
$status = strtoupper(utf8_decode($_POST['status']));
$coordenardor = strtoupper(utf8_decode($_POST['coordenardor']));
$PF = strtoupper(utf8_decode($_POST['PF']));

$fields = "matricula,nomeProfessor,salarioHora,email,curriculo,foto,status,coordenardor,PF";
$params = array("$matricula","$nomeProfessor","$salarioHora","$email","$curriculo","$foto","$status","$coordenardor","$PF");
$rs = $professorDAO->insert($fields,$params);
var_dump($rs);
