<?php

interface Magecom_ImportExport_Model_Import_Adapter_SourceInterface
{
    public function _init();
    public function next();
    public function rewind();
    public function seek($position);
}