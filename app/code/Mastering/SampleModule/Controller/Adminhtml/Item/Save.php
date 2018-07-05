<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 05/07/2018
 * Time: 11:10
 */

namespace Mastering\SampleModule\Controller\Adminhtml\Item;


use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Request\Http\Proxy;
use Mastering\SampleModule\Controller\Adminhtml\Index\Index;
use Mastering\SampleModule\Model\ItemFactory;

class Save extends Action
{
    protected $itemFactory;

    public function __construct(Context $context, ItemFactory $itemFactory)
    {
        parent::__construct($context);
        $this->itemFactory = $itemFactory;
    }

    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function execute()
    {
        /** @var Proxy $request */
        $request = $this->getRequest();
        $this->itemFactory->create()->setData($request->getPostValue()["general"])->save();
        return $this->resultRedirectFactory->create()->setPath(Index::PATH);
    }
}