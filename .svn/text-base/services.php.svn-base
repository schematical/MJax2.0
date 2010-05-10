<?php
require_once("prepend.inc.php");
class services extends MLCSiteForm{
    protected $pnlSideBar = null;
    protected $btnContact2 = null;
    protected $btnContact3 = null;
    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Matt Lea Consulting - Your source for custom built Web Applications, Embbedable Media, API, and pretty much anything you can dream of";

        $this->pnlSideBar = new MLCSideBarPanel($this);

        $this->btnContact2 = new QLinkButton($this);
        $this->btnContact2->CssClass = MLCCssClass::callToAction;
        $this->btnContact2->Text = "For a quote please contact us by clicking here";
        $this->btnContact2->AddAction(new QClickEvent(), MLCActionDriver::GetFormAction('ShowSignUpDlg'));

        $this->btnContact3 = new QLinkButton($this);
        $this->btnContact3->CssClass = MLCCssClass::callToAction;
        $this->btnContact3->Text = "For a quote please contact us by clicking here";
        $this->btnContact3->AddAction(new QClickEvent(), MLCActionDriver::GetFormAction('ShowSignUpDlg'));

    }

}
services::Run('services');
?>