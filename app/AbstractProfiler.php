<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 18/04/16
 * Time: 17:32
 */

namespace App;


abstract class AbstractProfiler implements Profile
{
    abstract public function show($user);

    protected function getUserId($user){
        return $user->id;
    }

}