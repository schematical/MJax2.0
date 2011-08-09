<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <!-- MJax Core scripts -->
		<script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/MFB.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/MJax.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery-1.4.2.min.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery.easing.1.3.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery.timers-1.2.js"></script>       
       
        <script language="javascript">
            $('docuent').ready(function(){ MFB.Init(); });
        </script>

<?php $this->RenderHeaderAssets(); ?>
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/MFB.crush.r.css">
<style>
	<?php $this->RenderCssClasses(); ?>
</style>
<?php 
	$this->RenderControlJSCalls();
	$this->RenderClassJSCalls();
?>
<script type='text/javascript' src='<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/jquery.dropdown.js'></script>
<title>Schematical - Your schematic for building awesome Facebook apps</title>
<?php if(defined('__GOOGLE_ANALYTICS_CODE__')){ ?>
	<script type="text/javascript">
  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', '<?php _p(__GOOGLE_ANALYTICS_CODE__); ?>']);
  		_gaq.push(['_trackPageview']);

  		(function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
	</script>
<?php } ?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Google Fonts API -->
<link href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css">
</link>
<link href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" rel="stylesheet" type="text/css">
</link>
<link href='http://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
</link>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic' rel='stylesheet' type='text/css'>
<!--Google Fonts API-->
<link href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/960.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/typography.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/layout.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE]>
<link href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/ie.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<!--[if IE 7]>
<link href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

</head>
<body>
   <div id='mainWindow'>   		
