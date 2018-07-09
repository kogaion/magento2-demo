<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 09/07/2018
 * Time: 11:50
 */

namespace Mastering\ToDoCrud\Model;


use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Mastering\ToDoCrud\Model\Api\Item as ItemApi;
use Mastering\ToDoCrud\Model\ResourceModel\Item as ItemDb;

class Item extends AbstractModel implements IdentityInterface, ItemApi
{
    const CACHE_TAG = 'mastering_todocrud_item';

    protected function _construct()
    {
        $this->_init(ItemDb::class);
        parent::_construct();
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}