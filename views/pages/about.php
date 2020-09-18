
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

<section>

    <!--Hero Banner-->        
    <div class='container hero' >
        <div class="hero-text" >

            <h2  class="display-4 ">You've located</h2>
            <div ><h2 class="display-4" ><strong>Gemma</strong></h2></div>
        </div>
        <img class= "container-fluid hero-image " alt = "vintage map" src="public/images/content/map.jpg">


    </div>
</section>

<!--MAIN--> 
<section class="aboutme">
    <div class="caption-about">
        <div class=" container  text-center "> <!--row  align-self-center mx-auto-->
            <div >
                <p class="animation-element slide-left">I'm a website designer / developer with a flexible location (canal-based!). I love making fun, fast and efficient websites, contributing to a team or running solo. I enjoy learning new technical languages but in my spare time you can find me doing DIY on my narrowboat home or chasing down the best craft cider.</p>
                <br/> 
                <p ><span class="button showmore animation-element slide-left">Learn more!</span> </p>
            </div>
        </div>
    </div>
</section>
<section class = "moredetails">
    <div class="container">
        <div  class="jumbotron">
            <p class ="mx-auto">
                My memory of ICT at secondary school was the class being left to their own devices playing games on the computer whilst our teacher tried desperately to control the loud mouths in the corner. I had no idea of the capability of the web other than knowing Neopets was fun. Safe to say, I was not inspired to be involved. 
            </p>
            <p class ="mx-auto ml-4 mr-4" style="font-style:italic; "> 
                Interesting fact: Thanks to keeping my Neopet alive for a month, my parents allowed us to get a Hamster. I don’t think they realised that it’s impossible to kill a Neopet. 
            </p>
            <p class ="mx-auto">
                Forward on 20 years I decided to write a blog on one of my favourite topics, craft cider. Using Wordpress I quickly pulled together a blog, but I wasn’t happy with how it looked. I questioned if I had the capability to build a more modern, consumer friendly site. This was the beginning of my software development journey.
            </p>
            <p class ="mx-auto">
                Moving on a further 2 years, I have had so much fun learning languages and working on projects, both solo and with teams. On top of my own self study, I participated in a 15 week intensive graduate scheme with Sky and have worked in agile. All this I have managed whilst working full time and moving onto a needs-lots-of-love narrowboat home! Imagine what I could achieve when I take my next step as a software engineer. I know I’m excited to find out...
            </p>
            <p class ="mx-auto">
                Feel free to contact me via. any of my social media accounts if you’d like a chin-wag about how I can be a great addition to your team!
            </p>

            <p>  <span class="button hide">Hide me!</span> </p>
        </div>
    </div>
</section>
<section class="blue">
    <div class="container ">

        <div class=" row white-font animation-element slide-left pt-5 pb-5">
            <div class="col-md-5 col-sm-12">
                <h2 class="text-uppercase my-auto"  >Technologies</h2>
            </div>

            <div class="col-md-4 col-sm-6 right pl-3">
                <h5 class="">Day-to-day comfort</h5>
                <ul>
                    <li>PHP</li>
                    <li>HTML5</li>
                    <li>CSS</li>
                    <li>MySQL</li>
                    <li>JavaScript/JQuery</li>
                    <li>Version Control (GIT)</li>
                    <li>Wordpress</li>
                    <li>Bootstrap</li>
                    <li>Agile Methodology</li>
                    <li>Mobile First Thinking</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6  right pl-3">
                <h5  class="">Experience with</h5>
                <ul> 
                    <li>Python</li>
                    <li>Linux</li>
                    <li>Ruby on Rails</li>
                    <li>AWS/Jenkins/Maven</li>
                </ul>
            </div>


        </div>
    </div>
</section>
<section class="col-xs-12 card-section">
    <div class="container">
        <h2 class="text-uppercase animation-element slide-left mt-5">What I do?</h2>
        <div id="keys" class="row  white-font">
            <div class="col-lg-4 d-flex align-items-stretch animation-element slide-left">
                <div class="card-margin card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Design:</h5>
                        <p class="card-text">Keep it simple, smooth, spot on.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch animation-element slide-left">
                <div class="card-margin card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Responsive:</h5>
                        <p class="card-text">You want it on what screen? On it!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch animation-element slide-left">
                <div class="card-margin card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Functionality:</h5>
                        <p class="card-text">Let's chat and make magic happen.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script>


    // hide extra details on page load
    $(document).ready(function () {
        $('.moredetails').hide();
    });
    //show more on hover
//show on screen on scroll
    $('.showmore').hover(function () {
        $('.moredetails').show();
    });
    //hide on hover

    $('.hide').hover(function () {
        $('.moredetails').hide();
    });

//Animation to make element slide in from left
//cache reference to window and animation items
    var $animation_elements = $('.animation-element');
    var $window = $(window);



    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function () {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll', check_if_in_view);
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

</script>