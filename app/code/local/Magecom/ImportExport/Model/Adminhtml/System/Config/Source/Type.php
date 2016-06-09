<?php

class Magecom_ImportExport_Model_System_Config_Source_Type
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label' => Mage::helper('adminhtml')->__('Data1')),
            array('value' => 1, 'label' => Mage::helper('adminhtml')->__('Data2')),
            array('value' => 2, 'label' => Mage::helper('adminhtml')->__('Data3')),
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
            0 => Mage::helper('adminhtml')->__('Data1'),
            1 => Mage::helper('adminhtml')->__('Data2'),
            3 => Mage::helper('adminhtml')->__('Data3'),
        );
    }
}