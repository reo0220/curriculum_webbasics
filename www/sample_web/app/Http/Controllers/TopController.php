<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TopController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです。";
        return view("top/index" , ["sampleValue" => $sampleValue]);
    }
}
