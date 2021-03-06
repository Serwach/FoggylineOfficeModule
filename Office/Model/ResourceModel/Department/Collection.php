<?php

namespace Foggyline\Office\Model\ResourceModel\Department;

use Magento\Framework\Model\ResourceModel
\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Foggyline\Office\Model\Department',
            'Foggyline\Office\Model\ResourceModel\Department'
        );
    }
}
