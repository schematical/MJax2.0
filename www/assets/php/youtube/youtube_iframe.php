<?php 
require_once __MLC__ . '/google/Loader.php';
Zend_Loader::loadClass('Zend_Gdata_YouTube');
Zend_Loader::loadClass('Zend_Gdata_YouTube_VideoQuery');
Zend_Loader::loadClass('Zend_Gdata_AuthSub');
Zend_Loader::loadClass('Zend_Gdata_App_Exception');

 	$scope = 'http://gdata.youtube.com';
    $secure = false;
    $session = true;
	$nextUrl = 'http://' . $_SERVER['SERVER_NAME'] . __PHP_ASSETS__ . '/youtube/youtubeAuth.php';
    

    $url = Zend_Gdata_AuthSub::getAuthSubTokenUri($nextUrl, $scope, $secure, $session);
    
?>
<a href="<?php _p($url); ?>" target='_blank'>
	<strong>Click here to authenticate with YouTube</strong>
</a>