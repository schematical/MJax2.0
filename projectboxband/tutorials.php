<?php
require_once("prepend.inc.php");
class adapters extends PBBForm{

    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Chicago On The Rocks - A show about whats happening with Chicago's bars, bands, clubs, DJs";
       
    }
    
}
adapters::Run('adapters');
?>