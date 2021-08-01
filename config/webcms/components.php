<?php

/**
 *--------------------------------------------------------------------------
 * Dialogs Form:
 *--------------------------------------------------------------------------
 *
 * The default group components.
 *
 * @/components/Dialogs
 *  dialog-input-text
 *  dialog-image-crop
 *  dialog-image-editor
 *
 *
 *
 *
 *
 *---------------------------------------------------------------------------
 * Inputs Form:
 *---------------------------------------------------------------------------
 * @/components/Forms/Elements
 *  input-text
 *  image-crop
 *  image-editor
 *
 *
 *
 *  input-checkbox
 *  input-select
 *  el-date-picker
 *  el-checkbox
 *  el-radio
 *  image-editor
 *
 *
 *----------------------------------------------------------------------------
 * Table Elements:
 *----------------------------------------------------------------------------
 * @/components/Table/Elements
 *  table-element-text
 *  table-element-link
 *  table-element-image
 *  table-element-raw
 *
 *
 *
 *
 *
 *  table-element-number
 *  table-element-service
 *  table-element-html
 *
 *
 *
 *---------------------------------------------------------------------------
 * Inputs Type Value:
 *---------------------------------------------------------------------------
 * - Primitive -
 * Text
 * Number
 * Boolean
 * - Resources -
 * Image
 * File
 * Link
 * Html
 *
 *
 *
 *----------------------------------------------------------------------------
 * Rules Documentation:
 *----------------------------------------------------------------------------
 * Rules from FrontEnd
 * https://logaretm.github.io/vee-validate/guide/rules.html#rules
 *
 * Rules from BackEnd
 * https://laravel.com/docs/master/validation
 *
 *
 * TODO:
 * External components:
 *'asyncComponent' => 'dialog-input-text.vue',
 *
 *
 *
 *
 */


/**
 * Image propierties
 */

$aspectRatioImage = [
    [
        "value" => "free",
        "label" => "Free Aspect Ratio",
    ],
    [
        "value" => "custom",
        "label" => "Custom Aspect Ratio",
    ],
    [
        "value" => "1/1",
        "label" => "1:1 Square",
    ],
    [
        "value" => "16/9",
        "label" => "16:9 Widescreen Landscape",

    ],
    [
        "value" => "21/9",
        "label" => "21:9 Cinemascope Landscape",
    ],
    [
        "value" => "4/3",
        "label" => "4:3 Classic Landscape",
    ],
    [
        "value" => "9/16",
        "label" => "9:16 Widescreen Portrait",
    ],
    [
        "value" => "9/21",
        "label" => "9:21 Cinemascope Portrait",

    ],
    [
        "value" => "3/4",
        "label" => "3:4 Classic Portrait",
    ]

];

//   JPEG PNG GIF TIF BMP ICO PSD WebP
// GD 	✔️ 	✔️ 	✔️ 	- 	- 	- 	- 	✔️ *
// Imagick 	✔️ 	✔️ 	✔️ 	✔️ 	✔️ 	✔️ 	✔️ 	✔️ *
// * For WebP support GD driver must be used with PHP 5 >= 5.5.0 or PHP 7 in order to use imagewebp().
//If Imagick is used, it must be compiled with libwebp for WebP support.

$formatsImage =  [
    [
        "value" => "jpg",
        "label" => "JPG",
    ],
    [
        "value" => "png",
        "label" => "PNG",
    ],
    [
        "value" => "gif",
        "label" => "GIF",
    ],
    [
        "value" => "tif",
        "label" => "TIF",
    ],
    [
        "value" => "bmp",
        "label" => "BMP",
    ],

    [
        "value" => "ico",
        "label" => "ICO",
    ],

    [
        "value" => "psd",
        "label" => "PSD",
    ],

    [
        "value" => "webp",
        "label" => "WebP",
    ]
];




/**
 * Rules validation
 * Laravel validation rules & Vee validation rules
 */
$frontRulesText = [
    [
        "value" => "required",
        "label" => "Required"
    ],
    [
        "value" => "alpha",
        "label" => "Alpha"
    ],
    [
        "value" => "alpha_dash",
        "label" => "Alpha Dash"
    ],
    [
        "value" => "alpha_num",
        "label" => "Alpha and Numbers"
    ],
    [
        "value" => "email",
        "label" => "Email"
    ]
];

$backRulesText = [
    [
        "value" => "required",
        "label" => "Required"
    ],
    [
        "value" => "string",
        "label" => "String"
    ],
    [
        "value" => "alpha",
        "label" => "Alpha"
    ],
    [
        "value" => "alpha_dash",
        "label" => "Alpha Dash"
    ],
    [
        "value" => "alpha_num",
        "label" => "Alpha and Numbers"
    ],
    [
        "value" => "present",
        "label" => "Present"
    ]
];


