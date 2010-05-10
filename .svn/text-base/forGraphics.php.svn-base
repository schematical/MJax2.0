<?php
require_once("prepend.inc.php");
class forGraphics extends MLCSiteForm{
    protected $pnlSideBar = null;
    protected $btnContact2 = null;
    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Matt Lea Consulting - Your source for custom built Web Applications, Embbedable Media, API, and pretty much anything you can dream of";

        $this->pnlSideBar = new MLCSideBarPanel($this);

        $this->btnContact2 = new QLinkButton($this);
        $this->btnContact2->CssClass = MLCCssClass::callToAction;
        //$this->btnContact2->Text = "Click here for your free consoltation";
        $this->btnContact2->AddAction(new QClickEvent(), MLCActionDriver::GetFormAction('ShowSignUpDlg'));
    }

}
forGraphics::Run('forGraphics');
?>