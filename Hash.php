<?php

namespace Password\Helpers;

class Hash
{
    public static function create($password)
    {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    }


    public static function check($password, $hash)
    {
        return password_verify( $password, $hash );
    }
}
