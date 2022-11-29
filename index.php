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
        echo '<h1>San Diego Padres FanPage | Home</h1>';
        echo $mainNav;





          ?>
      </div>
    </div><!--END:ROW1 -->
    
    <div class="row"id="content"><!--START:ROW2 -->
      <div class="col-3" id="colLeft"><!--START:COL1 -->
<!--         Column left -->
        <img width="300px" src="https://wp.clutchpoints.com/wp-content/uploads/2022/09/Padres-X-reasons-why-San-Diego-will-win-2022-World-Series.jpeg">
      </div><!--END:COL1 -->

      <div class="col m-2"><!--START:COL2 -->
        
        
        <br>
        <img class="imgWrapR" width="400px" src="/images/San-Diego-Padres-logo.png">
        <h3 align="center">Who are the Padres?</h3>
        <p class="paraStyle" id="paraIndent">The San Diego Padres are an American professional baseball team based in San Diego. The Padres compete in Major League Baseball as a member club of the National League West division. Founded in 1969, the club has won two NL pennants—in 1984 and 1998, losing in the World Series both years. As of 2022, they have had 16 winning seasons in franchise history. The Padres are one of two Major League Baseball teams (the other being the Los Angeles Angels) in California to originate from the state; the Athletics were originally from Philadelphia (and moved to the state from Kansas City), and the Dodgers and Giants are originally from two New York City boroughs—Brooklyn and Manhattan, respectively. As of 2022, the Padres are the only team in California not to have won a World Series.</p>
        
      <img class="imgWrapR m-3" width="400px" src="https://miro.medium.com/max/1200/1*0ociBgXiM42xzLVXhCURDw.jpeg">
      <h3 align="center">Where are the Padres?</h3>
      <p class="paraStyle" id="paraIndent">Petco Park is a baseball stadium in Downtown San Diego, California. It is the home ballpark of Major League Baseball's San Diego Padres, and has also been used as a venue for concerts, soccer, golf, and rugby. The ballpark is located between Seventh and 10th Avenues south of J Street. The park opened in 2004, replacing Qualcomm Stadium as the home stadium of the Padres. The southern side of the stadium is bounded by San Diego Trolley light rail tracks along the north side of Harbor Drive, which serve the adjacent San Diego Convention Center. The portion of K Street between Seventh and 10th now is closed to automobiles and serves as a pedestrian promenade along the back of the left and center field outfield seating and also provides access to the Park at the Park behind center field. Two of the stadium's outfield entrance areas are located at K Street's intersections with Seventh and 10th avenues. The main entrance, behind home plate, is at the south end of Park Boulevard (at Imperial) and faces the San Diego Trolley station 12th & Imperial Transit Center. The ballpark is also located approximately 1 mile (1.6 km) away from Santa Fe Depot station, which is served by Amtrak and Coaster.</p>  




        
<!--         <img class="imgWrapL" id="SprTrnImg" width="400px" src="https://www.gannett-cdn.com/-mm-/b3d477ba2da734a204cee6294b18f98aa28445a5/c=0-291-4253-2694/local/-/media/2016/12/06/Phoenix/Phoenix/636166324117693560-padres-sprin.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp"> -->
        <iframe class="imgWrapL mr-3" width="560" height="315" src="https://www.youtube.com/embed/IEhPGap5XJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3 align="center">Spring Training</h3>
      <p class="paraStyle" id="paraIndent">The team has played its spring training games at the Peoria Sports Complex in Peoria, Arizona since 1994. They share the stadium with the Seattle Mariners.
      From 1969 to 1993, the Padres held spring training in Yuma, Arizona at Desert Sun Stadium. Due to the short driving distance and direct highway route (170 miles (270 km), all on Interstate 8), Yuma was very popular with Padres fans, and many fans would travel by car from San Diego for spring training games. The move from Yuma to Peoria was very controversial, but was defended by the team as a reflection on the low quality of facilities in Yuma and the long travel necessary to play against other Arizona-based spring training teams (whose sites were all in the Phoenix and Tucson areas, both rather far from Yuma).</p><br>
<!--         <iframe width="560" height="315" src="https://www.youtube.com/embed/IEhPGap5XJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->



        
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