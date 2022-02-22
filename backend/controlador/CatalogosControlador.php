<?php

class CatalogosControlador{

    public function obtenerCatalogoTipoContacto(){
        $catTipoContacto = array(
            array('id' => 1,'tipo_contacto' => 'Telefono'),
            array('id' => 2,'tipo_contacto' => 'Correo'),
            array('id' => 3,'tipo_contacto' => 'Facebook'),
        );
        return array(
            'success' => true,
            'msg' => array('Se obtuvo el catalogo correctamente'),
            'data' => array(
                'catalogo_tipo_contacto' => $catTipoContacto
            )
        );
    }

}