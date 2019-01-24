<?php
class CrossOriginScript_Kwc_CrossOriginScript_Model extends Kwf_Component_FieldModel
{
    protected function _init()
    {
        parent::_init();
        $this->_dependentModels['Attributes'] = new Kwf_Model_FieldRows(array(
            'fieldName' => 'attributes'
        ));
    }
}
