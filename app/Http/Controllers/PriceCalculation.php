<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class PriceCalculation extends Controller
{
    private $title = 'Price Calculation';

    private $memberTypes = [
        'none' => [ 'name' => 'Non-member', 'discount' => 0.00 ],
        'silver' => [ 'name' => 'Silver Member', 'discount' => 5.00 ],
        'gold' => [ 'name' => 'Gold Member', 'discount' => 7.50 ],
        'platinum' => [ 'name' => 'Platinum Member', 'discount' => 10.00 ],
    ];

    function form(){
      return view('price-calculation-form', [
        'title' => "{$this->title} : Form",
        'memberTypes' => $this->memberTypes,
      ]);
    }

    function result(ServerRequestInterface $request) {
      $data = $request->getParsedBody();
      $memberType = $this->memberTypes[$data['memberType']]['name'];
      $discount = $this->memberTypes[$data['memberType']]['discount'];
      $price = (double)$data['price'];
      $discountCost = $discount/100 * $price;
      $netPrice = $price - $discountCost;
      return view('price-calculation-result', [
        'title' => "{$this->title} : Result",
        'memberType' => $memberType, 'price' => $price,
        'discount' => $discount, 'discountCost' => $discountCost,
        'netPrice' => $netPrice,
      ]);
    }

 
    function area(){
        return view('area-form', ['title' => "Area : Form",]);
    }

    function arearesult(ServerRequestInterface $request) {
        $data = $request->getParsedBody();
        $type = (int)$data['type'];
        $width = (double)$data['width'];
        $height = (double)$data['height'];
    
        if($type == 0){
            $typetxt = 'Rectangular';
            $area = $width * $height;
        }else{
            $typetxt = 'Triangle';
            $area = 0.5 * $width * $height;
        }
    
        return view('area-result', [
            'title' => "Area : Result",
            'type' => $typetxt, 'width' => $width,
            'height' => $height, 'area' => $area,
        ]);
    }


    function mul(){
        return view('mul-form', ['title' => "Multiplication Table : Form",]);
    }

    function mulresult(ServerRequestInterface $request){
        $data = $request->getParsedBody();
        $num = (int)$data['num'];
    
        return view('mul-result',[
            'title' => "Multiplication Table : Result",
            'num' => $num,
        ]);
    }

    //Mul V2 To Class
    function mulv2(){
        return view('mulv2-form', ['title' => "Multiplication Table : V2 Form",]);
    }

    function mulv2result(ServerRequestInterface $request){
        $data = $request->getParsedBody();
        $num = (int)$data['num'];
        if(empty($data['row'])){ $myrow = 1; }else{ $myrow = 0; }
        if(empty($data['col'])){ $mycol = 2; }else{ $mycol = 1; }
    
        return view('mulv2-result',[
            'title' => "Multiplication Table : V2 Result",
            'myrow' => $myrow,
            'mycol' => $mycol,
            'num' => $num,
        ]);
    }

}