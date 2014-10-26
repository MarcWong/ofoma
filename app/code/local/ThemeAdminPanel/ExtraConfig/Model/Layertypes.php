<?php class ThemeAdminPanel_ExtraConfig_Model_Layertypes
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('ExtraConfig')->__('Closed')),
            array('value'=>2, 'label'=>Mage::helper('ExtraConfig')->__('Opened'))            
        );
    }

}?>