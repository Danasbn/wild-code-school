<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Name extends Model {
    protected $table = 'argonautes';
  //
public static function list() {
        $results = app('db')->select("SELECT `name` FROM `argonautes`");
        return $results;
}


}