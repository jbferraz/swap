<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author jairb
 */
class usuario {
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
    private $idusuario;
    private $nomeUsuario;
    private $usuario;
    private $senha;
    private $status;
    private $idPerfilAcesso;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getStatus() {
        return $this->status;
    }

    function getIdPerfilAcesso() {
        return $this->idPerfilAcesso;
    }


}
