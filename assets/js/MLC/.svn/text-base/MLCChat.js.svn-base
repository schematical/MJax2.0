var MLCChatAction = {
    REFRESH:'REFRESH',
    LOGIN: 'LOGIN',
    REDIRECT: 'REDIRECT',
    HIGHLIGHT: 'HIGHLIGHT'
};
var MLCChat = {
    strDefineToolBarId:"#MLCToolBar",//null,
    strScriptLocation:"/assets/php/MLCChat/MLCChat.php",//strScriptLocation:"MLCChat.php",
    ActionTag:"@",
    CtlClassPrefix:"c_",
    strActiveSessionUser:null,
    blnAdminMode:false,
    blnShowChatWindow:false,
    strIdUser:null,
    objForm:null,
    arrActiveSessionUsers:new Array(),
    xmlLastResponse:null,
    blnPsudoIdsAssigned:false,
    funCallback:null,
    Init:function(){
        //Add all event listeners
        /*
        $('body').keypress(function(event) {
              if(event.ctrlKey){
                  alert(event.which);
                  return false;
              }
              if((event.ctrlKey)&&(((event.which && event.which == 27) || (event.keyCode && event.keyCode == 27)))){
                 alert("Hit");
              }
        });
        */
        //check in with the website
        this.Refresh();
        //set up the form
        this.objForm = MLCChatWindow;
        this.objForm.Draw();
        $(document).everyTime(5000, function(i) {
          MLCChat.Refresh();
        });
        
    },
    Refresh:function(){
        this.SendAction(MLCChatAction.REFRESH);
    },
    Redirect:function(strUrl, funCallBack){
        this.SendAction(MLCChatAction.REDIRECT + " " + strUrl, funCallBack);
    },
    Highlight:function(jObj){
        var strId = jObj.attr("id");
        this.SendAction(MLCChatAction.HIGHLIGHT + " #" + strId);
    },
    SendAction:function(strAction, funCallBack){
        this.Send(this.ActionTag + strAction, funCallBack);
    },
    Send:function(strMessage, funCallBack){
        this.funCallBack = funCallBack;
        xmlResponse = $.ajax({
              url: this.strScriptLocation,
              global: false,
              type: "POST",
              data: ({message : strMessage,  receiver:MLCChat.strActiveSessionUser}),
              dataType: "xml",
              success: function(xmlResponse){
                 MLCChat.ParseResponse(xmlResponse);
              }
           }
        ).responseXML;
        //alert(xmlResponse.head.test);
        
    },
    ToggleChatWindow:function(){
        this.blnShowChatWindow = !this.blnShowChatWindow;
        this.objForm.ToggleHidden();
    },
    ParseResponse:function(xmlResponse){
        if(xmlResponse == null){
            xmlResponse = this.xmlLastResponse;
        }else{
            this.xmlLastResponse =  xmlResponse;
        }
        
        this.strIdUser = $(xmlResponse).find('idUser').text();

        if($(xmlResponse).find('adminMode').text() == 'true'){
            if(this.blnAdminMode != true){
                this.blnAdminMode = true;
                this.objForm.Draw();
            }
        }else{
            if(this.blnAdminMode != false){
                this.blnAdminMode = false;
                this.objForm.Draw();
            }
        }

         //read all posts
        this.objForm.ClearPosts();
        $(xmlResponse).find('post').each(function(){
            var strIdPost = $(this).children('idPost').text();
            var strSender = $(this).children('sender').text();
            var strReceiver = $(this).children('receiver').text();
            var strMessage = $(this).children('message').text();
            var strDate = $(this).children('date').text();
            //filter out actions
            
            var blnNewUserAdded = MLCChat.CrossCheckActiveSessions(strSender, strReceiver);
            if(blnNewUserAdded){
                MLCChat.objForm.Draw();
            }

            if(strMessage.substr(0, 1) == '@'){
                
                //Run the action
                var arrArgs = strMessage.substr(1).split(" ");
                var strAction = arrArgs[0];
                arrArgs = arrArgs.slice(1);
                switch(strAction.toUpperCase()){
                    case(MLCChatAction.REDIRECT):
                        if(MLCChat.strIdUser == strReceiver){
                            $("body").load(arrArgs[0],{}, MLCChat.objForm.Draw);
                        }
                    break;
                    case(MLCChatAction.HIGHLIGHT):
                        if(MLCChat.strIdUser == strReceiver){
                            MLCChat.AssignPsudoIds();
                            alert(arrArgs[0]);
                            MLCChat.objForm.Highlight($(arrArgs[0]));
                        }
                    break;
                }
            }else{
                if(MLCChat.blnAdminMode){
                    if((MLCChat.strActiveSessionUser == strReceiver) || (MLCChat.strActiveSessionUser == strSender)){
                         MLCChat.objForm.AddPost(strSender, strMessage, strDate);
                    }
                }else{
                    MLCChat.objForm.AddPost(strSender, strMessage, strDate);
                }
            }
        });
        if((this.funCallBack != undefined) && (this.funCallBack != null)){
            this.funCallBack(xmlResponse);
        }
    },
    CrossCheckActiveSessions:function(strSender, strReceiver){
        var blnAddSender = true;
        var blnAddReceiver = true;
        if(strSender == this.strIdUser){
            blnAddSender = false;
        }
        if(strReceiver == this.strIdUser){
            blnAddReceiver = false;
        }
        for(var i = 0; i < this.arrActiveSessionUsers.length; i++){
            if((this.arrActiveSessionUsers[i] == strSender)){
                blnAddSender = false;
            }
            if(this.arrActiveSessionUsers[i] == strReceiver){
                blnAddReceiver = false;
            }
        }
        if(blnAddSender){
            this.arrActiveSessionUsers[this.arrActiveSessionUsers.length] = strSender;
            if(this.strActiveSessionUser == null){
                this.strActiveSessionUser = strSender;
            }
        }
        if(blnAddReceiver){
            this.arrActiveSessionUsers[this.arrActiveSessionUsers.length] = strReceiver;
            if(this.strActiveSessionUser == null){
                this.strActiveSessionUser = strReceiver;
            }
        }
        return (blnAddSender ||blnAddReceiver);
    },
    SetActiveUserSession:function(strIdUser){
        if(this.strActiveSessionUser != strIdUser){
            this.strActiveSessionUser = strIdUser;
            this.ParseResponse();
        }
    },
    AssignPsudoIds:function(){
        if(!this.blnPsudoIdsAssigned){
           MLCChatWindow.intIndex = 0;
           $("*").each(function(){
               if($(this).attr("id").length == 0){
                    $(this).attr("id", MLCChat.CtlClassPrefix + MLCChatWindow.intIndex.toString());
                    MLCChatWindow.intIndex += 1;
               }
           });
        }
    }
};

