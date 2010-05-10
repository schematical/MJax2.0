<?php
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
<?php if (!is_null($this->strTitle)) { ?>
		<title><?= $this->strTitle; ?></title>
<?php } ?>
        <script language="javascript" src="<?= __VIRTUAL_DIRECTORY__ . __JS_ASSETS__; ?>/MLC/MLC.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css"/>
        <link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/pbb.css"/>
	</head><body>
    <?php $this->RenderBegin(); ?>
    <div id="bodyDiv">
        <?php $this->pnlUserInfo->Render(); ?>
        <div id="headerHolderDiv">
            <div id="headerDiv" onclick="document.location='/';">
                <div id="navDiv">
                    <a href="/projectboxband/index.php">HOME</a>
                    <a href="/projectboxband/download.php">DOWNLOAD</a>
                    <a href="/projectboxband/developers.php">DEVELOPERS</a>
                    <a href="/projectboxband/skins.php">SKINS</a>
                    <a href="/projectboxband/addons.php">ADDONS</a>
                </div>
            </div>
            <div id="bodyContent">
            
               