<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body class="row d-flex justify-content-center">
<?php 
// Include configuration file 
include_once 'config.php'; 
 
// Include database connection file 
include_once 'dbConnect.php'; 
?>
<div class="col-md-6">
<style>
body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color:violet;
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
        <form>
        
            
            <div style="max-width: 400px;"background_colour="green">
            </div>
            <div style="padding-bottom: 18px;font-size : 24px;">Donation</div>
            <div style="display: flex; padding-bottom: 18px;max-width : 550px;">
                <div style=" margin-left: 0; margin-right: 1%; width: 49%;">Name<span style="color: red;"> *</span><br/>
                    <input type="text" id="name" name="name" style="max-width: 100%;" class="form-control" required/>
                </div>
            </div>
            <div style="padding-bottom: 18px;">Phone<span style="color: red;"> *</span><br/>
                <input type="text" name="phone" style="max-width : 550px;" class="form-control" required/>
            </div>
            <div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
                <input type="text" id="email" name="email" style="max-width : 550px;" required class="form-control"/>
            </div background_colour:green;>
            <div style="padding-bottom: 18px;">Donation Amount<span style="color: red;"> *</span><br/>
                <span><input type="radio" id="data_5_0" name="amount" value="50"/> Tk-500</span><br/>
                <span><input type="radio" id="data_5_1" name="amount" value="100"/> Tk-1000</span><br/>
                <span><input type="radio" id="data_5_2" name="amount" value="250"/> Tk-2000</span><br/>
                <span><input type="radio" id="data_5_3" name="amount" value="500"/> Tk-1500</span><br/>
            </div>
            <div style="padding-bottom: 18px;">Comment<br/>
                <textarea id="data_6" false name="comment" style="max-width : 550px;" rows="3" class="form-control"></textarea>
            </div>
            <!-- Specify a Buy Now button. -->
            
            <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="checkout.php">
                        Submit
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>

        </form>