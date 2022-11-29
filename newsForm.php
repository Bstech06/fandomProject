<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php';
if ($_GET ){
    $showData = "yes";
    $fName = $_GET['fName'];
    $lName = $_GET['lName'];
    $reason = $_GET['reason'];
    $phoneNum = $_GET['phoneNum'];
    $news = $_GET['news'];
    
}else {
    $showData = "no data exists";
  }

?>
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
        echo '<h1>San Diego Padres FanPage | New News Form</h1>';
        echo $mainNav;





          ?>
      </div>
    </div><!--END:ROW1 -->
    
    <div class="row"id="content"><!--START:ROW2 -->
      <div class="col m-2">
    
        <form method="post"action="/redirectNewsForm.php">

          <h4>New Padres News Form</h4>
          <h6>Fill out the form to send your new Padres news!</h6>
          
          <strong>What is Your Full Name</strong><br>
          <input type="text" name="fullName"><hr>

          <strong>What is Your Phone Number</strong><br>
          <input type="text" name="phoneNum"><hr>
          
          <strong>Reason For Contact</strong><br>
          <select name="reason">
            <option value="hitter">Hitter News</option>
            <option value="feilder">Feilder News</option>
            <option value="pitcher">Pitcher News</option>
          </select><hr>

          <strong>What is Your News?</strong><br>
          <input type="text" name="news">
          
          <hr>
            <input value="Submit Form"type="submit">
          

          
        </form>

      </div> <!--END of colum 1 -->
      
      
      
      <div class="col m-2"><!--START of colum2 -->
        <img width="375px" align="right" src="https://fansided.com/wp-content/uploads/getty-images/2021/02/1268944522.jpeg">
        <?php
        if ($showData == 'yes'){
        echo "<h4>Form Data</h4><br>";
        echo "<strong>First Name:</strong> ".$fName;
        echo "<br>";
        echo "<strong>Last Name:</strong> ".$lName;
        echo "<br>";
        echo "<strong>Phone Number:</strong> ".$phoneNum;
        echo "<br>";
        echo "<strong>Reason:</strong> ".$reason;
        echo "<br>";
        echo "<strong>News:</strong> ".$news;
        echo "<br>";
        }
        ?>
        

        <br>
        

        
      </div><!--END of colum 2-->
      
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