<?php namespace Edps\Push\Components;

use Lang;
use Cms\Classes\ComponentBase;
use \stdClass;

class PushButton extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'edps.push::lang.components.push.name',
            'description' => 'edps.push::lang.components.push.description',
        ];
    }

  	public function defineProperties()
    {
        return [
            'subdomain' => [
                'title'       =>  'edps.push::lang.components.push.subdomain.title',
                'description' =>  'edps.push::lang.components.push.subdomain.description',
                'type'        =>  'string',
                'default'     =>  'YOUR_DOMAIN',
            ],
            'id' => [
                'title'       => 'edps.push::lang.components.push.id.title',
                'description' => 'edps.push::lang.components.push.id.description"',
                'type'        => 'string',
                'default'     => 'YOUR_ONESIGNAL_APP_ID',
            ],
            'idSafari' => [
                'title'       => 'edps.push::lang.components.push.idSafari.title',
                'description' => 'edps.push::lang.components.push.idSafari.description"',
                'type'        => 'string',
                'default'     => 'YOUR_ONESIGNAL_SAFARI_ID',
            ],
            'enable' => [
                'title'             => 'edps.push::lang.components.push.enable.title',
                'description'       => 'edps.push::lang.components.push.enable.description',
                'default'           => 'true',
                'type'              => 'checkbox',
            ],
            'size' => [
                'title'             => 'edps.push::lang.components.push.size.title',
                'description'       => 'edps.push::lang.components.push.size.description',
                'default'           => 'small',
                'type'              => 'dropdown',
                'options'           => 'edps.push::lang.components.push.size.options',
            ],
            'theme' => [
                'title'             => 'edps.push::lang.components.push.theme.title',
                'description'       => 'edps.push::lang.components.push.theme.description',
                'default'           => 'default',
                'type'              => 'dropdown',
                'options'           => 'edps.push::lang.components.push.theme.options',
            ],
            'position' => [
                'title'             => 'edps.push::lang.components.push.position.title',
                'description'       => 'edps.push::lang.components.push.position.description',
                'default'           => 'bottom-left',
                'type'              => 'dropdown',
                'options'           => 'edps.push::lang.components.push.position.options',
            ],
           'bottom' => [
                'title'         => 'edps.push::lang.components.push.bottom.title',
                'description'   => 'edps.push::lang.components.push.bottom.description',
                'default'       => '5px',
                'type'          => 'string',
                'group'         => 'offset',
            ],
            'left' => [
                'title'         => 'edps.push::lang.components.push.left.title',
                'description'   => 'edps.push::lang.components.push.left.description',
                'default'       => '5px',
                'type'          => 'string',
                'group'         => 'offset',
            ],
            'right' => [
                'title'         => 'edps.push::lang.components.push.right.title',
                'description'   => 'edps.push::lang.components.push.right.description',
                'default'       => '5px',
                'type'          => 'string',
                'group'         => 'offset',
            ],
            'prenotify' => [
                'title'         => 'edps.push::lang.components.push.prenotify.title',
                'description'   => 'edps.push::lang.components.push.prenotify.description',
                'type'          => 'checkbox',
                'default'       => 'true',
            ],
            'credit' => [
                'title'         => 'edps.push::lang.components.push.credit.title',
                'description'   => 'edps.push::lang.components.push.credit.description',
                'type'          => 'checkbox',
                'default'       => 'false',
            ],
            'welcome' => [
                'title'         => 'edps.push::lang.components.push.welcome.title',
                'description'   => 'edps.push::lang.components.push.welcome.description',
                'type'          => 'dropdown',
                'options'       => 'edps.push::lang.components.push.welcome.options',
                'default'       => 'disable'
            ],
            'persist' => [
                'title'         => 'edps.push::lang.components.push.persist.title',
                'description'   => 'edps.push::lang.components.push.persist.description',
                'type'          => 'checkbox',
                'default'       => 'true',
            ]
        ];
    }

    public function onRun()
  	{
        $Push = new stdClass();

        $Push->nohttps              = $this->property('nohttps');
        $Push->subdomain            = $this->property('subdomain');
        $Push->id                   = $this->property('id');
        $Push->enable               = $this->property('enable');
        $Push->size                 = $this->property('size');
        $Push->theme                = $this->property('theme');
        $Push->position             = $this->property('position');
        $Push->bottom               = $this->property('bottom');
        $Push->left                 = $this->property('left');
        $Push->right                = $this->property('right');
        $Push->prenotify            = $this->property('prenotify');
        $Push->credit               = $this->property('credit');
        $Push->welcome              = $this->property('welcome');
        $Push->persist              = $this->property('persist');

        $this->page['oneSignal'] = $Push;

        $txtPush = new stdClass();

        $txtPush->tipUnsubscribed      = Lang::get('edps.push::lang.onesignal.tipUnsubscribed');
        $txtPush->tipSubscribed        = Lang::get('edps.push::lang.onesignal.tipSubscribed');
        $txtPush->tipBlocked           = Lang::get('edps.push::lang.onesignal.tipBlocked');
        $txtPush->messagePrenotify     = Lang::get('edps.push::lang.onesignal.messagePrenotify');
        $txtPush->messageSubscribed    = Lang::get('edps.push::lang.onesignal.messageSubscribed');
        $txtPush->messageResubscribed  = Lang::get('edps.push::lang.onesignal.messageResubscribed');
        $txtPush->messageUnsubscribed  = Lang::get('edps.push::lang.onesignal.messageUnsubscribed');
        $txtPush->dialogTitle          = Lang::get('edps.push::lang.onesignal.dialogTitle');
        $txtPush->dialogSubscribe      = Lang::get('edps.push::lang.onesignal.dialogSubscribe');
        $txtPush->dialogUnsubscribe    = Lang::get('edps.push::lang.onesignal.dialogUnsubscribe');
        $txtPush->bDialogTitle         = Lang::get('edps.push::lang.onesignal.bDialogTitle');
        $txtPush->bDialogMessage       = Lang::get('edps.push::lang.onesignal.bDialogMessage');
        $txtPush->prompt_action        = Lang::get('edps.push::lang.onesignal.prompt.action');
        $txtPush->prompt_exNTD         = Lang::get('edps.push::lang.onesignal.prompt.exNTD');
        $txtPush->prompt_exNMD         = Lang::get('edps.push::lang.onesignal.prompt.exNMD');
        $txtPush->prompt_exNTM         = Lang::get('edps.push::lang.onesignal.prompt.exNTM');
        $txtPush->prompt_exNMM         = Lang::get('edps.push::lang.onesignal.prompt.exNMM');
        $txtPush->prompt_exNCaption    = Lang::get('edps.push::lang.onesignal.prompt.exNCaption');
        $txtPush->prompt_accept        = Lang::get('edps.push::lang.onesignal.prompt.accept');
        $txtPush->prompt_cancel        = Lang::get('edps.push::lang.onesignal.prompt.cancel');
        $txtPush->welcome_title        = Lang::get('edps.push::lang.onesignal.welcome.title');
        $txtPush->welcome_message      = Lang::get('edps.push::lang.onesignal.welcome.message');

        $this->page['oneSignalText'] = $txtPush;

    	$this->addCss('/plugins/edps/push/assets/css/style.css');
   	}

}
