<?php


namespace Training\NewTemplate\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;
use Psr\Log\LoggerInterface;
use Training\NewTemplate\Block\Custom;

class Index extends Action
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(Context $context, LoggerInterface $logger)
    {
        parent::__construct($context);
        $this->logger = $logger;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        /**
         * @var Page $result
         * @var Custom $block
         */
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $block = $result->getLayout()->addBlock(Custom::class, "my.custom.template.block", "content");
        $block->setTemplate("Training_NewTemplate::my/custom.phtml");

        return $result;
    }
}