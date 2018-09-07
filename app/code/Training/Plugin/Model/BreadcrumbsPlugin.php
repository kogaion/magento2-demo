<?php


namespace Training\Plugin\Model;


use Magento\Theme\Block\Html\Breadcrumbs;

class BreadcrumbsPlugin
{
    public function beforeAddCrumb(Breadcrumbs $breadcrumbs, $crumbName, $crumbInfo)
    {
        if (array_key_exists("label", $crumbInfo) && isset($crumbInfo["label"])) {
            $crumbInfo["label"] = ">>>&nbsp;" . $crumbInfo["label"];
        }
        return [$crumbName, $crumbInfo];
    }

    public function aroundAddCrumb(Breadcrumbs $breadcrumbs, callable $proceed, $crumbName, $crumbInfo)
    {
        if (array_key_exists("label", $crumbInfo) && isset($crumbInfo["label"])) {
            $crumbInfo["label"] .= "(!)";
        }
        $proceed($crumbName, $crumbInfo);
    }
}