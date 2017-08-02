<?php

namespace lib\Auth;

use lib\Application;
use lib\Session;
use modeles\User;

trait Auth
{
    public function login(User $user, $code, $accessCredentials)
    {
        $session = Application::getInstance()->getSession();
        $session->addattribute(Session::USER, $user);
        $session->addattribute(Session::LOGGED_IN, true);
        $session->addattribute(Session::TWITCH_ACCESS_TOKEN, $accessCredentials['access_token']);
        $session->addattribute(Session::TWITCH_REFRESH_TOKEN, $accessCredentials['refresh_token']);
        $session->addattribute(Session::TWITCH_CODE, $code);
    }
}