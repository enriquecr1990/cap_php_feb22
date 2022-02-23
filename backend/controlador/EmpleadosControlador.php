<?php

include_once "modelo/EmpleadoModelo.php";
include_once "modelo/ContactoEmpleadoModelo.php";

class EmpleadosControlador
{

    private $empleadoModelo;
    private $contactoEmpleadoModelo;

    function __construct()
    {
        $this->empleadoModelo = new EmpleadoModelo();
        $this->contactoEmpleadoModelo = new ContactoEmpleadoModelo();
    }

    public function listado(){
        $empleadoDatos = $this->empleadoModelo->obtenerListado();
        $empleadoRespuesta = array();
        foreach ($empleadoDatos as $index => $empleado){
            $condicionesWhere = array(
                'empleado_id' => $empleado['id']
            );
            $contactoEmpleado = $this->contactoEmpleadoModelo->obtenerListado($condicionesWhere);
            $empleado['datos_contacto'] = $contactoEmpleado;
            $empleadoRespuesta[$index] = $empleado;
        }
        //var_dump($empleadoDatos,$empleadoRespuesta);exit;
        return array(
            'success' => true,
            'msg' => array('Se obtuvo el listado de empleados correctamente'),
            'data' => array(
                'empleados' => $empleadoRespuesta
            )
        );
    }

    public function agregar(){

    }

    public function actualizar(){

    }

    public function eliminar(){

    }

}