<html>
    <head>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/MLCSite.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/MJax.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/jquery/jquery-1.4.2.min.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery-1.4.2.min.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery.easing.1.3.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/_core/jquery/jquery.timers-1.2.js"></script>
        <script language="javascript" src="<?php _p(__VIRTUAL_DIRECTORY__ . __JS_ASSETS__); ?>/MLC/MLCChat.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/css/MLCChat.css"/>
       

        

        <?php $this->RenderHeaderAssets(); ?>
        <script language="javascript">
            $('docuent').ready(MLCSite.Init);
        </script>
        <link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/glowBoarder.css"/>
        <style>
            body{
                background:black;
                font-family:tahoma;
                cursor:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/cursors/bigPointer.png');
            }
            h1{
                color:#009900;
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
                overflow:hidden;
                
            }
            #mainWindow_inner{
                color:white;
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
            }
            .icon h3{
                color:#009900;
                margin-top:33Px;
                font-family:Gros;
                font-size:10Pt;


            }
            #homeIcon{
                top:300Px;
                left:100Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Home.png');
            }
            #contactIcon{
                top:390Px;
                left:130Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Contact.png');
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
            #portfolioIcon{
                top:410Px;
                left:200Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Portfolio.png');
            }
            #twitterIcon{
                top:300Px;
                left:270Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Twitter.png');
            }
            #labIcon{
                top:280Px;
                left:570Px;
                background:url('<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/icons/Lab.png');
            }


            #MLCToolBar_holder{
                position:fixed;
                bottom:0Px;
                left:0Px;
                width:100%;
                height:34Px;
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
            
        </style>
    </head>
    <body>
        <div id="bodyContent">
            <div id="mainWindow">
