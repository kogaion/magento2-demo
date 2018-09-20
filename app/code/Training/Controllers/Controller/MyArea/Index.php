<?php


namespace Training\Controllers\Controller\MyArea;


use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
        /** @var Raw $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $page->setContents("Hello world");
        return $page;
    }
}