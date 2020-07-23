<?php

namespace Foggyline\Office\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Department extends
    AbstractDb
{
    protected function _construct()
    {
        $this->_init('foggyline_office_department', 'entity_id');
    }
}
