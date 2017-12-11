<?php
if (!(file_exists("up.txt"))) {
    header("Location: http://maintenance.intranetproject.net?site=Mainsite");
}
?>

    <html>

    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <title>Intranetproject.net</title>
        <meta name="title" content="intranetproject">
        <meta name="author" content="intranetproject">
        <meta name="publisher" content="intranetproject">
        <meta name="copyright" content="intranetproject">
        <meta name="generator" content="intranetproject">
        <meta name="description" content='Our Intranet is OpenSource, module based software-system, meaning you can configure everything as you like. There is the classic setup, that does not contain a lot of features. Modules are the interesting part. Modules are easy to install and expand your existing system. There are software modules, like a TODO-List or calendar, but also hardware with software components, like temperature modules or remotely controllable power plugs. These have hardware components, which can be purchased in our shop.   Our Goal is to create a perfect system with what you and your family can perfectly organize yourselves. We want to give everyone the opportunity to "build" their very own SmartHome.'>
        <meta name="abstract" content='Our Intranet is OpenSource, module based software-system, meaning you can configure everything as you like. There is the classic setup, that does not contain a lot of features. Modules are the interesting part. Modules are easy to install and expand your existing system. There are software modules, like a TODO-List or calendar, but also hardware with software components, like temperature modules or remotely controllable power plugs. These have hardware components, which can be purchased in our shop.   Our Goal is to create a perfect system with what you and your family can perfectly organize yourselves. We want to give everyone the opportunity to "build" their very own SmartHome.'>
        <meta http-equiv="content-language" content="en">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="date" content="2017-11-08">
        <meta name="revisit-after" content="30 days">
        <meta name="revisit" content="after 30 days">
        <meta name="DC.Language" content="en">
        <script src="css/snow.js"></script>
    </head>

    <body>
        <div class="container z-depth-5 teal lighten-2" id="snow">
            <header>
                <nav class="teal">
                    <div class="nav-wrapper">
                        <img src="logo.png" width="70px" height="70px" class="brand-logo">
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down navbar">
                            <li><a href="http://status.intranetproject.net">Status</a></li>
                            <li><a href="http://docs.intranetproject.net">Documentation</a></li>
                            <li><a href="http://blog.intranetproject.net">Blog</a></li>
                            <li><a href="#download">Download & Shop</a></li>
                            <li><a href="https://discord.gg/HQ7yZzA" class="img"><img src="pic/discord.png"></a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="http://status.intranetproject.net">Status</a></li>
                            <li><a href="http://docs.intranetproject.net">Documentation</a></li>
                            <li><a href="http://blog.intranetproject.net">Blog</a></li>
                            <li><a href="#download">Download & Shop</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                <div class="jumbotron">
                    <div class="center-align text">
                        <p>Intranet</p>
                        <small class=" version_num">...</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10 offset-s1">
                        <div id="info" class="card teal lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">What is Intranet?</span><br><br>
                                <p class="explanation"><a href="https://en.wikipedia.org/wiki/Home_automation">SmartHomes</a> are winning more and more popularity in the last couple of years. However these systems are expensive and not controllable. To have everything in one application is a lot nicer. At this point our Intranet comes to play. Our Intranet is OpenSource, module based software-system, meaning you can configure everything as you like. There is the classic setup, that doesn't contain a lot of features. Modules are the interesting part. Modules are easy to install and expand your existing system. There are software modules, like a TODO-List or calendar, but also hardware with software components, like temperature modules or remotely controllable power plugs. These have hardware components, which can be purchased in our shop. <br><br> Our Goal is to create a perfect system with what you and your family can perfectly organize yourselves. We want to give everyone the opportunity to "build" their very own SmartHome.<br><br> For Hobbyists we transfer all data for the hardware (mostly circuit boards and other components) OpenSource to <a href="https://github.com/IntranetProject">GitHub</a>. With the data you can build the modules yourself. We offer all tools you need to start your own SmartHome. We hope that a community will come together and program more modules!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10 offset-s1">
                        <div class="card teal lighten-1 white-text z-depth-1">
                            <div class="card-content">
                                <span class="card-title">Team</span>
                            </div>
                            <div class="card-tabs">
                                <ul class="tabs tabs-fixed-width teal lighten-1 ">
                                    <li class="tab"><a class="active white-text" href="#test4">Tobi</a></li>
                                    <li class="tab"><a class="white-text" href="#test5">Bennet</a></li>
                                </ul>
                            </div>
                            <div class="card-content teal lighten-1 team">
                                <div id="test4"><img class="circle" src="pic/tobi.jpg" width="50px" height="50px" />
                                    <h5>Tobi</h5>
                                    <p>My name is Tobias. I'm 17 years old and I live in Germany. I'm a front-end developer since 2016. Bennet and I have worked together on our own organization <a href="https://github.com/BaFrInds">BaFrInds</a> and many other projects.</p>
                                </div>
                                <div id="test5">
                                    <img class="circle" src="pic/bennet.png" width="50px" height="50px" />
                                    <h5>Bennet</h5>
                                    <p>My name is Bennet. I'm 17 years old and I live in Germany. I'm a front- and back-end developer since 2015. Tobias and I have worked together on our own organization <a href="https://github.com/BaFrInds">BaFrInds</a> and many other projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10 offset-s1 m5">
                        <div class="card teal lighten-1 white-text">
                            <div class="card-image">
                                <a target="_blank" href="pic/login.png"><img src="pic/login.png"></a>
                                <span class="card-title">Login</span>
                            </div>
                            <div class="card-content">
                                <p>This is a picture of the login screen on the Intranet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s10 offset-s1 m5">
                        <div class="card teal lighten-1 white-text">
                            <div class="card-image">
                                <a target="_blank" href="pic/settings.png"><img src="pic/settings.png"></a>
                                <span class="card-title">Settings</span>
                            </div>
                            <div class="card-content">
                                <p>This is a picture of the settings page. Here you can configure your personal settings e.g. user accounts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m10 offset-m1">
                        <div class="card-panel teal lighten-1 z-depth-1 commits white-text">
                            <!-- shit's gonna get added here -->
                            <div class="row">
                                <div class="col s12">
                                    <h5 class="card-title">Update Feed </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="download">
                    <div class="col s10 offset-s1">
                        <div class="card teal lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Download</span>
                                <p>You can download the newest software versions via the link below.<br><br>
                                    <b>Important:</b><br>We do not promise that the Beta builds are bug free!<br>Be sure that these versions might not work and could result in Data loss!</p>
                            </div>
                            <div class="card-action">
                                <a href="http://download.intranetproject.net">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="shop">
                    <div class="col s10 offset-s1">
                        <div class="card teal lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Shop</span>
                                <p>Here you can browse and buy the newest hardware modules!</p>
                            </div>
                            <div class="card-action">
                                <a href="http://shop.intranetproject.net">Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10 offset-s1">
                        <div class="card teal lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Links</span>
                                <p>These links will redirect you to the respective page.</p>
                            </div>
                            <div class="card-action">
                                <a href="http://blog.intranetproject.net">Blog</a>
                                <a href="http://docs.intranetproject.net">Documentation</a>
                                <a href="http://status.intranetproject.net">Status</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer class="page-footer teal lighten-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Questions?</h5>
                        <p class="grey-text text-lighten-4">Contact: <a href="mailto:support@intranetproject.net" style="color:white; text-decoration:underline;">support@intranetproject.net</a></p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="https://github.com/IntranetProjec">GitHub</a></li>
                            <li><a class="grey-text text-lighten-3" href="imprint.html">Imprint</a></li>
                            <li>
                                <p class="grey-text text-lighten-3" href="#!"><b><i class="material-icons">code</i>
                </b> with <i style="color: red;">&hearts;</i> by <a class="grey-text text-lighten-3" href="https://github.com/IntranetProject">Intranet</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2017 Intranet Project
                </div>
            </div>
        </footer>
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
                        $(".commits").append('<div class="row valign-wrapper"><div class="col s2"><img class="circle responsive-img imagecommitid-' + idx + '" src=""> </div> <div class="col s10"> <span class="card-title commitnameid-' + idx + '"> </span> <p class="white-text"> <a target="_blank" style="text-decoration:underline;" class="white-text commitdetailsid-' + idx + '" href="">Details</a> <br> Update Text: <br><p class="commitmessageid-' + idx + '"></p> </p> </div> </div>');
                        $(".imagecommitid-" + idx + "").attr('src', obj.author.avatar_url);
                        $(".commitnameid-" + idx).append(obj.commit.author.name);
                        $(".commitdetailsid-" + idx).attr('href', obj.html_url);
                        $(".commitmessageid-" + idx).append(obj.commit.message + "<br>");
                        i++;
                    }
                });
            });
            $(document).ready(function() {
                $(".button-collapse").sideNav();
            })

        </script>
        <script>
            $(document).ready(function() {
                $.fn.snow();
            });

        </script>
    </body>

    </html>
