<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface;

class mulv2 extends Controller
{
    private $title = 'mulv2';

    function form() { 
        return view('mulv2-form', [
             'title' => "$this->title : Form",
            ]);
    }
    
    function result(ServerRequestInterface $request) {
    $data = $request->getParsedBody(); 
    $num = (int)$data['num'];
    
    
    if (!empty($data['check']))
        $check =$data['check'];
    else 
        $check = [];
    
        return view('mulv2-result', [ 
            'num' => $num,
            'check' => $check
            ]);
    }
}
