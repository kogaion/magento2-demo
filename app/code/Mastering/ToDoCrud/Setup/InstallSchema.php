<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 09/07/2018
 * Time: 11:19
 */

namespace Mastering\ToDoCrud\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('mastering_todocrud_item')
        );

        $table->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary' => true,
                'unsigned' => true,

            ],
            'Entity ID'
        )->addColumn(
            'title',
            Table::TYPE_TEXT,
            255,
            [
                'nullable' => false,
            ],
            'Entity title'
        )->addColumn(
            'create_time',
            Table::TYPE_TIMESTAMP,
            null,
            [],
            'Creation time'
        )->addColumn(
            'update_time',
            Table::TYPE_TIMESTAMP,
            null,
            [],
            'Change time'
        )->addColumn(
            'is_active',
            Table::TYPE_BOOLEAN,
            null,
            [
                'nullable' => false,
                'default' => 1,
            ],
            'Is active'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}