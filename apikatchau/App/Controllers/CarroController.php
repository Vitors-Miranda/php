<?php
namespace App\Controllers;
use App\Models\Carro;

class CarroController{
    public function post(){
        return Carro::insert($_POST);
    }
}