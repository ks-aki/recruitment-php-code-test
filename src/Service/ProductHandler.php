<?php

namespace App\Service;

class ProductHandler
{

    /**
     * 获取商品总价格 单位为分
     * @param array $productList 商品数组
     * @return int
     */
    public function getTotalPrice(array $productList): int
    {
        $totalPrice = 0;
        if (!empty($productList)) {
            foreach ($productList as $k=>$v) {
                $price = $v['price'] ?? 0;
                $totalPrice += $price;
            }
        }

        return $totalPrice;
    }

    /**
     * 二维数组排序
     * @param array $array 排序的数组
     * @param string $field 排序的字段
     * @param string|int $sort 排序类型  SORT_ASC     SORT_DESC
     * @return array
     */
    public function dataSort(array $array, string $field, string $sort = SORT_DESC): array
    {
        $keysValue = [];
        foreach ($array as $k => $v) {
            $keysValue[$k] = $v[$field];
        }
        array_multisort($keysValue, $sort, $array);
        return $array;
    }

    /**
     * 格式化日期
     * @param string $date
     * @return false|int
     */
    public function formatTime(string $date)
    {
        return strtotime($date);
    }

}