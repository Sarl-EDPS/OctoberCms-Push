<?php

    return [
        'plugin' => [
            'name'                  => 'OneSignal Push',
            'description'           => 'Push notifications with OneSignal SDK'
        ],

        'onesignal' => [
            'tipUnsubscribed'       => "Subscribe to notifications",
            'tipSubscribed'         => "You're subscribed to notifications",
            'tipBlocked'            => "You've blocked notifications",
            'messagePrenotify'      => "Click to subscribe to notifications",
            'messageSubscribed'     => "Thanks for subscribing!",
            'messageResubscribed'   => "You're subscribed to notifications",
            'messageUnsubscribed'   => "You won't receive notifications again",
            'dialogTitle'           => "Manage Site Notifications",
            'dialogSubscribe'       => "SUBSCRIBE",
            'dialogUnsubscribe'     => "UNSUBSCRIBE",
            'bDialogTitle'          => "Unblock Notifications",
            'bDialogMessage'        => "Follow these instructions to allow notifications:",
            'prompt'            => [
                'action'            => "wants to show notifications: ",
                'exNTD'             => "This is an example notification",
                'exNMD'             => "Notifications will appear on your desktop",
                'exNTM'             => "Example notification",
                'exNMM'             => "Notifications will appear on your device",
                'exNCaption'        => "(you can unsubscribe anytime)",
                'accept'            => "Continue",
                'cancel'            => "No Thanks",
            ],
            'welcome'           => [
                'title'             => "Welcome",
                'message'           => "Thanks for subscribing!."
                // "url": "" // Leave commented for the notification to not open a window on Chrome and Firefox (on Safari, it opens to your webpage)
            ]
        ],

        'components' => [
            'push'      => [
                'name'          => 'OneSignal Push',
                'description'   => 'Notify button with OneSignal SDK',
                'nohttps'       => [
                    'title'             => 'Not fully HTTPS',
                    'description'       => 'If your site: Does not support HTTPS, or Serves some pages over HTTP and other pages over HTTPS then enable this HTTP Fallback option. Otherwise leave this option unchecked!',
                ],
                'subdomain' => [
                    'title'             =>  'Choose your Subdomain',
                    'description'       =>  'Because Chrome push notifications requires sites to be using HTTPS, non-HTTPS websites must use a subdomain of onesignal.com, choose a unique subdomain.',
                ],
                'id' => [
                    'title'             => 'OneSignal App Id',
                    'description'       => 'Your can get your OneSignal Project Id from "onesignal.com"',
                ],
                'enable' => [
                    'title'             => 'Enable Notification',
                    'description'       => 'Required to use the notify button.',
                ],
                'size' => [
                    'title'             => 'Icone Size',
                    'description'       => 'One of "Small", "Medium", or "Large".',
                    'options'           => ['small'=>'Small', 'medium'=>'Medium', 'large' => 'Large'],
                ],
                'theme' => [
                    'title'             => 'Theme',
                    'description'       => 'One of "default" (red-white) or "inverse" (white-red).',
                    'options'           => ['default'=>'Default', 'inverse'=>'Inverse'],
                ],
                'position' => [
                    'title'             => 'Position',
                    'description'       => 'Either "Bottom Left" or "Bottom Right".',
                    'options'           => ['bottom-left'=>'Bottom Left', 'bottom-right'=>'Bottom Right'],
                ],
               'bottom' => [
                    'title'         => 'Bottom',
                    'description'   => 'Distance between bottom and icon',
                ],
                'left' => [
                    'title'         => 'Left',
                    'description'   => 'Only applied if bottom-left',
                ],
                'right' => [
                    'title'         => 'Right',
                    'description'   => 'Only applied if bottom-right',
                ],
                'prenotify' => [
                    'title'         => 'Prenotify',
                    'description'   => 'Show an icon with 1 unread message for first-time site visitors',
                ],
                'credit' => [
                    'title'         => 'Show Credit',
                    'description'   => 'Hide the OneSignal logo',
                ],
                'welcome'       => [
                    'title'         => 'Welcome Message',
                    'description'   => 'Customize or disable the automatic welcome notification',
                    'options'       => ['disable'=>'Disable', 'title'=>'Title', 'message'=>'Message'],
                ],
                'persist'       => [
                    'title'         => 'Persist Notification',
                    'description'   => 'If false, the notification will disappear roughly after 20 seconds. If true, the notification will be displayed indefinitely until the user interacts with the notification (dismisses it or clicks it)',
                ]
            ],
            'pushlink'  => [
                'name'          =>  'OneSignal Link',
                'description'   =>  'Subsuscribtion link to Notifications',
            ],
        ]
    ];

?>