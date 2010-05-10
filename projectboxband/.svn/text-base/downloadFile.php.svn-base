<?php
require_once("prepend.inc.php");
//load the file asset
if(isset($_GET[MLCQueryString::IdFileAsset])){
    $intIdFileAsset = $_GET[MLCQueryString::IdFileAsset];
    $objFileAsset = FileAsset::Load($intIdFileAsset);
    //get contents of that file
    if((!is_null($objFileAsset)) && (file_exists($objFileAsset->FileLoc))){
    //set headers
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT\n");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Content-type: application/zip;\n");
    header("Content-Transfer-Encoding: binary");
    $intLen = filesize($objFileAsset->FileLoc);
    header("Content-Length: $intLen;\n");
    $outname="downfile.zip";
    header("Content-Disposition: attachment; filename=\"$outname\";\n\n");

    readfile($objFileAsset->FileLoc);
    //print conetns

    }else{
        QApplication::Redirect('/projectboxband/');
    }
}else{
    QApplication::Redirect('/projectboxband/');
}