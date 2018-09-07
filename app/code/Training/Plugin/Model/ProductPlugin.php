<?php


namespace Training\Plugin\Model;


use Magento\Catalog\Model\Product;

class ProductPlugin
{
    public function afterGetPrice(Product $product, $result)
    {
        return $result * 2.5;
    }
}