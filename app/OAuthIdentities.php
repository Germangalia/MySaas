<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 7/03/16
 * Time: 18:13
 */
namespace App;
trait OAuthIdentities
{
    /**
     * Get OAuth identities
     */
    public function oauthIdentities()
    {
        return $this->hasMany(\Acacha\Socialite\OAuthIdentity::class);
    }
}