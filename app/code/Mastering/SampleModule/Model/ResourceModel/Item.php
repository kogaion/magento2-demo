<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 15:06
 */

namespace Mastering\SampleModule\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    const TABLE_NAME = 'mastering_sample_item';
    const ID_NAME = 'id';

    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::ID_NAME);
    }
}