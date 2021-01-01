<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Validator;

class Validate{

    public static function registration($request,$class){
        return Validator::make($request->all(), $class::registrationRules());

    }


}