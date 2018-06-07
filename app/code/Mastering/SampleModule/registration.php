<?php
/**
 * Created by PhpStorm.
 * User: Kogaion
 * Date: 6/7/2018
 * Time: 3:56 PM
 */


use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Mastering_SampleModule',
    __DIR__
);