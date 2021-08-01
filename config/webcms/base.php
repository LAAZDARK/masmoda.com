<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Routes group config
      |--------------------------------------------------------------------------
      |
      | The default group settings for the Finder routes.
      |
     */
    'manager' => [
        'guard' => 'admin',
        'redirectAuth' => 'manager.admin.index',
        'redirectLogout' => 'manager.index',
        'route' => [
            'prefix' => 'manager',
            'middleware' => ['web', 'setGuard:admin'],
        ],
        'config' => [
            'name' => env('MANAGER_SITE_NAME', 'CMS Manager'),
            'favicon' => env('MANAGER_FAVICON', 'favicons/favicon-32x32.png'),
            'logo' => env('MANAGER_LOGO', 'favicons/apple-touch-icon.png')
        ],
        
        'crm'=>[
            'manager.user.index' => [
                'active' => true,
                'icon' => 'fa fa-user',
                'label' => 'Usuarios'
            ]
           
        ],
        
        'modules' => [
            'manager.slide.index' => [
                'active' => false,
                'icon' => 'fa fa-desktop',
                'label' => 'Slides'
            ],
            'manager.blog.index' => [
                'active' => false,
                'icon' => 'fa fa-desktop',
                'label' => 'Blog'
            ],
            'manager.localization.index' => [
                'active' => false,
                'icon' => 'fa fa-desktop',
                'label' => 'Tags idiomas'
            ],
            'manager.gallery.index' => [
                'active' => false,
                'icon' => 'fa fa-desktop',
                'label' => 'Galeria'
            ],
            'manager.image.create' => [
                'active' => true,
                'icon' => 'fa fa-file-image-o',
                'label' => 'Cargar imagen'
            ],
            'manager.fileUpload.create' => [
                'active' => true,
                'icon' => 'fa fa-file',
                'label' => 'Cargar Archivo'
            ],
            'manager.admin.index' => [
                'active' => true,
                'icon' => 'fa fa-users fa-fw',
                'label' => 'Admins'
            ],
            'manager.web' => [
                'active' => true,
                // 'link'=>url('/'),
                'target'=> '_blank',
                'icon' => 'fa fa-institution',
                'label' => 'Vistar web'
            ]
        ]
    ],
    
    
];
