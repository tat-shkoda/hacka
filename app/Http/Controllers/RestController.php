<?php

namespace App\Http\Controllers;


class RestController extends Controller
{
    /**
     * success response method.
     *
     * @param $data
     * @param string $message
     * @param string $type
     * @return JsonResource|RestController
     */
    public function sendResponse($data, string $message = '', string $type = 'success')
    {
        return response()->json($data, 200);
    }
}
