<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professorRestricaoDataHorario
 *
 * @author jairb
 */
class professorCursoMinistra {
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
    private $idprofessor;
    private $dataRestricao;
    private $idturno;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIdprofessor() {
        return $this->idprofessor;
    }
    
    function getDataRestricao() {
        return $this->dataRestricao;
    }

    function getIdturno() {
        return $this->idturno;
    }

}
