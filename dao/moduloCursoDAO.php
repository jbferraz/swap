<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of moduloCursoDAO
 *
 * @author jairb
 */
include_once("../class/moduloCurso.php");

class moduloCursoDAO extends database {

    //put your code here
    public function __construct() {
        
    }

    private function __clone() {
        
    }

    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
        foreach (array_keys(get_defined_vars()) as $var) {
            unset(${"$var"});
        }
        unset($var);
    }

    public function load($fields = "*", $add = "") {
        if (strlen($add) > 0) {
            $add = " " . $add;
        }
        $sql = "SELECT $fields FROM moduloCurso$add";
        return $this->selectDB($sql, null, 'moduloCurso');
    }

    public function insert($fields, $params = null) {
        $numparams = "";
        for ($i = 0; $i < count($params); $i++) {
            $numparams .= ",?";
        }
        $numparams = substr($numparams, 1);
        $sql = "INSERT INTO moduloCurso ($fields) VALUES ($numparams)";
        $t = $this->insertDB($sql, $params);
        return $t;
    }

    public function update($fields, $params = null, $where = null) {
        $fields_T = "";
        for ($i = 0; $i < count($fields); $i++) {
            $fields_T .= ", $fields[$i] = ?";
        }
        $fields_T = substr($fields_T, 2);
        $sql = "UPDATE moduloCurso SET $fields_T";
        if (isset($where)) {
            $sql .= " WHERE $where";
        }
        $t = $this->updateDB($sql, $params);
        return $t;
    }

    public function delete($where = null, $params = null) {
        $sql = "DELETE FROM moduloCurso";
        if (isset($where)) {
            $sql .= " WHERE $where";
        }
        $t = $this->deleteDB($sql, $params);
        return $t;
    }

}
