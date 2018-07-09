<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 09/07/2018
 * Time: 11:37
 */

namespace Mastering\ToDoCrud\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    const TABLE_NAME = 'mastering_todocrud_item';
    const TABLE_ID = 'id';

    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::TABLE_ID);
    }
}