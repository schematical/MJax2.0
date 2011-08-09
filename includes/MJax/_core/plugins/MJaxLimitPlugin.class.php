<?php
/*
 *This class will apply the placeholder jquery plugin to a control
 */
class MJaxLimitPlugin extends MJaxPluginBase{
	protected $strCountEleSelector = null;
	protected $intLimitCount = null;    
    protected $intDuration = null;
    protected $blnTriggerNow = false;
    public function  __construct($objForm, $intLimitCount, $strCountEleSelector) {
        parent::__construct($objForm);
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.limit-1.2.js'));  
        $this->intLimitCount = $intLimitCount;
        $this->strCountEleSelector = $strCountEleSelector;
    }
    public function Render($blnPrint = true){
        if(!$this->blnModified){
            return;
        }        
        $strRendered = sprintf("$('%s').limit('%s', '%s');", $this->strSelector, $this->intLimitCount, $this->strCountEleSelector);
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
