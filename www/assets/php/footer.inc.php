<div class="copyright">
    <div class="container_12"> 
        <div class="grid_6"> 
            <p>&copy; Copyright 2011 Matt Lea Consulting | All Rights Reserved</p> 
        </div> 
        <div class="grid_6"> 
            <p class="rightalign">Powered by <a href="http://mattleaconsulting.com/lab.php">Mjax</a></p> 
        </div> 
        <div class="clear"></div> 
    </div> 
</div>

<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js#appId=<?php _p(FB_APP_ID); ?>&xfbml=1"></script>
        <?php 
			$strFormState = sprintf('<input type="hidden" name="%s" id="%s" value="%s" />', MJaxFormPostData::MJaxForm__FormState, MJaxFormPostData::MJaxForm__FormState, MJaxForm::Serialize($this));
			_p($strFormState, false);
		?>		        
        <?php $this->RenderClassJSCalls(); ?>
        <?php $this->RenderControlRegisterJS(); ?>
        <?php $this->RenderMiscJSCalls(); ?>
    </body>
</html>