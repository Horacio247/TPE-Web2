<?php

class LibroModel{

    //CONECCION CON BBDD (BASE DE DATOS)
    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    //FALTA IMPLEMENTAR FUNCIONES PARA MODELO

}    