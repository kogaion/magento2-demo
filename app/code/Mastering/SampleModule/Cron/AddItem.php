<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 17:50
 */

namespace Mastering\SampleModule\Cron;


use Mastering\SampleModule\Model\Config;
use Mastering\SampleModule\Model\ItemFactory;

class AddItem
{
    protected $itemFactory;
    protected $config;

    public function __construct(ItemFactory $itemFactory, Config $config)
    {
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }

    /**
     * @throws \Exception
     */
    public function execute()
    {
        if (!$this->config->isEnabled()) {
            return;
        }

        $this->itemFactory->create()
            ->setName("Scheduled item")
            ->setDescription("Created at " . date("c"))
            ->save();
    }
}