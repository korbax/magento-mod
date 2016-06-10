<?php

class Magecom_ImportExport_Model_Import_Adapter
{

    public static function factory($type, $options = null)
    {
        if (!is_string($type) || !$type) {
            Mage::throwException(Mage::helper('importexport')->__('Adapter type must be a non empty string'));
        }
        $adapterClass = __CLASS__ . '_' . ucfirst(strtolower($type));

        if (!class_exists($adapterClass)) {
            Mage::throwException("'{$type}' file extension is not supported");
        }
        $adapter = new $adapterClass($options);

        if (! $adapter instanceof Mage_ImportExport_Model_Import_Adapter_Abstract) {
            Mage::throwException(
                Mage::helper('importexport')->__('Adapter must be an instance of Mage_ImportExport_Model_Import_Adapter_Abstract')
            );
        }
        return $adapter;
    }

    public static function findAdapterFor($source)
    {
        return self::factory(pathinfo($source, PATHINFO_EXTENSION), $source);
    }
}
