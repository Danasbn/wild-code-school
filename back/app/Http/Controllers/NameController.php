<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function home()
    {

        echo 'home road';
    }

    public function list()
    {

        // recovery of all names
        $names = Name::list();
        return $this->sendJSONResponse(
            $names,
            200
        );
    }

    public function add(Request $request){
        // recovering name value sent in POST request
        $newName = $request->input('name');
        //dd($newName);

        // saving new name in db

        // starting with empty name instance
        $name = new Name();
        $name->name = $newName;
        $name->updated_at = null; // null when created, should be effective only in update 
        $name->save();
        return $this->sendJSONResponse(
            $name,
            201 // Custom HTTP code meaning Created
        );
    }

    //
}
