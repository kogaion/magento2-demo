<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 09/07/2018
 * Time: 12:00
 */

namespace Mastering\ToDoCrud\Model\ResourceModel\Item;



use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mastering\ToDoCrud\Model\Item;
use Mastering\ToDoCrud\Model\ResourceModel\Item as ItemDb;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Item::class, ItemDb::class);
    }
}