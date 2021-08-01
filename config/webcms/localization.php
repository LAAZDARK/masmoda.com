<?php

$pages = [];

$pages['index'] = [
    'isSeo' => FALSE,
    'sectionName' => 'Tag de traducción',
    'sections' => [
        'type' => [
            'element' => 'inputHidden',
            'value' => 'index',
        ],
        'text' => [
            'element' => 'inputText',
            'label' => 'Contenido de tag',
            'required' => true,
        ],
        'key' => [
            'element' => 'inputText',
            'label' => 'Llave',
            'required' => true,
        ],
        'group' => [
            'element' => 'inputText',
            'label' => 'Grupo',
            'required' => true,
        ],
        'locale' => [
            'element' => 'inputSelect',
            'label' => 'Idioma',
            'required' => true,
        ],
    ]
];





return $pages;

