<?php
class Mofluid_Thememofluidelegant_Model_Mysql4_Colors extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
       $this->_init('mofluid_thememofluidelegant/mofluid_themes_colors', 'mofluid_color_id');
    }
}
