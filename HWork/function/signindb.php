<?php

class signin {
    public $hostname;
    public $username;
    public $password;
    public $dbname;
    public $connect;

    public function __construct($hostname, $username, $password, $dbname){
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect = mysqli_connect($hostname, $username, $password, $dbname) or die('Oops');
    }
    

}