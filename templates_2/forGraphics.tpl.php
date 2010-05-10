<?php $this->dlgSignUp->Render(); ?>
<div class="column_500">
    <h3>Are you a designer that could use some programming help?</h3>
    <p>
        Have you ever had to pass on a project because the client wanted something coded that you wernt sure you could do? Has a client ever requested a feature that you knew would have been great but you didn't have the experience to code it?  Do you want to expand your the list of services you can offer so you can start going after those big clients?
    </p>
    <p>
       Let me help you. I have coded everything from embeddable flash widgets, to fully functional social networks from the ground up with API support for 3 party applications. Best of all my applications  support <u>templating</u>. This means as a graphic designer you can go in and tweak every aspect of anything I build for you with out needing to get me on the phone.
    </p>

    <h3>Benefits to You</h3>
    <p>
        <h4>Get projects done in half the time</h4>
        You just landed a big project, but its going to take you eight weeks just to get a prototype up and running.
        <ul>
            <li>2 Weeks just for the mock up</li>
            <li>1 Week to convert that mock up to HTML</li>
            <li>4 Weeks to program all the functionality</li>
            <li>1 Week tweeking all the little things and making last minute client changes</li>
        </ul>
	Just hand that 4 weeks of programming off to me. While your busy doing what your best at, making, designing mind blowingly beautiful graphics, let me get started coding all those loops and if statements and all the boring stuff.
    <p>
        <h4>You can mark up my services</h4>
        Just like a retailers charge a mark up on their merchandise you can charge a markup on my services. If you pay $X/hr for my services you can charge your client $X + 25/hr. This will allow you to increase profits while expanding the range of quality services you can offer your clients.
    </p>
    <p>
        <h4>Templating</h4>
        I use the Model View Control method of programming. This separates all of the files used to format the HTML and CSS separate from the core application. This gives you as a graphic designer the ability to tweak all graphical aspects of your application with out needing any assistance from me.
    </p>
    <p>
        <h4>Save your self some headaches</h4>
        Have you spent hours banging your head against a wall with a programming problem and found your self thinking “Man... I wish I had a magical nerd genie to fix this for me!” Well I am that magical nerd genie. When it comes to PHP, MySQL, Linux Apache Server, Flash, Wordpress, (and a whole other list of junk I am not going to bother listing) I have pretty much seen it all. Let me deal with your coding headaches.
    </p>
    <p>
        <h3>When can we get started?</h3>
        Chances are I can start on a project as soon as today. 
        Depending on my current work load and the size of your project I might be able to start <b>RIGHT NOW!</b>
        The sooner you contact me the sooner I can get give you an estimate.
        Remember my initial consolation is <b>FREE</b> so there is no risk to you!
        <?php $this->btnContact2->Render("Text=Click here for your free consoltation"); ?>
    </p>

    <p>
        <h3>Other Resources</h3>
        Below are some other resources to help you along your way
    </p>
    <div class="column_225">
        <h3 id="recomendedReading">Recomended Reading</h3>
        <div id="diigo_linkroll" ><script type="text/javascript" src="http://www.diigo.com/roll2/linkrolls?v=3&username=psych0mantis00&l_type=0&count=10&desc=1&style=standard&title=&tags=freelance" ></script></div>
    </div>
</div>
<div class="column_250 ">
    <?php $this->pnlSideBar->Render(); ?>
</div>

<?php $this->RenderEnd(); ?>