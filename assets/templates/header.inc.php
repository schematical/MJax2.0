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
        <link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/mlc.css"/>
        <?php
            //Render Header Assets
            $this->RenderHeaderAssets();
        ?>
        
	</head>
    <body>
    <?php $this->RenderBegin(); ?>
    <div id="bodyDiv">
        <?php //$this->pnlUserInfo->Render(); ?>
        <div id="headerHolderDiv">
            <div id="headerDiv" onclick="document.location='/';">
                <div id="navDiv">
                    <a href="/index.php" class="MLC_qtip" content="Welcome to Matt Lea Consulting" qtarget="bottomMiddle" tooltip="topMiddle" width="200">Home</a>
                    <a href="/portfolio.php" class="MLC_qtip" content="See what we have done so far" qtarget="bottomMiddle" tooltip="topMiddle" width="200">Portfolio</a>
                    <a href="/services.php" class="MLC_qtip" content="What can we offer you?" qtarget="bottomMiddle" tooltip="topMiddle" width="200">Services</a>
                    <a href="/forStartUps.php" class="MLC_qtip" content="Need a hand getting started?" qtarget="bottomMiddle" tooltip="topMiddle" width="200">Start Ups</a>
                    <?php /* <a href="/forGraphics.php" class="MLC_qtip" content="Need a hand with programming?" qtarget="bottomMiddle" tooltip="topMiddle" width="200">Designers</a> */ ?>
                    <a href="/freeStuff.php" class="MLC_qtip" content="Want some cool free stuff?" qtarget="bottomMiddle" tooltip="topMiddle" width="200">Free Stuff</a>
                    <a href="/contact.php" class="MLC_qtip" content="Get in contact" qtarget="bottomMiddle" tooltip="topMiddle" width="200">Contact</a>
                    <a href="/about.php" class="MLC_qtip" content="Want to know more about Matt Lea Consulting?" qtarget="bottomMiddle" tooltip="topMiddle" width="200">About</a>
                </div>
            </div>
            <div id="bodyContent">
            
               