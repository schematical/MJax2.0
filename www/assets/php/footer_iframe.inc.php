        <?php 
			$strFormState = sprintf('<input type="hidden" name="%s" id="%s" value="%s" />', MJaxFormPostData::MJaxForm__FormState, MJaxFormPostData::MJaxForm__FormState, MJaxForm::Serialize($this));
			_p($strFormState, false);
		?>		        
        <?php $this->RenderClassJSCalls(); ?>
        <?php $this->RenderControlRegisterJS(); ?>
    </body>
</html>