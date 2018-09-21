<?php


namespace Training\NewBlockType\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;
use Training\NewBlockType\Block\My\Type;

class Index extends Action
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getLayout()->addBlock(Type::class, "my_block_type", "content");
        return $resultPage;
    }
}