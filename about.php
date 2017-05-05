<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About - The Little Taco</title>

    <!-- STYLES -->
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/form.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="https://use.fontawesome.com/3f2fee1521.js"></script>
</head>

<body>
    <!-- START HEADER -->
    <header>
        <!-- START NAVIGATION -->
        <nav id="top-nav">
            <a id="logo" href="../template"><span class="hidden">The Little Taco</span></a>
            <div class="hamburger" id="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <ul id="nav-items">
                <li><a href="about">ABOUT</a></li>
                <li><a href="menu">MENU</a></li>
                <li><a href="blog">BLOG</a></li>
                <li><a href="contact">CONTACT</a></li>
            </ul>
        </nav>
        <!-- END NAVIGATION -->
    </header>
    <!-- END HEADER -->

    <!-- START PAGE TITLE -->
    <div class="container page-title">
        <div id="page-title">
            <h2>ABOUT</h2>
        </div>
    </div>
    <!-- END PAGE TITLE -->

    <!-- START CONTENT -->
    <div id="full-h" class="container">
        <div class="content">
            <div id="breadcrumb">
                <ul class="breadcrumb">
                    <li><a href="../template">Home</a></li>
                    <li class="active">About</li>
                </ul>
            </div>

            <div id="main-content">
                <img src="images/about2.jpeg" alt="About The Little Taco">
                <p>Content goes here.</p>

                <? php
                
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_title();
                        the_permalink();
                        the_content();
                    }
                } else {
                    echo 'Error!';
                }

                ?>

                <div class="story">
                    <h2>Story</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra eu quam eget lacinia. Duis sed enim lacinia, eleifend justo in, interdum tellus. &nbsp; <a href="story">Read more ≫</a></p>
                </div>
                <div class="mission">
                    <h2>Mission</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra eu quam eget lacinia. Duis sed enim lacinia, eleifend justo in, interdum tellus. &nbsp; <a href="mission">Read more ≫</a></p>

                </div>
            </div>

            <aside id="sidebar">
                <ul>
                    <li><span class="active">About</span>
                        <ul>
                            <li><a href="story">Story</a></li>
                            <li><a href="mission">Mission</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <!-- END CONTENTS -->


    <!-- START FOOTER -->
    <footer>
        <div class="bottom">
            <h4>STAY CONNECTED</h4>
            <ul class="social">
                <li><a href="#"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="copyright">
            <div class="bottom">
                <small>&copy; 2017 <b>THE LITTLE TACO</b>. All Rights Reserved.</small>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
</body>
</html>
