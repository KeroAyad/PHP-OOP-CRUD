<?php

class Database
{
    public $connection;
    private $host = "localhost";
    private $username = "root";
    private $password = "12345678";
    private $db_name = "scandiweb";

    function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
            // echo "not working"; 
        }
    }
}

class Query extends Database
{

    function create($post, $table)
    {
        try {
            $sql = "";
            $sql .= "INSERT INTO " . $table;
            $sql .= " (" . implode(",", array_keys($post)) . ") VALUES ";
            $sql .= "('" . implode("','", array_values($post)) . "')";
            // echo $sql;
            $result = mysqli_query($this->connection, $sql);
            if ($result) {
                header("location:index.php?msg=Done");
            }
        } catch (Exception $e) {
            $msg = $e->getMessage();
            header("location:add_product.php?msg=$msg");
        }
    }
    function read($table)
    {
        $sql = "SELECT * FROM " . $table;
        $array = array();
        $sql = mysqli_query($this->connection, $sql);
        while ($row =  mysqli_fetch_assoc($sql)) {
            $array[] = $row;
        }
        return $array;
    }
    function delete($table, $PK, $post)
    {
        $all_ids = $post;
        $extracted = implode("', '", $all_ids);
        $sql = "DELETE FROM $table WHERE $PK IN('$extracted')";
        // echo $sql;
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            header("location:index.php?msg=Done");
        }
    }
}


// $db = new Database;
