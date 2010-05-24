<?php
require_once("prepend.inc.php");
class index extends MLCSiteForm{
    protected $arrCaseStudyPanels = array();
    
    protected $dlgContact = null;
    protected $pnlContact = null;
    protected $btnExit = null;
    
    protected $btnNext = null;
    
    public function Form_Create(){
        parent::Form_Create();
        $this->AddHeaderAsset(new MJaxJSHeaderAsset(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__ . '/jquery.scrollTo-min.js'));

        $this->arrCaseStudyPanels['pnlMJAXCaseStudyPanel'] = new MJAXCaseStudyPanel($this, 'pnlMJAXCaseStudyPanel');
        $this->arrCaseStudyPanels['pnlCOTRCaseStudyPanel'] = new COTRCaseStudyPanel($this, 'pnlCOTRCaseStudyPanel');
        $this->arrCaseStudyPanels['pnlPBBCaseStudyPanel'] = new PBBCaseStudyPanel($this, 'pnlPBBCaseStudyPanel');
        $this->arrCaseStudyPanels['pnlTWCCaseStudyPanel'] = new TWCCaseStudyPanel($this, 'pnlTWCCaseStudyPanel');
        $this->arrCaseStudyPanels['pnlGymfinityCaseStudyPanel'] = new GymfinityCaseStudyPanel($this, 'pnlGymfinityCaseStudyPanel');
        $this->arrCaseStudyPanels['pnlDRCaseStudyPanel'] = new DRCaseStudyPanel($this, 'pnlDRCaseStudyPanel');

        foreach($this->arrCaseStudyPanels as $pnlCaseStudy){
            $pnlCaseStudy->CreateNavButtons();
        }
        $arrKeys = array_keys($this->arrCaseStudyPanels);
        $strFirstControlId = $arrKeys[0];

        $cssClass = MJaxApplication::CssClass('cmdLineButton');
        $this->btnNext = new MJaxLinkButton($this, 'index_btnNext');
        $objPlugin = new MJaxScrollToPlugin($this, '#' . $strFirstControlId, array(), 1200);
        $objPlugin->SetTargetControl($this->MainWindow);
        $this->btnNext->AddAction(new MJaxClickEvent(), new MJaxPluginAction($objPlugin));
        //$this->btnNext->AddAction(new MJaxClickEvent(), new MJaxServerControlAction($this, 'btnNext_click'));
        $this->btnNext->Text = "my_portfolio/";
        $this->btnNext->ActionParameter = $strFirstControlId;
        $this->btnNext->AddCssClass($cssClass);



        /*-----contact panel stuff----------*/
        $this->dlgContact = new MJaxDialogBox($this, 'dlgContact');
        $this->dlgContact->AutoRenderChildren = true;
        $this->dlgContact->Style->height = "400Px";
        $this->pnlContact = new MJaxPanel($this->dlgContact, 'pnlContact');
        $this->pnlContact->Template = __DOCROOT__ . __TPL_ASSETS__ . "/mjax_panels/MJaxDialogBox.tpl.php";
        $this->pnlContact->Style->Background = 'black';
        $this->pnlContact->Style->Padding = '20Px';
        $this->pnlContact->Style->Border = 'solid thin #009900';
        $this->pnlContact->Style->Width = '400Px;';
        $this->dlgContact->Style->Display = 'none';

        //$this->dlgContact->ShowDialogBox();
        $this->btnExit = new MJaxImageButton($this->pnlContact, 'btnExit');
        $this->btnExit->Src = __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/mini-icons/close.png";
        $this->btnExit->AddAction(new MJaxClickEvent(), new MJaxServerControlAction($this, 'btnExit_click'));
    }
    public function btnExit_click($strFormId, $strControlId, $strParameter){
        $this->dlgContact->HideDialogBox();
    }
    public function btnNext_click($strFormId, $strControlId, $strParameter){
       $strControlIndex = $this->GetCaseStudyIndex($strParameter, 1);
        
        if(!is_null($strControlIndex)){
            $this->MainWindow->ApplyPlugin(new MJaxScrollToPlugin($this, $this->arrCaseStudyPanels[$strControlIndex]), array(), 1200);
        }
    }
    public function btnPrev_click($strFormId, $strControlId, $strParameter){
        $strControlIndex = $this->GetCaseStudyIndex($strParameter, -1);
        
        if(!is_null($strControlIndex)){
            $this->MainWindow->ApplyPlugin(new MJaxScrollToPlugin($this, $this->arrCaseStudyPanels[$strControlIndex], array(), 1200));
        }
    }
    public function GetCaseStudyIndex($strControlId, $intIncrement = 0){
        $arrKeys = array_keys($this->arrCaseStudyPanels);
        $intControlIndex = null;
        for($i = 0; $i < count($arrKeys); $i += 1){
            if($arrKeys[$i] == $strControlId){
                $intControlIndex = $i;
            }
        }
        $intControlIndex += $intIncrement;
        if($intControlIndex < 0){
            $intControlIndex = count($this->arrCaseStudyPanels) - 1;
        }
        if($intControlIndex >= count($this->arrCaseStudyPanels)){
            $intControlIndex = 0;
        }
        return $arrKeys[$intControlIndex];
    }
}
index::Run('index');
?>
