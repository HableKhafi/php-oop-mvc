<?php 

class Controller {
    
    // Method untuk memuat View
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    // Method untuk memuat Model (INI YANG PERLU DIPERBAIKI)
    public function model($model)
    {
        // 1. Panggil file modelnya dari folder app/models/
        require_once '../app/models/' . $model . '.php';

        // 2. Instansiasi kelas model tersebut
        return new $model;
    }
}