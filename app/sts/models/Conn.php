<?php
    namespace Sts\models;

    use PDO;

    class Conn{
        public static $dsn = "mysql:host=localhost;dbname=celke;";
        public static $user = "root";
        public static $pass = "";
        
        private static $connect = null;

        private static function Conectar(){
            try {
                if(self::$connect == null):
                    self::$connect = new PDO(
                        self::$dsn, 
                        self::$user, 
                        self::$pass
                    );
                endif;
            } catch (Exception $e) {
                echo "Mensagem: " . $e->getMessage();
                die;
            }
            return self::$connect;
        }

        public function getConn(){
            return self::Conectar();
        }
    }

?>