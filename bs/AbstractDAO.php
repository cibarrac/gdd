<?php
class AbstractDAO {
    
    public static function getConnect() {
        return Database::getInstance()->getConnection();
        
    }    
}

class Database {
    private $_connection;
    private static $_instance; //The single instance
    /*
     Get an instance of the Database
     @return Instance
     */
    
    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct() {
        
        switch (gethostname()) {
            case "C":    $this->_connection = new mysqli("localhost", "root", "root", "gdd"); break;
            case "ANALISTA-DBA": $this->_connection =  new mysqli("localhost","root","X@viF10r3s", "gdd"); break;
            default:     $this->_connection = new mysqli("localhost", "root", "Get7usa7", "gdd");
        }
        ;
        
        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }
    }
    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }
    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }
}