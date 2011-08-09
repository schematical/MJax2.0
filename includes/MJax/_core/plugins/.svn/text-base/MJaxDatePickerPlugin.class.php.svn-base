<?php
/* 
 * This class bridges the gap between the datepicker plugin and the MJax Framework
 * 
 * 
 *  */
class MJaxDatePickerPlugin extends MJaxPluginBase{
    protected $arrProperties = array();
    public function  __construct($objForm, $arrProperties = array()) {
        parent::__construct($objForm);
        $this->arrProperties = $arrProperties;        
       	$this->objForm->AddHeaderAsset(new MJaxCssHeaderAsset('http://jqueryui.com/themes/base/jquery.ui.all.css'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.ui-i18n.min.js')); 
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.ui.core.js'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.ui.widget.js'));
        $this->objForm->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.ui.datepicker.js'));
        //$this->objForm->AddHeaderAsset(new MJaxCssHeaderAsset(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__ . '/MJax/ui.selectmenu.css'));
        $this->objForm->AddHeaderAsset(new MJaxCssHeaderAsset('http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-darkness/jquery-ui.css'));
        
    }
    public function Render($blnPrint = true){
        if(!$this->blnModified){
            return;
        }
        $strProperties = MJaxApplication::ConvertArrayToJason($this->arrProperties);
        $strRendered = sprintf("$('%s').datepicker(%s);", $this->strSelector, $strProperties);
        $this->blnModified = false;
        if($blnPrint){
            _p($strRendered, false);
        }else{
            return $strRendered;
        }
    }
    
}
?>
