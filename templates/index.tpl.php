<div id="mainWindow_inner" style="height:420Px;width:520Px;"  class="holder osX">
    <?php //require(__DOCROOT__ . __PHP_ASSETS__ . '/glowBoarder/glowBoarder_start.inc.php'); ?>
        <div style="height:400Px;position:relative;">
            <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/home.comandLine.png" />
            <div class="caseStudyPanel_nav">
                    [mlc]: cd ../<span class="commandLineBlink">&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<?php $this->btnNext->Render(); ?>
            </div>
        </div>
        <?php foreach($this->arrCaseStudyPanels as $pnlCaseStudy){
            $pnlCaseStudy->Render();
        } ?>
        <script language="javascript" src="<?= __VIRTUAL_DIRECTORY__ . __JS_ASSETS__; ?>/jquery.color.js"></script>
        <script language="javascript">
            $(document).ready(MLCSite.SetUpIndexPage);
        </script>
    <?php //require(__DOCROOT__ . __PHP_ASSETS__. '/glowBoarder/glowBoarder_end.inc.php'); ?>
    <?php $this->dlgContact->Render(); ?>
</div>