<?php
require_once("prepend.inc.php");
class lab extends MLCSiteForm{
     protected $txtToolBar = null;
     protected $btnUpdate = null;
     public function Form_Create(){
         parent::Form_Create();
         $this->txtToolBar = new MJaxTextBox($this, 'txtToolBar');
         $this->txtToolBar->Text = $this->pnlMLCToolBar->Text;
         $this->btnUpdate = new MJaxLinkButton($this, 'btnUpdate');
         $this->btnUpdate->Text = 'Update Tool Bar';
         $this->btnUpdate->AddAction(new MJaxClickEvent(), new MJaxServerControlAction($this, 'btnUpdate_click'));

     }
     public function btnUpdate_click(){
         $this->SetToolBarText($this->txtToolBar->Text);
         $this->blnSkipMainWindowRender = true;
         
     }
}
lab::Run('lab');
?>
