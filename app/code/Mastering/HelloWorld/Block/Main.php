<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 06/07/2018
 * Time: 15:24
 */

namespace Mastering\HelloWorld\Block;


use Magento\Framework\View\Element\Template;

/**
 * Class Main
 * @package Mastering\HelloWorld\Block
 * @method self setMessage(string $message)
 * @method string getMessage()
 * @method self setName(string $name)
 * @method string getName()
 */
class Main extends Template
{
    protected function _prepareLayout()
    {
        $this->setMessage("Hello again, world!");

        $this->setName($this->getRequest()->getParam("name"));
    }

    public function getGoodbyeMessage()
    {
        return "Goodbye, world.";
    }
}