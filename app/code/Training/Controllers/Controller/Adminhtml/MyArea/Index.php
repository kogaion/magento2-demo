<?php


namespace Training\Controllers\Controller\Adminhtml\MyArea;


use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $page->setContents("start admin");
        return $page;
    }

    protected function _isAllowed()
    {
        return parent::_isAllowed() && $this->getRequest()->getParam("secret", false);
    }
}