<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface;

class area extends Controller
{
    private $title = 'area';

    function form() { 
        return view('area-form', [
             'title' => "$this->title : Form",
            ]);
    }

    function result(ServerRequestInterface $request) {
        $data = $request->getParsedBody(); 
        $type = (double)$data['type'];
        $width = (double)$data['width'];
        $height = (double)$data['height'];
        $area = $type * $width * $height;
        if ($type == 1 ){
            $name = "Rectangle";
        } 
            else {
                $name = "Triangle" ;
            }
        return view('area-result', [ 'type' => $name, 'width'=> $width, 'height' => $height,
                    'area' => $area]);
      
        }
}
