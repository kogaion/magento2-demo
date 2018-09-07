<?php


namespace Training\Plugin\Model;


use Magento\Theme\Block\Html\Footer;

class FooterPlugin
{
    public function afterGetCopyright(Footer $footer, $result)
    {
        return "Customized copyright!";
    }
}