$frontRulesInteger = [
    [
        "value" => "required",
        "label" => "Required"
    ],
    [
        "value" => "numeric",
        "label" => "Numeric"
    ],
    [
        "value" => "integer",
        "label" => "Integer"
    ]
];

$backRulesIntenger = [
    [
        "value" => "required",
        "label" => "Required"
    ],

    [
        "value" => "numeric",
        "label" => "Numeric"
    ],
    [
        "value" => "integer",
        "label" => "Integer"
    ]
];



$frontRulesImage = [
    [
        "label" => "Required",
        "value" => "required"
    ],
    [
        "label" => "dimensions:1200,675",
        "value" => "dimensions:1200,675"
    ],
    [
        "label" => "ext:jpg,png",
        "value" => "ext:jpg,png"
    ],
    [
        "label" => "image",
        "value" => "image"
    ],
    [
        "label" => "mimes:image/*",
        "value" => "mimes:image/*"
    ],
    [
        "label" => "size:5000",
        "value" => "size:5000"
    ],


];

$backRulesImage = [
    [
        "value" => "required",
        "label" => "Required"
    ],
    [
        "value" => "file",
        "label" => "File"
    ],
    [
        "value" => "image",
        "label" => "Image"
    ],
    [
        "value" => "dimensions",
        "label" => "Dimensions"
    ],
    [
        "value" => "size",
        "label" => "Size"
    ],







];


$frontRulesLink = [
    [
        "value" => "required",
        "label" => "Required"
    ],
    [
        "value" => "email",
        "label" => "Email"
    ]
];

$backRulesLink = [
    [
        "value" => "required",
        "label" => "Required"
    ],
    [
        "value" => "active_url",
        "label" => "Active Url"
    ],
    [
        "value" => "url",
        "label" => "URL"
    ],
    [
        "value" => "ip",
        "label" => "Ip Adrees"
    ],

    [
        "value" => "present",
        "label" => "Present"
    ]
];


$disks = array_keys(config('filesystems.disks'));

