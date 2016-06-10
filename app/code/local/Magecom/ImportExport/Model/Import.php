<?php

class Magecom_ImportExport_Model_Import extends Mage_ImportExport_Model_Import
{


    protected function _getSourceAdapter($sourceFile)
    {
//        return Mage_ImportExport_Model_Import_Adapter::findAdapterFor($sourceFile);
        return Magecom_ImportExport_Model_Import_Adapter::findAdapterFor($sourceFile);
    }
}