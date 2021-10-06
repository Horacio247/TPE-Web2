<?php
require_once "./veteModel/veteModel.php";
require_once "./veteView/veteView.php"; //crear la vista

class veteController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new veteModel();
        $this->view = new LibroView();
    }
//revisar lo que esta arriba para poder implementar las funciones


//trae toda la tabla clientes
    function getClientes(){
        $sentencia = $this->veterinaria->prepare( "select * from clientes c"); 
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    //trae toda la tabla mascotas
    function getMascotas(){
        $sentencia = $this->veterinaria->prepare( "select * from mascotas m");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    //muestra el home de la pagina 
    function showHome(){

    }
}