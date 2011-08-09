<?php
/* 
 * This is a basic allows the browsers to do an ajax esc upload
 */
class MJaxUploadPanel extends MJaxControl{
    protected $strCrossScripting = null;
    protected $strSrc = null;
    protected $strFileLoc = null;
    protected $strSuccess = null;
    protected $objMedia = null;
    public function __construct($objParentControl, $strControlId = null) {
        parent::__construct($objParentControl, $strControlId);
        $this->strSrc =  __PHP_ASSETS__ . '/_core/MJaxUploadPanel.php';
    }
    public function Render($blnPrint = true){
        $strRendered = parent::Render();
        $strRendered .= sprintf("<iframe id='%s' src='%s' initCall='true' %s ><p>Your browser does not support iframes.</p></iframe>", $this->strControlId, $this->strSrc, $this->GetAttrString());
        if($blnPrint){
            _p($strRendered, false);
        }else{
            return $strRendered;
        }
    }
    public function ParsePostData() {
        $this->strFileLoc = $_POST['fileLoc'];
        $this->strSuccess = $_POST['success'];
        $intIdMedia = $_POST['idMedia'];
        if(!is_null($intIdMedia)){
        	$this->objMedia = Media::Load($intIdMedia);
        }
    }
    /////////////////////////
    // Public Properties: GET
    /////////////////////////
    public function __get($strName) {
        switch ($strName) {
            case "Src": return $this->strSrc;
            case "FileLoc": return $this->strFileLoc;
            case "MediaObject": return $this->objMedia;
            case "FileUrl": 
            	$arrFileInfo = path_info($this->strFileLoc);
            	
            	return sprintf('http://%s/%s/%s', $_SERVER['DOCUMENT_ROOT'], __UPLOAD_ASSETS__, $arrFileInfo['basename']);
            case "Success": return $this->strSuccess;
            default:
                try {
                    return parent::__get($strName);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }

    /////////////////////////
    // Public Properties: SET
    /////////////////////////
    public function __set($strName, $mixValue) {
        switch ($strName) {
            case "Src":
                try {
                    return ($this->strSrc = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
            case "FileLoc":
                try {
                    return ($this->strFileLoc = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
            case "Success":
                try {
                    return ($this->strSuccess = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        	case "MediaObject":
                try {
                    return ($this->objMedia = QType::Cast($mixValue, 'Media'));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
            default:
                try {
                    return parent::__set($strName, $mixValue);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }
    public static function Run(){
        
        
        if(key_exists('MJaxUploadPanel_file', $_FILES)){
            //Check for posted files
            $objMedia = new Media();
            $objMedia->CreDate = QDateTime::Now();
            $objMedia->IdUser = TWAuthDriver::IdUser();
            $objMedia->Save();
            $strType = $_FILES['MJaxUploadPanel_file']['type'];            
            switch($strType){
                case('image/gif'):
                    $strSufix = 'gif';
                break;
                case('image/png'):
                    $strSufix = 'png';
                break;
                case('image/jpg'):
                    $strSufix = 'jpg';
                break;
            }
            $objMedia->FileLoc = __UPLOAD_DIRECTORY__ . '/' .$objMedia->IdMedia . '.' . $strSufix;
            if (move_uploaded_file($_FILES['MJaxUploadPanel_file']['tmp_name'], $objMedia->FileLoc)) {

                //Set the Businesses idMediaProfilePic Id
                $arrResponse = array('success'=>'true', 'fileLoc'=>$objMedia->FileLoc, 'idMedia'=>$objMedia->IdMedia);
                echo json_encode($arrResponse);
                $objMedia->Save();
            }else{
                $objMedia->Delete();
            }
            
        }else{
            //RENDER IFRAME
            require(__DOCROOT__ . __TPL_ASSETS__ . '/_core/MJaxUploadPanel.tpl.php');
        }
    }
    
    
}
?>
