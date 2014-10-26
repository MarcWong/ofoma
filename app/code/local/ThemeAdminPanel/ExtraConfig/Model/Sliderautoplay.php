<?php class ThemeAdminPanel_ExtraConfig_Model_Sliderautoplay
{
    public function toOptionArray()
    {
        return array(
            array('value'=>-1, 'label'=>Mage::helper('ExtraConfig')->__('Enable')),
            array('value'=>1, 'label'=>Mage::helper('ExtraConfig')->__('Disable'))            
        );
    }

}?>