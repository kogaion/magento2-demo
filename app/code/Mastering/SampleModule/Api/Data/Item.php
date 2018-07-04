<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 04/07/2018
 * Time: 11:38
 */

namespace Mastering\SampleModule\Api\Data;


interface Item
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string|null
     */
    public function getDescription();
}