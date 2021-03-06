<?php

class ClassCrud extends ClassConexao {

    private $Crud;
    private $Contador;

    private function preparedStatements($query, $parametros) {
        $this->countParametros($parametros);
        $this->Crud = $this->conectaDB()->prepare($query);

        if ($this->Contador > 0) {
            for ($I = 1; $I <= $this->Contador; $I++) {
                $this->Crud->bindValue($I, $parametros[$I - 1]);
            }
        }
        $this->Crud->execute();
    }

    private function countParametros($parametros) {
        $this->Contador = count($parametros);
    }

}
