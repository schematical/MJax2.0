<?php
require_once("prepend.inc.php");
require_once(__DOCROOT__ . __PANEL_DRAFTS__  . "/FileAssetEditPanel.class.php");
class addons extends PBBForm{

 
    protected $pnlUpload = null;
    protected $pnlFeaturedFileAssets = null;

    protected $arrFileAssetPanels = array();
   

  
    protected function Form_Create() {
        parent::Form_Create();
        $this->Title = "Project Box Band - Content Managment System for Bands, Comedians, Actors And All Performing Artists";

        $this->pnlFeaturedFileAssets = new QPanel($this);
        $this->pnlFeaturedFileAssets->AutoRenderChildren = true;
        $arrFileAsset = FileAsset::QueryArray(QQ::AndCondition(
                    QQ::Equal(QQN::FileAsset()->IdFileAssetType, FileAssetTypeTpcd::Addon),
                    QQ::Equal(QQN::FileAsset()->IdFileAssetStatus, FileAssetStatusTpcd::Approved)
                ));
        foreach($arrFileAsset as $objFileAsset){
            $this->arrFileAssetPanels[] = new MLCFileAssetInfoPanel($this->pnlFeaturedFileAssets, $objFileAsset);
        }
        $this->pnlUpload = new PBBUploadButtonPanel($this, FileAssetTypeTpcd::Addon);
       
    }
    
}
addons::Run('addons');
?>