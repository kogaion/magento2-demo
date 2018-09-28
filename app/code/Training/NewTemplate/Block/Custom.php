<?php


namespace Training\NewTemplate\Block;


use Magento\Framework\View\Element\Template;

class Custom extends Template
{
    public function getCustomData()
    {
        return [1, 2, 3];
    }
}