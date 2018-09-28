<?php


namespace Training\ProductDescription\Block;


use Magento\Catalog\Block\Product\View\Attributes;

class ProductViewAttribute extends Attributes
{
    public function setTemplate($template)
    {
        $template = "Training_ProductDescription::catalog/product/attributes.phtml";
//        $this->_logger->warning("$template");
        return parent::setTemplate($template);
    }
}