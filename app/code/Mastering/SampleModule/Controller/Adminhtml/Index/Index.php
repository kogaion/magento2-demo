<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 15:37
 */

namespace Mastering\SampleModule\Controller\Adminhtml\Index;


use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{

    /**
     * @inheritdoc
     * @return Raw
     */
    public function execute()
    {
        /**
         * @var Raw $result
         */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello Admins!');
        return $result;
    }
}