                <?php $this->RenderClassJSCalls(); ?>
                <?php $this->RenderControlRegisterJS(); ?>
            </div>
            <?php $this->pnlHomeIcon->Render(); ?>
            <?php $this->pnlContactIcon->Render(); ?>
            <?php //$this->pnlStartUpIcon->Render(); ?>
            <?php //$this->pnlDesignersIcon->Render(); ?>
            <?php $this->pnlTwitterIcon->Render(); ?>
            <?php $this->pnlLabIcon->Render(); ?>
            <?php $this->pnlFlickrIcon->Render(); ?>
            <?php $this->pnlYoutubeIcon->Render(); ?>
        </div>
        <div id="MLCToolBar_holder">
            <?php require(__DOCROOT__ . __PHP_ASSETS__ . '/glowBoarder/glowBoarder_start.inc.php'); ?>
                <?php $this->pnlMLCToolBar->Render(); ?>
            <?php require(__DOCROOT__ . __PHP_ASSETS__ . '/glowBoarder/glowBoarder_end.inc.php'); ?>
        </div>
    </body>
</html>