<?php


namespace Training\Controllers\Controller\Product;


use Magento\Catalog\Controller\Product\View as CatalogProductView;

class View extends CatalogProductView
{
    public function execute()
    {
        $this->_forward("index", "myArea", "ctrl");
    }

    public function beforeExecute(CatalogProductView $subject)
    {
        return null;
    }

    public function afterExecute(CatalogProductView $subject, $result)
    {
        $this->_forward("index", "myArea", "ctrl");
    }

//    public function aroundExecute(CatalogProductView $subject, callable $proceed)
//    {
//        $this->_forward("index", "index", "cms");
//    }
}