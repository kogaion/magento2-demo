<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 06/07/2018
 * Time: 15:07
 */

namespace Mastering\HelloWorld\Controller\Hello;


use Magento\Framework\App\Action\Action;

class World extends Action
{
    public function execute()
    {
        echo "Yesss!";
        var_dump(__METHOD__);
    }
}