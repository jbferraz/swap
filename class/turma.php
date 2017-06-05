<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turma
 *
 * @author jairb
 */
class turma {
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
    private $idturma;
    private $nomeTurma;
    private $dataInicioTurma;
    private $idcurso;
    private $idperiodoAula;
    private $entregueSecretaria;
    
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIdturma() {
        return $this->idturma;
    }

    function getNomeTurma() {
        return $this->nomeTurma;
    }

    function getDataInicioTurma() {
        return $this->dataInicioTurma;
    }

    function getIdcurso() {
        return $this->idcurso;
    }

    function getIdperiodoAula() {
        return $this->idperiodoAula;
    }

    function getEntregueSecretaria() {
        return $this->entregueSecretaria;
    }

}
