<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 05/07/2018
 * Time: 11:04
 */

namespace Mastering\SampleModule\Ui;


use Magento\Ui\DataProvider\AbstractDataProvider;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class DataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(string $name, string $primaryFieldName, string $requestFieldName, $collectionFactory, array $meta = [], array $data = [])
    {
        /** @var CollectionFactory $collectionFactory */
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        $result = [];
        foreach ($this->collection->getItems() as $item) {
            $result[$item->getId()]['general'] = $item->getData();
        }
        return $result;
    }
}