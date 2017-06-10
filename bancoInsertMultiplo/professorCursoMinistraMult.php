<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professorCursoMinistra
 *
 * @author jairb
 */
include_once 'conectar.php';
class professorCursoMinistraMult {
    /* Evita que a classe seja clonada */
    
    //put your code here
    private $idprofessor;
    private $idcurso;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct($idprofessor=NULL, $idcurso=NULL) {
        $this->idprofessor = $idprofessor;
        $this->idcurso = $idcurso;
    }

    public function inserir(){
        $sql="insert into professorCursoMinistra values (".$this->idprofessor.",".$this->idcurso.")";
        $con=new conectar();
        $con->executar($sql);
        
    }
    
    public function delete(){
        $sql="delete from professorCursoMinistra where idprofessor=".$this->idprofessor;
        $con=new conectar();
        $con->executar($sql);
    }
            
    function getIdprofessor() {
        return $this->idprofessor;
    }

    function getIdcurso() {
        return $this->idcurso;
    }

}
