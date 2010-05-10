<?php
/* 
 * TODO: comment
 */
define("PHP_CORE_DIR", dirname(__FILE__));

define("__USERNAME__", "matt");

define("__PASSWORD__", "learn");

define("DB_HOST", "localhost");

define("DB_NAME", "mlc_dev");

define("DB_USERNAME", "application");

define("DB_PASSWORD", "ballsDeep200");

define("DB_PREFIX", "MLCChat");


require(PHP_CORE_DIR . "/MLCChatApplicationBase.class.php");
require(PHP_CORE_DIR . "/_enum.php");
//require(PHP_CORE_DIR . "/_exceptions.php");
abstract class MLCChatApplication extends MLCChatApplicationBase{

    //Uncomment the following lines if you want to use your own custom User Ids
    /*
    public static function GetUserId(){
        //Insert your own code to get the user id from a cookie or session var
        return $strUserId;//Can be up to 32 charecers unless you alter the DB
    }
     */

    //Uncomment the following lines if you want to use your own code to determin if some one is an admin
    /*
    public static function IsAdmin(){
        //Use your imagination
        if($userTypeCd == "ADMIN"){
            return true;
        }else{
            return false;
        }
    }
    */

}

MLCChatApplication::$arrPreLoadedClasses['BaseEntity'] = PHP_CORE_DIR . '/BaseEntity.class.php';
MLCChatApplication::$arrPreLoadedClasses['BaseEntityCollection'] = PHP_CORE_DIR . '/BaseEntityCollection.class.php';
MLCChatApplication::$arrPreLoadedClasses['CookieDriver'] = PHP_CORE_DIR . '/CookieDriver.class.php';
MLCChatApplication::$arrPreLoadedClasses['LoadDriver'] = PHP_CORE_DIR . '/LoadDriver.class.php';
MLCChatApplication::$arrPreLoadedClasses['Post'] = PHP_CORE_DIR . '/Post.class.php';
MLCChatApplication::$arrPreLoadedClasses['DataConnectionBase'] = PHP_CORE_DIR . '/DataConnectionBase.class.php';
MLCChatApplication::$arrPreLoadedClasses['MySqlDataConnection'] = PHP_CORE_DIR . '/MySqlDataConnection.class.php';
MLCChatApplication::$arrPreLoadedClasses['MLCChatResponse'] = PHP_CORE_DIR . '/MLCChatResponse.class.php';
MLCChatApplication::$arrPreLoadedClasses['MLCChatSession'] = PHP_CORE_DIR . '/MLCChatSession.class.php';


MLCChatApplication::Initialize(/*Pass in a different chat mode if you want to ex: MLCChatMode::GROUP*/);

if(!function_exists('___autoload')){
    function __autoload($strClassName){
        if(key_exists($strClassName, MLCChatApplication::$arrAutoLoadedClasses)){
            require_once(Application::$arrAutoLoadedClasses[$strClassName]);
        }else{
            throw new Exception("No Class (" . $strClassName . ")");
        }
    }

}else{
    //You could comment out the exception and uncomment out the foreach but you are most likely going to take a BIG performance hit if you do that
    throw new Exception("'___autoload' function already exists.");
    /*
    foreach(Application::$arrAutoLoadedClasses as $strClass){
        require_once($strClass);
    }
    */
}
?>
