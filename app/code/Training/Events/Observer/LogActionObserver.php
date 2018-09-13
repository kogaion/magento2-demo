<?php


namespace Training\Events\Observer;


use Magento\Framework\App\RequestInterface;
use Magento\Framework\Event;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogActionObserver implements ObserverInterface
{
    protected $logger;
    protected $request;

    public function __construct(LoggerInterface $logger, RequestInterface $request)
    {
        $this->logger = $logger;
        $this->request = $request;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        /**
         * @var Event $event
         */
        $event = $observer->getEvent();
        $this->logger->info(">>>" . $this->request->getPathInfo());
    }
}