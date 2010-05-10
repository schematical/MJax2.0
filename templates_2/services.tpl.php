<?php $this->dlgSignUp->Render(); ?>
    <style>
        .quoteDiv{
            margin-bottom:5Px;
        }
    </style>
    <h1>Web Application Engineering</h1>
    <div class="column_325">
        <div>
            <h3>For the non tech person:</h3>
            <p>
                Lets say for example you were building a skyscraper,
                which would you hire to design it, a construction worker an architect?
                I'm assuming you answered architect. The same goes for building web applications,
                if your building anything bigger then a home page for your soccer team then your
                going to need to somebody that knows how to building scalable, reliable applications.
            </p>
            <p>
                <h5 class="MLCCollapsButton" targetId="MLCCollapsTarget_tools">Building the tools</h5>
                <div id="MLCCollapsTarget_tools" class="quoteDiv" height="90Px">
                    Now were not saying that construction workers don't play an important part of the
                    development process. They do, there is no denying that.
                    With our assistance we will give them the game plan and the tools to get the job done.
                    <a href="#toolsInternal">See more on building tools for designers and developers</a>
                </div>
             </p>
             <p>
                Building a fully functional web application can be just as monstrous of an undergoing
                as building a sky scrapper. We can help guide you through each phase.
            </p>
        </div>
        <div class="quoteDiv">
            <h4>Planning:</h4>
            <p>
                We help to ensure you are using the latest and greatest web technologies
                and techniques to ensure the best possible end product.
            </p>
            <p>
                We also can help you break down your project into releases so you can pick
                and chose what features you want to launch at which point and time.
                This also ensures that you can get the features you want at a price that works for you.
            </p>
       </div>
        <div class="quoteDiv">
            <h4>Coding:</h4>
            We use the most reliable techniques to ensure that your site is:
            <ul>
                <li>Engaging to the user</li>
                <li>Bug Free</li>
                <li>Easily maintainable by your staff</li>
            </ul>
        </div>
        <div class="quoteDiv">
            <h4>Testing:</h4>
            We work with you to rigorously test the site to ensure its optimal performance during launch.
        </div>
        <div class="quoteDiv">
            <h4>Implementation:</h4>
            Once your site is built your going to want to make sure everything goes smoothly during launch.
            We can assist in phasing out any of your old systems and phasing in your new ones.
        </div>
        <div class="quoteDiv">
            <h4>Training:</h4>
            Don't forget about the most important component of your application, the users!
            We can assist in providing training materials and even do hands on training.
        </div>
        <?php /*
         <div class="quoteDiv">
            <h4>Marketing:</h4>
                Press: We get Press! All our projects are supported by a PR firm.
         </div>
         */ ?>
        <div class="quoteDiv">
            <h4>Support:</h4>
            As your business grows and your users start using your application new ideas for new
            features will occur. We build every application with growth in mind and are happy to provide support for the application as it grows.
        </div>
        <div>
            <h3>Pricing:</h3>
            <?php $this->btnContact2->Render(); ?>
        </div>
    </div>
    <div class="column_325 ">
        <h3>For the tech person:</h3>
        <p>
            <i style="font-size:16Pt;">What makes our designs better?</i>
        </p>
        <p>
            <b>Top of the line architecture:</b>

            Each and every application is engineered from the ground up ensuring that the data structure 
            is in 3rd normal form. We use frameworks and libraries that are all object oriented and utilize
            the Model View Control to separate out the different components of the application.
        <p>
        <p id="toolsInternal">
            <b>Tools – internally Components and Frameworks:</b>

            A large part of what makes us different from most of the other web application developers
            you will find is that we are firm believers in giving your designers and developers
            to build off of what we have done. This means we build a core framework for your application
            and then your in house designers and developers can create, maintain, and update the components
            that add extra functionality to the application.
        <p>
        <img src="<?= __IMAGE_ASSETS__; ?>/frameworkComponent.dependancyChart.png" />
        <p>
            <b>Tools - externally Platforms, and APIs:</b>

            The day of stand alone websites is over.
            Yes old fashion websites would share information via links but the new juggernauts
            of our time have demonstrated that is not enough.
            Companies like Google are building frameworks,
            and APIs that allow other websites to vastly expand their capabilities
            far beyond what they would be able to achieve on their own.
            Each of the top 10 websites in the USA have a platform for distributing data.
            9 out of 10 have an API(Craigslist.com is the only exception,
            it uses RSS feeds to distribute data). See for your self:
            <ul>
                <li><a href="http://code.google.com">Google</a></li>
                <li><a href="http://www.youtube.com/dev">Youtube</a></li>
                <li><a href="http://developers.facebook.com/">Facebook</a></li>
                <li><a href="http://developer.yahoo.com/">Yahoo</a></li>
                <li><a href="http://dev.live.com/">Live</a></li>
                <li><a href="http://www.mediawiki.org/wiki/API">Wikipedia</a></li>
                <li><a href="http://aws.amazon.com/">Amazon</a></li>
                <li><a href="http://www.blogger.com/developers/api/1_docs/">Blogger</a></li>
                <li><a href="http://developer.ebay.com/">E-Bay</a></li>
            </ul>
            This separates a good site from a great site. By allowing other developers to build
            applications off of their site the extend their viewer base exponentially.

            <img src="<?= __IMAGE_ASSETS__; ?>/platformAPI.dependancyChart.png" />
        </p>
        <p>
            For examples of our work see our <a href="/portfolio.php">portfolio page</a>
        </p>
        <p>
            <h3>Pricing:</h3>
            <?php $this->btnContact3->Render(); ?>
        </p>

       <script language="javascript">
            $('docuent').ready(MLC.SetUpCollapsButtons);
       </script>
	




    </div>
<?php $this->RenderEnd(); ?>