<?php class ThemeAdminPanel_ExtraConfig_Model_Skins
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('ExtraConfig')->__('Use colors as set below')),
            array('value'=>2, 'label'=>Mage::helper('ExtraConfig')->__('Dark skin theme')),
            array('value'=>3, 'label'=>Mage::helper('ExtraConfig')->__('Green skin theme')),
            array('value'=>4, 'label'=>Mage::helper('ExtraConfig')->__('Lightblue skin theme')),
            array('value'=>5, 'label'=>Mage::helper('ExtraConfig')->__('Orange skin theme')),
            array('value'=>6, 'label'=>Mage::helper('ExtraConfig')->__('Red skin theme')),
            array('value'=>7, 'label'=>Mage::helper('ExtraConfig')->__('Cyan skin theme')),
            array('value'=>8, 'label'=>Mage::helper('ExtraConfig')->__('Pastel skin theme'))
        );
    }

}?>