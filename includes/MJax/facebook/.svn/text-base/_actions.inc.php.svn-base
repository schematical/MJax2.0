<?php
class MJaxFacebookLoginAction extends MJaxServerControlAction{
	protected $arrPermissions = array();
	public function __construct($objTargetControl, $strFunction, $arrPermissions = array()){
		parent::__construct($objTargetControl, $strFunction);
		$this->arrPermissions = $arrPermissions;
	}
 	public function Render(){
 		$strPerms = implode(',', $this->arrPermissions);
 		$strData = '{perms: "' . $strPerms . '"}';
 		
        $strRendered = 'function(objEvent){';
        $strRendered .= 'FB.login(function(objResponse) {';
  
        $strRendered .= sprintf("MJax.TriggerControlEvent(objEvent, '%s', '%s', objResponse);", $this->objEvent->Selector, $this->objEvent->EventName);
       
  		//$strRendered .= 'console.log(objResponse);';
		$strRendered .= sprintf('}, %s)', $strData);
        //The following wont render anything unless blnOnce is set to true
        $strRendered .= $this->objEvent->RenderUnbind();
        $strRendered .= '}';
        return $strRendered;
    }
	
	
}