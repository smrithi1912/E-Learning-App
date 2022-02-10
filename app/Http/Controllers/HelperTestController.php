<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperTestController extends Controller
{
    //
    public function checkHelper()
    {
        $value = getMyText();
        $arrValue = makeArray($value);
        return $arrValue;
    }
}
