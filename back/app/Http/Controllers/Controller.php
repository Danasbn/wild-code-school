<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function sendJSONResponse ($data, $htppStatusCode = 200){

        // say to lumen send a JSON response, with specific status code 
        return response()->json($data, $htppStatusCode);
    }
}
