<?php
require_once('prepend.inc.php');
	if(array_key_exists('hash', $_POST)){
		$arrParams = null;
		parse_str(substr($_POST['hash'],1), $arrParams);
		$objUser = MFBAuthDriver::User();
		$objUser->OAuthToken = $arrParams['access_token'];		
		$objUser->Save();
		return 'success';
	}else{
?>
<html>
	<head>
		<script src='<?php _p(__JS_ASSETS__); ?>/_core/jquery/jquery-1.4.4.js' language='javascript'></script>
		<script language='javascript'>
			
			$.ajax({
				data:{
					'hash':document.location.hash
				},
				success:function(objResponse){
					document.location = '/index.php';
				},
				type:'POST'
			});
			
		</script>
	</head>

</html>
<?php } ?>