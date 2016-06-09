<?php

class Magecom_ImportExport_Model_System_Config_Source_Behavior
{
    /**
     * Prepare and return array of import behavior.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
//            array(
//                'value' => Mage_ImportExport_Model_Import::BEHAVIOR_APPEND,
//                'label' => Mage::helper('importexport')->__('Append Complex Data')
//            ),
            array(
                'value' => Mage_ImportExport_Model_Import::BEHAVIOR_REPLACE,
                'label' => Mage::helper('importexport')->__('Replace Existing Complex Data')
            ),
//            array(
//                'value' => Mage_ImportExport_Model_Import::BEHAVIOR_DELETE,
//                'label' => Mage::helper('importexport')->__('Delete Entities')
//            )
        );
    }
}
