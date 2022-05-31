<?php



$to ="shivam5162323@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.$_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
if(mail($to, $subject, $message, $headers);){
    echo "Success";
}
?>



<html>
    <head>
        <title>Form</title>
        
    <script type="text/javascript" src="jquery.min.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" ></script>

    </head>

    <body>


        <div class="container-fluid">
            <div class=" navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <h1 class="jumbotron m-4 display-3 text-white col-md-12" style="text-align: center;">Get in Touch!</h1>
        </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
         <form class=" ml-4">



                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-10 mx-auto col-form-label fs-5">Email</label>
                    <div class="col-sm-10 col-sm-6 mx-auto">
                      <input type="email" name="email" class="form-control" id="inputEmail3">
                      <div class="fw-light  mt-1">We'll never share your email with anyone else.</div>
                    </div>
                  </div>



         
          <div class=" row mb-3 ">
            <label for="subject" class="col-sm-10 mx-auto col-form-label fs-5">Subject</label>
            <div class="col-sm-10 col-sm-6 mx-auto">

            <input type="subject" name="subject" class="form-control" id="subject">
          </div></div></div>




          <div class=" row mb-3 mt-4  ">
            <label for="body" class="col-sm-10 mx-auto col-form-label fs-5">What would you like to ask us?</label>
            <div class=" col-sm-6 mx-auto col-sm-10 "><textarea class="form-control" name="message"aria-label="With textarea"></textarea>
          </div></div>

          <div class=" col-sm-10 col-sm-6 mx-auto ">
          <button type="submit" class="btn btn-primary ">Submit</button>
          </div>
   
        
    </form>

    </body>
</html>
 