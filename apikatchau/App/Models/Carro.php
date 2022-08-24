<?php

namespace App\Models;

Class Carro{

    private static $table = "carros";

    public static function insert($data){
        $connPDO = new \PDO(DBDRIVE.":host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);

        $sql = "INSERT INTO ".self::$table." VALUES(0, :modelo, :marca, :placa, :diaria, 1)";
        $stmt = $connPDO->prepare($sql);
        $stmt->bindValue(":modelo", $data['modelo']);
        $stmt->bindValue(":marca", $data['marca']);
        $stmt->bindValue(":placa", $data['placa']);
        $stmt->bindValue(":diaria", $data['diaria']);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return "Carro inserido com sucesso";
        }else{
            throw new \Exception("Erro ao inserir carro");
        }
        $connPDO = null;
    }
    public static function select(){
        $connPDO = new \PDO(DBDRIVE.":host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);

        $sql = "SELECT * FROM ".self::$table;
        $stmt = $connPDO->query($sql);

        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            throw new \Exception("Erro ao consultar carro");
        }
        $connPDO = null;
    }
}