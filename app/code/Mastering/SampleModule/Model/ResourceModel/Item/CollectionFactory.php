<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 16:37
 */

namespace Mastering\SampleModule\Model\ResourceModel\Item;

use Magento\Framework\ObjectManagerInterface;

class CollectionFactory
{
    protected $objectManager;
    protected $instanceName;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
        $this->instanceName = Collection::class;
    }

    /**
     * @param array $data
     * @return Collection
     */
    public function create(array $data = [])
    {
        return $this->objectManager->create($this->instanceName, $data);
    }
}