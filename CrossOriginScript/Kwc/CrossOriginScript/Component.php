<?php
class CrossOriginScript_Kwc_CrossOriginScript_Component extends Kwc_Abstract
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['componentName'] = 'Cross Origin Script';
        $ret['componentCategory'] = 'admin';
        $ret['componentIcon'] = 'page_white_code';
        $ret['ownModel'] = 'Kwf_Component_FieldModel';
        $ret['extConfig'] = 'Kwf_Component_Abstract_ExtConfig_Form';
        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer)
    {
        $ret = parent::getTemplateVars($renderer);
        $ret['id'] = $this->_getRow()->id;
        $ret['tag'] = $this->_getRow()->tag;

        $ret['config'] = array(
            'scriptUrl' => $this->_getRow()->script_url
        );
        $ret['rootElementClass'] .= ' '.$this->_getBemClass('--loading');
        return $ret;

    }
}
