<?php


namespace Training\NewBlockType\Block\My;


use Magento\Framework\View\Element\AbstractBlock;

class Type extends AbstractBlock
{
    protected function _toHtml()
    {
        return "<b>My block</b>";
    }
}