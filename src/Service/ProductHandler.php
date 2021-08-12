<?php

namespace App\Service;

use const http\Client\Curl\Features\UNIX_SOCKETS;

class ProductHandler
{
    public function getTotalPrice($products = array())
    {
        if(empty($propucts)) {
            return false;
        }
        $totalPrice = 0;
        foreach ($propucts as $v){
            $price = $product['price'] ?: 0;
            $totalPrice += $price;
        }
        return $totalPrice;
    }


    public function arrSort($products = array())
    {
        if(empty($propucts)) {
            return false;
        }
        return arsort($products);
    }


    public function updateTime($products = array())
    {
        if(empty($propucts)) {
            return false;
        }
        foreach ($products as $k => $v) {
            $products[$k]['create_at'] = strtotime($v['create_at']);
        }
        return $products;
    }


}