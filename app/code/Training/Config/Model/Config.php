<?php


namespace Training\Config\Model;


use Magento\Framework\Config\Data;
use Training\Config\Model\Config\ConfigInterface;

class Config extends Data implements ConfigInterface
{
    public function getId()
    {
        return $this->_data['id'] ?? 0;
    }

    public function getName()
    {
        return $this->_data['name'] ?? "no-name";
    }

    public function getDescription()
    {
        return $this->_data['description'] ?? "no-description";
    }

    public function getType()
    {
        return $this->_data['type'] ?? "no-type";
    }
}