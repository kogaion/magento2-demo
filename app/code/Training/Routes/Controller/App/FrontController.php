<?php


namespace Training\Routes\Controller\App;


use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterListInterface;
use Psr\Log\LoggerInterface;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(RouterListInterface $routerList, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::__construct($routerList, $response);
        $this->logger = $logger;
    }

    public function dispatch(RequestInterface $request)
    {
        $routerList = [];
        foreach ($this->_routerList as $router) {
            $routerList[] = $router;
        }

//        var_dump($routerList);

        $list = array_map(function ($param) {
            return get_class($param);
        }, $routerList);

        $this->logger->info(">>> <" . get_class($this) . "> : <routes>: " . serialize($list));

        return parent::dispatch($request);
    }
}