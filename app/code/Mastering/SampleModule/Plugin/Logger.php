<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 05/07/2018
 * Time: 18:07
 */

namespace Mastering\SampleModule\Plugin;


use Mastering\SampleModule\Console\Command\AddItem;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Logger
{
    /** @var OutputInterface $output */
    protected $output;

    public function beforeRun(AddItem $addItem, InputInterface $input, OutputInterface $output)
    {
        $output->writeln("beforeExecute AddItem");
    }

    public function aroundRun(AddItem $addItem, \Closure $proceed, InputInterface $input, OutputInterface $output)
    {
        $output->writeln("aroundExecute before AddItem");
        $proceed->call($addItem, $input, $output);
        $output->writeln("aroundExecute after AddItem");

        $this->output = $output;
    }

    public function afterRun(AddItem $addItem)
    {
        $this->output->writeln("afterExecute AddItem");
    }
}