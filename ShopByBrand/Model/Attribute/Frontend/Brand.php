<?php

namespace AHT\ShopByBrand\Model\Attribute\Frontend;

use Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend;
use Magento\Framework\DataObject;

class Brand extends AbstractFrontend
{
    public function getValue(DataObject $object)
    {
        $value = $object->getData($this->getAttribute()->getAttributeCode());
        return "<b>$value</b>";
    }
}
