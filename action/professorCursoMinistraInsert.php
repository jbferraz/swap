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

$idprofessor = $_POST['idprofessor'];
//$idcurso = $_POST['idcurso'];

include_once ("../dao/cursoDAO.php");

$cursoDAO = new cursoDAO();
$fields = "*";
$add = "order by nomeCurso";
$arr = $cursoDAO->load($fields, $add);
include_once '../bancoInsertMultiplo/professorCursoMinistraMult.php';
$x=new professorCursoMinistraMult($idprofessor);
$x->delete();
foreach ($arr as $value => $row) {
    if (isset($_POST[$row->getIdcurso()])) {
//        require_once("../includes/conexao.inc.php");
//        include_once("../dao/professorCursoMinistraDAO.php");
        
//        $professorCursoMinistraDAO = new professorCursoMinistraDAO();
        $idcurso = $row->getIdcurso();
        
//        echo '<br>idCurso: '.$idcurso;
//        $fields = "idcurso,idprofessor";
//        $params = array($idcurso, $idprofessor);
//        $rs = $professorCursoMinistraDAO->insert($fields, $params);
       // var_dump($rs);
        $x=new professorCursoMinistraMult($idprofessor, $idcurso);
        $x->inserir();
    }
}
header("location: ../view/professorCursoMinistraCadastro.php");
//header("location: ../view/professorCursoMinistraCadastro.php?idProfessor=".$idprofessor);

//
//$fields = "idcurso,idprofessor";
//$params = array($idcurso, $idprofessor);
//$rs = $professorCursoMinistraDAO->insert($fields, $params);
//var_dump($rs);
