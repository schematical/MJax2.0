<?php

    define("__MJAX__", __MLC__ . "/MJax");
    define("__MJAX_CORE__", __MJAX__ . "/_core");
    QApplicationBase::$ClassFile['MJaxApplication'] = __MJAX_CORE__ . '/MJaxApplication.class.php';
    QApplicationBase::$ClassFile['MJaxFormBase'] = __MJAX_CORE__ . '/MJaxFormBase.class.php';
    QApplicationBase::$ClassFile['MJaxForm'] = __MJAX_CORE__ . '/MJaxForm.class.php';
    QApplicationBase::$ClassFile['MJaxControl'] = __MJAX_CORE__ . '/MJaxControl.class.php';
    QApplicationBase::$ClassFile['MJaxControlBase'] = __MJAX_CORE__ . '/MJaxControlBase.class.php';
    QApplicationBase::$ClassFile['MJaxCssClass'] = __MJAX_CORE__ . '/MJaxCssClass.class.php';
    QApplicationBase::$ClassFile['MJaxControlStyle'] = __MJAX_CORE__ . '/MJaxControlStyle.class.php';
    QApplicationBase::$ClassFile['MJaxTextBox'] = __MJAX_CORE__ . '/MJaxTextBox.class.php';
    QApplicationBase::$ClassFile['MJaxButton'] = __MJAX_CORE__ . '/MJaxButton.class.php';
    QApplicationBase::$ClassFile['MJaxImageButton'] = __MJAX_CORE__ . '/MJaxImageButton.class.php';
    QApplicationBase::$ClassFile['MJaxListBox'] = __MJAX_CORE__ . '/MJaxListBox.class.php';
    QApplicationBase::$ClassFile['MJaxListItem'] = __MJAX_CORE__ . '/MJaxListItem.class.php';
    QApplicationBase::$ClassFile['MJaxPanel'] = __MJAX_CORE__ . '/MJaxPanel.class.php';
    QApplicationBase::$ClassFile['MJaxAutoCompleteTextBox'] = __MJAX_CORE__ . '/MJaxAutoCompleteTextBox.class.php';
    QApplicationBase::$ClassFile['MJaxDialogBox'] = __MJAX_CORE__ . '/MJaxDialogBox.class.php';
    QApplicationBase::$ClassFile['MJaxNivoSlideShow'] = __MJAX_CORE__ . '/MJaxNivoSlideShow.class.php';
    QApplicationBase::$ClassFile['MJaxJqFancySlideShow'] = __MJAX_CORE__ . '/MJaxJqFancySlideShow.class.php';
    QApplicationBase::$ClassFile['MJaxLinkButton'] = __MJAX_CORE__ . '/MJaxLinkButton.class.php';
    QApplicationBase::$ClassFile['MJaxUploadPanel'] = __MJAX_CORE__ . '/MJaxUploadPanel.class.php';
    QApplicationBase::$ClassFile['MJaxControlProxy'] = __MJAX_CORE__ . '/MJaxControlProxy.class.php';
    QApplicationBase::$ClassFile['MJaxCheckBox'] = __MJAX_CORE__ . '/MJaxCheckBox.class.php';
    //header_asset
    QApplicationBase::$ClassFile['MJaxHeaderAsset'] = __MJAX_CORE__ . '/header_assets/MJaxHeaderAsset.class.php';
    QApplicationBase::$ClassFile['MJaxCssHeaderAsset'] = __MJAX_CORE__ . '/header_assets/MJaxCssHeaderAsset.class.php';
    QApplicationBase::$ClassFile['MJaxJSHeaderAsset'] = __MJAX_CORE__ . '/header_assets/MJaxJSHeaderAsset.class.php';
    QApplicationBase::$ClassFile['MJaxMetaHeaderAsset'] = __MJAX_CORE__ . '/header_assets/MJaxMetaHeaderAsset.class.php';
    //plugins
    QApplicationBase::$ClassFile['MJaxPluginBase'] = __MJAX_CORE__ . '/plugins/MJaxPluginBase.class.php';
    QApplicationBase::$ClassFile['MJaxSelectMenuPlugin'] = __MJAX_CORE__ . '/plugins/MJaxSelectMenuPlugin.class.php';
    QApplicationBase::$ClassFile['MJaxAnimatePlugin'] = __MJAX_CORE__ . '/plugins/MJaxAnimatePlugin.class.php';
    QApplicationBase::$ClassFile['MJaxQTipPlugin'] = __MJAX_CORE__ . '/plugins/MJaxQTipPlugin.class.php';
    QApplicationBase::$ClassFile['MJaxNivoSlideShowPlugin'] = __MJAX_CORE__ . '/plugins/MJaxNivoSlideShowPlugin.class.php';
    QApplicationBase::$ClassFile['MJaxJqFancySlideShowPlugin'] = __MJAX_CORE__ . '/plugins/MJaxJqFancySlideShowPlugin.class.php';
    QApplicationBase::$ClassFile['MJaxAutoCompletePlugin'] = __MJAX_CORE__ . '/plugins/MJaxAutoCompletePlugin.class.php';
    QApplicationBase::$ClassFile['MJaxScrollToPlugin'] = __MJAX_CORE__ . '/plugins/MJaxScrollToPlugin.class.php';
    QApplicationBase::$ClassFile['MJaxFancyboxPlugin'] = __MJAX_CORE__ . '/plugins/MJaxFancyboxPlugin.class.php';
    QApplicationBase::$ClassFile['MJaxDatePickerPlugin'] = __MJAX_CORE__ . '/plugins/MJaxDatePickerPlugin.class.php';
    QApplicationBase::$ClassFile['MJaxLimitPlugin'] = __MJAX_CORE__ . '/plugins/MJaxLimitPlugin.class.php';
    
    require_once(__MJAX_CORE__ .  "/_enum.php");
    require_once(__MJAX_CORE__ .  "/_actions.php");
    require_once(__MJAX_CORE__ .  "/_events.php");
    require_once(__MJAX_CORE__ .  "/_functions.inc.php");
    /*--------MJAX TOUCH FILES-----------*/

    require_once(__MJAX_CORE__ .  "/touch/MJaxTouch.inc.php");
    /*--------MJax Facebook FILES ---------*/
    //if(defined('FB_APP_ID')){
    require_once(__MJAX__ .  "/facebook/MJaxFacebook.inc.php");
    //}
    /*--------NON CORE FILES-------------*/

   require_once(__MJAX__ .  "/_enum.php");
?>
