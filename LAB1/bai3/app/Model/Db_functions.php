<?php
class Db_functions
{
    public function get_user($email)
    {
        $db = new connect();
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $db->pdo_query($query);
        return $result;
    }
    
}

?>