<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of predio
 *
 * @author jairb
 */
class predio {
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
    private $idpredio;
    private $descricaoPredio;
    private $endereco;
    private $numEndereco;
    private $idestado;
    private $idcidade;
    private $numTelefone;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIdpredio() {
        return $this->idpredio;
    }

    function getDescricaoPredio() {
        return $this->descricaoPredio;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getNumEndereco() {
        return $this->numEndereco;
    }

    function getIdestado() {
        return $this->idestado;
    }

    function getIdcidade() {
        return $this->idcidade;
    }

    function getNumTelefone() {
        return $this->numTelefone;
    }


}
