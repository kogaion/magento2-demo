<?php


namespace Training\Routers\Controller;


use Magento\Framework\App\Router\NoRouteHandler as AppNoRouteHandler;
use Psr\Log\LoggerInterface;

class NoRouteHandler extends AppNoRouteHandler
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $config, LoggerInterface $logger)
    {
        parent::__construct($config);
        $this->logger = $logger;
    }

    /** @inheritdoc */
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $this->logger->info($request->getFrontName());

        if ($request->getFrontName() == "admin") {
            return false;
        }

        $request->setModuleName("cms")->setControllerName("index")->setActionName("index");

        return true;
    }
}