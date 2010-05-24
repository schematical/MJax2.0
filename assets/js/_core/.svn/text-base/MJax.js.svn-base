var MJax = {
    strCurrPageUrl:null,
    objCurrPostData:{},
    arrControls:new Array(),
    Init:function(){
    var arrLocationParts = document.location.toString().split("/");
        this.strCurrPageUrl = MJax.GetDocAncorLocation();

        if(this.strCurrPageUrl != MJax.GetDocRealLocation()){
            document.location = this.strCurrPageUrl;
            return;
        }
    },
    GetDocAncorLocation:function(){
        var arrLocationParts = document.location.toString().split("/");

        var arrCurrPageParts = document.location.toString().split("#");
        if(arrCurrPageParts.length == 1){
           if(arrLocationParts[3] == undefined){
                return 'index.php';
           }else{
                return arrLocationParts[3];
           }
        }else{
           return arrCurrPageParts[1];
        }

    },
    GetDocRealLocation:function(){
        var arrLocationParts = document.location.toString().split("/");
        if(arrLocationParts[3] == undefined){
            return 'index.php';
        }else{
            var arrCurrPageParts = arrLocationParts[3].split("#");
            if(arrCurrPageParts.length == 1){
               return arrLocationParts[3];
            }else{
               return arrCurrPageParts[0];
            }
        }
    },
    UpdateDocLocation:function(){
        document.location = this.GetDocRealLocation() + "#" + this.strCurrPageUrl;

    },
    LoadMainPage:function(strUrl, objData){
        this.strCurrPageUrl = strUrl;
        if(objData == undefined){
            this.objCurrPostData = {};
        }else{
            this.objCurrPostData = objData;
        }
        
        for(var i = 0; i < this.arrControls.length; i++){
            this.objCurrPostData[this.arrControls[i]] = $('#' + this.arrControls[i]).attr('value');
        }
        /*
        $("#mainWindow").animate(
            {"height":"2Px"},
            450,
            MJax.LoadMainPageShrinkCallback
        );*/
        MJax.LoadMainPageShrinkCallback();
    },
    LoadMainPageShrinkCallback:function(){
        $("#mainWindow").css('display','none');
        
        $.ajax({
              url: MJax.strCurrPageUrl,
              success: MJax.LoadMainPageLoadCallback,
              data:MJax.objCurrPostData,
              dataType:'xml',
              type:'POST'
        });
        
        //$("#mainWindow").load(MJax.strCurrPageUrl + " #mainWindow", MJax.objCurrPostData, MJax.LoadMainPageLoadCallback);
        MJax.objCurrPostData = {};
    },
    LoadMainPageLoadCallback:function(strData, strTextStatus, xmlResponse){
        var xmlBody = xmlResponse.responseXML.firstChild;
        var xmlControl = null;
        var strControlId = null;
        
        for(var i = 0; i < xmlBody.childNodes.length; i++){
            if(xmlBody.childNodes[i].tagName == 'controls'){
                for(var ii = 0; ii < xmlBody.childNodes[i].childNodes.length; ii++){
                    xmlControl = xmlBody.childNodes[i].childNodes[ii];
                    if(xmlControl.tagName == 'control'){
                        strControlId = xmlControl.getAttribute('id');
                        
                        $("#" + strControlId).html(xmlControl.firstChild.nodeValue);
                    }
                    
                }
            }
            if(xmlBody.childNodes[i].tagName == 'actions'){
                for(var ii = 0; ii < xmlBody.childNodes[i].childNodes.length; ii++){
                    xmlControl = xmlBody.childNodes[i].childNodes[ii];
                    if(xmlControl.tagName == 'action'){
                        eval(xmlControl.firstChild.nodeValue);
                    }

                }
            }
        }
        $("#mainWindow").css('display','block');
        var strHeight = $("#mainWindow_inner").css('height');
        var intHeight = parseInt(strHeight.replace('px', ''));
        var strNewHeight = (intHeight + 20) + "Px";
        /*
        $("#mainWindow").animate(
            {"height":strNewHeight},
            450,
            MJax.LoadMainPageGrowCallback
        );*/
        MJax.LoadMainPageGrowCallback();
        MJax.UpdateDocLocation();
    },
    LoadMainPageGrowCallback:function(){
        //alert($("#mainWindow").css('height'));
    },
    TriggerControlEvent:function(strControlId, strEvent){
        var strFormState = $("#MJaxForm__FormState").attr('value');
        var objData = {
            action:'control_event',
            control_id:strControlId,
            event:strEvent,
            MJaxForm__FormState:strFormState
        };        
        MJax.LoadMainPage(MJax.strCurrPageUrl, objData);
    },
    ClearRegisteredControls:function(){
        this.arrControls = new Array();
    },
    RegisterControl:function(strControlId){
        this.arrControls[this.arrControls.length] = strControlId;
    }
};