<?php
class MJaxJSHeaderAsset extends MJaxHeaderAsset{
    
    public function  __construct($strSrc) {
        $this->strSrc = $strSrc;
    }
    public function  __toString() {
        return sprintf('<script type="text/javascript" src="%s"></script>', $this->strSrc);
    }
	public function RenderAsJSCall($blnPrint){    	
    	$strRendered = sprintf('$("head").append($(\'<scr\' + \'ipt type="text/javascript" src="%s"></scr\' + \'ipt>\'));', $this->strSrc);
    	if($blnPrint){
            _p($strRendered, false);
        }else{
            return $strRendered;
        }
    }
}

?>