<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <!-- MJax Core scripts -->
		<script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/TWPageBase.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/MJax.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery-1.4.2.min.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery.easing.1.3.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery.timers-1.2.js"></script>
        <script language="javascript">
            $('docuent').ready(function(){ MJax.Init(); });
        </script>
  <!-- TW Specific scripts -->
	<?php if (!is_null($this->strTitle)) { ?>
		<title><?= $this->strTitle; ?></title>
	<?php } ?>

<?php $this->RenderHeaderAssets(); ?>
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/reset.css">
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/960.css">
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/hypespark.css">
<style>
	<?php $this->RenderCssClasses(); ?>
</style>
<script type='text/javascript' src='<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/jquery.dropdown.js'></script>
<title>HypeSpark | Be Social, Get Rewards</title>
</head>
<body id="mainWindow" class="<?php _p($this->strBodyClass); ?>">
