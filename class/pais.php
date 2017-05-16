<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turno
 *
 * @author jairb
 */
class pais {
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
    private $idpais;
    private $nomePais;
    private $nomePaisCurto;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {
        
    }
    
    function getIdPais() {
        return $this->idpais;
    }

    function getNomePais() {
        return $this->nomePais;
    }
    
    function getNomePaisCurto() {
        return $this->nomePaisCurto;
    }

}
