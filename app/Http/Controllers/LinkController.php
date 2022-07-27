<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
//    public function generateStr($length = 6){
//
//        return $randomString;
//    }
    public static function create(){
        $data = request()->validate([
            'link' => 'required|string|max:1000',
        ]);
        $data['shorted'] = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 6);
        Link::create($data);

        return $data;
    }
    public static function getProperty(){
        $data = request()->validate([
            'shorted' => 'required|string|max:10',
        ]);
        $get = Link::where('shorted', $data['shorted'])->first();

        if($get == null){
            $response = [
                'status' => 'false',
                'message' => 'link not found'
            ];
            return $response;
        }
        return $get;
    }
}
