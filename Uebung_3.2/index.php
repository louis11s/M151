<?php
class DB
{
    protected static $instance;
    
    protected $pdo;
    
    private function __construct()
    {
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $database = "database";

        $this->pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public static function get() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

        function startTransaction(){
            $this->pdo->exec('START TRANSACTION');
            $this->isTransactionRunning = true;
        }
        function commitTransaction(){
            
            $this->pdo->exec('ROLLBACK');
        }

        function rollbackTransaction(){
            $this->pdo->exec('COMMIT');
        }

        function query($sql, $params){
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        }

        function select($sql, $params){
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);   

            return $statement->fetchAll();       
    }
}

?>