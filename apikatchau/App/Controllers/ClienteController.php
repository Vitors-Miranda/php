<?php
    namespace App\Controllers;
    use App\Models\Cliente;

    class ClienteController {
        public function post() {
            return Cliente::insert($_POST);
        }
        
        public function get() {
            return Cliente::select();
        }
    }