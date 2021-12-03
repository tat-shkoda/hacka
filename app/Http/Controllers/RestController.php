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
//        if ($data instanceof JsonResource) {
//            return $data->additional([
//                'type' => $type,
//                'message' => $message,
//            ]);
//        }

        return response()->json($data, 200);
    }
}
