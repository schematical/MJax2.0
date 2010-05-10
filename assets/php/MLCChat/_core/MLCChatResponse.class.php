<?php
/* 
 * This class will house the response
 */
class MLCChatResponse{
    protected $arrHeaderData = array();
    protected $arrSession = array();
    public function SetHeader($strKey, $strValue){
        $this->arrHeaderData[$strKey] = $strValue;
        
    }
    public function __toXml(){
        $strReturn = "<response>\n";
        $strReturn .= "\t<head>\n";
        //Insert headers
        foreach($this->arrHeaderData as $strKey=>$strValue){
            $strReturn .= sprintf("\t\t<%s>%s</%s>\n", $strKey, $strValue, $strKey);
        }
        $strReturn .= "\t</head>\n";
        $strReturn .= "\t<body>\n";
        //if it is a super client we are responding to we will need to refresh multiple convos at once
        foreach($this->arrSession as $objSession){
            $strReturn .= $objSession->__toXml();
        }
        $strReturn .= "\t</body>\n";
        $strReturn .= "</response>\n";
        return $strReturn;

    }
    public function CleanSessions(){
        foreach($this->arrSession as $objSession){
            $objSession->Clean();
        }
    }
    public function AddSession($objSession){
        $this->arrSession[] = $objSession;
    }
}
?>
