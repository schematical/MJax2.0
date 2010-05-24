<?php
require_once("prepend.inc.php");
class lab extends MLCSiteForm{
     protected $txtAutoComplete = null;
     public function Form_Create(){
          parent::Form_Create();
         $this->txtAutoComplete = new MJaxAutoCompleteTextBox($this, 'txtAutoComplete');
         $this->txtAutoComplete->UseAjax = true;
         $this->txtAutoComplete->Target = $this;
         $this->txtAutoComplete->Function = 'txtAutoComplete_update';
     }
     public function Form_PreRender(){
         $this->txtAutoComplete->Modified = false;
     }
     public function txtAutoComplete_update($strQuery){
          return array("alpha", "alfe", "albert", "boner", "charly sheen");
     }
}
lab::Run('lab');
?>
