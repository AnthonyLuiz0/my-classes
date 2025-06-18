<?php

namespace Config;
use mysqli;

class Connection{
    
    public static function connect($host, $user, $password, $database){
        $conn = new mysqli($host, $user, $password, $database);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public static function select($conn, $table, $columns = "*", $where = null){
        if ($where != null) {
            $where = "WHERE $where";
        }
        $sql = "SELECT $columns FROM $table $where";
        $result = $conn->query($sql);
        return $result;
    }

    public static function insert($conn, $table, $columns, $values){
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $result = $conn->query($sql);
        return $result;
    }

    public static function update($conn, $table, $set, $where){
        if ($where != null) {
            $where = "WHERE $where";
        }
        $sql = "UPDATE $table SET $set $where";
        $result = $conn->query($sql);
        return $result;
    }

    public static function delete($conn, $table, $where){
        if ($where != null) {
            $where = "WHERE $where";
        }
        $sql = "DELETE FROM $table $where";
        $result = $conn->query($sql);
        return $result;
    }

}