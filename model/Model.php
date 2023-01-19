<?php
namespace Models;

class Model{
// -------------------------------     METHODE CREATE    -------------------------------------------
    public static function create($tableName, $table_columns, $values, $con){
        $place_holders = implode(',', array_fill(0, count($values), '?'));
        $columns = implode(",", $table_columns); 
        $sql = "INSERT INTO $tableName ($columns) VALUES ($place_holders)";        
        $res = $con->prepare($sql);
        $res->execute($values);
    }
// -------------------------------     METHODE UPDATE    -------------------------------------------
    public static function update($tableName, $columns, $values, $id, $con){
        $place_holders = [];
        foreach($columns as $column){
            array_push($place_holders, "$column = ?");
        }
        $params = implode(",", $place_holders);
        $sql = "UPDATE $tableName SET $params WHERE id = $id";
        $con->prepare($sql);
        $con->execute($values);
    }
// -------------------------------     METHODE DELETE    -------------------------------------------
    public static function delete($tableName, $id, $con){
        $sql = "DELETE $tableName WHERE id = $id";
        $con->query($sql);
    }
// -------------------------------     METHODE GETALL    -------------------------------------------
    public static function getAll($tableName, $con){
        $sql = "SELECT * from $tableName";
        return $con->query($sql);
    }
// -------------------------------     METHODE GETBYID   -------------------------------------------
    public static function getById($tableName, $id, $con){
        $sql = "SELECT * from $tableName WHERE id = $id";
        return $con->query($sql);
    }
}
?>