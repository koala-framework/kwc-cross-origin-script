<?php
class CrossOriginScript_Kwc_CrossOriginScript_Form extends Kwc_Abstract_Form
{
    protected function _init()
    {
        parent::_init();
        $this->add(new Kwf_Form_Field_TextField('script_url', trl('Application JavaScript URL')))
            ->setWidth(500)
            ->setAllowBlank(false);
        $this->add(new Kwf_Form_Field_TextField('start_function', trl('JavaScript Start Function')))
            ->setWidth(200)
            ->setAllowBlank(false);
    }
}
