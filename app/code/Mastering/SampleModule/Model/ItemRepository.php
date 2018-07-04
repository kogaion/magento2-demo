<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 04/07/2018
 * Time: 11:42
 */

namespace Mastering\SampleModule\Model;


use Mastering\SampleModule\Api\ItemRepository as ItemRepositoryApi;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryApi
{
    protected $collectionFactory;

    public function __construct(CollectionFactory $itemCollectionFactory)
    {
        $this->collectionFactory = $itemCollectionFactory;
    }

    /**
     * @return Item[]
     */
    public function getList(): array
    {
        return $this->collectionFactory->create()->getItems();
    }
}