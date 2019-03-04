<?php

class Database
{

    public $host = DB_HOST;
    public $username = DB_USER;
    public $password = DB_PASS;
    public $db_name = DB_NAME;

    public $link;
    public $error;

    public function __construct()
    {
        $this->connect();
    }
    private function connect()
    {
        $this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if (!$this->link) {
            $this->error = "connection Failed: " . $this->link->connect_error;
            return false;
        }
    }
    public function get_query_result($query)
    {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insert_query($query)
    {
        $insert_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if (!$insert_row) {
            die('Error : (' . $this->link->error . ') ' . $this->link->error);
        }
    }



}



?>