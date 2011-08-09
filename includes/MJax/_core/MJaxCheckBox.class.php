<?php
/* 
 * This is a simple button class for use with the mjax framework
 */
class MJaxCheckBox extends MJaxControl{
	protected $blnChecked = false;
    public function Render($blnPrint = true){
    	if($this->blnChecked){
    		$this->attr('checked', true);
    	}else{
    		unset($this->arrAttr['checked']);
    	}
        //Render Actions first if applicable
        $strRendered = parent::Render();        
        $strRendered .= sprintf("<input id='%s' name='%s' type='checkbox' value='%s' %s></input>", $this->strControlId, $this->strControlId, $this->strText,  $this->GetAttrString());
        if($blnPrint){
            _p($strRendered, false);
        }else{
            return $strRendered;
        }
    }
    public function ParsePostData(){
    	if (array_key_exists($this->strControlId, $_POST)) {
			if ($_POST[$this->strControlId])
				$this->blnChecked = true;
			else
				$this->blnChecked = false;
		} else {
			$this->blnChecked = false;
		}
    }
/////////////////////////
    // Public Properties: GET
    /////////////////////////
    public function __get($strName) {
        switch ($strName) {
            case "Checked": return $this->blnChecked;            
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
        $this->blnModified = true;
        switch ($strName) {
            case "Checked":
                try {
                    return ($this->blnChecked = QType::Cast($mixValue, QType::Boolean));
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