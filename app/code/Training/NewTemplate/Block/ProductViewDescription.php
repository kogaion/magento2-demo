<?php


namespace Training\NewTemplate\Block;


class ProductViewDescription extends \Magento\Catalog\Block\Product\View\Description
{
    protected $_template = "Training_NewTemplate::product/view/description.phtml";

    public function setTemplate($template)
    {
        return parent::setTemplate("Training_NewTemplate::product/view/description.phtml");
    }
}