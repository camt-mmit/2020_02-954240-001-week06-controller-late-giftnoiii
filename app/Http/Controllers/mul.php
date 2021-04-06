<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface;


class mul extends Controller
{
    private $title = 'mul';

    function form() { 
        return view('mul-form', [
             'title' => "$this->title : Form",
            ]);
    }
    
    function result(ServerRequestInterface $request) {
    $data = $request->getParsedBody(); 
    $value = (int)$data['value'];
    return view('mul-result', [ 'value' => $value]);
    }
}

