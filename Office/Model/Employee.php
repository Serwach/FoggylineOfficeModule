<?php

namespace Foggyline\Office\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    const ENTITY = 'foggyline_office_employee';

    public function _construct()
    {
        $this->_init('Foggyline\Office \Model
\ResourceModel\Employee');
    }
}
