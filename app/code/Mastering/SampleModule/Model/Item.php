<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 15:10
 */

namespace Mastering\SampleModule\Model;


use Magento\Framework\Model\AbstractModel;
use Mastering\SampleModule\Model\ResourceModel\Item as ItemDb;

/**
 * Class Item
 * @package Mastering\SampleModule\Model
 * @method string getName()
 * @method string getDescription()
 */
class Item extends AbstractModel
{
    public function _construct()
    {
        $this->_init(ItemDb::class);
        parent::_construct();
    }
}