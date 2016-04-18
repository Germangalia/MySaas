<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 18/04/16
 * Time: 16:58
 */

namespace App;


class CreadorDePerfilesHTML extends AbstractProfiler
{

    public function show($user)
    {
        return "<div>
                Id: <b>" . $this->getUserId($user)."</b><br>
                Name: " . $user->name . "
                </div>";
    }

}