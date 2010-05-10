<?php $this->dlgSignUp->Render(); ?>
<div class="column_500">
   <p>
       <?php $this->pnlCaseStudyPanel->Render(); ?>
   </p>
   <div id="testDiv">
        <?php //<div class="column_225"> ?>
            <h3>Building you the tools you need</h3>
            A large part of what makes us different from most of the other web application developers
            you will find is that we are firm believers in giving your designers and developers
            to build off of what we have done. This means we build a core framework for your application
            and then your in house designers and developers can create,
            maintain, and update the components that add extra functionality to the application.
            <a href="/services.php#toolsInternal">Read more here</a>
        <?php /*</div>
        <div class="column_225">
            <h3>Latest News</h3>
            asdfasdfasdfa  sfasfs afasfa dsfdsfaadsf
        </div> */ ?>
    </div>
</div>
<div class="column_250">
    <?php $this->pnlSideBar->Render(); ?>
</div>
<script language="javascript">
    $('docuent').ready(MLCChat.Init());
</script>

<?php $this->RenderEnd(); ?>