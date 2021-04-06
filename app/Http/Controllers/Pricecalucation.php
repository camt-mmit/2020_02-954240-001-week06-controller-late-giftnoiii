<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface;

class Pricecalucation extends Controller
{
    private $title = 'Price Calculation';
    private $memberTypes = [ 'none' => [ 'name' => 'Non-member','discount' => 0.00 ],
                             'silver' => [ 'name' => 'Silver Member','discount' => 5.00 ],
                             'gold' => [ 'name' => 'Gold Member','discount' => 7.50 ],
                             'platinum' => [ 'name' => 'Platinum Member','discount' => 10.00 ],
    ];

    function form() { 
        return view('price-calculation-form', [
             'title' => "$this->title : Form",
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
               'memberType' => $memberType,
               'price' => $price,
               'discount' => $discount,
               'discountCost' => $discountCost,
               'netPrice' => $netPrice,
               ]);
    }
}

