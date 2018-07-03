<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 15:32
 */

namespace Mastering\SampleModule\Controller\Index;


use Magento\Framework\App\Action\Action;
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
        $result->setContents('Hello World!');
        return $result;
    }
}