<?php
require_once("prepend.inc.php");
class freeStuff extends MLCSiteForm{
    protected $pnlSideBar = null;
    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Matt Lea Consulting - Your source for custom built Web Applications, Embbedable Media, API, and pretty much anything you can dream of";

        $this->pnlSideBar = new MLCSideBarPanel($this);
    }

}
freeStuff::Run('freeStuff');
?>