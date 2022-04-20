<?php
session_start();
$_SESSION;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel = "stylesheet" href="css/style.css" />  
        <title> Zara Bond CV Web Page </title>
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
    
    <ul>
      <li><a href="AstonCV.php">Home</a></li>
      <li><a href="login.php">Log in</a></li>
      <li><a href="Register.php">Register</a></li>
      <li><a href="PublicCV.php">CV's</a></li>
    </ul>
    
<!-- CONTACT DETAILS -->

      <h2>Contact Detail:</h2>
<dl>
  <dt>Email: Z.bond2000@gmail.com</dt>
  <dt>Contact Number: 07912345678</dt>
</dl>

<!-- EDUCATION -->

      <h2>Personal Statement:</h2>
<dl>
<h3> <dt>University:</dt></h3>
  <dd> •  Bachelor of Science, Accounting & Finance 2007 Univeristy of Bristol  </dd>
  <h3>  <dt>ACCA Certification,2009:</dt> </h3>
  <dd> • Association of Chartered Certified Accountants </dd>

<!-- WORK EXPERIANCE -->

      <h2>Work Experiance:</h4>
<dl>
  <h5> Accountant, 06/2019 - Current: Happy & Chaps </h5>
  <dd> •	Completed month ans year-end close procedures and reconclied all bank accounts </dd>
  <dd> •	Created and implemented procedures and best practices for bank reconcliations process and completed balance sheet reconciliations</dd>
  <dd> •    Generated and presented monthly financial statments to senior management </dd>
</dl>

<dl>
    <h5> Accountant, 04/2013 - 05/2019: Lovely lunches</h5>
    <dd> •	 Analysed files and accounts for discrepancies and resolved variances </dd>
    <dd> •	 Collected and reviewed employee, department, and company-wide financial information</dd>
    <dd> • 	 Reduced annual tax adjustments by 40% through better financial control</dd>
</dl>

<dl>
    <h5> Trainee Accountant, 09/2007 - 03/2013: James & Whittington </h5>
    <dd> •	Maintained accurate and complete documentation for alll financial department procedures</dd>
    <dd> •	Completed financial reports to inform managers and stakeholders</dd>
    <dd> • 	Evauluated employee expense reports and verified accuracy </dd>
    <dd> • 	Processed payroll for approximatley 60 total employees </dd>
</dl>

<!-- SKILLS -->

       <h2>Skills:</h4>
<dl>
    <dd> 	Payroll oversight. </dd>
    <dd> 	Invoicing and collections.  </dd>
    <dd>    Months-end reports.  </dd>
    <dd> 	Expense reports. </dd>
    <dd> 	Self-motivated professional. </dd>
    <dd> 	Strong communication skills. </dd>
    <dd> 	Data trending knowledge. </dd>
</dl>
</body> 
