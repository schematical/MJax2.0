    </controls>
    <actions>
    	<action>
    		<?php $this->RenderHeaderAssetsAsJs(true); ?>
    	</action>
        <action>
            <?php $this->RenderControlJSCalls(true, true); ?>
            <?php $this->RenderControlRegisterJS(true, true); ?>
        </action>
        <action>
            <?php $this->RenderMiscJSCalls(true, true); ?>
        </action>
 
    </actions>
</mjax>