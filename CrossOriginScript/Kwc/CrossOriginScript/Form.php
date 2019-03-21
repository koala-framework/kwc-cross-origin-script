<?php
class CrossOriginScript_Kwc_CrossOriginScript_Form extends Kwc_Abstract_Form
{
    protected function _init()
    {
        parent::_init();
        $this->add(new Kwf_Form_Field_TextField('script_url', trlKwf('Application JavaScript URL')))
            ->setWidth(400)
            ->setAllowBlank(false);

        $this->add(new Kwf_Form_Field_TextField('tag', trlKwf('tag')))
            ->setWidth(100)
            ->setAllowBlank(false);

        $fs = $this->add(new Kwf_Form_Container_FieldSet(trlKwf('Configuration')));
        $multiFields = $fs->add(new Kwf_Form_Field_MultiFields('Attributes', trlKwf('Configuration')));
            $multiFields->fields->add(new Kwf_Form_Field_TextField('attribute', trlKwf('Attribute')));
            $multiFields->fields->add(new Kwf_Form_Field_TextField('value', trlKwf('Value')));
    }
}
