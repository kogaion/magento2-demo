<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 09/07/2018
 * Time: 11:15
 */

namespace Mastering\ToDoCrud\Block;


use Magento\Framework\View\Element\Template;
use Mastering\ToDoCrud\Model\Item;
use Mastering\ToDoCrud\Model\ItemFactory;

class Crud extends Template
{
    protected $itemFactory;

    public function __construct(Template\Context $context, ItemFactory $itemFactory, array $data = [])
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        /**
         * @var Item $model
         */
//        $item = $this->itemFactory->create();
//        $item->setData("title", "Finish my Magento article");
//        $item->save();

        $loadedItem = $this->itemFactory->create();
        $loadedItem->load(2);

        var_dump($loadedItem->getTitle());
        var_dump($loadedItem->getData());

        $itemForCollection = $this->itemFactory->create();
        $itemCollection = $itemForCollection->getCollection();

        foreach ($itemCollection as $item) {
            var_dump("____");
            var_dump($item->getId());
            var_dump($item->getTitle());
        }
    }
}