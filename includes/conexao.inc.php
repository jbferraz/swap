<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexao
 *
 * @author krypton
 */

    $host = "mysql427.umbler.com:41890";
    $usuario = "swap";
    $senha = "swap2017";
    $banco = "swapbd";
    
    $con = new mysqli($host, $usuario, $senha, $banco);

    if(mysqli_connect_errno()){
        die('erro');
        exit();
    }
    $drive = new mysqli_driver();
    $drive->report_mode = MYSQLI_REPORT_ERROR;