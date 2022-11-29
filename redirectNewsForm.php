<?
$fullName = explode(" ",$_POST['fullName']);


  
  
$fName = $fullName[0];
$lName = $fullName[1];

$phoneNum = $_POST['phoneNum'];
$reason = $_POST['reason'];
$news = $_POST['news'];

// echo $fullName."<br>";
// echo $fName."<br>";
// echo $lName."<br>";
// echo $reason."<br>";
// echo $message."<br>";

header("Location: /newsForm.php?fName=$fName&lName=$lName&reason=$reason&news=$news&phoneNum=$phoneNum");
?>