<!DOCTYPE html>  
    <html>  
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <style>  
    body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color:#808080;
     margin:auto;
     color: white;
      width:1000px;
       
    }  
    .container {  
        padding: 50px;  
      background-color:#002a77;  
    }  
      
    input[type=text], input[type=password], textarea {  
      width: 100%;  
      padding: 15px;  
      margin: 5px 0 15px 0;  
      display: inline-block;  
      border: none;  
      background: #f1f1f1;  
    }  
    input[type=text]:focus, input[type=password]:focus {  
      background-color: orange;  
      outline: none;  
    }  
     div {  
                padding: 10px 0;  
             }  
    hr {  
      border: 1px solid #f1f1f1;  
      margin-bottom: 25px;  
    }  
    .registerbtn {  
      background-color: #4CAF50;  
      color: white;  
      padding: 16px 20px;  
      margin: 8px 0;  
      border: none;  
      cursor: pointer;  
      width: 100%;
      text-align: center;  
      opacity: 0.9;  
    }  
    .registerbtn:hover {  
      opacity: 1;  
    }  

a:link {
  color: green;
  background-color: white;
  text-decoration: underline;
}

    </style>  
    </head>  
    <body>  


<div id="doc" class="yui-t7">
  <div id="hd">
    <center><div id="header" ><h2 style="color:white">WELCOME  TO  NextGen Charity BD</h2></div></center>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="CSS/nav.css" type="text/css" />


        <div class="container">  
 
   <center> <h1>-----Login-----</h1> </center>  

<?php




$email_err=$password_err="";
$email=$password="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if($_POST['email']=="")
     $email_err="Email ID is required";
  else
  {
     $email=input_data($_POST['email']);
     if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        $email_err="Invalid email format.";
  }
 
  
  
  if($_POST['password']=="")
    $password_err="password is required";
else
{
$password=input_data($_POST['password']);
if (!preg_match(" #.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) 
{
 $password_err="Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
} 
}
 } 
function input_data($str)
 {
    $str=trim($str);
    $str=stripslashes($str);
    $str=htmlspecialchars($str);
    return $str;
 } 
?>
    <form method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" > 
	      <label for="email"><b>Email:</b></label> 
     <input type="text" placeholder="Enter Email" name="email" required><br><?php echo $email_err; ?>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required> <?php echo $password_err; ?> 
            <button type="submit" name="submit">Login</button>   <br><br>
            <input type="checkbox" checked="checked"> Remember me   <br><br>
             
	    Don't have account? <a href="donor.php" > Register Here </a><br><br><br>
	    Want to register as volunteer? <a href="Volunteer.php" > Register Here </a><br>  
        </div>   
    </form> 
<?php
if(isset($_POST['submit']))
{
   if( $email_err==""  && $password_err=="")
   {  
      $con=pg_connect("host=localhost dbname=typroject user=postgres password=postgres");
   
       $email=$_POST['email'];
       $password=$_POST['password'];
       echo "$email,$password";
       
/*$sql ="select *from donor where email = '".pg_escape_string($_POST['email'])."' and password ='".$password."'";
        $data = pg_query($con,$sql);
             $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        
        echo "Login Successfully";    
    }else{
        
        echo "Invalid Details";
    }*/
 

      $sql ="select * from charity_db where email = '".pg_escape_string($_POST['email'])."' and password ='".$password."'";
        $data = pg_query($con,$sql);
             $login_check = pg_num_rows($data);
    if($login_check > 0)
       { 
       
         $kk=pg_query("insert into login (email,password) values('$email','$password')");
          

         if($kk)
         {
               echo '<script>alert("Your login is successful.")</script>';
               echo '<script> location.replace("payment.php") </script>';    
         }
         else 
                echo '<script>alert("Record not inserted.")</script>';

        }
   else
        echo '<script>alert("you have not registered")</script>';
    }

}     

?>
    
</body>     
</html>
