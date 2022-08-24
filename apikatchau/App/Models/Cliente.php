<?php
    namespace App\Models;

    class Cliente {
        private static $table = 'clientes';

        public static function insert($data) {
            $connPDO = new \PDO(DBDRIVE.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'INSERT INTO '.self::$table.' VALUES(0, :nome, :endereco, :email)';
            $stmt = $connPDO->prepare($sql);
            $stmt->bindValue(':nome', $data['nome']);
            $stmt->bindValue(':endereco', $data['endereco']);
            $stmt->bindValue(':email', $data['email']);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 'Cliente inserido com sucesso';
            }
            else {
                throw new \Exception('Falha ao inserir um cliente!');
            }
            $connPDO = null;
        }

        public static function select() {
            $connPDO = new \PDO(DBDRIVE.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'SELECT * FROM '.self::$table;
            $stmt = $connPDO->query($sql);
            if($stmt->rowCount() > 0) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }
            else {
                throw new \Exception('Nenhum cliente encontrado!');
            }
            $connPDO = null;
        }
    }