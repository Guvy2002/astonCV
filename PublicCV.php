<?php
session_start();
$_SESSION;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel = "stylesheet" href="css/CVstyle.css" />  
        <title> AstonCV Website</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <!-- HEADER FOR PAGE -->
        <h1> Aston CV Website </h1>
        <!-- NAVIGATION BAR -->
<style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }
    
    li {
      float: center;
      border-right:1px solid #bbb;
    }
    
    li:last-child {
      border-right: none;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover:not(.active) {
      background-color: #111;
    }
    
    .active {
      background-color: #04AA6D;
    }
    body {
    background-color: white;
    p.solid {border-style: solid;}
   }
  
   h1 {
    color: black;
    text-align: center;
    border: 5px solid black;
  
   }

   h2 {
    color: black;
    text-align: center;
    border: 5px solid black
  
   }

   h3 {
    color: black;
    text-align: center;
    border: 5px solid black
  
   }
 
   h5 {
    color: black;
    text-align: center;
    text-decoration: underline;
  
   }
  
   p {
    font-family: verdana;
    font-size: 20px;
    text-align: center;
   }
  
   a{
    text-align: center;
   }
  
   br{
     text-align: center;
    }
   dl {
    text-align: center; 
   }
  
   img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 40%;
   }
  ul{
    text-align: center;
  }
  </style>
    </head>
    <body>
    
    <ul>
      <li><a href="AstonCV.php">Home</a></li>
      <li><a href="Login.php">Log in</a></li>
      <li><a href="Register.php">Register</a></li>
      <li><a href="PublicCV.php">CV's</a></li>
    </ul>

    <h2> Here is a list of all the CVs showing basic information containing; name, email, contact details, Work experiance and Education History) </h2>

         <p>Name: Gurvir Brar</p>
         <p>Age: 19</p>
         <p>Location:Heathrow</p>
         <label>
            <p><a href="GurvirCV.php">Click here to View Gurvir's CV</a></p>
        </label>

        <p>---------------------------------------------------------------------------------------------------</p>

        <p>Name: Zara Bond</p>
        <p>Age: 32</p>
        <p>Location: Dunstan, Bristol </p>
        <label>
           <p><a href="ZaraCV.php">Click here to View Zara's CV</a></p>
       </label>

       <p>---------------------------------------------------------------------------------------------------</p>

       <p>Name: Kevin Smith</p>
       <p>Age: 35</p>
       <p>Location: Manchester </p>
       <label>
          <p><a href="KevinCV.php">Click here to View Kevin's CV</a></p>
      </label>



        
