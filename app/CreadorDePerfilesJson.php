<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 18/04/16
 * Time: 17:12
 */

namespace App;


class CreadorDePerfilesJson extends AbstractProfiler
{
    public function show($user)
    {
        return "<JSON>
                Id: <b>" . $this->getUserId($user) ."</b><br>
                Name: " . $user->name . "
                </JSON>";
    }

}