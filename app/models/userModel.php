<?php

class userModel extends Model
{
    public function getUser($login, $password)
    {
        $user = $this->db
            ->prepare('SELECT id, login, password 
                        FROM users 
                        WHERE login = :login 
                        AND password = MD5(:password)'
            );

        $user->execute(
            array(
                ':login'    => $login,
                ':password' => $password
            )
        );

        return $user->fetchAll();
    }
}