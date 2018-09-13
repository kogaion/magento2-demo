<?php


namespace Training\Config\Model\Config;


use Magento\Framework\Config\DataInterface;

interface ConfigInterface extends DataInterface
{
    public function getId();
    public function getName();
    public function getDescription();
    public function getType();
}