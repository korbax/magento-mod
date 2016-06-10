<?php

class Magecom_ImportExport_Block_Adminhtml_Import_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array(
            'id'      => 'edit_form',
            'action'  => $this->getUrl('*/*/validate'),
            'method'  => 'post',
            'enctype' => 'multipart/form-data'
        ));
        $fieldset = $form->addFieldset('base_fieldset', array('legend' => Mage::helper('importexport')->__('Import Settings')));
        $fieldset->addField('entity', 'select', array(
            'name'     => 'entity',
            'title'    => Mage::helper('importexport')->__('Entity Type'),
            'label'    => Mage::helper('importexport')->__('Entity Type'),
            'required' => true,
            'values'   => Mage::getModel('importexport/source_import_entity')->toOptionArray()
        ));
        $fieldset->addField('behavior', 'select', array(
            'name'     => 'behavior',
            'title'    => Mage::helper('importexport')->__('Import Behavior'),
            'label'    => Mage::helper('importexport')->__('Import Behavior'),
            'required' => true,
            'values'   => Mage::getModel('importexport/source_import_behavior')->toOptionArray()
        ));
        $fieldset->addField(Mage_ImportExport_Model_Import::FIELD_NAME_SOURCE_FILE, 'file', array(
            'name'     => Mage_ImportExport_Model_Import::FIELD_NAME_SOURCE_FILE,
            'label'    => Mage::helper('importexport')->__('Select File to Import'),
            'title'    => Mage::helper('importexport')->__('Select File to Import'),
            'required' => true
        ));

        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