var MLCChatWindow = {
    WindowId:"MLCChat_window",
    jWindow:null,
    jScreen:null,
    jTextArea:null,
    jSendBtn:null,
    jToolBar:null,
    jChatMinimizeDiv:null,
    Draw:function(){
        if(this.jWindow != null){
            this.jWindow.remove();
        }
        //this should use jquery to initally draw it self on the screen
        var nodeChatWindow = document.createElement('div');
        nodeChatWindow.id = this.WindowId;
        this.jWindow = $(nodeChatWindow);
        var jDocument = $("body");
        jDocument.append(nodeChatWindow);
        //add screen
        var nodeChatWindowScreen = document.createElement('div');
        nodeChatWindowScreen.id = this.WindowId + "_screen";
        this.jWindow.append(nodeChatWindowScreen);
        this.jScreen = $(nodeChatWindowScreen);

        //Text box
        var nodeChatWindowTextArea = document.createElement('textarea');
        nodeChatWindowTextArea.id = this.WindowId + "_textArea";
        this.jWindow.append(nodeChatWindowTextArea);
        this.jTextArea = $(nodeChatWindowTextArea);
        this.jTextArea.attr('rows', '1');
        this.jTextArea.keypress(function(event) {
              if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)){

                 MLCChatWindow.SendPost();
                 event.preventDefault();
                 
              }
        });

        //send button
        var nodeChatWindowSendBtn = document.createElement('input');
        nodeChatWindowSendBtn.type = 'button';
        nodeChatWindowSendBtn.id = this.WindowId + "_sendBtn";
        this.jWindow.append(nodeChatWindowSendBtn);
        this.jSendBtn = $(nodeChatWindowSendBtn);
        this.jSendBtn.click(this.SendPost);
        this.jSendBtn.attr('value', 'Send');

        
        if(MLCChat.strDefineToolBarId == null){
            var nodeChatToolBar = document.createElement('div');
            nodeChatToolBar.id = this.WindowId + "_toolBar";
            this.jToolBar = $(nodeChatToolBar);
            jDocument.append(nodeChatToolBar);
        }else{
            this.jToolBar = $(MLCChat.strDefineToolBarId);
        }
        
        if(!MLCChat.blnAdminMode){
            if(this.jChatMinimizeDiv == null){
                var nodeChatMinimizeDiv = document.createElement('div');
                nodeChatMinimizeDiv.id = this.WindowId + "_minimize";
                this.jChatMinimizeDiv = $(nodeChatMinimizeDiv);
                this.jChatMinimizeDiv.text("Chat");
                this.jChatMinimizeDiv.addClass(this.WindowId + "_sessionDiv");
                this.jToolBar.append(nodeChatMinimizeDiv);
                this.jChatMinimizeDiv.click(function(){
                    MLCChat.ToggleChatWindow();
                });
            }
        }else{
            var jChatSessionDiv = null;


            nodeChatSessionDiv = document.createElement('div');
            nodeChatSessionDiv.id = this.WindowId + "_";
            jChatSessionDiv = $(nodeChatSessionDiv);
            jChatSessionDiv.text("Highlight");
            jChatSessionDiv.addClass(this.WindowId + "_sessionDiv");
            this.jToolBar.append(nodeChatSessionDiv);
            jChatSessionDiv.data("strIdUser", MLCChat.arrActiveSessionUsers[i]);
            jChatSessionDiv.click(function(){
               MLCChat.AssignPsudoIds();
               $("*").live("hover", function(){
                    MLCChatWindow.Highlight($(this));
               });
               $("*").live("click", function(e){
                    MLCChat.Highlight($(this));
                    $("*").die("hover");
                    e.stopImmediatePropagation();
               });
            });


            for(var i = 0; i < MLCChat.arrActiveSessionUsers.length; i++){
                var nodeChatSessionDiv = document.createElement('div');
                nodeChatSessionDiv.id = this.WindowId + "_session_" + MLCChat.arrActiveSessionUsers[i];
                jChatSessionDiv = $(nodeChatSessionDiv);
                jChatSessionDiv.text(MLCChat.arrActiveSessionUsers[i]);
                jChatSessionDiv.addClass(this.WindowId + "_sessionDiv");
                this.jToolBar.append(nodeChatSessionDiv);
                jChatSessionDiv.data("strIdUser", MLCChat.arrActiveSessionUsers[i]);
                jChatSessionDiv.click(function(){
                    MLCChat.SetActiveUserSession($(this).data("strIdUser"));
                });
            }
            
        }
        $('a').live('click', function(e){
            MLCChat.Redirect($(this).attr('href'), function(){alert("Move the page");});
            e.stopImmediatePropagation();
        });
        this.ToggleHidden();
    },
    ClearPosts:function(){
        this.jScreen.text('');
    },
    AddPost:function(strSender, strMessage, strDate){
         this.jScreen.append("<div><b>" + strSender + ":<b> " + strMessage + "</div>");
    },
    SendPost:function(){
        var strMessage = MLCChatWindow.jTextArea.val();
        MLCChat.Send(strMessage);
        MLCChatWindow.jTextArea.val('')
    },
    Highlight:function(jObj){
        // remove all other classes
        var strClassName = this.WindowId + "_highlighted";
        $("." + strClassName).each(function(){$(this).removeClass(strClassName);});
        $(jObj).addClass(strClassName);
    },
    ToggleHidden:function(){
        if(MLCChat.blnShowChatWindow){
            this.jWindow.css('display', 'block');
            this.jChatMinimizeDiv.text("Minimize Chat");
        }else{
            this.jWindow.css('display', 'none');
            this.jChatMinimizeDiv.text("Chat");
        }
    }
};