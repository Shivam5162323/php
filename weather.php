<?php
 
// echo $_POST["subject"];
$city =rtrim($_POST["subject"]);
$con = "https://www.weather-forecast.com/locations/".$city."/forecasts/latest";

$final=file_get_contents($con);

$pagearray = explode('<p class="b-forecast__table-description-content"><span class="phrase">',$final);

    // echo $final;
// $weather= $pagearray[1];
// $sec= $pagearray[1].$POST["subject"]." Weather (4–7 days)";
 $secondpage= explode('</span></p></td>',$pagearray[1]);

 $weather= $secondpage[0];


 if (isset($_POST['aaa'])){
    echo '
    <script type="text/javascript">
    location.reload();
    </script>';
 }
?>

<html>
    <head>
        <title>Weather Scraper</title>
        
    <script type="text/javascript" src="jquery.min.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" ></script>


<style>

  .w{
    margin-top: 200px;
  }

  .responsive {
    width: 100%;
    max-height: 500px;
    min-height: 300px;
    height: auto;
  }
</style>
    </head>

    <body class="bg-image responsive"  style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
    height: 100vh">
       
   
 
      <div class="container ">
        
        <h1 class="jumbotron f-1 d-flex justify-content-center  w">What's The Weather?</h1>
        <div class="lead d-flex justify-content-center ">Enter the name of a city</div>
        <form method="post">
        <input type="subject" id="subject" class="form-control mt-3" name="subject" >
        <div class="d-flex justify-content-center">

          <button type="submit" class="btn btn-primary mt-3 mb-3 ">Submit</button>
        </div>
        
</form>


<div id="weather">
  <?php
    if($weather){
        $c= ucfirst($_POST["subject"]);
        echo ucfirst('<h2>'.$c.'</h2>');
        echo '<div class="alert alert-success" role="alert">
        '.$weather.'</div>';
    }else{
        echo '<div class="alert alert-warning" role="alert">
        '."City Not Found".'</div>';
    }
  
  ?>


</div>
<div class="navbar navbar-expand-sm navbar-light bg-light fixed-bottom mt-5">
<div class="contact">
    Get in Touch
</div>
</div>
<div class=" container-fluid bg-dark fixed-bottom ">
<div class="contact text-white p-4 d-flex justify-content-center display-6" >
   <a href="https://ninjaweb516-com.stackstaging.com/6-php/contactform.php" style="text-decoration:none; color: inherit;">Get in Touch</a>
</div>
</div>
    </body>
</html>