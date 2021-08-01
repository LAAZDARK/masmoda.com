<?php

namespace App\Http\Controllers\Admin;

//Providers

//Models
//Helpers and Class

// use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\File;
use App\Http\Controllers\ManagerController;
use App\Models\Image;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Validation\Rule;


class ImageController extends ManagerController
{
    public function uploadImageBase64(Request $request)
    {

        try {

            $input = $request->all();

            $input['title']   = $request->input('title', '');
            $input['alt']   = $request->input('alt', '');
            $input['disk']  = $request->input('disk', 'public');
            $input['folder']  = $request->input('folder', 'images');
            $input['quality'] = $request->input('quality', 100);
            $input['format']  = $request->input('format', 'jpg');
            $input['resize']  = $request->input('resize', 'widen');
            $input['isTemp']  = $request->input('isTemp', true);

            $input['isSave']  = $request->input('isSave', true);


            $rules = [
                'image' => ['required'],
                'resize ' => [Rule::in([false,'fit', 'widen', 'heighten', 'resize'])],
                'format' => ['required'],
                'quality' => ['between:1,100'],
                'width' => ['required', 'min:1'],
                'height' => ['required', 'min:1']
            ];

            $tmpInputImage = $input['image'];
            if (isset($input['backRules']) && is_array($input['backRules'])) {

                $backRulesImage = array_column($input['backRules'], 'value');

                $rules['image']  = array_merge($rules['image'], $backRulesImage);

                $fSetup = tmpfile();
                $input['image']  = $this->_getTemporalFile($input, $fSetup);
            }


            $validator = Validator::make($input, $rules);

            if ($validator->fails())  return $this->sendError('Validator', $validator->errors()->all(), 422);

            $input['image'] = $tmpInputImage;


            $image = $this->_makeImage($input);
            if ($input['isSave'])
                $image->save();


            return $this->sendResponse($image, "ImageController uploadImageBase64");
        } catch (Exception $e) {
            return $this->sendError('ImageController store', $e->getMessage(), $e->getCode());
        }
    }



    public function uploadImageFile(Request $request)
    {

        try {

            $input = $request->all();
            // dd($input['image']);
            $input['title']   = $request->input('title', '');
            $input['alt']   = $request->input('alt', '');
            $input['disk']  = $request->input('disk', 'public');
            $input['folder']  = $request->input('folder', 'images');
            $input['quality'] = $request->input('quality', 100);
            $input['format']  = $request->input('format', 'jpg');
            $input['resize']  = $request->input('resize', 'widen');
            $input['isTemp']  = $request->input('isTemp', true);


            $img = InterventionImage::make($input['image']);

            $img = $this->_getImageResize($img, $input['resize'], $input['width'], $input['height']);


            $widenThumbnail = $this->_getPercentage($input['width'], 30);
            $heightThumbnail = $this->_getPercentage($input['height'], 30);

            $imgThumbnail  =  $this->_getImageResize(clone $img, 'widen', $widenThumbnail, $heightThumbnail);

            $fileData = (string) $img->encode($input['format'], (int)$input['quality']);
            $fileDataThumbnail = (string) $imgThumbnail->encode($input['format'], (int)$input['quality']);

            $nameFile = $this->_generateName();

            $path = $this->_getPath($nameFile, $input['folder'], $input['format']);
            $pathThumb = $this->_getPath($nameFile, $input['folder'] . DIRECTORY_SEPARATOR . 'thumb', $input['format']);

            $isSave = Storage::disk($input['disk'])->put($path, $fileData);
            Storage::disk($input['disk'])->put($pathThumb, $fileDataThumbnail);


            if ($input['disk'] == 'public') $path = 'storage/' . $path;
            if ($input['disk'] == 'public') $pathThumb = 'storage/' . $pathThumb;

            if (!$isSave) throw new Exception(trans('webcms::storage.notstorage'), 500);

            $image = new Image();
            $image->fill($input);
            $image->path = $path;
            $image->pathThumb = $pathThumb;
            // $image->save();


            return $this->sendResponse($image, "ImageController image");
        } catch (Exception $e) {
            return $this->sendError('ImageController store', $e->getMessage(), $e->getCode());
        }
    }


    private function _getTemporalFile($input, $fSetup)
    {
        $tmpImage = (string) InterventionImage::make($input['image'])->encode($input['format']);
        fwrite($fSetup, $tmpImage);
        $path = stream_get_meta_data($fSetup)['uri'];
        $file =  new File($path);
        return $file;
    }




    private function _makeImage($input)
    {

        try {

            $img = InterventionImage::make($input['image']);


            if($input['resize'] != false)
                $img = $this->_getImageResize($img, $input['resize'], $input['width'], $input['height']);



            $widenThumbnail = $this->_getPercentage($input['width'], 30);
            $heightThumbnail = $this->_getPercentage($input['height'], 30);

            $imgThumbnail  =  $this->_getImageResize(clone $img, 'widen', $widenThumbnail, $heightThumbnail);

            $fileData = (string) $img->encode($input['format'], (int)$input['quality']);
            $fileDataThumbnail = (string) $imgThumbnail->encode($input['format'], (int)$input['quality']);

            $nameFile = $this->_generateName();

            $path = $this->_getPath($nameFile, $input['folder'], $input['format']);
            $pathThumb = $this->_getPath($nameFile, $input['folder'] . DIRECTORY_SEPARATOR . 'thumb', $input['format']);

            $isSave = Storage::disk($input['disk'])->put($path, $fileData);
            Storage::disk($input['disk'])->put($pathThumb, $fileDataThumbnail);


            if ($input['disk'] == 'public') $path = 'storage/' . $path;
            if ($input['disk'] == 'public') $pathThumb = 'storage/' . $pathThumb;

            if (!$isSave) throw new Exception(trans('webcms::storage.notstorage'), 500);

            $image = new Image();
            $image->fill($input);
            $image->path = $path;
            $image->pathThumb = $pathThumb;

            return $image;
        } catch (Exception $e) {
            throw $e;
        }
    }






    private function _getPath($name, $path = null, $extension = null)
    {
        if ($path) {
            $path = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        }

        $ext = (is_null($extension)) ? '' : '.' . $extension;

        return $path . $name . $ext;
    }


    private function _generateName($numBytes = 15)
    {
        $bytes = random_bytes($numBytes);
        return bin2hex($bytes);
    }

    private function _getPercentage($total, $percentage)
    {
        if ($total > 0) {
            $tmp = ($percentage / 100) * $total;
            return round($tmp, 2);
        } else {
            return 0;
        }
    }

    private function _getImageResize($img, $resize, $width, $height)
    {

        switch ($resize) {
            case 'fit':
                $img = $img->fit((int) $width, (int) $height);
                break;
            case 'widen':
                $img = $img->widen((int) $width);
                break;
            case 'heighten':
                $img = $img->heighten((int) $height);
                break;
            case 'resize':
                $img = $img->resize((int) $width, (int) $height);
                break;
        }

        return $img;
    }
}
