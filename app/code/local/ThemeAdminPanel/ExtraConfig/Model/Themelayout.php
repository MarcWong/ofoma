<?php class ThemeAdminPanel_ExtraConfig_Model_Themelayout
{
    public function toOptionArray()
    {
        return array(
            array('value'=>0, 'label'=>Mage::helper('ExtraConfig')->__('Fullwidth')),
            array('value'=>1, 'label'=>Mage::helper('ExtraConfig')->__('Boxed'))            
        );
    }

}?>