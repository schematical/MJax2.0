<?php
/* 
 *This class will apply the qtip plugin to an Dom Element
 */
class MJaxAutoCompletePlugin extends MJaxPluginBase{
    protected $strUrl = null;
    protected $arrOptions = array();
    public function  __construct($objForm, $strUrl, $arrOptions = null) {
        parent::__construct($objForm);
        $this->objForm->AddHeaderAsset(new MJaxCssHeaderAsset(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__ . '/jquery.autocomplete.css'));
        $this->objForm->AddHeaderAsset(new MJaxCssHeaderAsset(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__ . '/thickbox.css'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.autocomplete.js'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.bgiframe.min.js'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.ajaxQueue.js'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/thickbox-compressed.js'));
        $this->strUrl = $strUrl;
        if(is_null($arrOptions)){
        
			$this->arrOptions['width'] = '260';
			$this->arrOptions['selectFirst'] = 'false';	
        }else{
        	$this->arrOptions = $arrOptions;
        }
    }
    public function Render($blnPrint = true){
        if(!$this->blnModified){
            return;
        }
        
        $strRendered = '';
        //$strRendered .= sprintf("$('%s').flushCache();", $this->strSelector);
        $strRendered .= sprintf("$('%s').autocomplete('%s', %s);", $this->strSelector, $this->strUrl, json_encode($this->arrOptions));
        $this->blnModified = false;        
        if($blnPrint){
            _p($strRendered, false);
        }else{
            return $strRendered;
        }
    }
    
}
?>
