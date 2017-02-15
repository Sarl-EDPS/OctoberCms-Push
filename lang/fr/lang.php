<?php

    return [
        'plugin' => [
            'name'                  => 'OneSignal Push',
            'description'           => 'Push notifications avec OneSignal',
        ],

        'onesignal' => [
            'tipUnsubscribed'       => "S'abonner aux notifications",
            'tipSubscribed'         => "Vous êtes abonnés aux notifications",
            'tipBlocked'            => "Vous avez bloqué les notifications",
            'messagePrenotify'      => "Cliquez pour vous abonner aux notifications",
            'messageSubscribed'     => "Merci de vous êtes abonné!",
            'messageResubscribed'   => "Vous êtes abonné aux notifications",
            'messageUnsubscribed'   => "Vous ne recevrez pas de nouvelles notifications",//-
            'dialogTitle'           => "Gérer les Notifications",
            'dialogSubscribe'       => "S'ABONNER",
            'dialogUnsubscribe'     => "SE DÉSABONNER",
            'bDialogTitle'          => "Débloquer les Notifications",
            'bDialogMessage'        => "Suivez ces instructions pour autoriser les notifications:",
            'prompt'            => [
                'action'            => "veut afficher des notifications: ",
                'exNTD'             => "Voici un exemple de notification",
                'exNMD'             => "Les notifications s'afficheront sur votre bureau",
                'exNTM'             => "Exemple de Notification",
                'exNMM'             => "Les notifications apparaîtront sur votre mobile",
                'exNCaption'        => "Vous pouvez vous désabonner à tout moment",
                'accept'            => "Continuer",
                'cancel'            => "Non Merci",
            ],
            'welcome'           => [
                'title'             => "Bienvenue sur notre site",
                'message'           => "Vous venez de vous abonné aux services de notification de notre site.",
                // "url": "" // Leave commented for the notification to not open a window on Chrome and Firefox (on Safari, it opens to your webpage)
            ]
        ],


        'components' => [
            'push'      => [
                'name'          =>  'OneSignal Button',
                'description'   =>  'Boutton d\'abonnement aux notifications',
                'nohttps'       =>  [
                    'title'             => 'Site pas totalement HTTPS',
                    'description'       => 'Si votre site ne supporte pas HTTPS, ou Sert quelques pages à travers HTTP et d\'autres pages à travers HTTPS alors validé cette option de repli pour HTTP. Autrement laissé cette option non décochée!',
                ],
                'subdomain' => [
                    'title'             =>  'Choisisser votre Domaine ou Subdomaine',
                    'description'       =>  'Les notifications Push nécessitent un site HTTPS, les sites non-HTTPS peuvent utiliser un subdomaine de onesignal.com, choisissez un subdomaine unique.',
                ],
                'id'        => [
                    'title'             => 'Id projet OneSignal',
                    'description'       => 'Vous pouvez obtenir votre ID projet OneSignal de "onesignal.com"',
                ],
                'idSafari'        => [
                    'title'             => 'Id Safari pour OneSignal',
                    'description'       => 'Vous pouvez obtenir votre ID Safari OneSignal de "onesignal.com"',
                ],
                'enable'    => [
                    'title'             => 'Autoriser les Notification',
                    'description'       => 'Required to use the notify button.',
                ],
                'size'      => [
                    'title'             => 'Taille de l\'Icone',
                    'description'       => 'Un parmi "Petit", "Moyen", ou "Grand".',
                    'options'           => ['small'=>'Petit', 'medium'=>'Moyen', 'large' => 'Grand'],
                ],
                'theme'     => [
                    'title'             => 'Thème',
                    'description'       => 'Entre "defaut" (rouge-blanc) ou "inverse" (blanc-rouge).',
                    'options'           => ['default'=>'Défaut', 'inverse'=>'Inverse'],
                ],
                'position'  => [
                    'title'             => 'Position',
                    'description'       => 'Entre "Bas Gauche" ou "Bas Droit".',
                    'options'           => ['bottom-left'=>'En Bas à Gauche', 'bottom-right'=>'En Bas à Droite'],
                ],
               'bottom'     => [
                    'title'         => 'Marge du Bas',
                    'description'   => 'Distance entre le bas de la page et l\'Icone',
                ],
                'left'      => [
                    'title'         => 'Marge de Gauche',
                    'description'   => 'Appliquer si Bas-Gauche a été choisie',
                ],
                'right'     => [
                    'title'         => 'Marge de Droite',
                    'description'   => 'Appliquer si Bas-Droit a été choisie',
                ],
                'prenotify' => [
                    'title'         => 'Notifier préalablement',
                    'description'   => 'Afficher une icone avec 1 messages non lus pour la première visite',
                ],
                'credit'    => [
                    'title'         => 'Afficher les Credits',
                    'description'   => 'Cacher le logo OneSignal',
                ],
                'welcome'   => [
                    'title'         => 'Message de bienvenue',
                    'description'   => 'Personnaliser ou désactiver la notification automatique de bienvenue',
                    'options'       => ['disable'=>'Désactivé', 'title'=>'Titre', 'message'=>'Message'],
                ],
                'persist'   => [
                    'title'         => 'Persist Notification',
                    'description'   => 'Si faux, la notification disparaît environ après 20 secondes. Si vrai, la notification est affichée indéfiniment jusqu\'à ce que l\'utilisateur interagit avec la notification (rejette ou clique dessus)',
                ],
            ],
            'pushlink'  => [
                'name'          =>  'OneSignal Link',
                'description'   =>  'Lien d\'abonnement aux Notifications',
            ],
        ]
    ];

?>
