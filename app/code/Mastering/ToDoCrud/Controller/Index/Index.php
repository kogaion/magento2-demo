<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 09/07/2018
 * Time: 11:08
 */

namespace Mastering\ToDoCrud\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}