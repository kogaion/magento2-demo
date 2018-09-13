<?php


namespace Training\Config\Observer;


use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;
use Training\Config\Model\Config\ConfigInterface;

class ControllerActionPredispatchObserver implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var ConfigInterface
     */
    protected $config;

    public function __construct(ConfigInterface $config, LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->config = $config;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $this->logger->info("{" . serialize($this->config->getName()) . "}");
        $this->logger->info("{" . serialize($this->config->getId()) . "}");
        $this->logger->info("{" . serialize($this->config->getType()) . "}");
        $this->logger->info("{" . serialize($this->config->getDescription()) . "}");
    }
}