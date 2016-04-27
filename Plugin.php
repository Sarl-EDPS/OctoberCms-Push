<?php namespace Edps\Push;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'OneSignal Push',
            'description' => 'Push notifications with OneSignal SDK',
            'author'      => 'EDPS - JM BRUNO',
            'icon'        => 'icon-bell',
            'homepage'    => 'https://github.com/Sarl-EDPS/OctoberCMS-Push'
        ];
    }

    public function registerComponents(){
        return [
            'Edps\Push\Components\PushButton' => 'pushButton',
            'Edps\Push\Components\PushLink' => 'pushLink'
        ];
    }

    public function registerSettings()
    {
    }

}