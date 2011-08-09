<?php
/* 
 * This is a simple button class for use with the mjax framework
 */
class MJaxLinkButton extends MJaxControl{
    
    public function __construct($objParentControl,$strControlId = null) {
        parent::__construct($objParentControl,$strControlId);

        $this->AddCssClass(MJaxApplication::CssClass('MJaxLinkButton'));
        $this->Attr('href', '#');
    }
    public function Render($blnPrint = true, $blnRenderAsAjax = false){
        //Render Actions first if applicable
        $strRendered = parent::Render();
    	if(!$blnRenderAsAjax){
            $strText = $this->strText;
        }else{
            $strText = QString::XmlEscape(trim($this->strText));
        }
        $strRendered .= sprintf("<a id='%s' name='%s' %s>%s</a>", $this->strControlId, $this->strControlId,  $this->GetAttrString(), $strText);
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
            case "Href": return $this->Attr('href');
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
            case "Href":
                try {
                    return ($this->Attr('href', QType::Cast($mixValue, QType::String)));
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
