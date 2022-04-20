<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: user.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: user.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

}

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> 
            CodeMap
        </title>
        <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }    
        input[type=text],input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing:border-box;
        }
        button{
            background-color: green;
            color: white;
            padding: 14px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button: hover{
            opacity: 0.8;   
        }
        .imgcontainer{
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        img.avtar{
            width: 0%;
            border-radius: 10%;
        }
        .modal{
        background-color: white;
        overflow: auto;
        padding-top: 100px;
        width: 100%;
        height: 100%;
        top: 0%;
        top: 0%;
        left: 0%;
        z-index: 1;
        position: fixed;
        }
        .modal-content{
        background-color: white;
        margin: 5% auto 15%;
        border: 1px solid black;
        width: 80%;
        }
        .container{
        padding: 16px;
        }

        span.psw{
        float: right;
        padding-top: 16px;
        }
        </style>
        <meta charset="UTF-8">
        </head>
        <body>
        <div class="modal">
        <form class="modal-content animate">
            <div class= "imgcontainer">
        </form>
        <!-- HEADER FOR PAGE -->
        <h1> Log In</h1>
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
    </style>
    </head>
    <ul>
      <li><a href="AstonCV.php">Home</a></li>
      <li><a href="Login.php">Log in</a></li>
      <li><a href="Register.php">Register</a></li>
      <li><a href="PublicCV.php">CV's</a></li>
    </ul>
        <form>
          <div class="imgcontainer">
        <img src="Loginlogo.png" alt="Login" width="200" height="200" / class="avatar">

          </div>
          <div class="container">

        <label>
            Username
        </label>
        <input type="text" placeholder="Username">
        <br />
        <label>
            Password
        </label>
        <input type="password" placeholder="Password">
        <br />
        <label>
            Re-Password
        </label>
        <input type="Re-password" placeholder="Re-Password">
        <br />
        <button>Log in</button>
        <label>
            <p>No account? 
                <a href="Register.php">Signup Now</a></p>
        </label>
        </div> 
        <form>
    </div> 
    </form>
    <body>
