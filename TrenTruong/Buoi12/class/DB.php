<?php

class DB{
    public static $conn = null;
    function __construct()
    {
      DB::$conn = NEW PDO('mysql:host='.HOST.';dbname='.DB, U, P);

    }
    //SQL SELECT
    function selectQueyry($sql, $params=[]) {
        $stm = DB::$conn->prepare($sql);
        $stm->execute($params);
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    function updateQueyry($sql, $params=[]) {
        $stm = DB::$conn->prepare($sql);
        $stm->execute($params);
        return $stm->rowCount();
    }
   

}