<?php
class DatabaseModel
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'bkd01';

    public function open()
    {
        $connect = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        return $connect;
    }
    public function close($connect)
    {
        mysqli_close($connect);
    }
}
