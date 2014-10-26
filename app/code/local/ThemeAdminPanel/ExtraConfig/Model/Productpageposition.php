<?php class ThemeAdminPanel_ExtraConfig_Model_Productpageposition
{
    public function toOptionArray()
    {
        return array(
            array('value'=>0, 'label'=>Mage::helper('ExtraConfig')->__('Right sidebar')),
            array('value'=>1, 'label'=>Mage::helper('ExtraConfig')->__('Below product info'))            
        );
    }

}?>