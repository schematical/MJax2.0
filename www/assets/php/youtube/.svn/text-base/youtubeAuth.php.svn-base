<?php
	try {
        $sessionToken = Zend_Gdata_AuthSub::getAuthSubSessionToken($singleUseToken);
    } catch (Zend_Gdata_App_Exception $e) {
        print 'ERROR - Token upgrade for ' . $singleUseToken
            . ' failed : ' . $e->getMessage();
        return;
    }

    $_SESSION['sessionToken'] = $sessionToken;
    header('Location: ' . $_SESSION['homeUrl']);