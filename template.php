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
        echo '<h1>San Diego Padres FanPage | Template</h1>';
        echo $mainNav;





          ?>
      </div>
    </div><!--END:ROW1 -->
    
    <div class="row"id="content"><!--START:ROW2 -->
      <div class="col-3" id="colLeft"><!--START:COL1 -->
        Column left
        <img width="300px" src="https://wp.clutchpoints.com/wp-content/uploads/2022/09/Padres-X-reasons-why-San-Diego-will-win-2022-World-Series.jpeg">
      </div><!--END:COL1 -->

      <div class="col m-2"><!--START:COL2 -->
        Column right
    

        
      </div><!--END:COL2 -->
    </div><!--END:ROW2 -->
    
    <div class="row"id="footer"><!--START:ROW3 -->
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