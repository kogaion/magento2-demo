<?php


namespace Training\Controllers\Controller\Adminhtml\MyArea;


use Magento\Backend\App\Action;

class Redirect extends Action
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
//        $this->_redirect("catalog/product/edit/id/1/");
        $this->_forward("edit", "product", "catalog", ["id" => 1]);
    }

    protected function _isAllowed()
    {
        return parent::_isAllowed();
    }
}