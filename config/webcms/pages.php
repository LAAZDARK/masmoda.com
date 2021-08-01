<?php

//Guía de integración para page CMS 
//
//$pages['Inicio'] = [ -->La key de concuerda con clave en collection bae de datos, es necesario crearla antes
//    'isSeo' => TRUE,-->Determina si llevara campos SEO
//    'menuTitle' => '-->Incio', Etiqueta mostrada en menu lateral
//    'sectionName' => 'Pagina Incio', -->Etiqueta mostrada en pantalla de formulario
//    'sectionAction' => 'Editar', -->Etiqueta de accion mostrada en pantalla de formulario
//    'sections' => -->Componentes del CMS
//    [
//        <--ELEMENTO IMAGE-->
//        'imagen' => -->nombre de key en la collection de la base de datos
//        [
//            'element' => 'imageResize', -->tipo de componente html
//            'label' => 'Logotipo', -->etiqueta
//            'required' => true, -->agrega parametro required
//            'w' => '180',
//            'h' => '77',
//            'resize' => 'widen',
//            'path' => 'img/page',
//            'ratio' => '21 / 9',
//            'format' => 'png',
//        ],
//        <--ELEMENTO TEXT-->
//        'titulo' => [
//            'element' => 'inputText',
//            'label' => 'Título Algo',
//            'required' => true,
//        ],
//        <--ELEMENTO TEXTAREA-->
//        'contenido' => [
//            'element' => 'inputTextarea',
//            'label' => 'Sobre Fundacion',
//            'required' => true,
//        ],
//        <--ELEMENTO heading-->
//        'heading-programas' => [
//            'element' => 'heading',
//            'label' => 'Sección Programas'
//        ],
//        <--ELEMENTO Group-->
//        'programas' => [
//            'element' => 'wrapSection',
//            'label' => 'Programas',
//            'sections' => [
//                'titulo' => [
//                    'element' => 'inputText',
//                    'label' => 'Título Programas',
//                ],
//                'contenido' => [
//                    'element' => 'inputTextarea',
//                    'label' => 'Contenido Programas',
//                ],
//                'imagen' =>
//                [
//                    'element' => 'imageResize',
//                    'label' => 'Imagen',
//                    'w' => '360',
//                    'h' => '154',
//                    'resize' => 'widen',
//                    'path' => 'img/page',
//                    'ratio' => '21 / 9',
//                    'format' => 'png',
//                ],
//            ]
//        ]
//    ]
//];





$pages = [];

$pages['index'] = [
    'isSeo' => TRUE,
    'menuTitle' => 'Incio',
    'sectionName' => 'Pagina Incio',
    'sectionAction' => 'Editar',
    'sections' =>
        [
        'logo' =>
            [
            'element' => 'imageResize',
            'label' => 'Logotipo',
            'required' => true,
            'w' => '180',
            'h' => '77',
            'resize' => 'widen',
            'path' => 'img/page',
            'ratio' => '21 / 9',
            'format' => 'png',
        ],
        'heading-PrimerSeccion' => [
            'element' => 'heading',
            'label' => 'Slider'
        ],
       
        'slide' => [
            'element' => 'wrapSection',
            'label' => 'Slider',
            'sections' => [
                'tituloSlide' => [
                    'element' => 'inputText',
                    'label' => 'Título Slide',
                    'required' => true,
                ],
                'subtituloSlide' => [
                    'element' => 'inputText',
                    'label' => 'Subtítulo Slide',
                    'required' => true,
                ],
                'TextoBoton' => [
                    'element' => 'inputText',
                    'label' => 'Texto Boton',
                    'required' => true,
                ],
                'UrlBoton' => [
                    'element' => 'inputText',
                    'label' => 'Url Boton',
                    'required' => true,
                ],
                'imagen'     =>
                [
                    'element' => 'imageResize',
                    'label' => 'Imagen Slider',
                    'w' => '1200',
                    'h' => '675',
                    'resize' => 'widen',
                    'path' => 'img/page',
                    'ratio' => '16 / 9',
                    'format' => 'jpg',
                    'quality'=>'90'
                ],
            ],
        ], 

    ],
];





$pages['acerca'] = [
    'isSeo' => false,
    'menuTitle' => 'Acerca',
    'sectionName' => 'Pagina Acerca',
    'sectionAction' => 'Editar',
    'sections' =>
        [
  
        'titulo' => [
            'element' => 'inputText',
            'label' => 'Título Acerca de',
            'required' => true,
        ],
        'contenido' => [
            'element' => 'inputTextarea',
            'label' => 'Contenido',
            'required' => true,
        ],
       'subtitulo' => [
           'element' => 'inputText',
           'label' => 'Título 2',
           'required' => true,
       ],
       'contenido' => [
           'element' => 'inputTextarea',
           'label' => 'Sobre 2',
           'required' => true,
       ],

    ],
];



return $pages;

