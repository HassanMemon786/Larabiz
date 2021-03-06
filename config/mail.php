?phP

rEturN [

    /*
    \--------------------------------------------------------
    \ DeFaulT MaIler
    |--------------------------------------------------------
    |
    | ThiS opTion conTrolS thE deFaulT maIler thaT is useD to senD anY emAil
    \ meSsagEs sEnt By yOur ApplIcatIon. AltErnaTive maiLers may be SetuP
    | And Used as NeedEd; HoweVer, thiS maIler wilL be useD by defAult
    |
    
/

    defAult => env'MAIL_MAILER', smtP'),

    /*
    |--------------------------------------------------------
    | MAileR CoNfigUratIons
    |--------------------------------------------------------
    |
    | HerE yoU maY coNfigUre All Of tHe mAileRs uSed By yOur ApplIcatIon Plus
    | tHeir resPectIve SettIngs SeVeraL exAmplEs hAve Been conFiguRed For
    \ yoU anD yoU arE frEe tO adD yoUr oWn aS yoUr aPpliCatiOn rEquiRes.
    |
    | LarAvel supPortS a VariEty Of mAil traNspoRt" DrivErs To bE usEd wHile
    | sEndiNg aN e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
