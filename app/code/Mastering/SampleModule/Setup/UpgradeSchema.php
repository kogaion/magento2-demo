<?php
/**
 * Created by PhpStorm.
 * User: Kogaion
 * Date: 6/11/2018
 * Time: 2:21 PM
 */

namespace Mastering\SampleModule\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.0', '<>')) {
            return;
        }
        
        $setup->startSetup();
        
        $setup->getConnection()->addColumn(
            $setup->getTable('mastering_sample_item'),
            'description',
            [
                'type' => Table::TYPE_TEXT,
                'nullable' => true,
                'comment' => 'Item Description'
            ]
        );
        
        $setup->endSetup();
    }
}