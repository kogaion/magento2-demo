<?php


namespace Training\RenderingFlow\Helper\Plugin;


use Magento\Catalog\Helper\Product\View;
use Magento\Framework\View\Result\Page;
use Psr\Log\LoggerInterface;

class CatalogProductView
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * CatalogProductView constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param View $subject
     * @param View $result
     * @param Page $resultPage
     * @param $product
     * @param null $params
     * @return View
     */
    public function afterInitProductLayout(View $subject, View $result, Page $resultPage, $product, $params = null)
    {
        $layout = $resultPage->getLayout()->getUpdate()->asString();
        $this->logger->info(json_encode($layout));

        return $result;
    }
}