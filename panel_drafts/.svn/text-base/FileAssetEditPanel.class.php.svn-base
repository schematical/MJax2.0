<?php
	// Include the classfile for FileAssetEditPanelBase
	require(__PANELBASE_CLASSES__ . '/FileAssetEditPanelBase.class.php');

	/**
	 * This is a quick-and-dirty draft panel object to do Create, Edit, and Delete functionality
	 * of the FileAsset class.  It extends from the code-generated
	 * abstract FileAssetEditPanelBase class.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * Additional qform control objects can also be defined and used here, as well.
	 * 
	 * @package My Application
	 * @subpackage PanelDraftObjects
	 * 
	 */
	class FileAssetEditPanel extends FileAssetEditPanelBase {
        protected $intFileAssetType = null;
        protected $intFileAssetStatus = null;
        protected $objCtlToClose = null;
        public $objFileLoc = null;
	public function __construct($objParentObject, $strClosePanelMethod, $objCtlToClose, $intFileAssetType) {
			try {
                $this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . "/generated/FileAssetEditPanel.tpl.php";
				parent::__construct($objParentObject, $strClosePanelMethod);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
            $this->intFileAssetType = $intFileAssetType;
            QApplication::ExecuteJavaScript('document.forms[0].encoding = "multipart/form-data";');

            $this->objCtlToClose = $objCtlToClose;
            //Preset idFileAssetStatus

            $this->objFileLoc = new QFileControl($this);

            //Set idFileAssetType
		}
        protected function UpdateFileAssetFields() {
			/*
            $this->objFileAsset->IdFileAsset = $this->txtIdFileAsset->Text;
			$this->objFileAsset->Name = $this->txtName->Text;
			$this->objFileAsset->Desc = $this->txtDesc->Text;
			$this->objFileAsset->IdUser = $this->txtIdUser->Text;
			$this->objFileAsset->CreDate = $this->calCreDate->DateTime;
			$this->objFileAsset->FileLoc = $this->txtFileLoc->Text;
			$this->objFileAsset->DownloadUrl = $this->txtDownloadUrl->Text;
			$this->objFileAsset->IdFileAssetType = $this->lstIdFileAssetTypeObject->SelectedValue;
			$this->objFileAsset->KeyWords = $this->txtKeyWords->Text;
			$this->objFileAsset->IdFileAssetStatus = $this->lstIdFileAssetStatusObject->SelectedValue;
             */
            parent::UpdateFileAssetFields();
            
            $this->objFileAsset->IdUser = MLCAuthDriver::IdUser();
            if(is_null($this->objFileAsset->CreDate)){
                $this->objFileAsset->CreDate = QDateTime::Now();
            }
            $this->objFileAsset->IdFileAssetType = $this->intFileAssetType;
            if(MLCAuthDriver::IdUserTypeCd() != UserTypeCdTpcd::Admin){
                $this->objFileAsset->IdFileAssetStatus = FileAssetStatusTpcd::Pending;
            }
            
		}
       protected function btnSave_Create() {
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Upload');
			$this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click'));
			$this->btnSave->PrimaryButton = true;
			$this->btnSave->CausesValidation = true;
		}
        public function btnSave_click($strFormId, $strControlId, $strParameter){
            try{
                $this->UpdateFileAssetFields();
                $this->objFileAsset->Save();
                if(!is_null($this->objFileLoc->File)){
                  
                    switch($this->intFileAssetType){
                        case(FileAssetTypeTpcd::Addon):
                            $strEndDir = __ADDON_UPLOAD_DIRECTORY__;
                        break;
                        case(FileAssetTypeTpcd::Skin):
                            $strEndDir = __SKIN_UPLOAD_DIRECTORY__;
                        break;
                        case(FileAssetTypeTpcd::Adapter):
                            $strEndDir = __ADAPTER_UPLOAD_DIRECTORY__;
                        break;
                        default:
                            $strEndDir = __UPLOAD_DIRECTORY__;
                        break;
                    }
                    $arrPathInfo = pathinfo($this->objFileLoc->FileName);

                    if(key_exists('extension', $arrPathInfo)){
                        $strExtension = $arrPathInfo['extension'];
                    }else{
                        $strExtension = '';
                    }

                    $strFileName = $strEndDir . "/". $this->objFileAsset->IdFileAsset .".". $strExtension;
                    //die($strFileName);
                    error_reporting(E_ALL);
                    $blnSuccess = move_uploaded_file($this->objFileLoc->File, $strFileName);
                    if(!$blnSuccess){
                        throw new Exception("File Upload Failed!");
                    }
                    $this->objFileAsset->FileLoc = $strFileName;
                    $this->objFileAsset->Save();
                    $this->CloseSelf(true);
                }
            }catch(Exception $e){
                error_log("Upload Error\nFile:" .$e->getFile() . "\nLine:" . $e->getLine(). "\n". $e->getMessage());
                $this->CloseSelf(false);
            }
        }
        
    protected function CloseSelf($blnChangesMade) {
        $strMethod = $this->strClosePanelMethod;
        $this->objCtlToClose->$strMethod($blnChangesMade);
    }
 

}
?>