<!-- 
Assignment Name: Portfolio
File Name: about.php
Date: 5/15/2018
Programmer: Alexandra Nitsche -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--basic style sheets for all pages -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/photostyles.css">
    <title>Portfolio: Alexandra Nitsche</title>
</head>

<body>
    <!--/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon*/-->

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>

    <!-- header Include-->
    <?php include('includes/header.php'); ?>

    <!-- Navigation Include-->
    <?php include('includes/nav.php'); ?>

    <!-- Main-->
    <div id="photos">
        <ul id="photo-gallery">
            <li>
                <img src="images/wireframe.JPG">
            </li>
            <li>

                <img src=".jpg">

            </li>
            <li>

                <img src=".jpg">
            </li>
            <li>

                <img src=".jpg">

            </li>
            <li>

                <img src=".jpg">
            </li>
            <li>

                <img src=".jpg">

            </li>

        </ul>
    </div>

    <br><br>
    <main id="main">
        <!-- Section A-->
        <section id="section-a" class="grid">
            <div class="content-wrap">
                <h2 class="content-title">Section A</h2>
                <div class="content-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>

        </section>

        <!-- Section B-->
        <section id="section-b" class="grid">
            <ul>
                <li>
                    <div class="calltoaction">
                        <img src="place holder" alt="design">
                        <div class="action-content">
                            <h3 class="action-title">Title:Lorem Ipsum</h3>
                            <p>Call to Action info:Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="calltoaction">
                        <img src="place holder" alt="development">
                        <div class="action-content">
                            <h3 class="action-title">Title:Lorem Ipsum</h3>
                            <p>Call to Action Info:Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="calltoaction">
                        <img src="place holder" alt="Video">
                        <div class="action-content">
                            <h3 class="action-title">Title: Lorem Ipsum</h3>
                            <p>Call to Action Info:Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </li>
            </ul>

        </section>

        <!-- Section C-->

        <section id="section-c" class="grid">
            <div class="content-wrap">
                <h2 class="content-title">Insert Title here</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </section>

        <!-- Contact Link Section/Section D-->
        <section id="contact-section" class="grid">
            <div class="box">
                <h2 class="content-title">Contact Here</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="" class="btn">Button Text</a>
            </div>
            <div class="box">
                <h2 class="content-title"> About Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="" class="btn">Button Text</a>

            </div>
        </section>

    </main>
    <!-- Footer Include-->
    <?php include('includes/footer.php'); ?>

    <script>
        (function(jQuery) {
                var $overlay = $('<div id="overlay"></div>');
                var $image = $("<img>");

                //An image to overlay
                $overlay.append($image);

                //Add overlay
                $("body").append($overlay);

                //click the image and a scaled version of the full size image will appear
                $("#photo-gallery a").click(function(event) {
                    event.preventDefault();
                    var imageLocation = $(this).attr("href");

                    //update overlay with the image linked in the link
                    $image.attr("src", imageLocation);

                    //show the overlay
                    $overlay.show();
                });

                $("#overlay").click(function() {
                    $("#overlay").hide();
                });

    </script>
</body>

</html>
