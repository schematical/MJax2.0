<?php
require_once("prepend.inc.php");

class developers extends PBBForm{
    protected $btnSignUp = null;
    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Project Box Band - A simple content managment system for musicains, coedians, and all performing artists";       

        $this->btnSignUp = new QLinkButton($this);
        $this->btnSignUp->CssClass = MLCCssClass::callToAction;
        $this->btnSignUp->Text = "Sign Up Today!";
        $this->btnSignUp->AddAction(new QClickEvent(), MLCActionDriver::GetFormAction('btnSignUp_click'));

      
    }
    public function btnSignUp_click($strFormId, $strControlId, $strParameter){
        $this->ShowSignUpDlg();
    }
    
   
}
developers::Run('developers');
?>