<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/style.css" rel="stylesheet">
  </head>
  <body>

    <div class="container"><!--START:Container -->
    
    <div class="row mt-4"id="top"><!--START:ROW1 -->
      <div class="col m-2">
       <?php
        echo '<h1>San Diego Padres FanPage | Tatis Count Down</h1>';
        echo $mainNav;





          ?>
      </div>
    </div><!--END:ROW1 -->
    
    <div class="row"id="content"><!--START:ROW2 -->
      <div class="col-3" id="colLeft"><!--START:COL1 -->
        
        <img width="300px" src="https://www.usnews.com/object/image/00000183-fde9-d4b3-a9c3-fded90b00000/media%3A6265de5e109b48148f84aaf382626845APTOPIX_NLCS_Padres_Phillies_Baseball_89660.jpg?update-time=1666412043000&size=responsive640">
      </div><!--END:COL1 -->

      <div class="col m-2"><!--START:COL2 -->
          <style>
            #demo {
              text-align: center;
              font-size: 60px;
              margin-top: 0px;
            }
          </style>
            <body>
            
            <p id="demo"></p>
            
            <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Apr, 2023 15:37:25").getTime();
            
            // Update the count down every 1 second
            var x = setInterval(function() {
            
              // Get today's date and time
              var now = new Date().getTime();
                
              // Find the distance between now and the count down date
              var distance = countDownDate - now;
                
              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
              // Output the result in an element with id="demo"
              document.getElementById("demo").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";
                
              // If the count down is over, write some text 
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "You missed it, He's Already back";
              }
            }, 1000);
            </script>
              <h1>
              <img class="center" width="600px" src="https://wp.clutchpoints.com/wp-content/uploads/2021/11/Major-League-baseball-announces-San-Diego-star-Fernando-Tatis-Jr-tops-All-MLB-list.jpeg">
              <br>
              <p class="paraStyle paraIndent">SAN DIEGO — On an otherwise sleepy February morning early in spring training 2021, the San Diego Padres jolted the baseball world by announcing that they had struck a 14-year, $340 million deal with their young superstar shortstop, Fernando Tatis Jr. He was just 22 at the time, and the contract was — and remains — the longest in Major League Baseball history.

But when the Padres open the postseason against the Mets on Friday in Queens, Tatis, the franchise player who should be leading them, will be nowhere in sight. A series of bad decisions has wrecked his summer, hampered his team and thrown the future of a man who once was among the game’s most magnetic players into serious question.

“It’s a blow but we’ll overcome it,” Peter Seidler, the club’s majority owner, said. “You lose one of the great players of his generation, it’s a blow.”

Tatis was suspended for 80 games on Aug. 12 after testing positive for a performance-enhancing drug. When the news came, Tatis was at Class AA San Antonio on an injury-rehabilitation assignment for a broken scaphoid bone in his left wrist from a motorcycle accident in his native Dominican Republic last December during the M.L.B. lockout. Both he and his representatives downplayed the accident to the Padres, who were stunned when he reported to spring training in March with the wrist still sore. A subsequent magnetic resonance imaging exam revealed the fracture.

</p>
                <iframe class="center" width="560" height="315" src="https://www.youtube.com/embed/_mys5RqtAy4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        
      </div><!--END:COL2 -->
    </div><!--END:ROW2 -->
    
    <div class="row "id="footer"><!--START:ROW3 -->
      <div align="center" class="col m-2">
        <?php
          echo $footer;





          ?>
      </div>
    </div><!--END:ROW3 -->
  </div><!--END:Container -->









    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>