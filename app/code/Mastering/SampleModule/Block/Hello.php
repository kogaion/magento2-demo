<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 16:35
 */

namespace Mastering\SampleModule\Block;


use Magento\Framework\View\Element\Template;
use Mastering\SampleModule\Model\Item;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

/**
 * Class Hello
 * @package Mastering\SampleModule\Block
 * @method string getLabel()
 */
class Hello extends Template
{
    protected $itemCollectionFactory;

    public function __construct(Template\Context $context, CollectionFactory $itemCollectionFactory, array $data = [])
    {
        $this->itemCollectionFactory = $itemCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->itemCollectionFactory->create()->getItems();
    }
}