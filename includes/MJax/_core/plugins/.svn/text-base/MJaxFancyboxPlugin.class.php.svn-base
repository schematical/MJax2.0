<?php
/*
 *This class will apply the nivo slider jquery plugin to a control(Only tested witht he nivo slide show class)
 */
class MJaxFancyboxPlugin extends MJaxPluginBase{
	const ON_CLOSE = 'onClosed';
    protected $arrProperties = array();
    protected $intDuration = null;
    protected $blnTriggerNow = false;
    public function  __construct($objForm, $arrProperties = array()) {
        parent::__construct($objForm);
        $this->objForm->AddHeaderAsset(new MJaxCssHeaderAsset(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__ . '/jquery.fancybox-1.3.4.css'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.fancybox-1.3.4.js'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.easing-1.3.pack.js'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.mousewheel.js'));
        
        $this->arrProperties = $arrProperties;
        
    }
    public function Render($blnPrint = true){
        if(!$this->blnModified){
            return;
        }
        $this->arrProperties[self::ON_CLOSE] = sprintf("function(){ $('%s').trigger('fancybox-close'); }", $this->strSelector);
        $strProperties = MJaxApplication::ConvertArrayToJason($this->arrProperties);
        $strRendered = sprintf("$('%s').fancybox(%s);", $this->strSelector, $strProperties);
        if($this->blnTriggerNow){
        	$strRendered .= sprintf("$('%s').trigger('click');", $this->strSelector);
        }
        $this->blnModified = false;
        if($blnPrint){
            _p($strRendered, false);
        }else{
            return $strRendered;
        }
    }
 	public function __set($strName, $mixValue) {
        switch ($strName) {
          case "TriggerNow":
                try {
                    return ($this->blnTriggerNow = QType::Cast($mixValue, QType::Boolean));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
         default:
                try {
                    return parent::__set($strName, $mixValue);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }
    
}
?>
