<?php
/*
 * Contains database connection
 * It also contains various methods to execute database operations
 * Only the model can access it
 */
class Database
{
    private  $dbHost = DB_HOST;
    private  $dbUser = DB_USER;
    private  $dbPass = DB_PASS;
    private  $dbName = DB_NAME;

    private $statement;
    private $dbHandler;
    private $error;

    public function __construct(){
        $conn = 'mysql:host='.$this->dbHost.';dbname='.$this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        }catch (PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Method to write queries
    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    //Bind values
    public function bind($parameter, $value, $type = null)
    {
        $type = match (is_null($type)) {
            is_int($value) => PDO::PARAM_INT,
            is_bool($value) => PDO::PARAM_BOOL,
            is_null($value) => PDO::PARAM_NULL,
            default => PDO::PARAM_STR,
        };
        $this->statement->bindValue($parameter, $value, $type);
    }

    //Execute the prepared statement
    public function execute()
    {
        return $this->statement->execute();
    }

    //Return array
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //Return single row
    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }


    //Get the row count (UPDATE/DELETE/INSERT Ops)
    public function rowCount()
    {
        $this->execute();
        return $this->statement->rowCount();
    }
}