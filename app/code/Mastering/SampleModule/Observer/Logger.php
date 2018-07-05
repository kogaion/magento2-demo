<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 05/07/2018
 * Time: 17:35
 */

namespace Mastering\SampleModule\Observer;


use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class Logger implements ObserverInterface
{

    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $this->logger->debug("Item \"{$observer->getEvent()->getObject()->getName()}\" was created!");
    }
}