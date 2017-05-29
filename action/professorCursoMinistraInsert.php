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
$fields = "idcurso,idprofessor";

$idprofessor = $_POST['idprofessor'];
$idcurso = $_POST['idcurso'];

if (!empty($idcurso)) {
    $qtd = count($idcurso);
    echo "Quant. Curso: " . $qtd;
    for ($i = 0; $i < $qtd; $i++) {
        echo "Curso: " . $idcurso[$i];
    }

    for ($y = 0; $y < $qtd - 1; $y++) {
        array_push($idprofessor, $idprofessor[$y]);
    }

    $qtd2 = count($idprofessor);
    echo "Quant. Prof.: " . $qtd2;
    for ($x = 0; $x < $qtd2; $x++) {
        echo "Prof.: " . $idprofessor[$x];
    }
}

for ($xy = 0; $xy < $qtd; $xy++) {
    $params = array($idcurso[$xy], $idprofessor[$xy]);
    echo "|-|Curso: " . $idcurso[$xy];
    $rs = $professorCursoMinistraDAO->insert($fields, $params);
    var_dump($rs);
}



