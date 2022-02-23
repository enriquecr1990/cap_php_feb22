<?php

class ConfigDB
{

    public static function getConfig(){
        switch ($_SERVER['SERVER_NAME']){
            default :
                $dbConfig = array(
                    'hostname' => 'localhost',
                    'usuario' => 'root',
                    'password' => '',
                    'base_datos' => 'cap_softura_php',
                    'puerto'=>'3306'
                );
                break;
        }
        return $dbConfig;
    }

}