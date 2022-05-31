

<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

//echo "Hello World";


//variable are defined by $
//$name = "<p>Shiv";

//$m ="my name is </p>";

//concatenation;
//echo $m.$name;


//or echo $m." ".$name;

//$no=45;
//$cal= $no * 10;

//echo $cal;



//boolean no

//$mybool = true;
 
//echo "<p> This statement is true?".$mybool."</p>";


//$varname= "name";
//echo $$varname;
























//------------------array-------------------


// $myarray = array("rob" , "shiv", "raj" );

// // adding element at end
// $myarray[] = "ram";

// print_r($myarray);

// echo $myarray[1]; 

// echo "<br><br>";

// $another[0] ="pizza";
// $another[1] ="yoghurt";
// $another[5] ="coffee";
// $another["favFood"] ="ice cream";
// print_r($another);

// echo "<br><br>";

// $third=array(
//     "france" => "French",
//     "USA" => "Eng",
//     "India" => "hindi"
// );


// //delete a element
// unset($third["france"]);

// print_r($third);

// //size of array
// echo "<br>".sizeof($third);













//------------------------if statement---------

// $user= "shiv"; 
// if($user == "shiv"){

//     echo "hello shiv";

// } else{
//     echo "i don't know u";
// }



// $age = 25;

// if($age<18 && $user="shiv"){
//     echo "You are underage";
// } else{
//     echo "You may proceed";
// }















// ------------------for loop----------------


// for ($i = 0; i<5; i++){
//     echo  $i;
// } 

// for($j = 2; $j<=30; $j = $j + 2){ 
    
//     echo $j."<br>";

// }



// $myarray = array("rob" , "shiv", "raj" );

// for($i=0; $i<sizeof($myarray); $i++){
//     echo $myarray[$i];
// }








// //foreach loop----------------

// foreach($myarray as $key => $value){
//     $value = $value." Percivel";
//     echo "Array item ".$key." is ".$value."<br> ";
// }


















// -------------while loop------------



// while($i<11){
    //     $c= $i*5;
    //     echo $c."<br>";
    //     $i++;
    // }
    
//     $myarray = array("rob" , "shiv", "raj" );
    
//     $i=0;

// while($i < sizeof($myarray)){
//     echo $myarray[$i]."<br>";
//     $i++;
// }

























//------------------------------GET 

 //here GET is a array which stores data
// print_r($_GET);

// echo $_GET["password"]; 










// echo "Hi there ".$_GET['name']."!";


// 

// <p>What is your name?</p>
// <form>
//     <input name="name" type="text">
    
//     <input name="gender" type="text">
//     <input type="submit" value="Go!">
// </form> -->










// echo "Hi there ".$_GET['name']."!"; 

// print_r($_GET);


// 

// <p>What is your name?</p>
// <form>
//     <input name="name" type="text">
    
//     <input name="gender" type="text">
//     <input type="submit" value="Go!">
// </form> -->

































// if(is_numeric($_GET["number"]) && $_GET["number"] > 0 && $_GET["number"] == round($_GET["number"],0))
// {

//     $i=2;

//      $isPrime = true;
//     while($i<$_GET["number"]){

//         if($_GET["number"] % $i ==0){

//             $isPrime = false;
//         } 

//         $i++;
//     }

//     if($isPrime){
//         echo "<p>".$i." is a prime no </p>";
//     } else{
//         echo "<p>".$i." is  not a prime no </p>";
//     }
// }else if($_GET){
//     echo "<p>Plz Enter a +ve whole no</p>";
// }


//html part

// <p>Enter a Whole no</p>
// <form>
//     <input name="number" type="text">
    
//     <input type="submit" value="Go!">
// </form>




















//------------------------post--------------------


//POST DATA IS NOT SHOWN IN ADDRESS BAR UNLIKE GET VARIABLE;
// print_r($_POST);

// <p>Enter a Whole no</p>
// <form method="post">
//     <input name="number" type="text">
   
//     <input type="submit" value="Go!">
// </form>


















// $arr= array("shiv", "rob", "tarun");
// $id=false;
// for($i=0;$i<sizeof($arr);$i++){
//     if($_POST["name"] == $arr[$i]){
       
//         $id=true;
//     } 

// }
// if($id){
//     echo "<p>Hello ".$_POST["name"]."!</p>";
// }else{
//     echo "<p>Data not found! <br> Unkown User</p>";
// }


// <p>Enter Your name!</p>
// <form method="post">
//     <input name="name" type="text">
   
//     <input type="submit" value="Go!">


// </form>





















//---------------email------------------
$to = "shivam5162323@gmail.com";
$subject ="hello";
$message ="<p>it's body</p>";
$headers = "From: shivamkumar292911@gmail.com";
mail($to,$subject,$message,$headers);
if(mail($to,$subject,$message,$headers)){
    echo "Email was sent successfully";
} else(
    echo "Failed";
)
?>








