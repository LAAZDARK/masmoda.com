<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Image extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $collection = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title',
        'alt',
        'width',
        'height',
        'path',
        'pathThumb',

        'aspectRatio',
        'aspectHeight',
        'aspectWidth',
        'cropWidth',
        'cropHeight',

        'component',
        'disk',
        'folder',
        'quality',
        'format',
        'mimeType',
        'resize',
        'isTemp',

        'fileName',
        'fileHashName',
        'filePath',
        'fileExtension',
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $casts = [

        'quality' => 'integer',
        'width' => 'integer',
        'height' => 'integer',
        'aspectHeight' => 'integer',
        'aspectWidth' => 'integer',
        'cropWidth' => 'integer',
        'cropHeight' => 'integer',
        'isTemp' => 'boolean'

    ];

    public function setIsTempAttribute($value)
    {

        if ($value === true || $value === 'true' || $value === 'TRUE' || $value === 1 || $value === '1') {
            $this->attributes['isTemp'] = true;
        } else {
            $this->attributes['isTemp'] = false;
        }
    }

    public function setWidthAttribute($value)
    {
        $this->attributes['width'] = intval($value);
    }
    public function setHeightAttribute($value)
    {
        $this->attributes['height'] = intval($value);
    }

    public function setAspectWidthAttribute($value)
    {
        $this->attributes['aspectWidth'] = intval($value);
    }
    public function setAspectHeightAttribute($value)
    {
        $this->attributes['aspectHeight'] = intval($value);
    }

    public function setCropWidthAttribute($value)
    {
        $this->attributes['cropWidth'] = intval($value);
    }
    public function setCropHeightAttribute($value)
    {
        $this->attributes['cropHeight'] = intval($value);
    }

    public function setQualityAttribute($value)
    {
        $this->attributes['quality'] = intval($value);
    }
}
