<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of unidadeCurricular
 *
 * @author jairb
 */
class unidadeCurricular {
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
    private $idunidadeCurricular;
    private $unidadeCurricular;
    private $cargaHoraria;
    private $idUnidadeCurricularPreReq;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIdunidadeCurricular() {
        return $this->idunidadeCurricular;
    }

    function getUnidadeCurricular() {
        return $this->unidadeCurricular;
    }

    function getCargaHoraria() {
        return $this->cargaHoraria;
    }

    function getIdUnidadeCurricularPreReq() {
        return $this->idUnidadeCurricularPreReq;
    }

}
