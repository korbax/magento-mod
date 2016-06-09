<?php

class Magecom_ImportExport_Model_System_Config_Source_Entity
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label' => Mage::helper('adminhtml')->__('Product')),
//            array('value' => 1, 'label' => Mage::helper('adminhtml')->__('Customer')),
//            array('value' => 2, 'label' => Mage::helper('adminhtml')->__('Attributes')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            0 => Mage::helper('adminhtml')->__('Product'),
//            1 => Mage::helper('adminhtml')->__('Customer'),
//            3 => Mage::helper('adminhtml')->__('Attributes'),
        );
    }
}