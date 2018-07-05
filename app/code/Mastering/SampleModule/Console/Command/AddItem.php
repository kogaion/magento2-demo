<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 03/07/2018
 * Time: 17:11
 */

namespace Mastering\SampleModule\Console\Command;


use Magento\Framework\Console\Cli;
use Mastering\SampleModule\Model\ItemFactory;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddItem extends Command
{
    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_DESCRIPTION = 'description';

    protected $itemFactory;
    protected $logger;

    public function __construct(ItemFactory $itemFactory, LoggerInterface $logger)
    {
        $this->itemFactory = $itemFactory;
        $this->logger = $logger;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName("mastering:item:add")
            ->setDescription("Adds a new item")
            ->addArgument(self::INPUT_KEY_NAME, InputArgument::REQUIRED, "Item name")
            ->addArgument(self::INPUT_KEY_DESCRIPTION, InputArgument::OPTIONAL, "Item description")
        ;

        parent::configure();
    }

    /**
     * @inheritdoc
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $item = $this->itemFactory->create();
        $item->setName($input->getArgument(self::INPUT_KEY_NAME));
        $item->setDescription($input->getArgument(self::INPUT_KEY_DESCRIPTION));
        $item->setIsObjectNew(true);
        $item->save();

        $this->logger->debug("Item \"{$item->getName()}\" was created!");

        return Cli::RETURN_SUCCESS;
    }
}