<?php
require_once("prepend.inc.php");
class forStartUps extends MLCSiteForm{
    protected $pnlSideBar = null;
    protected $btnContact = null;
    protected $btnContact2 = null;
    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Matt Lea Consulting - Your source for custom built Web Applications, Embbedable Media, API, and pretty much anything you can dream of";

        $this->btnContact = new QLinkButton($this);
        $this->btnContact->CssClass = MLCCssClass::callToAction;
        $this->btnContact->Text = "Contact us right now for a free consolation";
        $this->btnContact->AddAction(new QClickEvent(), MLCActionDriver::GetFormAction('ShowSignUpDlg'));
        
        $this->btnContact2 = new QLinkButton($this);
        $this->btnContact2->CssClass = MLCCssClass::callToAction;
        $this->btnContact2->Text = "Contact us right now for a free consolation";
        $this->btnContact2->AddAction(new QClickEvent(), MLCActionDriver::GetFormAction('ShowSignUpDlg'));
    }

}
forStartUps::Run('forStartUps');
?>