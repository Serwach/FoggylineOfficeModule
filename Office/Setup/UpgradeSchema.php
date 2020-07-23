<?php

namespace Foggyline\Office\Setup;

use Foggyline\Office\Model\Employee;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
        $employeeEntityTable = Employee::ENTITY . '_entity';
        $departmentEntityTable = 'foggyline_office_department';
        $setup->getConnection()
            ->addForeignKey(
                $setup->getFkName($employeeEntityTable, 'department_id',
                    $departmentEntityTable, 'entity_id'),
                $setup->getTable($employeeEntityTable),
                'department_id',
                $setup->getTable($departmentEntityTable),
                'entity_id',
                Table::ACTION_CASCADE
            );
        $setup->endSetup();
    }
}
