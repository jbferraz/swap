<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estado
 *
 * @author jairb
 */
class estado {
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
    private $idestado;
    private $nomeEstado;
    private $nomeEstadoCurto;
    private $pais_idPais;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }

    function getIdEstado() {
        return $this->idestado;
    }

    function getNomeEstado() {
        return $this->nomeEstado;
    }
    
    function getNomeEstadoCurto() {
        return $this->nomeEstadoCurto;
    }
    
    function getPais_IdPais() {
        return $this->pais_idPais;
    }

}
