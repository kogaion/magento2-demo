<?php


namespace Training\Rendering\Model\Observer;


use Magento\Framework\App\Response\Http;
use Magento\Framework\Event;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogOutput implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        /**
         * @var Event $event
         * @var Http $response
         */
        $event = $observer->getEvent();
        $response = $event->getResponse();

        $this->logger->notice(__CLASS__ . ": <body-length>: " . strlen($response->getBody()));
    }
}