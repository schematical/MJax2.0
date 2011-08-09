<?php
class MJaxFacebookLoginPanel extends MJaxPanel{
	  public $lnkLogin = null;
	  public function __construct($objParentControl, $strControlId = null) {
      	 parent::__construct($objParentControl, $strControlId);
       	 $this->strTemplate = __DOCROOT__ . __TPL_ASSETS__ . '/panels/facebook/MJaxFacebookLoginPanel.tpl.php';
       
       	 $this->lnkLogin = new MJaxLinkButton($this);
       	 $this->lnkLogin->Text = 'Facebook Login';
       	 
	  }
	  public function AddAction($objEvent, $objAction){
	  	 $this->lnkLogin->AddAction($objEvent, $objAction);
	  }
	
}
?>