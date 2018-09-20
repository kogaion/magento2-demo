<?php


namespace Training\Routers\Controller;


use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;
use Psr\Log\LoggerInterface;

class Router implements RouterInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var ActionFactory
     */
    protected $pathInfo;

    public function __construct(LoggerInterface $logger, ActionFactory $pathInfo)
    {
        $this->logger = $logger;
        $this->pathInfo = $pathInfo;
    }

    /**
     * Match application action by request
     *
     * @param RequestInterface $request
     * @return ActionInterface
     */
    public function match(RequestInterface $request)
    {
        $info = $request->getPathInfo();

        if (preg_match("%^/(.*?)-(.*?)-(.*?)$%", $info, $matches)) {

            $this->logger->info(serialize($info));

            $request->setPathInfo(sprintf("%s/%s/%s", $matches[1], $matches[2], $matches[3]));
            return $this->pathInfo->create(Forward::class, ["request" => $request]);
        }

        return null;
    }
}