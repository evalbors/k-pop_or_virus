<?php
namespace App;

class Connection
{
    public $dbConnection;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->dbConnection = mysqli_connect('localhost', 'root', "", 'kvirus');
        
        if (isset($connection)){
            return $connection;
        }
    }
}
?>