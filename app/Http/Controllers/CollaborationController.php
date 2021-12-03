<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollaborationController extends RestController
{

    public function accept(Collaboration $collaboration)
    {
        return $this->sendResponse(true);
    }
}