return [

    /**************************
      * Image Components
    **************************/

    /**
      * Cropper.js
      * https://github.com/fengyuanchen/cropperjs
      */
    'imageCrop' => [
        'category' => 'Image',
        'dialog' => [
            'title' => 'Dialog Image Crop',
            'component' => 'dialog-image-crop',
            'aspectRatio' =>  $aspectRatioImage,
            'formats' =>      $formatsImage,
            'disks' => $disks,
            'frontRules' => $frontRulesImage,
            'backRules' => $backRulesImage
        ],
        'input' => [
            'label' => 'Image Crop',
            'inputType'=> 'Image',
            'component' => 'image-crop',
            'tableElement' => 'table-element-image',
        ],
        'data' => [
            'label' => 'Image crop',
            'helper' => '',
            'aspectRatio' => '16/9',
            'format' => 'jpg',
            'width' => '800',
            'height' => '450',
            'disk' => 'public',
            'folder' => 'crops',
            'quality' => '100',

        ]
    ],
    /**
      * TOAST UI ImageEditor
      * https://github.com/nhn/tui.image-editor
      */
    'imageEditor' => [
        'category' => 'Image',
        'dialog' => [
            'title' => 'Dialog Image Editor',
            'component' => 'dialog-image-editor',
            'menuOptions' =>  ['crop', 'flip', 'rotate', 'draw', 'shape', 'icon', 'text', 'mask', 'filter'],
            'formats' =>      $formatsImage,
            'disks' => $disks,
            'frontRules' => $frontRulesImage,
            'backRules' => $backRulesImage
        ],
        'input' => [
            'label' => 'Image Editor',
            'inputType'=> 'Image',
            'component' => 'image-editor',
            'tableElement' => 'table-element-image'
        ],
        'data' => [
            'label' => 'Image editor',
            'helper' => '',
            'format' => 'jpg',
            'width' => '800',
            'height' => '450',
            'disk' => 'public',
            'folder' => 'editor',
            'quality' => '100',
            'menuOptions' => ['crop'],

        ]
    ],

    /**************************
      * Text Components
    **************************/

    'inputText' => [
        'category' => 'Text',
        'dialog' => [
            'title' => 'Dialog Input Text',
            'component' => 'dialog-input-text',
            'types' =>  [
                [
                    "value" => "text",
                    "label" => "Text"
                ],
                [
                    "value" => "password",
                    "label" => "Password"
                ],
                [
                    "value" => "email",
                    "label" => "Email"
                ],
                [
                    "value" => "textarea",
                    "label" => "TextArea"
                ]
            ],
            'frontRules' => $frontRulesText,
            'backRules' => $backRulesText
        ],
        'input' => [
            'label' => 'Input Text',
            'inputType'=> 'Text',
            'component' => 'input-text',
            'tableElement' => 'table-element-text'
        ],
        'data' => [
            'label' => 'Input Text Label',
            'helper' => '',
            'placeholder' => '',
            'type' => 'text',
            'showWordLimit' => false,

        ]
    ],

    'inputLink' => [
        'category' => 'Link',
        'dialog' => [
            'title' => 'Dialog input Link',
            'component' => 'dialog-input-link',
            'types' =>  [
                [
                    "value" => "email",
                    "label" => "Email"
                ],
                [
                    "value" => "phone",
                    "label" => "Phone"
                ],
                [
                    "value" => "url",
                    "label" => "URL"
                ],
                [
                    "value" => "whatsapp",
                    "label" => "WhatsApp"
                ]
            ],

            'frontRules' => $frontRulesLink,
            'backRules' => $backRulesLink
        ],
        'input' => [
            'label' => 'Anchor link',
            'inputType'=> 'Link',
            'component' => 'input-link',
            'tableElement' => 'table-element-link',
            'target' =>  [
                [
                    "label" => "External",
                    "value" => "_blank"
                ],
                [
                    "label" => "Self",
                    "value" => "_self"
                ],
                [
                    "label" => "Parent",
                    "value" => "_parent"
                ],
                [
                    "label" => "Top",
                    "value" => "_top"
                ]
            ],
        ],
        'data' => [
            'label' => 'Input Link Label',
            'helper' => '',
            'type' => 'url',
            "target" => "_blank"

        ]
    ],


    'inputNumber' => [
        'category' => 'Number',
        'dialog' => [
            'title' => 'Dialog Input Number',
            'component' => 'dialog-input-number',
            'frontRules' => $frontRulesInteger,
            'backRules' => $backRulesIntenger
        ],
        'input' => [
            'label' => 'Input Number',
            'inputType'=> 'Number',
            'component' => 'input-number',
            'tableElement' => 'table-element-text'
        ],
        'data' => [
            'label' => 'Input Number',
            'precision' => 0,
            'helper' => '',
            'controls' => true

        ]
    ],

    /**************************
      * HTML Editor Components
    **************************/

    'htmlCKEditor' => [
        'category' => 'Html',
        'dialog' => [
            'title' => 'Dialog HTML Editor',
            'component' => 'dialog-html-ckeditor',
            'types' =>  [
                [
                    "value" => "ClassicEditor",
                    "label" => "Classic"
                ],
                [
                    "value" => "InlineEditor",
                    "label" => "Inline"
                ],
                [
                    "value" => "BalloonEditor",
                    "label" => "Balloon"
                ],
                [
                    "value" => "BalloonBlockEditor",
                    "label" => "Balloon Block"
                ],
                [
                    "value" => "DecoupledEditor",
                    "label" => "Document"
                ]
            ],

            'frontRules' => $frontRulesText,
            'backRules' => $backRulesText
        ],
        'input' => [
            'label' => 'Html Editor',
            'inputType'=> 'Html',
            'component' => 'html-ckeditor',
            'tableElement' => 'table-element-html'
        ],
        'data' => [
            'label' => 'Editor Label',
            'helper' => '',
            'type' => 'ClassicEditor',

        ]
    ],



    // 'datePicker' => [
    //     'category' => 'Date',
    //     'dialog' => [
    //         'title' => 'Dialog Date Picker',
    //         'component' => 'dialogInputDate',
    //     ],
    //     'input' => [
    //         'label' => 'Date Picker',
    //         'component' => 'el-date-picker',
    //         'delete' => true
    //     ],
    //     'data' => [
    //         'label' => 'Date Picker',
    //         'value' => '',
    //         'validateRules' => ['required'],
    //     ]
    // ],
    // 'inputCheckbox' => [
    //     'category' => 'Checks',
    //     'dialog' => [
    //         'title' => 'Dialog Input Checkbox',
    //         'component' => 'dialogInputCheckbox',
    //     ],
    //     'input' => [
    //         'label' => 'Checkbox',
    //         'component' => 'el-checkbox',
    //         'type' => 'checkbox',
    //         'delete' => true
    //     ],
    //     'data' => [
    //         'label' => 'Input Checkbox',
    //         'value' => true,
    //         'validateRules' => ['required'],
    //     ]
    // ],
    // 'inputRadio' => [
    //     'category' => 'Checks',
    //     'dialog' => [
    //         'title' => 'Dialog Input Radio',
    //         'component' => 'dialogRadioButton',
    //     ],
    //     'input' => [
    //         'label' => 'Radio',
    //         'component' => 'el-radio',
    //         'type' => 'radio',
    //         'delete' => true
    //     ],
    //     'data' => [
    //         'label' => 'Input Radio',
    //         'value' => true,
    //         'validateRules' => ['required'],
    //     ]
    // ],
    // ]

];
