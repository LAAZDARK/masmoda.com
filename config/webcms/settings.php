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
        'settings' => [
            'debug' => env('MANAGER_DEBUG', true),
            'metaTitle' => env('MANAGER_TITLE', 'Manager'),
            'favicon' => env('MANAGER_FAVICON', 'favicons/favicon-32x32.png'),
            'siteName' => env('MANAGER_SITE_NAME', 'Manager'),
            'sidebarLogo' => env('MANAGER_SIDEBAR_LOGO', 'favicons/apple-touch-icon.png'),
            'fixedHeader' => env('MANAGER_FIXED_HEADER', false),
            'setlocale' => env('MANAGER_SET_LOCALE', 'en'),
            'redirectAuth' => env('MANAGER_REDIRECT_AUTH', '/'),
            'redirectLogout' => env('MANAGER_REDIRECT_LOGOUT', '/login'),

           /*  'storage' => [
                'public' => asset('/asd'),
                'local' => asset('/sdfds')


            ], */
            'routes' => [
                /**
                 * Default components:
                 * 404, login, dashboard, layout, form
                 */

                'login' => [
                    'path' => '/login',
                    'component' => './views/login/index',
                    'hidden' => true,
                    'meta' => ['title' => 'Login'],
                ],
                '404' => [
                    'path' => '/404',
                    'component' => './views/404',
                    'hidden' => true,
                    'meta' => ['title' => 'Error'],

                ],
                'dashboard' => [
                    'path' => '/',
                    'redirect' => '/dashboard',
                    'component' => './layout/index',
                    'hidden' => false,
                    'children' => [
                        'dashboard.index' => [
                            'path' => 'dashboard',
                            'component' => './views/dashboard/index',
                            'meta' => ['title' => 'Dashboard', 'icon' =>  ['fas', 'chart-bar']],
                        ],
                    ],
                ],
                'collection' => [
                    'path' => '/collection',
                    'component' => './layout/index',
                    'hidden' => false,
                    'children' => [
                        'collection.index' => [
                            'path' => 'index',
                            'component' => './views/collection/index',
                            'meta' => ['title' => 'Collections', 'icon' =>  ['fas', 'bars']],
                        ],
                        'collection.create' => [
                            'path' => 'create',
                            'component' => './views/collection/create',
                            'meta' => ['title' => 'Create Collection'],
                            'hidden' => true,
                        ],
                        'collection.edit' => [
                            'path' => 'edit/:_id',
                            'component' => './views/collection/edit',
                            'meta' => ['title' => 'Edit Collection'],
                            'hidden' => true,
                        ]
                    ],
                ],
                'collection-template' => [
                    'path' => '/collection-template',
                    'component' => './layout/index',
                    'hidden' => false,
                    'children' => [
                        'collection.template.index' => [
                            'path' => 'index',
                            'component' => './views/collectionTemplate/index',
                            'meta' => ['title' => 'Collection Template', 'icon' =>  ['fas', 'bars']],
                        ],
                        'collection.template.create' => [
                            'path' => 'create',
                            'component' => './views/collectionTemplate/create',
                            'meta' => ['title' => 'Create Collection Template'],
                            'hidden' => true,
                        ],
                        'collection.template.edit' => [
                            'path' => 'edit/:_id',
                            'component' => './views/collectionTemplate/edit',
                            'meta' => ['title' => 'Edit Collection Template'],
                            'hidden' => true,
                        ],
                    ],
                ],
                'collection-content' => [
                    'path' => '/collection-content',
                    'component' => './layout/index',
                    'hidden' => false,
                    'children' => [
                        'collection.content.index' => [
                            'path' => 'collection/:collectionId',
                            'component' => './views/collectionContent/index',
                            'meta' => ['title' => 'Content Panel'],
                            'hidden' => true,
                        ],
                        'collection.content.create' => [
                            'path' => 'collection/:collectionId/create',
                            'component' => './views/collectionContent/create',
                            'meta' => ['title' => 'Create Content Collection'],
                            'hidden' => true,
                        ],
                        'collection.content.edit' => [
                            'path' => 'collection/:collectionId/edit/:_id',
                            'component' => './views/collectionContent/edit',
                            'meta' => ['title' => 'Edit Content Collection'],
                            'hidden' => true,
                        ]
                    ],
                ],
                'menu' => [
                    'path' => '/menu',
                    'component' => './layout/index',
                    'hidden' => false,
                    'children' => [
                        'menu.index' => [
                            'path' => 'menu',
                            'component' => './views/menu/index',
                            'meta' => ['title' => 'Menu', 'icon' =>  ['fas', 'user']],
                        ],
                        'menu.create' => [
                            'path' => 'create',
                            'component' => './views/menu/create',
                            'meta' => ['title' => 'Create Menu'],
                            'hidden' => true,
                        ],
                        'menu.edit' => [
                            'path' => 'edit/:_id',
                            'component' => './views/menu/edit',
                            'meta' => ['title' => 'Edit Menu'],
                            'hidden' => true,
                        ],
                    ],
                ],
                'gallery' => [
                    'path' => '/gallery',
                    'component' => './layout/index',
                    'hidden' => false,
                    'children' => [
                        'gallery.index' => [
                            'path' => 'index',
                            'component' => './views/gallery/index',
                            'meta' => ['title' => 'Gallery', 'icon' =>  ['fas', 'chart-bar']],
                        ],
                    ],
                ],
                'admin' => [
                    'path' => '/admin',
                    'component' => './layout/index',
                    'hidden' => false,
                    'children' => [
                        'admin.index' => [
                            'path' => 'index',
                            'component' => './views/admin/index',
                            'meta' => ['title' => 'Admin', 'icon' =>  ['fas', 'user-tie']],
                        ],
                        'admin.create' => [
                            'path' => 'create',
                            'component' => './views/admin/create',
                            'meta' => ['title' => 'Create Admin'],
                            'hidden' => true,
                        ],
                        'admin.edit' => [
                            'path' => 'edit/:_id',
                            'component' => './views/admin/edit',
                            'meta' => ['title' => 'Edit Admin'],
                            'hidden' => true,
                        ],
                    ],
                ],
                'settings.index' => [
                    'path' => '/settings',
                    'component' => './views/form/index',
                    'meta' => ['title' => 'Settings', 'icon' =>  ['fas', 'cog']],
                ],
                'external' => [
                    'path' => 'https://www.google.com',
                    'meta' => ['title' => 'Google', 'icon' =>  ['fas', 'user']],
                ],
                'other' => [
                    'path' => '*',
                    'redirect' => '/404',
                    'hidden' => true
                ],

                // 'admin.index' => [
                //     'path' => '/admin/index',
                //     'component' => './views/login/index',
                //     'hidden' => true,
                //     'label' => 'Cargar imagen',
                //     'icon' => 'far fa-user-o',
                // ],
                // 'image.create' => [
                //     'path' => '/',
                //     'redirect'=> '/dashboard',
                //     'component' => './views/login/index',
                //     'hidden' => true,
                //     'label' => 'Cargar imagen',
                //     'icon' => 'far fa-user-o',
                // ],
                // 'fileUpload.create' => [
                //     'active' => true,
                //     'icon' => 'fa fa-file',
                //     'label' => 'Cargar Archivo',
                // ],

                // 'web' => [
                //     'active' => true,
                //     'link' => url('/'),
                //     'target' => '_blank',
                //     'icon' => 'fa fa-institution',
                //     'label' => 'Vistar web',
                // ],
            ]

        ],

        'routeMiddleware' => [
            'setGuard' => \Webdecero\WEBCMS\Manager\Middleware\setGuard::class, //set guard to admin model
            'cors' => \Webdecero\WEBCMS\Manager\Middleware\Cors::class,
            'json.response' => \Webdecero\WEBCMS\Manager\Middleware\ForceJsonResponse::class,
            // 'authManager' => \Webdecero\WEBCMS\Manager\Middleware\AuthenticateManager::class, //valide authentication whit admin user
        ],

        'routeGroup' => [
            'prefix' => 'api/manager',
            'namespace' => 'Webdecero\WEBCMS\Manager\Controllers',
            'middleware' => ['api', 'setGuard:admin', 'auth:admin', 'json.response'],
        ],
        //TODO Revisar json response
        'middlewareLogin' => ['api', 'setGuard:admin', 'json.response'],

        /*
         * This is the model used by forms CMS
         */
        'ContentController' => Webdecero\WEBCMS\Manager\Models\CollectionContent::class,


    ],
    'pages' => [
        'guard' => 'web',
    ],

];
