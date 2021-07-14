<?php

namespace App\Service;

class ProductHandler{

    /**
     * 获取商品总额
     * @param $products
     * @return float|int
     */
    public function getTotalPrice($products){
        $price = array_column($products,'price');
        return array_sum($price);

    }

    /**
     * 按分类筛选商品，并按价格从大大小排序
     * @param $products
     * @param $type
     * @return bool
     */
    public function filterProducts($products,$type){
        $product = [];
        foreach ($products as $item){
            if ($item['type'] == $type){
                $product[] = $item;
            }
        }
        function sort($a,$b){
            if ($a['price'] == $b['price']) return 0;
            return $a['price'] > $b['price'] ? 1 : -1;
        }
        return usort($product,'sort');
    }

    /**
     * 日期格式转换成时间戳
     * @param $date
     * @return false|int
     */
    public function dateToTimestamp($date){
        return strtotime($date);
    }

}