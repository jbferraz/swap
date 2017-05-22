

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioInsert
 *
 * @author jairb
 */


require_once("../includes/conexao.inc.php");
include_once("../dao/usuarioDAO.php");
$usuarioDAO = new usuarioDAO();

$nomeUsuario = strtoupper(utf8_decode($_POST['nomeUsuario']));
$usuario = strtoupper(utf8_decode($_POST['usuario']));
$senha = strtoupper(utf8_decode($_POST['senha']));
$status = strtoupper(utf8_decode($_POST['status']));
$idPerfilAcesso = strtoupper(utf8_decode($_POST['idPerfilAcesso']));

$fields = "turno,usuario,senha,status,idPerfilAcesso";
$params = array("$nomeUsuario","$usuario","$senha","$status","$idPerfilAcesso");
$rs = $usuarioDAO->insert($fields,$params);
var_dump($rs);
