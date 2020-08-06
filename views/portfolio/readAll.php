

 <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 animation-element slide-left">
            <h2 class="text-uppercase ">Portfolio</h2>
        </div>
            
        <div align="center" class="container gallery-filter">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="PHP">PHP</button>
            <button class="btn btn-default filter-button" data-filter="JavaScript">JavaScript</button>
            <button class="btn btn-default filter-button" data-filter="CSS">CSS</button>
            <button class="btn btn-default filter-button" data-filter="MySQL">MySQL</button>
        </div>
        <br/>


<?php foreach ($portfolio as $project){ ?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 <?php
            
            //turn technologies into an array to loop through 
            $string = $project->technologies; 
           // preg_replace(' ','',$string);
            $array = explode(',',$string);
            $filter = "";
            foreach($array as $filter){
                echo "filter " . $filter . " ";
            } 
            ?>">
                <img src="<?php echo $project->image1 ?>" alt="<?php echo $project->title ?>" class="img-responsive img-gallery border border-info">
                <div class="middle-gallery">
                    <div class="text-gallery">
                    <p class="uppercase"><?php echo strtoupper( $project->technologies ) ?></p>
                     <a href="?controller=portfolio&action=read&projectID=<?php echo $project->projectID; ?>" ><span class="button showmore">Find out more!</span> </a>
                    </div> 
                </div>
            </div>

<?php } ?>
        
        <!-- a link that takes you to a product that is live on the website-->
          <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter JavaScript filter HTML filter CSS">
                <img src='public/images/content/projects/rps1.JPG' class="img-responsive img-gallery border border-info">
                 <div class="middle-gallery">
                    <div class="text-gallery">
                         <p class="uppercase">PHP, HTML, JQuery, CSS</p>
                     <a href="?controller=portfolio&action=rps" ><span class="button showmore">Find out more!</span> </a>
                    </div> 
                </div>
            </div>

        
        </div>
    </div>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script>

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

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