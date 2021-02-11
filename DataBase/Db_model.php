<?php

class Db_model extends Database
{
    public function GetUser($username, $password)
    {
        $sql = "SELECT * FROM usuario WHERE user_name = '$username' AND password = '$password'" ;
        $result = $this->conn->Connect()->query($sql);

        $numrows = $result->num_row;
        
        if ($numrows == 1) {
            return true;
        }
        return false;
    }
}
