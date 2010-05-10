<?php
require_once("prepend.inc.php");
class contact extends MLCSiteForm{
    protected $pnlSideBar = null;
    protected $pnlSignUpMain = null;
    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Matt Lea Consulting - Your source for custom built Web Applications, Embbedable Media, API, and pretty much anything you can dream of";
        
        $this->pnlSignUpMain = new MLCClientSignUpPanel($this, $this, 'pnlSignUp_close');

        $this->pnlSideBar = new MLCSideBarPanel($this);
    }
    public function pnlSignUp_close(){
        
    }

}
contact::Run('contact');
?>