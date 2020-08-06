
       <div class="text-center">
        <div class='container rps-game'  >        <!--adding a container-->
        <div class="text-info mt-5"> <!--change the colour-->
            <h1> Rock, Paper, Scissors</h1>
        </div>

        <h3 class="text-muted mt-5 mb-5"> To play Rock, Paper, Scissors... Click on your chosen weapon below! </h3> <!--a secondary text-->
        
      
        <a onclick='play("R")' id="Rock" class="rps-img">  <img class="border-info border mr-1 mt-2" src="public/images/content/projects/rock.JPG" alt="Rock" class="border" width="150" height="150"></a> <!--Add me a border and define the image width-->
      
        <a onclick='play("P")' id="Paper" class="rps-img"> <img class="border-info border  mr-1 mt-2" src="public/images/content/projects/paper.JPG" alt="Paper" class="border" width="150" height="150" ></a>
            
        <a onclick='play("S")' id="Scissors" class="rps-img"> <img class="border-info border  mt-2" src="public/images/content/projects/scissor.JPG" alt="Scissors" class="border" width="150" height="150" ></a>

        <div class="rps-text mt-5"> <!-- change the colour of response-->
        <p class="result"> </p>
        </div>
        </div>
       </div>
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <script>
         

            function play(strChoice) {

                $.get("public/js/rps.php?choice=" + strChoice, function (data) {
                        
                    $(".result").html(data);
                    });
            }
            ;


        </script>
    </body>
</html>
