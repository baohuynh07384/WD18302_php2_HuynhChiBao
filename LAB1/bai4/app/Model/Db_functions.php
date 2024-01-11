<?php
class Db_functions
{
    public function insert($email, $firtsname, $lastname, $password)
    {
        $db = new connect();
        $query = "INSERT INTO users (`email`, `firstname`, `lastname`, status, `password`) values ('$email', '$firtsname', '$lastname', 1, '$password')";
        $result = $db->pdo_execute($query);
        return $result;
    }
    public function get_user(){
        $db = new connect();
        $query = "SELECT * FROM users";
        $result = $db->pdo_query($query);
        return $result;
    }
    
}

?>