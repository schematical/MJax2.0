<div id="mainWindow_inner" style="height:400Px;width:500Px;">
        <style>
        h5{
            color:#009900;
            font-size:18Px;
        }
        p{
            padding:10Px;
        }
        .codeSnipit{
            margin-left:30Px;
            font-style:italic;
        }
        </style>
        <h3>[MLC]:tail /var/<span class="commandLine_green">lab</span> -f</h3>
        
        <h4  class="commandLine_green">MJax - Framework</h4>
        <h5>jQuery meets PHP</h5>
        <p>
            
            MJax is my own little merger between Google's jQuery and Mike Ho's Qcodo(PHP Framework).
            Its a MVC framework that is primarily uses ajax to control content.
        </p>
        <h5>Browse with out refreshing</h5>
        <p>
            It is built to mimic Facebooks ability to browse from page to page with out
            completely refreshing the browser.
            It would be great for a site that wanted to have an uninterrupted task occurring
            as the user browsed the site. By tasks I mean playing an audio player or running
            a chat application(It actually has a small chat app I was working on in the source).
            <p class="codeSnipit">
                Try it here:<br>
                
                Tool Bar Text &nbsp;&nbsp;&nbsp;<?php $this->txtToolBar->Render(); ?>
                &nbsp;&nbsp;&nbsp;<?php $this->btnUpdate->Render(); ?><br>
            </p>
        </p>
        <p>
            Another feature of MJax is that from the server using just PHP you apply plugins
            and attach event handlers directly to classes and elements.
            Here is an example of how those icons on the right side of the screen are set up:
            <p class="codeSnipit">
                $cssClass = MJaxApplication::CssClass('icon');<br>
                $cssClass->AddAction(new MJaxClickEvent(),<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new MJaxJavascriptAction('MLCSite.IconClick'));<br>

                $this->pnlHomeIcon = new MJaxPanel($this, 'homeIcon');<br>
                $this->pnlHomeIcon->AddCssClass($cssClass);<br>
            </p>
        </p>
        <p>
            Please feel free to download and check it out. Though this site is running using the Mjax
            framework at the time I am writing this I feel that the source that is available on github.com
            still needs a LOT of work, and is almost completely undocumented.
            All the same have fun with it and if you need help installing it or
            getting something with similar functionality running on your site please drop me a line.
        </p>
        <p>
            <h5>Download</h5>
            <ul style="list-style:none; margin-left:15Px;">
                <li><a href="http://github.com/mlconsulting/MJax">Front End</a></li>
                <li><a href="http://github.com/mlconsulting/MJax-Includes">Back End</a></li>
                <li><a href="http://www.qcodo.com/downloads/">QCodo</a> - This is required to run MJax</li>
            </ul>
        </p>
        <h4  class="commandLine_green">Project Box Band</h4>
        <p>
            As of the moment I am hesitant to put the sources up for Project Box Band,
            but I believe it still deserves an honorable mention.
            Project Box Band is a content management system designed specifically for performing
            artists. I am currently looking to partner up with any businesses that offer services
            to performing artists. So if you know of any please drop my name to them.

        </p>
       
        <h5>Donate</h5>
        <p>
            We all have to eat, right? So if you like any of my projects please feel free to donate as you see fit. ~Thanks!
            
        </p>
        <p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="HA8MXBEC9HF3L">
            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </p>
        </form>
</div>