var MLCSite = {
    Init:function(){
        $('.icon').each(function(){
            var jThis = $(this);
            jThis.mouseover(MLCSite.IconMouseOver);
            jThis.mouseout(MLCSite.IconMouseOut);
            jThis.click(MLCSite.IconClick);
        });
        MJax.Init();
        

        MLCChat.Init();
         
    },
    IconMouseOver:function(e){
        
        
    },
    IconMouseOut:function(e){
        
    },
    IconClick:function(e){
        var strPage = $(this).attr('page');
        MJax.LoadMainPage("/" + strPage + ".php", {action:'change_page'});
    },
    

};