<?php

class DataBaseConfig
{
    public $servername;
    public $username;
    public $password;
    public $databasename;
    public $port;

    public function __construct()
    {

        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->databasename = 'deti-smed';
	$this->port = '21';

    }
}
?>
