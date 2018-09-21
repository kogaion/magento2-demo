<?php


namespace Training\ProductDescription\Block;


class ProductViewDescription extends \Magento\Catalog\Block\Product\View\Description
{
    protected function _toHtml()
    {
        return "description: " . parent::_toHtml();
    }
}