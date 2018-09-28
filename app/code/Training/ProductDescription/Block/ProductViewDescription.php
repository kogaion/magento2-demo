<?php


namespace Training\ProductDescription\Block;


use Magento\Catalog\Block\Product\View\Description;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Psr\Log\LoggerInterface;

class ProductViewDescription extends \Magento\Framework\View\Element\Template
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(Template\Context $context, LoggerInterface $logger,array $data = [])
    {
        $this->logger = $logger;
        parent::__construct($context, $data);
    }

//    protected function _toHtml()
//    {
//        return "description: " . parent::_toHtml();
//    }

    public function getDescription()
    {
        return "some desc";
    }

    public function getLogger()
    {
        return $this->logger;
    }

    public function beforeToHtml(Description $description)
    {
        $this->setTemplate("Training_ProductDescription::catalog/productViewDescription.phtml");
//        $this->logger->warning("File: " . $this->getTemplateFile());
        return null;
    }
}