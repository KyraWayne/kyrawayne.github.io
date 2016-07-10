<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" media="screen and (min-device-width: 1000px)" href="wide.css" />
        <link rel='stylesheet' media='screen and (max-width: 700px)' href='small.css' />
        <title>Home</title>
        <script>
            function eventHandler(){
                var disp = document.getElementById("dropDown");
                if (disp.style.display=='inline')
                    disp.style.display='none';
                else
                    disp.style.display='inline';
            }
        </script>
    </head>
<body>
    <div id="container">
        <div id="sandwichBar" >
            <img src="assets/sandwichBar.png" onclick="eventHandler()" style="height:50px;width:50px;">
        </div>
        <div id="dropDown">
            <ul id="drop">
                <a href="http://www.kyrawayne.com/blog.html"><li>BLOG</li></a>
                <a href="http://www.kyrawayne.com/projects.html"><li>PROJECTS</li></a>
                <a href="http://www.kyrawayne.com/photography.html"><li>PHOTOGRAPHY</li></a>
                <a href="http://www.kyrawayne.com/artwork.html"><li>ARTWORK</li></a>
                <a href="http://www.kyrawayne.com/resume.html"><li>RESUME</li></a>
                <a href="kyrawayne.github.io"><li id="active">HOME</li> </a>
            </ul>
        </div>
        <div id="header"> 
            <ul id="nav" class="hide">
                <image src="assets/redCircle.png" alt="Logo" style="height:50px;width:50px;margin-top:-12px;">
                <a href="http://www.kyrawayne.com/blog.html"><li>BLOG</li></a>
                <a href="http://www.kyrawayne.com/projects.html"><li>PROJECTS</li></a>
                <a href="http://www.kyrawayne.com/photography.html"><li>PHOTOGRAPHY</li></a>
                <a href="http://www.kyrawayne.com/artwork.html"><li>ARTWORK</li></a>
                <a href="http://www.kyrawayne.com/resume.html"><li>RESUME</li></a>
                <a href="kyrawayne.github.io"><li id="active">HOME</li> </a>
            </ul>
        </div>
        <div id="body">
            <img src="assets/bio.jpg" alt="profile" style="float:left; padding:0 30px 30px 0;">
            <h1> About Me </h1>
            <p class="jus">Hello, my name is Kyra (pronounced "keer-rah") Wayne!</p>

<p class="jus">I am a senior Web Design Engineering major and Computer Science Engineering and Studio Art double minor based in the Silicon Valley.</p>

<p class="jus">I am well versed in front-end development, and enjoy utilizing my design skills to tackle challenges in UX and UI design. My other interests lie in Software, Web Applications, and Mobile Apps.</p>

<p class="jus">Aside from programming, I enjoy art in all forms, from photography, sketching, and digital work, to acting, writing, and sculpture. Check out my CV and explore my site to see the projects I'm working on!</p>
        
        <br><br><br><hr>
        <br>
        <h1> Leave Me a Message </h1>
            <div id="formDiv" style="text-align:left">
                <form action="contact.php" method="POST">
                    <p>First Name <input type="text" name="fn" required><br><br>
                    Last Name <input type="text" name="ln" required><br><br>
                    Email <input type="text" name="email" required><br><br>
                    Nature of Message <br>
                    <input type="checkbox" name="type" value="collab">Collab Opportunity<br>
                    <input type="checkbox" name="type" value="design">Design Opportunity<br>
                    <input type="checkbox" name="type" value="dev">Dev Opportunity<br>
                    <input type="checkbox" name="type" value="other">Other<br><br>
                    Message <br></p>
                    <textarea name="message" required>
                    </textarea><br><br><br>
                    <input type="submit" value="Send">
                </form>
                <?php $thankYou
                ?>
            </div>

        <br><br></div>  <br>
        <div id="footer">
            <div class="col-third hide" style="padding:0;">
                <br>
                <p style="font-style:italic"> "The walls between art and engineering exist only in our minds" - Theo Jansen</p>
                <p style="font-style:italic">"There's nothing I believe in more strongly than getting young people interested in science and engineering, for a better tomorrow, for all humankind." - Bill Nye</p>
            </div>
            <div class="col-third hide" style="padding-left:10px;">
                <h1 style="color:white; padding-top:30px; margin: 0;"><a href="mailto:kyrawayne.dev@gmail.com">Contact</a></h1>
            </div>
            
            <div id="footerImg" style="padding-left:0px;">    
                <image src="assets/redCircle.png" alt="Logo" style="height:80px;width:80px">
            </div>
    </div>
</body>
</html>