
<body>
    <!--NAVBAR-->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light m-0 p-0">
            <a href="index.php" class="navbar-brand "><img id="logo" src = "public/images/Logo.JPG" alt='Gemma Druce'></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon col-md-3 col-sm-2"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link menu" href="index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="?controller=portfolio&action=readAll">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="?controller=pages&action=contact">Contact</a>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://www.instagram.com/gemmadruce/" target="_blank" rel="noopener"><img class="nav-social" src="public/images/instagram.png" alt="Instagram social icon"></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://www.pinterest.co.uk/petalsnow/" target="_blank" rel="noopener"><img class="nav-social" src="public/images/pinterest.png" alt="Pinterest social icon"></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://twitter.com/GemmaDruce" target="_blank" rel="noopener"><img class="nav-social" src="public/images/twitter.png" alt="Twitter social icon"></a></li>
                </ul>
            </div>
        </nav>

    </div>
    <hr class="mt-0 pt-0">

    <div>
        <?php require_once('routes.php'); ?>
    </div>
    <footer id="myfooter">

        <div class="container">
            <div class="container">
                <div class="break row">
                    <div class="col-md-12 text-center align-self-center">
                        <p>I'm available for hire. Get in touch by any of my social media accounts below.</p>
                    </div>
                </div>
            </div>
            <div class= "row" >
                <div class="mx-auto">
                    <a href="https://www.instagram.com/gemmadruce/" target="_blank" rel="noopener"><img class="nav-social" src="public/images/instagram.png" alt="Instagram social icon"></a>
                    <a href="https://www.pinterest.co.uk/petalsnow/" target="_blank" rel="noopener"><img class="nav-social" src="public/images/pinterest.png" alt="Pinterest social icon"></a>
                    <a href="https://twitter.com/GemmaDruce" target="_blank" rel="noopener"><img class="nav-social" src="public/images/twitter.png" alt="Twitter social icon"></a>
                </div>
            </div>

            <div class="row">
                <p class = "mt-1 text-center mx-auto">Copyright Gemma Druce 2020</p>
            </div>
        </div>



    </footer>


    <a href="#" class="back-to-top border border-white"><svg class="bi bi-eject-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.27 1.047a1 1 0 011.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H1.656C.78 9.5.326 8.455.926 7.816L7.27 1.047zM.5 11.5a1 1 0 011-1h13a1 1 0 011 1v1a1 1 0 01-1 1h-13a1 1 0 01-1-1v-1z" clip-rule="evenodd"/>
        </svg></a>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function () {

                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function (event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                jQuery('.back-to-top').css("background-color", "#14b5c5");
                return false;
            })
        });
    </script>
</body>

