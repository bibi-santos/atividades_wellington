<?php

class database {
    private static $host= "localhost";
    private static $dbname= "testbd3"; //aluno altera aqui
    private static $user= "root";
    private static $"";
    private static $conexao= null;

    public static function getConnection () {
    if(self::$conexao=== null) {
        try {
            self :: $conexo = new PDO (
                "mysql:host=" . self::$host . 
                "dbname=" . self:: $dbname . 
                ";charset=utf8",
                self:: $user,
                self:: $pass,
            [
                PDO:: ATTR_ERRMODE =>
                ERRMODE_EXCEPTION,
                PDO:: ATTR_DEFAULT_FETCH_MODE => PDO
                :: FETCH_ASSOC
            ]
            );
        }
            catch (PDOException $e){
                die("erro na conexão com banco de dados:" . $e->getMessage());
            }
    }
    return self:: $conexao;

    }
}
?>