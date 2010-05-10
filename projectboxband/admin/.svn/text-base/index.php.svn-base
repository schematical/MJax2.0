<?php
require_once("prepend.inc.php");
class index extends PBBForm{
    protected $pnlFeaturedFileAssets_addon = null;
    protected $arrFileAssetPanels_addon = array();

    protected $pnlFeaturedFileAssets_skin = null;
    protected $arrFileAssetPanels_skin = array();

    protected function Form_Create() {
        parent::Form_Create();
        if(MLCAuthDriver::IdUserTypeCd() != UserTypeCdTpcd::Admin){
            QApplication::Redirect("/projectboxband/index.php");
        }
        $this->Title = "Project Box Band - A simple content managment system for musicains, coedians, and all performing artists";
        $this->pnlFeaturedFileAssets_addon = new QPanel($this);
        $this->pnlFeaturedFileAssets_addon->AutoRenderChildren = true;
        $arrFileAsset = FileAsset::QueryArray(QQ::AndCondition(
                    QQ::Equal(QQN::FileAsset()->IdFileAssetType, FileAssetTypeTpcd::Addon),
                    QQ::Equal(QQN::FileAsset()->IdFileAssetStatus, FileAssetStatusTpcd::Pending)
                ));
        foreach($arrFileAsset as $objFileAsset){
            $this->arrFileAssetPanels_addon[] = new MLCFileAssetInfoPanel($this->pnlFeaturedFileAssets_addon, $objFileAsset);
        }

        $this->pnlFeaturedFileAssets_skin = new QPanel($this);
        $this->pnlFeaturedFileAssets_skin->AutoRenderChildren = true;
        $arrFileAsset = FileAsset::QueryArray(QQ::AndCondition(
                    QQ::Equal(QQN::FileAsset()->IdFileAssetType, FileAssetTypeTpcd::Skin),
                    QQ::Equal(QQN::FileAsset()->IdFileAssetStatus, FileAssetStatusTpcd::Pending)
                ));
        foreach($arrFileAsset as $objFileAsset){
            $this->arrFileAssetPanels_skin[] = new MLCFileAssetInfoPanel($this->pnlFeaturedFileAssets_skin, $objFileAsset);
        }
    }

}
index::Run('index');
?>