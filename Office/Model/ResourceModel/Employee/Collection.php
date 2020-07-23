<?php

namespace Foggyline\Office\Model\ResourceModel\Employee;

use Magento\Eav\Model\Entity\Collection\AbstractCollection;

class Collection extends
    AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\Employee',
            'Foggyline\Office\Model\ResourceModel\Employee');
    }
}
