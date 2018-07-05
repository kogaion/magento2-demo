<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 05/07/2018
 * Time: 17:06
 */

namespace Mastering\SampleModule\Logger\Handler;


use Magento\Framework\Logger\Handler\Debug as DebugHandler;

class Debug extends DebugHandler
{
    protected $fileName = '/var/log/debug_mastering.log';
}