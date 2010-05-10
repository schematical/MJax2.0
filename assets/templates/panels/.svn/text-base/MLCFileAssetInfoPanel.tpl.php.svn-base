<h3><?= $_CONTROL->objFileAsset->Name; ?></h3>
<p>
    <?= $_CONTROL->objFileAsset->Desc; ?>
</p>
<a href="/projectboxband/downloadFile.php?<?= MLCQueryString::IdFileAsset; ?>=<?= $_CONTROL->objFileAsset->IdFileAsset; ?>">Download</a>
<?php if(MLCAuthDriver::IdUserTypeCd() == UserTypeCdTpcd::Admin){ ?>
<br>
<?php $_CONTROL->btnApprove->Render(); ?>
<br>
<?php $_CONTROL->btnDeny->Render(); ?>
<br>
<?php $_CONTROL->btnBeta->Render(); ?>
<br>
<?php } ?>