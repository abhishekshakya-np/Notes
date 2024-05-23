<?php 
// connect to our database
class Database 
{   
     // Class properties
    public $connection;
    public $statement;
    
    public function __construct($config)
    { 
    
        $dsn = 'mysql:' . http_build_query($config, '', ';' );

        // Database connection details
        // $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
        $username = "root";
        $password = "X@bickx2024";
        
        // Create a PDO connection object
        $this->connection = new PDO($dsn, $username, $password, [
            pdo::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}