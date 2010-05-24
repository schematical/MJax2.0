<html>
    <head>
        <!-- MJax Core scripts -->
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/MLCSite.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/MJax.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/jquery/jquery-1.4.2.min.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery-1.4.2.min.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery.easing.1.3.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery.timers-1.2.js"></script>
        <!-- MLC Specific scripts -->
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/jquery-1.2.6.min.js"></script>
		<script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/jquery.mousewheel.js"></script>
		<script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/jScrollPane.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/MLC/MLCChat.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/css/MLCChat.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/demoStyles.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/jScrollPane.css"/>


        

        <?php $this->RenderHeaderAssets(); ?>
        <script language="javascript">
            $('docuent').ready(MLCSite.Init);
        </script>
        <link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/glowBoarder.css"/>
        <style>
            body{
                background:black;
                /*font-family:'lucidia console';*/
                font-family:'lucidia sans typewriter';
                cursor:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/cursors/bigPointer.png');
            }
            h1{
                color:#009900;
                font-weight:normal;
            }
            h3{
                font-weight:normal;
            }
            label,select,.ui-select-menu { float: left; margin-right: 100px; }
            select {
                width: 200px;
            }
            fieldset { border:0;  margin-bottom: 40px;}

            #bodyContent{
                position:relative;
                width:900Px;
                height:700Px;
                margin-left:auto;
                margin-right:auto;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/mlc.background.png');
            }
            #mainWindow{
                margin:10Px;
                /*overflow:auto;*/
                z-index:2000;
                position:absolute;
                
            }
            #mainWindow_inner{
                color:white;
                padding:5Px;
                position:relative;
            }
            .cmdLineButton{
                color:#009900;
            }
            .cmdLineButton:hover{
                color:#669966;
            }
            .commandLine_green{
                color:#009900;
                font-size:28Px;
            }
            .icon{
                position:absolute;
                width:120Px;
                height:80Px;
                cursor:pointer;
                z-index:500;
            }
            .icon h3{
                color:#009900;
                margin-top:33Px;
                font-family:Gros;
                font-size:10Pt;


            }
            #homeIcon{
                top:30Px;
                left:730Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Home.png');
            }
            #startUpIcon{
                top:30Px;
                left:630Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/StartUps.png');
            }
            #designersIcon{
                top:130Px;
                left:630Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Designers.png');
            }
            #labIcon{
                top:130Px;
                left:730Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Lab.png');
            }
            #twitterIcon{
                top:230Px;
                left:730Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Twitter.png');
            }
             #contactIcon{
                top:230Px;
                left:630Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Contact.png');
            }
            #portfolioIcon{
                top:330Px;
                left:730Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Portfolio.png');
            }


            #MLCToolBar_holder{
                position:fixed;
                bottom:0Px;
                left:0Px;
                width:100%;
                height:34Px;
                z-index:5000;
            }
            #pnlMain{
                border:thick solid red;
            }
            #pnlSlideShow{
                height:200Px;
                width:200Px;
                margin-left:auto;
                margin-right:auto;
                overflow:hidden;
            }
            .caseStudyPanel{
                padding-top:15Px;
                position:relative;
                height:400Px;
                
            }
            .caseStudyPanel_nav{
                position:absolute;
                bottom:5Px;

            }
            .img_w380{
                width:390Px;
                padding-left:10Px;
                padding-right:10Px;
                border:none;
            }
            .MLC_qtip{
                margin-left:20Px;
            }
            .vimTextDiv{
                width:390Px;
                padding-left:10Px;
                padding-right:10Px;
                height:65Px;
                overflow:hidden;
            }

            .scrollBar_holder{
                width:10Px;
                height:100%;
                position:absolute;
                right:0Px;
                top:0Px;
            }
			.osX .jScrollPaneTrack {
				background: url(<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/scrollBar/osx_track.gif) repeat-y;
			}
			.osX .jScrollPaneDrag {
				background: url(<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/scrollBar/osx_drag_middle.gif) repeat-y;
			}
			.osX .jScrollPaneDragTop {
				background: url(<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/scrollBar/osx_drag_top.gif) no-repeat;
				height: 6px;
			}
			.osX .jScrollPaneDragBottom {
				background: url(<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/scrollBar/osx_drag_bottom.gif) no-repeat;
				height: 7px;
			}
			.osX a.jScrollArrowUp {
				height: 24px;
				background: url(<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/scrollBar/osx_arrow_up.png) no-repeat 0 -30px;
			}
			.osX a.jScrollArrowUp:hover {
				background-position: 0 0;
			}
			.osX a.jScrollArrowDown {
				height: 24px;
				background: url(<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/scrollBar/osx_arrow_down.png) no-repeat 0 -30px;
			}
			.osX a.jScrollArrowDown:hover {
				background-position: 0 0;
			}

			.left .jScrollPaneTrack {
				left: 0;
				right: auto;
			}
			.left a.jScrollArrowUp {
				left: 0;
				right: auto;
			}
			.left a.jScrollArrowDown {
				left: 0;
				right: auto;
			}


			/* IE SPECIFIC HACKED STYLES */
			* html .osX .jScrollPaneDragBottom {
				bottom: -1px;
			}
			/* /IE SPECIFIC HACKED STYLES */
            <?php $this->RenderCssClasses(); ?>
        </style>
    </head>
    <body>
        <div id="bodyContent">
            <div id="mainWindow" class="holder osX">
