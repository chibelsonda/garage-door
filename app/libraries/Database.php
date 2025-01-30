<?php
namespace app\Libraries;

use PDO;
use PDOException;

/*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */
class Database
{    
    /**
     * @var mixed
     */
    private $dbh;    

    /**
     * @var mixed
     */
    private $stmt;    

    /**
     * @var mixed
     */
    private $error;
    
    /**
     * Method __construct
     *
     * @param string $host
     * @param string $dbName
     * @param string $user
     * @param string $password
     *
     * @return void
     */
    public function __construct($host, $dbName, $user, $password)
    {
        // Set DSN
        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        // Create PDO instance
        try {
            $this->dbh = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    // Prepare statement with query
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);

        return $this;
    }

    // Bind values
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute the prepared statement
    public function execute($params = [])
    {
        if ($params) {
            $this->stmt->execute($params);
        }

        return $this->stmt->execute();
    }

    // Get result set as array of objects
    public function fetchAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Get single record as object
    public function fetch()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Get row count
    public function rowCount(): int
    {
        return $this->stmt->rowCount();
    }

    /**
     * Get the last inserted id 
     * 
     * @return int 
     */
    public function getLastInsertedId(): int
    {
        return $this->dbh->lastInsertId();
    }
    
    /**
     * Insert
     *
     * @param string $table
     * @param array $data
     *
     * @return mixed
     */
    public function insert($table, $data): mixed
    {
        foreach (array_keys($data) as $key) {
            if ($data[$key]) {
                $fields[] = $key;
                $values[] = ":$key";
            }
        }

        $this->query("INSERT INTO " . $table . "(" . implode(",", $fields) . ")" . " VALUES(" . implode(",", $values) . ");");

        $this->bindParams($data);

        return $this->execute();
    }
    
    /**
     * Update
     *
     * @param string $table
     * @param array $data
     * @param array $where
     *
     * @return mixed
     */
    public function update($table, $data, $where) : mixed
    {
        $cols = $this->setFields($data);
        $conditions = $this->setFields($where, ' AND ');

        $this->query("UPDATE $table SET $cols WHERE $conditions;");
        
        $this->bindParams($data, $where);

        return $this->execute();
    }
    
    /**
     * Delete
     *
     * @param string $table
     * @param array $where
     *
     * @return void
     */
    public function delete($table, $where)
    {
        $conditions = $this->setFields($where);
        
        $this->query("DELETE FROM $table WHERE $conditions;");

        $this->bindParams($where);

        return $this->execute();
    }
    
    /**
     * Bind params
     *
     * @param array ...$params
     *
     * @return void
     */
    private function bindParams(...$params): void
    {
        foreach($params as $data) {
            foreach ($data as $key => $value) {
                $this->bind(":$key", $value);
            }
        }
    }
    
    /**
     * Set fields
     *
     * @param array $data
     * @param string $separator
     *
     * @return string
     */
    private function setFields($data, $separator = ', '): string
    {
        $cols = [];

        if (empty($data)){
            return "";
        } 

        foreach (array_keys($data) as $key) {
            $cols[] = "$key = :$key";
        }
      
        return implode($separator, $cols);
    }
    
    /**
     * Begin db transaction
     *
     * @return void
     */
    public function beginTransaction()
    {
        $this->dbh->beginTransaction();
    }
    
    /**
     * Commit db transaction
     *
     * @return void
     */
    public function commit()
    {
        $this->dbh->commit();
    }
}
