<?php
// $siteTitle = "<h1>San Diego Padres FanPage | </h1>";


$mainNav = "<img width='50px' src='/images/San-Diego-Padres-logo.png'>
<a class='titleLinkColor'href='/index.php'>Home</a> | <a class='titleLinkColor' href='/media.php'>Media</a> | <a  class='titleLinkColor'href='/2022postSeasonStats.php'>Post Season Stats</a> | <a class='titleLinkColor' href='/newsForm.php'>Padres News Form<a/> | <a class='titleLinkColor' href='/tatisCountDown.php'>Tatis Count Down</a>";


$footer = ' No affiliation to The San Diego Padres, MLB or any other major assosiations<br>

<a class="titleLinkColor"href="/index.php">Home</a> | <a class="titleLinkColor" href="/media.php">Media</a> | <a  class="titleLinkColor"href="/2022postSeasonStats.php">Post Season Stats</a> | <a class="titleLinkColor" href="/newsForm.php">Padres News Form<a/> | <a class="titleLinkColor" href="/tatisCountDown.php">Tatis Count Down</a><br><br>

<a class="titleLinkColor" target="_blank" href="https://www.instagram.com/padres/">San Diego Padres Instagram</a> | <a class="titleLinkColor" target="_blank" href="https://www.instagram.com/mlb/">Major League Baseball Instagram</a>

<br><br>

<a target="_blank" href="https://docs.google.com/document/d/1ZXlF_ed-bHHF3MdTKwWA7-lo2NNVhMLQqWxguwdP-sI/edit" class="titleLinkColor">Creator\'s Rubric</a> | <a class="titleLinkColor" target="_blank" href="mailto:366464@guhdsd.net">Creator\'s Email</a>


<button onclick="topFunction()" id="myBtn" title="Go to top">^</button><script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>';
?>