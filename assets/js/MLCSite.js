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

        $('.MLC_qtip').click(function(){
            var jText = $(this).parent().children('.vimTextDiv')
            if(jText.html() != $(this).attr('content')){
                jText.html($(this).attr('content'));
                jText.stop().css('background-color', 'rgb(0, 135, 0)').animate({backgroundColor:'black'}, 1000);
            }
        });
        
        //$('#mainWindow').jScrollPane({showArrows:true, scrollbarWidth: 15, arrowSize: 16});
        //MLCChat.Init(); 
    },
    IconMouseOver:function(e){
        
        
    },
    IconMouseOut:function(e){
        
    },
    IconClick:function(e){
        var strPage = $(this).attr('page');
        MJax.LoadMainPage("/" + strPage + ".php", {action:'change_page'},true);
    }
    

};