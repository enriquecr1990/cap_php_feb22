<?php

include_once "ConfigDB.php";

class BaseDeDatos{

    private $dbConfig;
    private $mysqli;

    function __construct()
    {
        try{
            $this->dbConfig = ConfigDB::getConfig();
            $this->mysqli = new mysqli(
                $this->dbConfig['hostname'],
                $this->dbConfig['usuario'],
                $this->dbConfig['password'],
                $this->dbConfig['base_datos'],
                $this->dbConfig['puerto']
            );
            if($this->mysqli->connect_errno){
                echo 'Error en la conexion base de datos';die;
            }
        }catch (Exception $ex){
            echo 'Error en la conexion de BD';die;
        }
    }

    public function consultaRegistros($tabla,$condicionales = array()){
        $condiciones = $this->obtenerCondicionalesWhereAnd($condicionales);
        $query = $this->mysqli->query("select * from ".$tabla.$condiciones);
        $datos = array();
        while($registro = $query->fetch_assoc()){
            $datos[] = $registro;
        }
        return $datos;
    }

    /**
     * @param $tabla
     * @param $valoresInsert
     * los valores insert es un array con los datos
     * array('nombre_columna1' => valor, 'nombre_columna' => valor)
     */
    public function insertarRegistro($tabla,$valoresInsert){

    }

    public function actualizarRegistro($tabla,$valoresUpdate,$condicionales){

    }

    public function eliminarRegistro($tabla,$condicionales){

    }

    /**  functiones privadas
     * */

    /**
     * @param $condicionales
     * @return string
     * funcion que recibe un arragle de condiciones para los SQL where
     * array(array('nombre_columna1'=> valor1), array('nombre_columna2'=> valor2),...)
     */
    private function obtenerCondicionalesWhereAnd($condicionales){
        $condiciones = " WHERE 1=1";
        foreach ($condicionales as $columna => $valor){
            $condiciones .= " AND $columna = '$valor'";
        }
        return $condiciones;
    }

}