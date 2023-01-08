<?php

namespace App\Interface;

interface Controller {

    public function __construct();
    
    /**
     * index
     * Muestra una lista de este recurso
     * @return void
     */
    public function index();
        
    /**
     * create
     * Muestra un formulario para crear un nuevo recurso
     * @return void
     */
    public function create();
        
    /**
     * store
     * Guarda un nuevo recurso en la base de datos
     * @param array $data datos nuevo registro
     * @return void
     */
    public function store($data);
        
    /**
     * show
     * Muestra un único recurso especificado
     * @param mixed $id primary key
     * @return void
     */
    public function show($pk);
        
    /**
     * edit
     * Muestra el formulario para editar un recurso
     * @return void
     */
    public function edit();
        
    /**
     * update
     * Actualiza un recurso específico en la base de datos
     * @param array $data datos del registro a actualizar
     * @param mixed $pk primary key
     * @return void
     */
    public function update($data, $pk);
        
    /**
     * destroy
     * Elimina un recurso específico de la base de datos
     * @param mixed $pk primary key
     * @return void
     */
    public function destroy($pk);

}