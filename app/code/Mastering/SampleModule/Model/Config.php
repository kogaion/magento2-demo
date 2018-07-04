<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 04/07/2018
 * Time: 10:48
 */

namespace Mastering\SampleModule\Model;


use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_ENABLED = 'mastering/general/enabled';
    const XML_PATH_CRON_SCHEDULE = 'mastering/general/cron_schedule';

    private $config;

    public function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }
}