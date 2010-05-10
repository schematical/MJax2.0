<?php
require_once("prepend.inc.php");
class contact extends MJaxForm{
    protected $intCount = 0;
    protected $txtName = null;
    protected $lstInterest = null;
    protected $btnSubmit = null;
    protected function Form_Create(){
        $this->txtName = new MJaxTextBox($this, 'txtName');
        $this->txtName->Text = "Testing";
        $this->txtName->Animate(array('width'=>"'100Px'", 1500));

        $this->lstInterest = new MJaxListBox($this, 'lstInterest');
        $this->lstInterest->ApplyPlugin(new MJaxSelectMenuPlugin($this));
        $this->lstInterest->AddItem('Graphic Designer', 'designer');
        $this->lstInterest->AddItem('Start Up', 'startUp');
        $this->lstInterest->AddItem('Other', 'other');
        
        $this->btnSubmit = new MJaxButton($this, 'btnSubmit');
        $this->btnSubmit->Text = "Submit";
        $this->btnSubmit->AddAction(new MJaxClickEvent(), new MJaxServerControlAction($this, "btnSubmit_click"));
    }
    public function btnSubmit_click($strFormId, $strControlId, $strParameter){
        $this->txtName->Text = $this->lstInterest->SelectedItem->Text;
        $this->intCount += 1;
        $this->txtName->Animate(array('width'=> "'" . $this->intCount ."00Px'"));
        
    }

}
contact::Run('contact');
?>
