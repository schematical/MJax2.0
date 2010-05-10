<?php
require_once("prepend.inc.php");
class download extends PBBForm{

    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Project Box Band - A simple content managment system for musicains, coedians, and all performing artists";       
       
    }
    
}
download::Run('download');
?>