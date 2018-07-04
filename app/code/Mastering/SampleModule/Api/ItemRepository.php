<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 04/07/2018
 * Time: 11:41
 */

namespace Mastering\SampleModule\Api;



interface ItemRepository
{
    /**
     * @return \Mastering\SampleModule\Api\Data\Item[]
     */
    public function getList(): array;
}