<?php class ThemeAdminPanel_ExtraConfig_Model_Productboxsize
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('ExtraConfig')->__('Default (4 products per row)')),
            array('value'=>2, 'label'=>Mage::helper('ExtraConfig')->__('Big (3 products per row)'))            
        );
    }

}?>