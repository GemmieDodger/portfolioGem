
<div class="container">


    <!--slide show of pictures-->
    <section >
        <div id="carouselExampleIndicators" class="carousel slide carousel-project" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <?php
                //assign variables
                $image2 = $portfolio->image2;
                $image3 = $portfolio->image3;
                $image4 = $portfolio->image4;
                $image5 = $portfolio->image5;

                if ($image3 != NULL || !empty($image3)) {
                    ?>                
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <?php
                }
                if ($image4 != NULL || !empty($image4)) {
                    ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <?php
                }
                if ($image5 != NULL || !empty($image5)) {
                    ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <?php }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                if ($image2 != NULL || !empty($image2)) {
                    ?>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $image2; ?>" alt="<?php echo $portfolio->image2 ?>">
                    </div>
                    <?php
                }
                if ($image3 != NULL || !empty($image3)) {
                    ?>                
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $image3 ?>" alt="<?php echo $portfolio->image3 ?>">
                    </div>
                    <?php
                }
                if ($image4 != NULL || !empty($image4)) {
                    ?>       
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php $portfolio->image4 ?>" alt="<?php echo $portfolio->image4 ?>">
                    </div>
                    <?php
                }
                if ($image5 != NULL || !empty($image5)) {
                    ?>     
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php $portfolio->image5 ?>" alt="<?php echo $portfolio->image5 ?>">
                    </div>
                <?php } ?>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- content box -->
    <section>


        <div class="col-md-6  animation-element slide-left ">
            <h2 class="text-uppercase mt-5"><?php echo $portfolio->title; ?></h2>
        </div>
        <div class="col-md-6   ">
            <p class="text-uppercase"><?php echo $portfolio->technologies; ?></h2>
        </div>

        <div class="align-self-center mx-auto ">
            <div class="col-md-12 col-lg-12" >
                <p class="mt-5"><?php echo $portfolio->content; ?></p>
                <br/> 
                <?php
                $link = $portfolio->link;
                if ($link != NULL || !empty($link)) {
                    ?>
                    <p class="mb-5"> Check out the link <a target="_blank" href="<?php echo $link ?>">here</a></p>
                <?php }
                ?> 

            </div>
        </div>

    </section>



</div>
<!----Next and Previous buttons-->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-xs-12 col text-center  np-btn postouter">
            <a href='?controller=portfolio&action=read&projectID=<?= $previous; ?>' role="button" class="btn postbutton">PREVIOUS PROJECT<svg  width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></svg></a>

        </div>
        <div class="col-sm-12 col-md-6 col-xs-12 text-center np-btn">
            <a href='?controller=portfolio&action=read&projectID=<?= $next; ?>' role="button" class="btn postbutton ">NEXT PROJECT<svg  width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></svg></a>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script src="public/js/script.js"></script>
<script>

//Animation to make element slide in from left
//cache reference to window and animation items
var $animation_elements = $('.animation-element');
var $window = $(window);



function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
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