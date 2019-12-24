<!DOCTYPE html>
<html>


<head>

  <title>Hospital Management System</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">


<style>

  h1,h2,h3,big {
   font-family: Raleway  }

  .navbar {
      overflow: hidden;
      background-color: #FFD700;
      font-family: 'Open Sans', sans-serif;color: #fff      font-weight: bolder;
  }

  .navbar a {
      float: left;
      font-size: 22px;
      color: black;
      text-align: center;
      padding: 12px 18px;
      text-decoration: none;
  }

  .dropdown {
      float: left;
      overflow: hidden;
      
  }

  .dropdown .dropbtn {
      color: #fff      font-weight: bolder;
      font-size: 22px;    
      border: none;
      outline: none;
      color: purple;
      padding: 12px 18px;
      background-color: inherit;
  }

  .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: white;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: black;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
  }

  .dropdown-content a {
      float: none;
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
  }

  .dropdown-content a:hover {
      background-color:blue;
  }

  .dropdown:hover .dropdown-content {
      display: block;
  }


  div.container {
    width: 100%;
    border: none;
    height: 20px;
               }
  header, footer {
font-family: 'Open Sans', sans-serif;color: #fff;    font-variant: small-caps;
    font-weight: bolder;
    padding: .5em;
    color: white;
    background-color: black ;
    clear: right;
    text-align: center;
          }
    
  table { width: 80%; font-family: 'Open Sans', sans-serif;color: #fff;}
    
  th {
    border: 1px;
    background-color: green;
    height: 50px;
    border-radius: 15px;
       }

  td {text-align: center;border-radius: 15px;border: 1px;}
  td a{
    color: #fff;
  }
  tr:nth-child(even) {background-color: slateblue}
  tr:nth-child(odd) {background-color:}


  input[type=text] {
      width: 300px;
      font-weight: bold;
      box-sizing: none;
      border: 2px red;
      border-radius: 20px;
      font-size: 16px;
      background-color: ;
      background-position: 10px 10px; 
      background-repeat: no-repeat;
      padding: 10px 20px 10px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
  }

  input[type=text]:focus {
      width: 50%;  }

  ::-webkit-input-placeholder { color:#E41B17;}


  .button {
    padding: 10px 20px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: solid red;
    background-color: red;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px black;
  }

  .button:hover {background-color: pink;}

  .button:active {
    background-color:  green;
    box-shadow: 0 2px #666;
    transform: translateY(4px);
  }

  body{ opacity:0.75; }
  h2{ color:blue; }

</style>




</head>
<body background="piashs.jpg">
<body>
<div class="container">
<header>
      <h1> CMH MANAGEMENT SYSTEM</h1>
</header>

<center>

<div class="navbar">
  <a href="home.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Insert 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="paddf.php">Patient</a>
       <a href="daddf.php">Doctor</a>
           
    </div>
  </div> 

<div class="dropdown">
    <button class="dropbtn">View 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="pinfor.php">Patient</a>
       <a href="dinfor.php">Doctor</a>
       <a href="report.php">Report</a>
           
    </div>
  </div>   
  
  <a href="search.php">Search Patient</a>
</div>
</center>