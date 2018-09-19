<?php


namespace Training\Routes\Model\Observer;


use Magento\Framework\App\RouterListInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogRoutes implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var RouterListInterface
     */
    protected $routerList;

    public function __construct(LoggerInterface $logger, RouterListInterface $routerList)
    {
        $this->logger = $logger;
        $this->routerList = $routerList;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $this->logger->info(">>> {{{" . __CLASS__ . "}}}: <routes>: " . json_encode(array_values((array) $this->routerList)));
    }
}