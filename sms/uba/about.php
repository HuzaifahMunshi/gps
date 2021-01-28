<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css//ionicons.min.css">
    <link href="css/templatemo-comparto.css" rel="stylesheet" />
    <title>About Us</title>
<!--

Comparto TemplateMo

https://templatemo.com/tm-544-comparto

-->
    <style> 
    #img1 {
        margin-left: 150px;
        margin-top: 100px;
        }
    </style>
</head>

<body>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-up fa-2x"></i></a>
    <div class="container-fluid">
        <div class="tm-site-header tm-mb-1">
            <div class="tm-site-name-container tm-bg-color-1">
                <h1 class="tm-text-white">ABOUT US</h1>
            </div>
            <div class="tm-nav-container tm-bg-color-8">
                <nav class="tm-nav" id="tm-nav">
                    <ul>
                        <li class="tm-nav-item current">
                            <a href="#about" class="tm-nav-link">
                                <span>UBA Cell</span>
                            </a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#services" class="tm-nav-link">
                                <span>Software </span>
                            </a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#gallery" class="tm-nav-link">
                                <span>Team</span>
                            </a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#contact" class="tm-nav-link">
                                <span class="tm-nav-text">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="tm-mb-1" id="about">
            <div class="tm-row tm-about-row">
                <div class="tm-section-1-l">
                    <img src="img/UBA%20Cell%20Logo.png" alt="About image" class="tm-img-responsive" id="img1">
                </div>
                <article class="tm-section-1-r tm-bg-color-8">
                    <h2 class="tm-mb-2 tm-title-color"> UBA Cell</h2>
                    <p><a rel="nofollow" href="http://mctrgit.ac.in/uba.php" target="_parent"> Unnat Bharat Abhiyan</a> is flagship programme of MHRD, Govt of India. It is inspired by the vision of transformational change in rural development processes by leveraging knowledge institutions to help build the architecture of an Inclusive India.</p>
                    <p>The Mission of Unnat Bharat Abhiyan is to enable higher educational institutions to work with the people of rural India in identifying development challenges and evolving appropriate solutions for accelerating sustainable growth.
</p>
                    <p></p>
                    
                    <a href="#services" class="tm-btn tm-btn-1 tm-link-to-services">Read More</a>
                </article>
            </div>
        </section>
        <section class="tm-mb-1 tm-row tm-services-row" id="services">
            <div class="tm-section-2-l">
                <article class="tm-bg-color-6 tm-box-pad tm-mb-1">
                    <h2 class="tm-mb-2"> Software Development</h2>
                   <p>Interns of Rural Development Internship 2.0 organised by UBA Cell RGIT have developed this software for the villages.</p>
                    <p class="tm-mb-0"> The software is based on School Management System.</p>
                </article>
                <div class="tm-bg-color-7 tm-em-box">
                    <p class="tm-text-color-2"> We have made all the labour work easier by using offline software. All the data from admission of student till leaving certificate and even Bonafide certitificates will be issued directly using our software. </p>
                    <a href="#gallery" class="tm-btn tm-btn-2">Read More</a>
                </div> 
            </div>
            <div class="tm-section-2-r">
                <img src="img/school-software-500x500.jpg" alt="Services image" class="tm-img-responsive">
            </div>
        </section>
        <section class="tm-bg-color-4 tm-mb-3 tm-gallery-section" id="gallery">
            <div class="tm-gallery-header">
                <h2 class="tm-mb-1 text-right"> Software Development Team</h2>
            </div>
            <div class="tm-gallery-outer">
                <div class="tm-gallery" id="tm-gallery">
                    <div class="tm-gallery-item nature">
                        <figure class="effect-bubba">
                            <img src="img/gallery/ap.jpg" alt="Gallery item" class="tm-img-responsive" />
                            <figcaption>
                                <h2>Abhishek Polekar</h2>
                                <p>Intern , SE IT</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="tm-gallery-item animals">
                        <figure class="effect-bubba">
                            <img src="img/gallery/mk2.jpg" alt="Gallery item" class="tm-img-responsive" />
                            <figcaption>
                                <h2>Mahek Khanna</h2>
                                <p>Intern, TE Computers</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="tm-gallery-item nature">
                        <figure class="effect-bubba">
                            <img src="img/gallery/ny.jpg" alt="Gallery item" class="tm-img-responsive" />
                            <figcaption>
                                <h2>Nihal Yende</h2>
                                <p>Intern, SE IT</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="tm-gallery-item nature">
                        <figure class="effect-bubba">
                            <img src="img/gallery/kj.jpg" alt="Gallery item" class="tm-img-responsive" />
                            <figcaption>
                                <h2>Kshitij Jatekar</h2>
                                <p>Intern, SE Computers</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="tm-gallery-item animals">
                        <figure class="effect-bubba">
                            <img src="img/gallery/hm.jpg" alt="Gallery item" class="tm-img-responsive" />
                            <figcaption>
                                <h2>Huzaifah Munshi</h2>
                                <p>Intern, SE IT</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                
                </div>
            </div>
        </section> <!-- Gallery -->
  
       
        <footer class="text-center tm-mb-1" id="contact">
            <p>Copyright &copy; 2019 UBA Cell, RGIT </p>
                        <center>
                        <table cellpadding="5">
                            <tr>
                                <td align="left">Email </td>
                                <td align="left">: rgit.uba@mctrgit.ac.in</td>
                            </tr>
                            <tr>
                                <td align="left">Twitter </td>
                                <td align="left">: @rgitUba</td>
                            </tr>
                            <tr>
                                <td align="left">LinkedIn </td>
                                <td align="left">: UBA CELL,RGIT</td>
                            </tr>
                            <tr>
                                <td align="left">Instagram </td>
                                <td align="left">: rgit.ubacell</td>
                            </tr>
                        </table>
                      </center>                      
                      
                        
                
        </footer>
    </div> <!-- .container -->
    <script src="js/jquery.min.js"></script> <!-- https://jquery.com/download/ -->
    <script src="js/imagesloaded.pkgd.min.js"></script> <!-- https://imagesloaded.desandro.com/ -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- https://isotope.metafizzy.co/ -->
    <script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script>

        // Scroll to Top button
        var btn = $('#button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });

        // DOM is ready
        $(function () {
            // Single Page Nav
            $('#tm-nav').singlePageNav({ speed: 600 });

            // Smooth Scroll (https://css-tricks.com/snippets/jquery/smooth-scrolling/)
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function (event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 600, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });

            /* Isotope Gallery */

            // init isotope
            var $gallery = $(".tm-gallery").isotope({
                itemSelector: ".tm-gallery-item",
                layoutMode: "fitRows"
            });
            // layout Isotope after each image loads
            $gallery.imagesLoaded().progress(function () {
                $gallery.isotope("layout");
            });

            $(".filters-button-group").on("click", "a", function () {
                var filterValue = $(this).attr("data-filter");
                $gallery.isotope({ filter: filterValue });
            });

            $(".tabgroup > div").hide();
            $(".tabgroup > div:first-of-type").show();
            $(".tabs a").click(function (e) {
                e.preventDefault();
                var $this = $(this),
                    tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
                    others = $this
                        .closest("li")
                        .siblings()
                        .children("a"),
                    target = $this.attr("href");
                others.removeClass("active");
                $this.addClass("active");
            });
        });
    </script>
</body>
</html>