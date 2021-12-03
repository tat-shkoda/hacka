<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollaborationController extends RestController
{

    public function accept(Collaboration $collaboration)
    {
//        ToDo services for update collaboration task status and users notifications
        return $this->sendResponse(true);
    }
}
