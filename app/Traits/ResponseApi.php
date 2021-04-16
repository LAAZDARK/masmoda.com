<?php

namespace App\Traits;

trait ResponseApi
{

    /**

     * Función  que genera una estructura base para respuesta request

     *
     * @param int $code

     * @return \Illuminate\Http\Response

     */

    public function sendResponse($data, $messages = [], $code = 200)
    {
        if (!empty($messages)) {
            $messages = is_array($messages) ? $messages : [$messages];
        }
        $response = [

            'success' => true,

            'data' => $data,

            'messages' => $messages,

        ];

        return response()->json($response, $code);
    }

    /**

     * return error response.

     *

     * @return \Illuminate\Http\Response

     */

    public function sendError($error, $messages = [], $code = 400)
    {
        if (!empty($messages)) {
            $messages = is_array($messages) ? $messages : [$messages];
        }


        if (empty($code) || $code == 0) {
            $code  = 500;
        }

        $response = [

            'success' => false,

            'error' => $error,

            'messages' => $messages,

        ];

        return response()->json($response, $code);
    }
}
