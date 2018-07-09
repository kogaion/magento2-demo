<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 09/07/2018
 * Time: 17:32
 */

namespace Mastering\Backend\Controller\Adminhtml\Index;


use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Index extends Action
{
    public function execute()
    {
        /**
         * @var Page $page
         */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $page->setActiveMenu("Mastering_Backend::second_level");
        $page->getConfig()->getTitle()->prepend(__('Our Custom Title'));
        return $page;
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed("Mastering_Backend::top");
    }
}