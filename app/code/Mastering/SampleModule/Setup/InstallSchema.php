<?php
/**
 * Created by PhpStorm.
 * User: Kogaion
 * Date: 6/8/2018
 * Time: 1:50 PM
 */

namespace Mastering\SampleModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        $table = $setup->getConnection()->newTable(
            $setup->getTable('mastering_sample_item')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['nullable' => false, 'identity' => true, 'primary' => true],
            'Table ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Table Name'
        )->addIndex(
            $setup->getIdxName('mastering_sample_item', ['name']),
            ['name']
        )->setComment(
            'Sample Items'
        );
        
        $setup->getConnection()->createTable($table);
        
        $setup->endSetup();
    }
}