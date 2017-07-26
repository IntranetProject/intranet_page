<?php
if (!(file_exists("up.txt"))) {
    header("Location: http://maintenance.intranetproject.net?site=Mainsite");
}
?>
    <html>

    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="navbar">
                <ul>
                    <li class="left"><img src="logo.png" width="70px" height="70px"></li>
                    <div class="ul-right">
                        <li class="right"><a href="http://status.intranetproject.net">Status</a></li>
                        <li class="right"><a href="http://docs.intranetproject.net">Documentation</a></li>
                        <li class="right"><a href="http://blog.intranetproject.net">Blog</a></li>
                        <li class="right"><a href="#download">Download & Shop</a></li>
                    </div>
                </ul>
            </div>
            <div class="jumbotron">
                <div class="text">
                    <p>Intranet</p>
                    <small class="version_num" style="font-size: 0.4em; color: #121420;">...</small>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="innerbox">
                <div class="inner-innerbox">
                    <div id="info" class="intranet">
                        <h1>What is Intranet?</h1><br><br>
                        <p><a href="https://en.wikipedia.org/wiki/Home_automation">SmartHomes</a> are winning more and more popularity in the last couple of years. However these systems are expensive and not controllable. To have everything in one application is a lot nicer. At this point our Intranet comes to play. Our Intranet is OpenSource, module based software-system, meaning you can configure everything as you like. There is the classic setup, that doesn't contain a lot of features. Modules are the interesting part. Modules are easy to install and expand your existing system. There are software modules, like a TODO-List or calendar, but also hardware with software components, like temperature modules or remotely controllable power plugs. These have hardware components, which can be purchased in our shop. <br><br> Our Goal is to create a perfect system with what you and your family can perfectly organize yourselves. We want to give everyone the opportunity to "build" their very own SmartHome.<br><br> For Hobbyists we transfer all data for the hardware (mostly circuit boards and other components) OpenSource to <a href="https://github.com/IntranetProject">GitHub</a>. With the data you can build the modules yourself. We offer all tools you need to start your own SmartHome. We hope that a community will come together and program more modules!</p>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="middle">
                        <div class="feed">
                            <h1>Update Feed</h1><br><br>
                            <hr class="feedhr">
                            <div class="commits">
                                <!-- shit's gonna get added here -->
                            </div>
                            <hr class="botttom">
                        </div>
                        <div class="pic">
                            <h1 style="padding: 20px;">Images</h1>
                            <div class="topleft">
                                <a target="_blank" href="pic/login.png"><img id="img1" src="pic/login.png" /></a>
                            </div>
                            <div class="bottomleft">
                                <a target="_blank" href="pic/settings.png"><img src="pic/settings.png" /></a>
                            </div>
                        </div>
                    </div>
                    <hr class="break">
                    <div style="clear: both;"></div>
                    <div id="team" class="team">
                        <div class="innerteam">
                            <h1>Team</h1>
                            <div class="tobi">
                                <img class="tobipic" src="pic/tobi.jpg" width="100px" height="100px" />
                                <h1 style="font-size: 1.5em" class="h1">Tobi</h1>
                                <p class="tobitext">My name is Tobias. I'm 16 years old and I live in Germany. I'm a front-end developer since 2016. Bennet and I have worked together on our own organization <a href="https://github.com/BaFrInds">BaFrInds</a> and many other projects.</p>
                            </div>
                            <div class="bennet">
                                <img class="bennetpic" src="pic/bennet.png" width="100px" height="100px" />
                                <h1 class="h1">Bennet</h1>
                                <p class="bennettext">My name is Bennet. I'm 17 years old and I live in Germany. I'm a front- and back-end developer since 2015. Tobias and I have worked together on our own organization <a href="https://github.com/BaFrInds">BaFrInds</a> and many other projects.</p>
                            </div>
                            <div class="moritz">
                                <img class="moritzpic" src="logo.png" width="100px" height="100px" />
                                <h1 class="h1">Moritz</h1>
                                <p class="moritztext">My name is Moritz. I'm 18 years old and I live in Germany. I'm not a developer and organize our community and finances. </p>
                            </div>
                        </div>
                    </div>
                    <div id="download" class="download">
                        <h1>Download</h1>
                        <div class="download-text">
                            <p>Here you can download the newest software versions:</p><br>
                            <small>Important:<br>We do not promisse that the Beta builds are bug free!<br>Be sure that these versions might not work and could result in Data loss!</small>
                        </div>
                        <div class="buttons">
                            <div class="button1">
                                <button>
                                    <a href="http://download.intranetproject.net">Downloads<br>
                                        <small>This will redirect you to the download page.</small></a>
                                </button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="shop" class="shop">
                        <h1>Shop</h1>
                        <div class="shop-text">
                            <p>Here you can browse and buy the newest hardware modules:</p><br>
                            <!--<small>Important: <br>We do not promisse that the Beta builds are bug free! <br>Be sure that these versions might not work and could result in Data loss!</small>-->
                        </div>
                        <div class="buttons">
                            <div class="button1">
                                <button>
                                    <a href="http://shop.intranetproject.net">Shop<br>
                                        <small>This will redirect you to the shop page.</small></a>
                                </button>

                            </div>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="contact" id="contact">
                        <div class="innercontact">
                            <h1>Questions?</h1>
                            <h1>Contact:</h1>
                            <p><a style="font-size: 1.3em;" href="mailto:support@intranetproject.net">support@intranetproject.net</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="git">
                    <p><a href="https://github.com/IntranetProject">GitHub</a></p>
                </div>
                <div class="imp">
                    <p><a href="imprint.html">Impressum</a></p>
                </div>
                <div class="credit">
                    <p><b><i style="color: black;">&lt; &gt;</i></b> with <i style="color: red;">&hearts;</i> by <a href="https://github.com/IntranetProject">Intranet</a></p>
                </div>
            </div>
        </div>
        <script>
            $.get("https://api.github.com/repos/IntranetProject/intranet_frontend/commits", function(data, status) {
                var i = 0;
                var x = 3;
                $.each(data, function(idx, obj) {
                    if (i >= x) {
                        return false;
                    } else {
                        if (i < 1) {
                            var version = obj.commit.message.split(";");
                            $(".version_num").html(version[0]);
                        }
                        $(".commits").append('<div class="commit"> <div class="image"> <img class="commit-image imagecommitid-' + idx + '" src=""> </div><div class="content"> <p class="commit-name commitnameid-' + idx + '"></p><p class="commit-details"><a target="_blank" class="commit-details-link commitdetailsid-' + idx + '" href="">Details</a></p><div class="message"> <p>Update Text:</p><br><p class="commit-message commitmessageid-' + idx + '"></p></div></div></div>');
                        $(".imagecommitid-" + idx + "").attr('src', obj.author.avatar_url);
                        $(".commitnameid-" + idx).append(obj.commit.author.name);
                        $(".commitdetailsid-" + idx).attr('href', obj.html_url);
                        $(".commitmessageid-" + idx).append(obj.commit.message + "<br>");
                        i++;
                    }
                });
            });

        </script>
    </body>

    </html>
