<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cronogramaTurma
 *
 * @author jairb
 */
class cronogramaTurma {
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
    private $idcronogramaTurma;
    private $idturma;
    private $idmoduloCurso;
    private $dataInicioModulo;
    private $finalizado;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIdcronogramaTurma() {
        return $this->idcronogramaTurma;
    }

    function getIdturma() {
        return $this->idturma;
    }

    function getIdmoduloCurso() {
        return $this->idmoduloCurso;
    }

    function getDataInicioModulo() {
        return $this->dataInicioModulo;
    }

    function getFinalizado() {
        return $this->finalizado;
    }

}
