<?php


namespace Training\Routers\Model;


use Magento\Framework\Logger\Handler\System;
use Monolog\Logger;

class LoggerHandler extends System
{
    /**
     * @var int
     */
    protected $loggerType = Logger::NOTICE;
}