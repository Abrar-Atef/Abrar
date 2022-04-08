<?php

if ($_POST) {
  $maxResult = 250 ;
  $total = $_POST['Physics_Grade'] + $_POST['Chemistry_Grade'] + $_POST['Biology_Grade'] + $_POST['Math_Grade'] +$_POST['Computer_Grade'];
  $your_result = (($total/$maxResult)*100) ;
  $your_grade = "";
  if ($your_result >= 90){
    $your_grade = "A" ;
  }elseif(  $your_result < 90 && $your_result >=80 ){
    $your_grade = "B" ;
  }elseif( $your_result < 80 && $your_result >=70  ){
    $your_grade = "C" ;
  }elseif( $your_result < 70 && $your_result >=60  ){
    $your_grade = "D" ;
  }elseif( $your_result < 60 && $your_result >=40 ){
    $your_grade = "E" ;
  }else{
    $your_grade = "F" ;
  }
  
}

?>

<!---------------------------Design--------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Even&Odd</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-3">
        <h4 class="fs-2 text-primary">Grade</h4>
      </div>
      <div class="col-4 offset-4">
        <form method="post">
          <div class="mb-3">
            <label for="physics" class="form-label">physics</label>
            <input type="number" class="form-control" id="physics" name="Physics_Grade" placeholder="Enter physics grade">
          </div>
          <div class="mb-3">
            <label for="chemistry" class="form-label">Chemistry</label>
            <input type="number" class="form-control" id="chemistry" name="Chemistry_Grade" placeholder="Enter chemistry grade">
          </div>
          <div class="mb-3">
            <label for="biology" class="form-label">Biology</label>
            <input type="number" class="form-control" id="biology" name="Biology_Grade" placeholder="Enter biology grade">
          </div>
          <div class="mb-3">
            <label for="math" class="form-label">Mathematics</label>
            <input type="number" class="form-control" id="math" name="Math_Grade" placeholder="Enter math grade">
          </div>
          <div class="mb-3">
            <label for="computer" class="form-label">Computer</label>
            <input type="number" class="form-control" id="computer" name="Computer_Grade" placeholder="Enter computer grade">
          </div>
          <button class="btn btn-primary">Result</button>
        </form>
        <div class="alert alert-success">
        <?php
        if (isset($total)) {
           echo ("Max result =". $maxResult . "<br>" . "your total result = " . $total  . "<br>" . "your total precentage = ". $your_result."%" . "<br>" ."your grade is : ". $your_grade
        );
        }
        ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>