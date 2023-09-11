<?php
     require_once('backend/db-con.php');

     $sql = "SELECT * FROM social_contacr";
     $result_social = $db->query($sql);
     $social = $db->fetchAll($result_social);
 
     $sql = "SELECT * FROM logos";
     $result_logos = $db->query($sql);
     $logos = $db->fetchAll($result_logos);
 
     $sql_scripts = "SELECT * FROM scripts";
     $result_sql = $db->query($sql_scripts);
     $scripts = $db->fetchAll($result_sql);
 
     
     $currentFile = __FILE__;
  
     $fullURL = $_SERVER['REQUEST_URI'];      
     $parts = explode('/', $fullURL);     
     $route = end($parts);               

  
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- CSS source file -->
    
        <?php if($route==''){?>
            <link rel="stylesheet" href="reset.css">
    <?php } ?>
    <?php if($route=='about.php'){ ?>
      <link rel="stylesheet" href="aboutus.css">
      <?php }else if($route=='industry.php'){?>   
        <link rel="stylesheet" href="industry.css">
        <?php } ?>
        <?php if($route=='enterprise.php'){
          ?>
          <link rel="stylesheet" href="enterprisesafetyplatfrom.css">
          <?php
        }?>
                <?php if($route=='personal.php'){
          ?>
          <link rel="stylesheet" href="personalsafetyapp.css">
          <?php
        }?> 
        <?php if($route=='journey.php'){
          ?>
          <link rel="stylesheet" href="journeymanagement.css">
          <?php
        }?> 
                <?php if($route=='dial.php'){
          ?>
          <link rel="stylesheet" href="dial.css">
          <?php
        }?>
                      <?php if($route=='monitoring.php'){
          ?>
          <link rel="stylesheet" href="monitoring.css">
          <?php
        }?> 
        
        <?php if($route=='lone.php'){
          ?>
          <link rel="stylesheet" href="lonewalker.css">
          <?php
        }?> 

      <?php if($route=='iot.php'){
          ?>
          <link rel="stylesheet" href="iot.css">
          <?php
        }?> 
    <link rel="stylesheet" href="index.css">

    <!-- REMIXICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">

    <!-- Monserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Bootstrap CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Dial Safe</title>
    <?php
    foreach ($scripts as $script) {
      echo $script['code'];
   
  }
  
  ?>
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-sticky top-0" style="z-index: 1;">
        <div class="container-fluid">
  
          <a class="navbar-brand" href="./">
            <img src="<?php echo $logos[0]['medium'] ?>" alt="logo" style="height: 80px; max-width: 100%;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           
              <li class="nav-item ms-sm-5">
                <a class="nav-link active" aria-current="page" href="about.php" style="color: yellow; font-family: 'Montserrat', sans-serif;">About Us</a>
              </li>

              <li class="nav-item ms-sm-5">
                <a class="nav-link active" href="./#services" style="color: yellow; font-family: 'Montserrat', sans-serif;">Services</a>
              </li>

              <li class="nav-item dropdown ms-sm-5">
                <a style="color: yellow; font-family: 'Montserrat', sans-serif;" class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Industries
                </a>
                <ul class="dropdown-menu" style="height: auto; background-color: #285a94;">
                  <li><a style="color: yellow; font-family: 'Montserrat', sans-serif; font-size: .8em;" class="dropdown-item" href="industry.php">Primary Sector</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat', sans-serif; font-size: .8em;" class="dropdown-item" href="industry.php">Law Enforcement Agency</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat', sans-serif; font-size: .8em;" class="dropdown-item" href="industry.php">Mining Oil & Gas</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat', sans-serif; font-size: .8em;" class="dropdown-item" href="industry.php">Construction & Engineering</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat', sans-serif; font-size: .8em;" class="dropdown-item" href="industry.php">Manufacturing</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat', sans-serif; font-size: .8em;" class="dropdown-item" href="industry.php">Utilities</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat', sans-serif; font-size: .8em;" class="dropdown-item" href="industry.php" style="color: blue;">View all Industries</a></li>
                </ul>
              </li>

              
              <li class="nav-item dropdown ms-sm-5">
                <a style="color: yellow; font-family: 'Montserrat', sans-serif;" class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Solutions
                </a>
                <ul style="background-color: #285a94;" class="dropdown-menu">
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;" class="dropdown-item" href="enterprise.php">Enterprise Safety Platform</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="personal.php">Personal Safety App </a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="journey.php">Journey Management</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="dial.php">Dial 24/7 Risk Assessment</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="monitoring.php">24/7 Monitoring</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="lone.php">Lone Worker</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em; text-decoration: underline;"class="dropdown-item fw-bold" href="iot.php" style="color: red;">Deep Learning IoT and Data Encryption</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="iot.php#dialsafe" style="color: blue;">DIALSAFE</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="iot.php#i-secure" style="color: blue;">I-Secure</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="iot.php#i-dial" style="color: blue;">I-Dial</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="iot.php#i-track" style="color: blue;">I-Track</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="iot.php#dial-threat-hunter" style="color: blue;">Dial-ThreatHunter</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="iot.php#instadial" style="color: blue;">InstaDial</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="iot.php#plume" style="color: blue;">Plume Model</a></li>
                  <li><a style="color: yellow; font-family: 'Montserrat'; font-size: .8em;"class="dropdown-item" href="iot.php#api-library" style="color: blue;">Api Library</a></li>
            

                </ul>
              </li>

              <li class="nav-item ms-sm-5">
                <a class="nav-link active" href="#contact" style="color: yellow; font-family: 'Montserrat', sans-serif;">Contact</a>
              </li>
              

            </ul>

            <div class="ms-auto">
                
                <button style="background-color: yellow; border-radius: 5px;" class="req-btn px-4 py-2 me-3">
                    <a style="color: black; font-family: 'Montserrat', sans-serif;" href="crm.php">Request Demo</a>
                </button>
             
                <button style="background-color: yellow; border-radius: 5px;" class="req-btn px-4 py-2 me-5">
                    <a style="color: black;font-family: 'Montserrat', sans-serif;" href="https://dial24-7portal.com/login" >Log In</a>
                </button>
            </div>
          </div>
        </div>
    </nav>