<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 28-May-19
 * Time: 13:46
 */

namespace App\L\Example;


class UserDb implements Repository
{

    function getUser()
    {
        $user = new \stdClass();
        $user->firstName = "Ben";
        return $user;
    }
}