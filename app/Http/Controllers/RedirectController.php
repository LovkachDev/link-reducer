<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function isExists($link){
        $isExist = Link::where('shorted', $link)->first();
        if(!$isExist){
            abort(404);
        }
        return $isExist;
    }
    public function redirect($link){
        if(!isset($this->isExists($link)->link)){
            return $this->isExists($link);
        }
        $url = $this->isExists($link)->link;
        return Redirect::to($url);
    }
}
