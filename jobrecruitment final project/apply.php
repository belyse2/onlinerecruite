<?php
include ("connection2.php");

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$mdle=$_POST['middlename'];
$cradd=$_POST['currentaddress'];
$paradd=$_POST['permanantaddress'];
$phn=$_POST['phone'];
$em=$_POST['email'];
$cv=$_POST['cv'];
$post= $_POST['position'];
$crimplo=$_POST['currentimployed'];
$date= $_POST['startdate'];
$avallt= $_POST['day'];



if(!isset($_POST['submit']))
{
    header('location:contactus.html?error="press submit"');
    exit();
}
else if(empty($fn) && empty($ln) && empty($mdle) && empty($cradd) && empty($paradd)&&empty($phn)&&empty($em)&&empty($cv)&&empty($post)&&empty($crimplo)&&empty($date)&&empty($avallt)){
    header('location:contactus.html?error="pls fill all field"');
}
else {
    $query="INSERT INTO form (firstname,lastname,middlename,currentaddress,permanantaddress,phone,emal,cv,position,currentimployed,startdate,availability) VALUES('$fn','$ln','$mdle','$cradd','$paradd','$phn','$em','$cv','$post','$crimplo','$date','$avallt');";
    $data=mysqli_query($conn,$query);
}
if($data=="true"){
    echo"your application form has been received";
}
else{
    echo"data failed to inter  into the database ";
} 
if($query=="true")
{
    echo"not passing";
}
else{
   // echo" passing";
}
if(isset($_POST['edit_btn'])){
    $id=$_POST['edit_id'];
    echo $id;
}



?>