<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Register to make an account </title>
        <meta charset="UTF-8">
    </head>
    <body>
    <!-- HEADER FOR PAGE -->
        <h1> Aston CV Website</h1>
        <!-- NAVIGATION BAR -->
<style>
      BODY{
        font-family :Arial, Helvetica, sans-serif;
        background-color: white;
      }
      * {
          box-sizing: border-box;
      }
      .container{
          padding: 16px;
          background-color: 
      }
      input[type=text],input[type=email],input[type=password]{
          width: 100%;
          height: 5px;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          outline: none;
          background: whitesmoke;

      } 
      input[type=text]:focus, input[type=email]:focus,input[type=password]:focus{
          background-color: #ddd;
          outline: none;
      }
      .registerbtn{
          background-color: aquamarine;
          color: black;
          padding:16px 20px;
          margin: 8px;
          cursor: pointer;
          width: 100%;
      }
      .registerbtn:hover{
          opacity: 1;
      }
      a{
          color: blue;
      }
      .login{
          background: whitesmoke;
          text-align: center;
      }


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
        <div class="container" ></div>
    <ul>
      <li><a href="AstonCV.php">Home</a></li>
      <li><a href="Login.php">Log in</a></li>
      <li><a href="Register.php">Register</a></li>
      <li><a href="PublicCV.php">CV's</a></li>
    </ul>

    <form>

        <h1>Sign up</h1>
        <P> Please fill in this form to create an account</P>
        <form action= "includes/Register.inc.php" method="post">
        <input type ="text"  name="uid"   placeholder="Username" />
        <input type ="password"  name="pwd"   placeholder="Password" />
        <button type="submit" name="submit" >Sign Up</button>
        <p>Already have an account?
        <a href="Login.php">Click here to log in</a></p>
     </form>
     <div>
   <body>
<html>
