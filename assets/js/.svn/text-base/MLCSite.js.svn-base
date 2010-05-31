var MLCSite = {
    Init:function(){
        MJax.Init();
        $('.commandLineBlink').data('on', 'false');
        $('.commandLineBlink').everyTime(1000, 'commandLineBlink', function(){
            //$(this).text($(this).data('on'));
            var blnIsOn = $(this).data('on');
            if(blnIsOn == 'true'){
                $(this).data('on', 'false');
                $(this).css('background-color', '#009900');
            }else{
                $(this).data('on', 'true');
                $(this).css('background-color', 'black');
            };
        });
        $('#mainWindow_inner').jScrollPane({/*showArrows:true,*/ scrollbarWidth: 15, arrowSize: 16, animateTo:true, animateInterval:150, animateStep:3});
        MJax.funMainPageLoad = MLCSite.MainPageLoad;
    },
    SetUpIndexPage:function(){
        $('.MLC_qtip').click(function(){
            var jText = $(this).parent().children('.vimTextDiv')
            if(jText.html() != $(this).attr('content')){
                jText.html($(this).attr('content'));
                jText.stop().css('background-color', 'rgb(0, 135, 0)').animate({backgroundColor:'black'}, 1000);
            }
        });

        $('.jScrollPaneDrag').mousedown(function(){
            $('body').live('mouseup',function(){
                var strTop = $('#mainWindow_inner').css('top');
                var intTop = new String(strTop).replace("px", "");
                var intNewScrollPos = Math.round(intTop/420) * -420;
                $('#mainWindow_inner')[0].scrollTo(intNewScrollPos);
                $('body').die('mouseup');
            });
        });
        //MLCChat.Init();
        /*IE sucks*/
        if($.browser.msie){
            $('.caseStudyPanel').css('margin-bottom', '20Px');
            $('.mainWindow_inner').css('padding-bottom', '20Px');
        }
    },
    SetUpContactPage:function(){
        var strEmail = $('#email_link').text();
        
        strEmail = strEmail.replace('-at-', '@');
        strEmail = strEmail.replace('-dot-', '.');
        
        $('#email_link').text(strEmail);
        $('#email_link').attr('href', 'mailto:' + strEmail);

        $('#phone_span').text("262-880-8640");
       
    },
    IconMouseOver:function(e){
        
        
    },
    IconMouseOut:function(e){
        
    },
    IconClick:function(e){
        //I hate you MSIE
        
        var strPage = $(this).attr('page');
        if(strPage != undefined){
            //TODO: Fix this!
            if(($.browser.msie) || (strPage = 'index')){
                document.location = "/" + strPage + ".php";
            }else{
                MJax.LoadMainPage("/" + strPage + ".php", {action:'change_page'},true);
                return;
            }
        }
        
        var strHref = $(this).attr('href');
        if(strHref != undefined){
            document.location = strHref;
        }
    },
    MainPageLoad:function(){
        $('#mainWindow_inner').jScrollPane({/*showArrows:true,*/ scrollbarWidth: 15, arrowSize: 16, animateTo:true, animateInterval:150, animateStep:3});
    }
};