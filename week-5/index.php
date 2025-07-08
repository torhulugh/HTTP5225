<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        body{
            background-color: #002;
            color: white;
        }
    </style> -->
</head>
<body>
<h1>php and mysql</h1>

   <?php
  if(isset($_POST['AddSchool'])){
    //Array ( [BoardName] => Garys School [SchoolName] => Gary public shhcool [AddSchool] => Add School )
    $BoardName = $_POST['BoardName'];
    $SchoolName = $_POST['SchoolName'];

    require('connect.php');
    $query = "INSERT INTO schools 
                (`Board Name`, `School Name`) 
              VALUES ('$BoardName', '$SchoolName')";
    $school = mysqli_query($connect, $query);
    //print_r($school);
    if($school){
      header('Location: index.php');
    }
  }
?>
</body>
</html>