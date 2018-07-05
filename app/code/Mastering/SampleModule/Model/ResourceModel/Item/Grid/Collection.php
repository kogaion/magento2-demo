<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 04/07/2018
 * Time: 12:22
 */

namespace Mastering\SampleModule\Model\ResourceModel\Item\Grid;


use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Mastering\SampleModule\Model\ResourceModel\Item;
use Psr\Log\LoggerInterface as Logger;

class Collection extends SearchResult
{
    public function __construct(EntityFactory $entityFactory, Logger $logger, FetchStrategy $fetchStrategy, EventManager $eventManager, string $mainTable = null, string $resourceModel = null, string $identifierName = null, string $connectionName = null)
    {

        $mainTable = Item::TABLE_NAME;
        $resourceModel = Item::class;

        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel, $identifierName, $connectionName);
    }
}