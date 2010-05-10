<?php
require_once("prepend.inc.php");
class index extends MLCSiteForm{
    protected $pnlCaseStudyPanel = null;
    protected $pnlSideBar = null;
    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Matt Lea Consulting - Your source for custom built Web Applications, Embbedable Media, API, and pretty much anything you can dream of";
        $this->pnlCaseStudyPanel = new MLCCaseStudyPanel($this);
        $this->pnlSideBar = new MLCSideBarPanel($this);
    }
}
index::Run('index');
?>