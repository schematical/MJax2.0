<?php
define('__MJAX_FB__', __MJAX__ . '/facebook');
//MJax Controls
QApplicationBase::$ClassFile['MJaxFacebookLoginPanel'] = __MJAX_FB__ . '/MJaxFacebookLoginPanel.class.php';
require_once(__MJAX_FB__ . '/_actions.inc.php');