<?php


class Magecom_ImportExport_Model_Import_Adapter_Csv implements Import
{
    protected function _getAllowedExtensions()
    {
        return array('csv');
    }    
}