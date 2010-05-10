<?php
/* 
 * This is just a way to orginize posts
 * and format them for responses
 */
class MLCChatSession{
    protected $arrPosts = array();
    public function  __construct($strName, $strMessageRoll = null){
        if(is_null($strMessageRoll)){
             $this->Populate($strName);
        }else{
            $this->Populate($strName, $strMessageRoll);
        }
    }
    public function Populate($strName){
        $collPost = Post::LoadBySenderAndReceiver($strName);
        $this->arrPosts = $collPost->GetCollection();
    }
    public function PopulateByRoll($strName, $strMessageRoll = MLCChatMessageRoll::RECIEVER){
        //load all posts by what was sent
        $collPost = Post::LoadByNameAndRoll($strName, $strMessageRoll);
        $this->arrPosts = $collPost->GetCollection();


    }
    public function __toXml(){
        $strReturn = "\t\t<session>\n";
        foreach($this->arrPosts as $objPost){
            $strReturn .= $objPost->__toXml();
        }
        $strReturn .= "\t\t</session>\n";
        return $strReturn;
    }
    /**
     * This removes comands that don't need to be read more then once
     * TODO: fix this for group chat
     */
    public function Clean(){
        foreach($this->arrPosts as $objPost){
            $strMessage = $objPost->message;
            if($objPost->receiver == MLCChatApplication::GetIdUser()){
                $strAction = MLCChatApplication::GetActionName($strMessage);

                switch($strAction){
                    case(MLCChatAction::REDIRECT):
                    case(MLCChatAction::HIGHLIGHT):
                        $objPost->Delete();
                    break;
                    default:
                        //do nothing
                    break;

                }
            }
        }
    }
}
?>
