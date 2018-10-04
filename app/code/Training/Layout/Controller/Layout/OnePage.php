<?php


namespace Training\Layout\Controller\Layout;


use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class OnePage extends Action
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
//        var_dump("executed");exit;
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}