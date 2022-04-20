<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
    <head> 
        <title> User Page </title>
        <meta charset="UTF-8">
    </head>

<body>
<!-- HEADER FOR PAGE -->
        <h1> User Page </h1>
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
      <li><a href="PublicCV.php">CV's</a></li>
      <li><a href="Logout.php">Logout</a></li>
    </ul>

    <p> WELCOME USER </p>
<body>
