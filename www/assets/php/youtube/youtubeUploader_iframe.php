<?php //<form onsubmit="ytVideoApp.prepareSyndicatedUpload(this.videoTitle.value, this.videoDescription.value, this.videoCategory.value, this.videoTags.value); return false;" id="uploadForm">Enter video title:<br><input type="text" name="videoTitle" size="50"><br>Enter video description:<br><textarea name="videoDescription" cols="50"></textarea><br>Select a category: <select name="videoCategory"><option value="Autos">Autos &amp; Vehicles</option><option value="Music">Music</option><option value="Animals">Pets &amp; Animals</option><option value="Sports">Sports</option><option value="Travel">Travel &amp; Events</option><option value="Games">Gadgets &amp; Games</option><option value="Comedy">Comedy</option><option value="People">People &amp; Blogs</option><option value="News">News &amp; Politics</option><option value="Entertainment">Entertainment</option><option value="Education">Education</option><option value="Howto">Howto &amp; Style</option><option value="Nonprofit">Nonprofit &amp; Activism</option><option value="Tech">Science &amp; Technology</option></select><br>Enter some tags to describe your video <em>(separated by spaces)</em>:<br><input type="text" value="video" size="50" name="videoTags"><br><input type="submit" value="go"></form>


$videoTitle = null;
$videoDescription= null;
$videoCategory = null;
$videoTags = null;
$nextUrl = null;

    $httpClient = getAuthSubHttpClient();
    $youTubeService = new Zend_Gdata_YouTube($httpClient);
    $newVideoEntry = new Zend_Gdata_YouTube_VideoEntry();

    $newVideoEntry->setVideoTitle($videoTitle);
    $newVideoEntry->setVideoDescription($videoDescription);

    //make sure first character in category is capitalized
    $videoCategory = strtoupper(substr($videoCategory, 0, 1))
        . substr($videoCategory, 1);
    $newVideoEntry->setVideoCategory($videoCategory);

    // convert videoTags from whitespace separated into comma separated
    $videoTagsArray = explode(' ', trim($videoTags));
    $newVideoEntry->setVideoTags(implode(', ', $videoTagsArray));

    $tokenHandlerUrl = 'http://gdata.youtube.com/action/GetUploadToken';
    try {
        $tokenArray = $youTubeService->getFormUploadToken($newVideoEntry, $tokenHandlerUrl);
        if (loggingEnabled()) {
            logMessage($httpClient->getLastRequest(), 'request');
            logMessage($httpClient->getLastResponse()->getBody(), 'response');
        }
    } catch (Zend_Gdata_App_HttpException $httpException) {
        print 'ERROR ' . $httpException->getMessage()
            . ' HTTP details<br /><textarea cols="100" rows="20">'
            . $httpException->getRawResponseBody()
            . '</textarea><br />'
            . '<a href="session_details.php">'
            . 'click here to view details of last request</a><br />';
        return;
    } catch (Zend_Gdata_App_Exception $e) {
        print 'ERROR - Could not retrieve token for syndicated upload. '
            . $e->getMessage()
            . '<br /><a href="session_details.php">'
            . 'click here to view details of last request</a><br />';
        return;
    }

    $tokenValue = $tokenArray['token'];
    $postUrl = $tokenArray['url'];

    // place to redirect user after upload
    if (!$nextUrl) {
        $nextUrl = $_SESSION['homeUrl'];
    }

?>   
<form action="<?php _p($postUrl); ?>?nexturl=<?php _p($nextUrl); ?>"
        method="post" enctype="multipart/form-data">
        <input name="file" type="file"/>
        <input name="token" type="hidden" value="${tokenValue}"/>
        <input value="Upload Video File" type="submit" />
</form>

