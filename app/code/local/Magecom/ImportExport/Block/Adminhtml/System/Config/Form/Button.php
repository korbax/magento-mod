<?php

class Magecom_ImportExport_Block_Adminhtml_System_Config_Form_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /*
     * Set template
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('magecom/importexport/button-import.phtml');

//        return '&nbsp;&nbsp;<button onclick="editForm.startImport(\'' . $this->getUrl('*/*/start')
//        . '\', \'' . Mage_ImportExport_Model_Import::FIELD_NAME_SOURCE_FILE . '\');" class="scalable save"'
//        . ' type="button"><span><span><span>' . $this->__('Import') . '</span></span></span></button>';
    }

    /**
     * Return element html
     *
     * @param  Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->_toHtml();
    }

    /**
     * Return ajax url for button
     *
     * @return string
     */
    public function getAjaxCheckUrl()
    {
        return Mage::helper('adminhtml')->getUrl('adminhtml/adminhtml_atwixtweaks/check');
    }

    /**
     * Generate button html
     *
     * @return string
     */
    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setData(array(
                'id'        => 'atwixtweaks_button',
                'label'     => $this->helper('adminhtml')->__('Check'),
                'onclick'   => 'javascript:check(); return false;'
            ));

        return $button->toHtml();
    }
}