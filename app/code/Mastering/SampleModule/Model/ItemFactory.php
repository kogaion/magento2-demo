<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 17:13
 */

namespace Mastering\SampleModule\Model;


use Magento\Framework\ObjectManagerInterface;

class ItemFactory
{
    protected $objectManager;
    protected $instanceName;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
        $this->instanceName = Item::class;
    }

    /**
     * @param array $data
     * @return Item
     */
    public function create(array $data = [])
    {
        return $this->objectManager->create($this->instanceName, $data);
    }

}