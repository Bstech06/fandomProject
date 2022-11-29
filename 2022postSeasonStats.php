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
        echo '<h1>San Diego Padres FanPage | 2022 Post Season Stats</h1>';
        echo $mainNav;





          ?>
      </div>
    </div><!--END:ROW1 -->
    
    <div class="row"id="content"><!--START:ROW2 -->
      <div class="col-3" id="colLeft"><!--START:COL1 -->
        <img width="300px" src="https://wp.clutchpoints.com/wp-content/uploads/2022/09/Padres-X-reasons-why-San-Diego-will-win-2022-World-Series.jpeg">
      </div><!--END:COL1 -->
      <div class="col m-2"><!--START:COL2 -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Player</th>
                
                <th scope="col">Average</th>
                <th scope="col">Runs</th>
                <th scope="col">RBIs</th>
                <th scope="col">Hits</th>
                <th scope="col">HRs</th>
                <th scope="col">BBs</th>
                <th scope="col">SOs</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Manny Machado</th>
                <td>.271</td>
                <td>4</td>
                <td>7</td>
                <td>13</td>
                <td>4</td>
                <td>4</td>
                <td>17</td>
              </tr>
              <tr>
                <th scope="row">Juan Soto</th>
                <td>.239</td>
                <td>7</td>
                <td>7</td>
                <td>11</td>
                <td>2</td>
                <td>4</td>
                <td>10</td>
              </tr>
              <tr>
                <th scope="row">Jake Cronenworth</th>
                <td>.239</td>
                <td>6</td>
                <td>6</td>
                <td>11</td>
                <td>1</td>
                <td>1</td>
                <td>15</td>
              </tr>
              <tr>
                <th scope="row">Trent Grisham</th>
                <td>.200</td>
                <td>8</td>
                <td>5</td>
                <td>8</td>
                <td>3</td>
                <td>4</td>
                <td>15</td>
              </tr>
              <tr>
                <th scope="row">Jurickson Profar</th>
                <td>.250</td>
                <td>6</td>
                <td>5</td>
                <td>11</td>
                <td>1</td>
                <td>8</td>
                <td>8</td>
              </tr>
            </tbody>
          </table>
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