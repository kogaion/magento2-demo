<?php
/**
 * Created by PhpStorm.
 * User: Kogaion
 * Date: 6/11/2018
 * Time: 2:31 PM
 */

namespace Mastering\SampleModule\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.0', '<>')) {
            return;
        }
        
        $setup->startSetup();
        
        $setup->getConnection()->update(
            $setup->getTable('mastering_sample_item'),
            [
                'description' => 'Default description',
            ],
            $setup->getConnection()->quoteInto('id = ?', 1)
        );
        
        $setup->endSetup();
    }
}