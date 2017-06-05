<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datasCronogramaTurma
 *
 * @author jairb
 */
class datasCronogramaTurma {
    /* Evita que a classe seja clonada */
    private function __clone() {
    }
    /* Método destrutor da classe */
    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
        foreach (array_keys(get_defined_vars()) as $var) {
            unset(${"$var"});
        }
        unset($var);
    }
    
    //put your code here
    private $iddatasCronogramaTurma;
    private $idcronogramaTurma;
    private $data;
    private $idunidadeCurricular;
    private $idprofessor;
    private $idsalaAndar;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIddatasCronogramaTurma() {
        return $this->iddatasCronogramaTurma;
    }

    function getIdcronogramaTurma() {
        return $this->idcronogramaTurma;
    }

    function getData() {
        return $this->data;
    }

    function getIdunidadeCurricular() {
        return $this->idunidadeCurricular;
    }

    function getIdprofessor() {
        return $this->idprofessor;
    }

    function getIdsalaAndar() {
        return $this->idsalaAndar;
    }

}
