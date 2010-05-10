<?php
	// This is the HTML template include file (.tpl.php) for the file_asset_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
		<div class="signUpControlHolder">
            <div class="signUpControlName">Name:</div>
            <div class="signUpControl"><?php $_CONTROL->txtName->Render(); ?></div>
        </div>
        <br class="item_divider" />
		<div class="signUpControlHolder">
            <div class="signUpControlName">Description:</div>
            <div class="signUpControl"><?php $_CONTROL->txtDesc->Render("Rows=10"); ?></div>
        </div>
        <br class="item_divider" />
        <div class="signUpControlHolder">
            <div class="signUpControlName">File:</div>
            <div class="signUpControl"><?php $_CONTROL->objFileLoc->Render(); ?></div>
        </div>
        <br class="item_divider" />
        <div class="signUpControlHolder">
            <div class="signUpControlName">Key Words:</div>
            <div class="signUpControl"><?php $_CONTROL->txtKeyWords->Render("Rows=10"); ?></div>
        </div>
        <br class="item_divider" />
        <?php if(MLCAuthDriver::IdUserTypeCd() == UserTypeCdTpcd::Admin){ ?>
            <?php $_CONTROL->lstIdFileAssetStatusObject->Render(); ?>
            <br class="item_divider" />
        <?php } ?>
		<br />
        <br class="item_divider" />
            <?php $_CONTROL->btnSave->Render() ?>
            &nbsp;&nbsp;&nbsp;
        <?php if(MLCAuthDriver::IdUserTypeCd() == UserTypeCdTpcd::Admin){ ?>
            <?php $_CONTROL->btnCancel->Render() ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php $_CONTROL->btnDelete->Render() ?>
        <?php } ?>
