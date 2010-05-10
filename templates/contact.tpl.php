<div id="mainWindow_inner" style="height:200Px;width:500Px;">
    <?php require(__DOCROOT__ . __PHP_ASSETS__ . '/glowBoarder/glowBoarder_start.inc.php'); ?>
        <h3>[MLC]:chown apache /<span class="commandLine_green">contact</span> -R</h3>
        Name: <?php $this->txtName->Render(); ?><br>
        <?php $this->lstInterest->Render(); ?><br>
        <?php $this->btnSubmit->Render(); ?>
    <?php require(__DOCROOT__ . __PHP_ASSETS__. '/glowBoarder/glowBoarder_end.inc.php'); ?>
</div>