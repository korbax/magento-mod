<?php
/**
 * Magecom ImportExport
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@magecom.net so we can send you a copy immediately.
 *
 * @category    Magecom
 * @package     Magecom_ImportExport
 * @copyright   Copyright (c) 2016 Magecom, Inc. (http://www.magecom.net)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
/**
 * Class Magecom_ImportExport_ImportController
 *
 * @category    Magecom
 * @package     Magecom_ImportExport
 * @author      Magecom
 */

class Magecom_ImportExport_Adminhtml_ImportController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
//        var_dump('ddddddddd'); exit;

        $maxUploadSize = Mage::helper('importexport')->getMaxUploadSize();
        $this->_getSession()->addNotice(
            $this->__('Total size of uploadable files must not exceed %s', $maxUploadSize)
        );
//        $this->_initAction()
//            ->_title($this->__('Import'))
//            ->_addBreadcrumb($this->__('Import'), $this->__('Import'));

        $this->renderLayout();
    }

    public function startAction()
    {
//        var_dump('ddddddddd5555'); exit;
        $data = $this->getRequest()->getPost();
        if ($data) {
            $this->loadLayout(false);

            /** @var $resultBlock Mage_ImportExport_Block_Adminhtml_Import_Frame_Result */
            $resultBlock = $this->getLayout()->getBlock('import.frame.result');
            /** @var $importModel Mage_ImportExport_Model_Import */
            $importModel = Mage::getModel('importexport/import');

            try {
                $importModel->importSource();
                $importModel->invalidateIndex();
                $resultBlock->addAction('show', 'import_validation_container')
                    ->addAction('innerHTML', 'import_validation_container_header', $this->__('Status'));
            } catch (Exception $e) {
                $resultBlock->addError($e->getMessage());
                $this->renderLayout();
                return;
            }
            $resultBlock->addAction('hide', array('edit_form', 'upload_button', 'messages'))
                ->addSuccess($this->__('Import successfully done.'));
            $this->renderLayout();
        } else {
            $this->_redirect('*/*/index');
        }
    }

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('system/convert/import');
    }

}