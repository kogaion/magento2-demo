<?php


namespace Training\Ui\Model\Customer;


use Magento\Customer\Model\FileProcessorFactory;
use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory as CustomerCollectionFactory;
use Magento\Eav\Model\Config;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponent\DataProvider\FilterPool;
use Magento\Ui\DataProvider\EavValidationRules;
use Psr\Log\LoggerInterface;

class DataProvider extends \Magento\Customer\Model\Customer\DataProvider
{
    protected $logger;

    public function __construct(string $name, string $primaryFieldName, string $requestFieldName, EavValidationRules $eavValidationRules, CustomerCollectionFactory $customerCollectionFactory, Config $eavConfig, FilterPool $filterPool, LoggerInterface $logger, FileProcessorFactory $fileProcessorFactory = null, array $meta = [], array $data = [], ContextInterface $context = null, bool $allowToShowHiddenAttributes = true)
    {
        $this->logger = $logger;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $eavValidationRules, $customerCollectionFactory, $eavConfig, $filterPool, $fileProcessorFactory, $meta, $data, $context, $allowToShowHiddenAttributes);
        $this->logger->info(serialize($data));
    }
}