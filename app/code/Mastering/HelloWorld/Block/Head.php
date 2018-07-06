<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 06/07/2018
 * Time: 16:31
 */

namespace Mastering\HelloWorld\Block;


use Magento\Framework\View\Asset\Repository;
use Magento\Framework\View\Element\Template;

class Head extends Template
{
    protected $assetRepository;

    public function __construct(Template\Context $context, array $data = [], Repository $assetRepository)
    {
        $this->assetRepository = $assetRepository;
        parent::__construct($context, $data);
    }

    public function getTestAssetUrl()
    {
        $asset = $this->assetRepository->createAsset("Mastering_HelloWorld::test.js");
        return $asset->getUrl();
    }
}