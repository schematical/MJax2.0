<?php
	// This is the HTML template include file (.tpl.php) for the developer_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
    <?php $_CONTROL->lblMessage->Render(); ?>
    <br class="item_divider" />
      <br class="item_divider" />
    <?php $_CONTROL->pnlUser->Render(); ?>
    <div class="signUpControlHolder">
        <div class="signUpControlName">First Name</div>
        <div class="signUpControl"><?php $_CONTROL->txtFirstName->Render(); ?></div>
    </div>
    <br class="item_divider" />
	<div class="signUpControlHolder">
        <div class="signUpControlName">Last Name</div>
        <div class="signUpControl"><?php $_CONTROL->txtLastName->Render(); ?></div>
    </div>
    <br class="item_divider" />
    <div class="signUpControlHolder">
        <div class="signUpControlName">Website</div>
        <div class="signUpControl"><?php $_CONTROL->txtWebsiteUrl->Render(); ?></div>
    </div>
	<div class="signUpControlHolder">
        <div class="signUpControlName">Company</div>
        <div class="signUpControl"><?php $_CONTROL->txtCompanyName->Render(); ?></div>
    </div>
    <br class="item_divider" />
	<div class="signUpControlHolder">
        <div class="signUpControlName">Bio</div>
        <div class="signUpControl"> <?php $_CONTROL->txtBio->Render("Rows=5"); ?></div>
    </div>
  
    <?php //$_CONTROL->txtPicUrl->Render(); ?>
		<br />
		<?php $_CONTROL->btnSave->Render() ?>
		&nbsp;&nbsp;&nbsp;
		<?php //$_CONTROL->btnCancel->Render() ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php //$_CONTROL->btnDelete->Render() ?>
