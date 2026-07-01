<?php
class Conexion {
    private static $pdo = null;

    private function __construct() {}

    public static function obtener() {
        if (self::$pdo == null) {
            try {
                $dsn = "mysql:host=localhost;dbname=videoclub;charset=utf8mb4";
                
                self::$pdo = new PDO($dsn, "root", "root", [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false
                ]);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        return self::$pdo;
    }
}