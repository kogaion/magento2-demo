<?php


namespace Training\Controllers\Controller\Product;


use Magento\Catalog\Controller\Product\View as CatalogProductView;

class View extends CatalogProductView
{
    public function execute()
    {
        $this->_forward("index", "myArea", "ctrl");
    }
}