<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 06/07/2018
 * Time: 15:07
 */

namespace Mastering\HelloWorld\Controller\Hello;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class World extends Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;

        parent::__construct($context);
    }

    public function execute()
    {
        $page = $this->pageFactory->create();
        return $page;
    }
}