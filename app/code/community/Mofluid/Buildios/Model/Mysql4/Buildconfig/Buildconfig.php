<?php
class Mofluid_Buildios_Model_Mysql4_Buildconfig extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init('mofluid_buildios/buildconfig', 'mofluid_platform_id'); 
    }
}
