<?php


namespace Training\Routers\Controller;


use Magento\Framework\App\Router\NoRouteHandler as AppNoRouteHandler;

class NoRouteHandler extends AppNoRouteHandler
{
    /** @inheritdoc */
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        if ($request->getFrontName() == "admin") {
            return false;
        }

        $request->setModuleName("cms")->setControllerName("index")->setActionName("index");

        return true;
    }
}