<?php

class Mofluid_Buildandroid_Model_Mysql4_Accounts extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the web_id refers to the key field in your database table.
        $this->_init('mofluid_buildandroid/accounts', 'mofluid_platform_id');
    }
}
