<?php
class Post extends BaseEntity {
    const TABLE_NAME = 'Post';
    const P_KEY = 'idPost';
    public function __construct(){
        $this->table = DB_PREFIX . self::TABLE_NAME;
		$this->pKey = self::P_KEY;
    }
	public static function LoadById($intId){
		$sql = sprintf("SELECT * FROM %s WHERE idPost = %s;", DB_PREFIX . self::TABLE_NAME, $intId);
		$result = LoadDriver::query($sql);
		while($data = mysql_fetch_assoc($result)){
			$tObj = new Post();
			$tObj->materilize($data);
			return $tObj;
		}
	}
    public static function LoadByNameAndRoll($strName, $strMessageRoll = MLCChatMessageRoll::RECIEVER){
		$sql = sprintf("SELECT * FROM %s WHERE `%s` = '%s' ORDER BY date;", DB_PREFIX . self::TABLE_NAME, $strMessageRoll, $strName);
		$result = LoadDriver::query($sql);
		$coll = new BaseEntityCollection();
		while($data = mysql_fetch_assoc($result)){
			$tObj = new Post();
			$tObj->materilize($data);
			$coll->addItem($tObj);
		}
		return $coll;
	}
    public static function LoadBySenderAndReceiver($strName){
		$sql = sprintf("SELECT * FROM %s WHERE `sender` = '%s' OR `receiver` = '%s' ORDER BY date;", DB_PREFIX . self::TABLE_NAME, $strName, $strName);
		$result = LoadDriver::query($sql);
		$coll = new BaseEntityCollection();
		while($data = mysql_fetch_assoc($result)){
			$tObj = new Post();
			$tObj->materilize($data);
			$coll->addItem($tObj);
		}
		return $coll;
	}
	public static function LoadAll(){
		$sql = sprintf("SELECT * FROM %s ORDER BY date;", $this->table);
		$result = LoadDriver::query($sql);
		$coll = new BaseEntityCollection();
		while($data = mysql_fetch_assoc($result)){
			$tObj = new Post();
			$tObj->materilize($data);
			$coll->addItem($tObj);
		}
		return $coll;
	}
	public function __toXml(){
        $xmlStr = "";
        $xmlStr .= "\t\t\t<post>\n";
        
        $xmlStr .= "\t\t\t\t<idPost>";
        $xmlStr .= $this->idPost;
        $xmlStr .= "</idPost>\n";
        
        $xmlStr .= "\t\t\t\t<sender>";
        $xmlStr .= $this->sender;
        $xmlStr .= "</sender>\n";
        
        $xmlStr .= "\t\t\t\t<receiver>";
        $xmlStr .= $this->receiver;
        $xmlStr .= "</receiver>\n";
        
        $xmlStr .= "\t\t\t\t<message>";
        $xmlStr .= $this->message;
        $xmlStr .= "</message>\n";

        $xmlStr .= "\t\t\t<date>";
        $xmlStr .= $this->date;
        $xmlStr .= "</date>";
    
        $xmlStr .= "</post>";
        return $xmlStr;
        
    }
    
}
?>