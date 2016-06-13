<?php
/**
 * Magecom
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
 * Magecom_ImportExport_Helper_Data class
 *
 * @category    Magecom
 * @package     Magecom_ImportExport
 * @author      Magecom
 */

class Magecom_ImportExport_Helper_Data extends Mage_Core_Helper_Abstract
{
    const DETAILED_LOG = 'magecom_importexport/import/log';


    public function isDetailed()
    {
        $storeId = Mage::app()->getStore();
        return Mage::getStoreConfig(self::DETAILED_LOG, $storeId);
    }

}