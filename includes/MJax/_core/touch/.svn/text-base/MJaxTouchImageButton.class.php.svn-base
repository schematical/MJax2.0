<?php
/* 
 * This is the MJaxTouch version of the link button
 */
class MJaxTouchImageButton extends MJaxTouchControl{


    public function __construct($objParentControl,$strControlId = null) {
        parent::__construct($objParentControl,$strControlId);

        $this->AddCssClass(MJaxApplication::CssClass('MJaxTouchImageButton'));
        $this->Attr('src', '#');
    }
    public function Render($blnPrint = true){
        //Render Actions first if applicable
        $strRendered = parent::Render();

        $strRendered .= sprintf("<img id='%s' name='%s' %s></img>", $this->strControlId, $this->strControlId,  $this->GetAttrString());
        if($blnPrint){
            _p($strRendered, false);
        }else{
            return $strRendered;
        }
    }
    /////////////////////////
    // Public Properties: GET
    /////////////////////////
    public function __get($strName) {
        switch ($strName) {
            case "Src": return $this->Attr('src');
            default:
                try {
                    return parent::__get($strName);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }
    /////////////////////////
    // Public Properties: SET
    /////////////////////////
    public function __set($strName, $mixValue) {
        switch ($strName) {
            case "Src":
                try {
                    return ($this->Attr('src', QType::Cast($mixValue, QType::String)));
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
