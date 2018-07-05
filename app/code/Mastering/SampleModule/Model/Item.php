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
 * @method Item setName(string $name)
 * @method Item setDescription(string $description = null)
 * @method Item setIsObjectNew(bool $new)
 */
class Item extends AbstractModel
{
    protected $_eventPrefix = "mastering_sample_item";

    public function _construct()
    {
        $this->_init(ItemDb::class);
        parent::_construct();
    }
}