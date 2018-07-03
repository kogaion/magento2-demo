<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 17:50
 */

namespace Mastering\SampleModule\Cron;


use Mastering\SampleModule\Model\ItemFactory;

class AddItem
{
    protected $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    /**
     * @throws \Exception
     */
    public function execute()
    {
        $this->itemFactory->create()
            ->setName("Scheduled item")
            ->setDescription("Created at " . date("c"))
            ->save();
    }
}