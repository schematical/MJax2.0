<?php
/* 
 * This class will do most of the leg work for this application
 */
abstract class MLCChatApplicationBase{
    const ACTION_TAG = '@';
    public static $blnAdminLoginOveride = false;
    public static $objResponse = null;
    public static $strChatMode = null;
    public static $objDataBase = null;
    public static $arrPreLoadedClasses = array();
    public static $arrAutoLoadedClasses = array();
    public static function Initialize($strChatMode = MLCChatMode::ADMIN_TO_CLIENT){
        self::$strChatMode = $strChatMode;
        foreach(self::$arrPreLoadedClasses as $strClass){
            require_once($strClass);
        }

        self::$objDataBase = new MySqlDataConnection(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
        self::$objDataBase->Connect();
    }
    public static function Run(){
        self::$objResponse = new MLCChatResponse();
        header("content-type: text/xml");
        $strMessage = self::PostData(MLCChatQueryString::MESSAGE);
        if(!is_null($strMessage)){
           self::RunAction($strMessage);
           
        }
        //Refresh
        
        self::$objResponse->SetHeader('idUser', self::GetIdUser());
        if(self::IsAdmin()){
            self::$objResponse->SetHeader('adminMode', 'true');
            //load all active sessions
            $objSession = new MLCChatSession(self::GetIdUser());
            self::$objResponse->AddSession($objSession);
        }else{
            self::$objResponse->SetHeader('adminMode', 'false');
            //load all messages to and from this sender in cronological
            $objSession = new MLCChatSession(self::GetIdUser());
            self::$objResponse->AddSession($objSession);

        }
        echo self::$objResponse->__toXml();
        //clean up
        self::$objResponse->CleanSessions();

    }
    public static function RunAction($strMessage){
        $strAction = self::GetActionName($strMessage);
        if(!is_null($strAction)){
            
            $arrArgs = self::GetActionArgs($strMessage);
            //if its a refresh dont sweat it

            switch($strAction){
                case(MLCChatAction::REFRESH):
                    return true;//just return so we can give them the new data
                break;
                case(MLCChatAction::LOGIN):
                    if(($arrArgs[0] == __USERNAME__) && ($arrArgs[1] == __PASSWORD__)){
                        CookieDriver::SetCookie(MLCChatCookie::USERNAME, $arrArgs[0], time() + (24 * 60 * 60));
                        CookieDriver::SetCookie(MLCChatCookie::PASSWORD, md5($arrArgs[1]), time() + (24 * 60 * 60));
                    }else{
                        return true;//just return so we can give them the new data
                    }
                break;
                case(MLCChatAction::REDIRECT):
                    self::SaveMessage($strMessage);//Make sure we delete this later
                    return true;//just return so we can give them the new data
                break;
                case(MLCChatAction::HIGHLIGHT):
                    self::SaveMessage($strMessage);//Make sure we delete this later
                    return true;//just return so we can give them the new data
                break;
                default:
                    throw new Exception("No Action like '" . $strAction . "' that exists");
                break;
            }

        }else{
           self::SaveMessage($strMessage);
        }
    }
    public static function SaveMessage($strMessage){
        //check to see if it is an action or a real message
        $objPost = new Post();
        if(self::IsAdmin()){
            $objPost->sender = self::GetIdUser();
            
            error_log(self::PostData(MLCChatQueryString::RECEIVER));
            $objPost->receiver = self::PostData(MLCChatQueryString::RECEIVER);
        }else{
            $objPost->sender = self::GetIdUser();
            $objPost->receiver = self::GetReceiver();
        }
        $objPost->message = $strMessage;
        $objPost->date = date('Y-m-d H:i:s');
        $objPost->Save();
    }
    public static function GetIdUser(){
        if(self::IsAdmin()){
            return MLCChatUserType::ADMIN;
        }else{
            return $_SERVER[MLCServer::REMOTE_ADDR];
        }
    }
    public static function IsAdmin(){
        if(self::$blnAdminLoginOveride){
            return true;
        }
        //Will check for specific cookies
        $strUsername = CookieDriver::GetCookie(MLCChatCookie::USERNAME);
        $strPassword = CookieDriver::GetCookie(MLCChatCookie::PASSWORD);
        if(($strUsername == __USERNAME__) && ($strPassword == md5(__PASSWORD__))){
            return true;
        }else{
            return false;
        }
    }
    public static function GetReceiver(){
        switch(self::$strChatMode){
            case(MLCChatMode::ADMIN_TO_CLIENT):
                return MLCChatUserType::ADMIN;
            break;
            case(MLCChatMode::GROUP):
                return MLCChatUserType::ADMIN;
            break;
            default:
                throw new Exception("Invalid Chat Mode set: " . self::$strChatMode);
        }
    }
    public static function PostData($strKey){
        if(key_exists($strKey, $_POST)){
            return $_POST[$strKey];
        }else{
            return null;
        }
    }
    public static function GetActionName($strMessage){
         if(substr($strMessage, 0, 1) == self::ACTION_TAG){
            $arrArgs = explode(" ", $strMessage);
            $strAction = strtoupper(substr($arrArgs[0], 1));
            return $strAction;
         }else{
            return null;
         }
    }
    public static function GetActionArgs($strMessage){
          if(substr($strMessage, 0, 1) == self::ACTION_TAG){
                $arrArgs = explode(" ", $strMessage);
                $strAction = strtoupper(substr($arrArgs[0], 1));
                $arrArgs = array_slice($arrArgs, 1);
                return $arrArgs;
          }else{
                return null;
          }
    }

}
?>
