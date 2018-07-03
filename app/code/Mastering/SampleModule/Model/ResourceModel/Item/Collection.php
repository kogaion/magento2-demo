<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 15:14
 */

namespace Mastering\SampleModule\Model\ResourceModel\Item;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mastering\SampleModule\Model\ResourceModel\Item;
use Mastering\SampleModule\Model\ResourceModel\Item as ItemDb;

class Collection extends AbstractCollection
{
    protected $_idFieldName = Item::ID_NAME;

    protected function _construct()
    {
        $this->_init(Item::class, ItemDb::class);
        return parent::_construct();
    }
}