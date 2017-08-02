<?php

namespace controllers\Index;

use lib\Application;
use lib\Controller;
use lib\Session;
use lib\Twitch\Hydrator\UserHydrator;
use lib\Twitch\TwitchApi;

class IndexController extends Controller
{
    public function executeIndex()
    {
        $session = Application::getInstance()->getSession();
        if($session->getAttribute(Session::LOGGED_IN) === true)
        {
            $this->redirect('Dashboard','Index');
        }
        $twitchApi = TwitchApi::getInstance();
        $this->getHTTPResponse()->addTemplateVars(array(
            'twitchApi' => $twitchApi
        ));
    }

    public function executeIndexProfile()
    {
        $actualUser = Application::getInstance()->getTwitchChannel();
        $channelIdentifier = $this->getTwitchAPI()->getUserByUsername($actualUser);
        $user = UserHydrator::getInstance()->getOrCreate($channelIdentifier['users'][0]);
        $this->getHTTPResponse()->addTemplateVars(array(
            'user' => $user
        ));
    }
}