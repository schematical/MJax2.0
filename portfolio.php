<?php
require_once("prepend.inc.php");
class portfolio extends MLCSiteForm{
    protected $pnlSlideShow = null;
    public function Form_Create(){
         parent::Form_Create();
        $this->pnlSlideShow = new MJaxJqFancySlideShow($this, 'pnlSlideShow');
        $this->pnlSlideShow->AddSlide(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/siteThumbs/cotr.png", "Chicago on the Rocks");
        $this->pnlSlideShow->AddSlide(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/siteThumbs/theWisconsinCard.png", "The Wisconsin Card");
        $this->pnlSlideShow->AddSlide(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/siteThumbs/pbb.png", "Project Box Band");
    
    }  
}
portfolio::Run('portfolio');
?>
