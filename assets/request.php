<?php
session_start();
include '../config/config.php';
$sql = "SELECT `name` FROM `education_athourity`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_all($result);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="sassPract/css/normalize.css">
        <link rel="stylesheet" href="sassPract/css/all.min.css">
        <link rel="stylesheet" href="sassPract/css/bootstrap.min.css">
        <link rel="stylesheet" href="sassPract/css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
        <title>request</title>
    </head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <!-- Navigation bar at the top -->
<div class="background">
    <div>
      <nav class="navbar navbar-expand-lg navbar-light  p-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="sassPract/css/img/studentImg/istanbul-metro-logo.png" alt="" width="50" height="40" class="d-inline-block align-text-top ">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item p-2">
                <a class="nav-link fs-4" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item p-2">
                <a class="profileLogOut nav-link position-relative fs-4" aria-current="page" href="#">Log In</a>
              </li>
            </ul>
          </div>
        </div>    
    </nav>                       
      </div>
    <div class="request mt-3 p-3 ms-4">
        <div class="container">
            <h3>Request</h3>
            <hr>
            <form class="row" name="requestForm" method="post" enctype="multipart/form-data" action="../handlers/userRequest.handl.php" >
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <label for="fullName" class=" m-2 ms-2"> Full Name </label>
                    <br>
                    <input type="text" class="stdInput p-2 m-2 " autofocus placeholder=" Your Name" id="fullName" name="fullname"  >
                    <br>
                    <label for="email" class=" m-2 ms-2"> Email </label>
                    <br>
                    <?php
                    if(!empty($_SESSION["email"])){
                      echo $_SESSION["email"];
                    }else{ ?>
                      <input type="email" class="stdInput p-2 m-2" placeholder=" Your Email" id="email" name="email"  >
                    <?php
                    }
                    ?>
                    <br>
                    <label for="national_Id" class=" m-2 ms-2"> National ID</label>
                    <br>
                    <?php
                    if(!empty($_SESSION["national_id"])){
                      echo $_SESSION["national_id"];
                    }else{ ?>
                      <input type="text" class="stdInput p-2 m-2" placeholder="Your National ID" id="national_Id" name="national_id"  
                        pattern="[0-9]{14}">
                    <?php
                    }
                    ?>
                    <br>
                    <label for="phoneNumber" class="m-2 ms-2"> Phone </label>
                    <br>
                    <input type="text" class="stdInput p-2 m-2" placeholder="Your Mobile Number" id="phoneNumber" name="phone"  
                        >
                    <br>
                    <label for="address" class=" m-2 ms-2"> Address </label>
                    <br>
                    <input type="text" class="stdInput p-2 m-2" placeholder="Your Address" id="address" name="address"  >
                </div>
                <div class="col-sm-0 col-md-6 col-lg-4">
                    <label for="eduStage" class="m-2 ms-2"> Education Stage </label>
                    <br>
                    <!-- <input type="text" class="stdInput p-2 m-2" id="eduStage" placeholder="Education Stage"  > -->
                    <select class="stdInput p-1 m-1" id="eduStage" name="edu_stage">
                      <option>University</option>
                      <option>School</option>
                    </select>
                    <br>
                    <label for="eduLevel" class=" m-2 ms-2"> Education Level </label>
                    <br>
                    <!-- <input type="text" class="stdInput p-2 m-2" id="eduLevel"   placeholder="Education Level"> -->
                    <select class="stdInput p-1 m-1" id="eduStage" name="edu_level">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                    </select>
                    <br>
                    <label for="eduAdminstration" class=" m-2 ms-2"> Education Adminstration / University </label>
                    <br>
                    <!-- <input type="text" class="stdInput p-2 m-2" step="" id="eduAdminstration" placeholder="Education Adminstration"  > -->
                    <select class="stdInput p-1 m-1" id="eduStage" name="edu_auth">
                    <?php
                    foreach ($row as $key => $value) {
                      echo "<option value={$value[0]}>"."{$value[0]}</option>";
                    }
                    ?>
                    </select>
                    <br>
                    <!-- <label for="school" class=" m-2 ms-2"> School </label>
                    <br>
                    <input type="text" class="stdInput p-2 m-2" id="school" placeholder="Your School"  > -->
                    <br>
                    <label for="personalPhoto" class="personalPhoto ps-2 p-1 m-5 ms-2" text-white-50>  Your National ID Photo    </label>
                    <input type="file" accept="image/*" class="file p-2 m-2" placeholder="Your photo" id="personalPhoto" name="national_id_img"   >
                    <label for="personalPhoto" class="personalPhoto ps-2 p-1 m-5 ms-2" text-white-50>  Your Personal Photo </label>
                    <input type="file" accept="image/*" class="file p-2 m-2" placeholder="Your photo" id="personalPhoto" name="personal_img"   >
                </div>
                <div class="col-sm-0 col-md-0 col-lg-4">
                    <label for="idPhoto" class="idPhoto ps-2 p-1 mt-5 ms-2"> Your ID Photo </label>
                    <input type="file" accept="image/*" class="file" placeholder=" Your ID Photo" id="idPhoto" name="id_photo"  >
                    <label for="from" class="m-2 ms-2"> From </label>
                    <br>
                    <select class="stdInput p-1 m-1" id="eduStage" name="start_station">
                      <option value="Helwan">Helwan</option>
                      <option value="Ain Helwan">Ain Helwan</option>
                      <option value="Helwan University">Helwan University</option>
                      <option value="Wadi Hof">Wadi Hof </option>
                      <option value="Hadayek Helwan">Hadayek Helwan </option>
                      <option value="El-Maasara">El-Maasara </option>
                      <option value="Tora El-Asmant">Tora El-Asmant </option>
                      <option value="Kozzika">Kozzika </option>
                      <option value="Tora El-Balad">Tora El-Balad </option>
                      <option value="Sakanat El-Maadi ">Sakanat El-Maadi </option>
                      <option value="Maadi">Maadi</option>
                      <option value="Hadayek El-Maadi">Hadayek El-Maadi </option>
                      <option value="Dar El-Salam">Dar El-Salam </option>
                      <option value="El-Zahraa">El-Zahraa</option>
                      <option value="Mar Girgis">Mar Girgis</option>
                      <option value="El-Malek El-Saleh">El-Malek El-Saleh </option>
                      <option value="Al-Sayeda Zeinab">Al-Sayeda Zeinab </option>
                      <option value="Saad Zaghloul">Saad Zaghloul </option>
                      <option value="Sadat">Sadat </option>
                      <option value="Nasser">Nasser </option>
                      <option value="Orabi">Orabi </option>
                      <option value="Al-Shohadaa">Al-Shohadaa</option>
                      <option value="Ghamra">Ghamra </option>
                      <option value="El-Demerdash">El-Demerdash </option>
                      <option value="Manshiet El-Sadr">Manshiet El-Sadr </option>
                      <option value="Kobri El-Qobba">Kobri El-Qobba </option>
                      <option value="Hammamat El-Qobba">Hammamat El-Qobba </option>
                      <option value="Saray El-Qobba">Saray El-Qobba </option>
                      <option value="Hadayeq El-Zaitoun">Hadayeq El-Zaitoun </option>
                      <option value="Helmeyet El-Zaitoun">Helmeyet El-Zaitoun </option>
                      <option value="El-Matareyya ">El-Matareyya </option>
                      <option value="Ain Shams">Ain Shams </option>
                      <option value="Ezbet El-Nakhl">Ezbet El-Nakhl </option>
                      <option value="El-Marg">El-Marg </option>
                      <option value="New El-Marg">New El-Marg </option>

                      <option value="El-Mounib">El-Mounib</option>
                      <option value="Sakiat Mekky">Sakiat Mekky</option>
                      <option value="Omm El-Masryeen">Omm El-Masryeen</option>
                      <option value="El Giza">El Giza</option>
                      <option value="Faisal">Faisal</option>
                      <option value="Cairo University">Cairo University  </option>
                      <option value="El Bohoth">El Bohoth</option>
                      <option value="Dokki">Dokki</option>
                      <option value="Opera">Opera</option>
                      <option value="Sadat">Sadat</option>
                      <option value="Mohamed Naguib">Mohamed Naguib</option>
                      <option value="Attaba">Attaba</option>
                      <option value="Al-Shohadaa">Al-Shohadaa</option>
                      <option value="Masarra">Masarra</option>
                      <option value="Road El-Farag">Road El-Farag</option>
                      <option value="St. Teresa">St. Teresa</option>
                      <option value="Khalafawy">Khalafawy</option>
                      <option value="Mezallat">Mezallat</option>
                      <option value="Kolleyyet El-Zeraa">Kolleyyet El-Zeraa</option>
                      <option value="Shubra El-Kheima">Shubra El-Kheima</option>

                      <option value="Adly Mansour">Adly Mansour</option>
                      <option value="El Haykestep">El Haykestep</option>
                      <option value="Omar Ibn El-Khattab">Omar Ibn El-Khattab</option>
                      <option value="Qobaa">Qobaa</option>
                      <option value="Hesham Barakat">Hesham Barakat</option>
                      <option value="El-Nozha">El-Nozha</option>
                      <option value="Nadi El-Shams">Nadi El-Shams</option>
                      <option value="Alf Maskan">Alf Maskan</option>
                      <option value="Heliopolis Square">Heliopolis Square</option>
                      <option value="Haroun">Haroun</option>
                      <option value="Al-Ahram">Al-Ahram</option>
                      <option value="Koleyet El-Banat">Koleyet El-Banat</option>
                      <option value="Stadium">Stadium</option>
                      <option value="Fair Zone">Fair Zone</option>
                      <option value="Abbassia">Abbassia</option>
                      <option value="Abdou Pasha">Abdou Pasha</option>
                      <option value="El Geish">El Geish</option>
                      <option value="Bab El Shaaria">Bab El Shaaria</option>
                      <option value="Attaba">Attaba</option>
                      <option value="Nasser">Nasser</option>
                      <option value="Maspero">Maspero</option>
                      <option value="Safaa Hegazy">Safaa Hegazy</option>
                      <option value="Kit Kat">Kit Kat</option>
                    </select>
                    <br>
                    <label for="to" class="m-2 ms-2"> To </label>
                    <br>
                    <select class="stdInput p-1 m-1" id="eduStage" name="end_station">
                      <option value="Helwan">Helwan</option>
                      <option value="Ain Helwan">Ain Helwan</option>
                      <option value="Helwan University">Helwan University</option>
                      <option value="Wadi Hof ">Wadi Hof </option>
                      <option value="Hadayek Helwan ">Hadayek Helwan </option>
                      <option value="El-Maasara ">El-Maasara </option>
                      <option value="Tora El-Asmant ">Tora El-Asmant </option>
                      <option value="Kozzika ">Kozzika </option>
                      <option value="Tora El-Balad ">Tora El-Balad </option>
                      <option value="Sakanat El-Maadi ">Sakanat El-Maadi </option>
                      <option value="Maadi ">Maadi </option>
                      <option value="Hadayek El-Maadi ">Hadayek El-Maadi </option>
                      <option value="Dar El-Salam ">Dar El-Salam </option>
                      <option value="El-Zahraa' ">El-Zahraa' </option>
                      <option value="Mar Girgis">Mar Girgis</option>
                      <option value="El-Malek El-Saleh ">El-Malek El-Saleh </option>
                      <option value="Al-Sayeda Zeinab ">Al-Sayeda Zeinab </option>
                      <option value="Saad Zaghloul ">Saad Zaghloul </option>
                      <option value="Sadat ">Sadat </option>
                      <option value="Nasser ">Nasser </option>
                      <option value="Orabi ">Orabi </option>
                      <option value="Al-Shohadaa">Al-Shohadaa</option>
                      <option value="Ghamra ">Ghamra </option>
                      <option value="El-Demerdash ">El-Demerdash </option>
                      <option value="Manshiet El-Sadr ">Manshiet El-Sadr </option>
                      <option value="Kobri El-Qobba ">Kobri El-Qobba </option>
                      <option value="Hammamat El-Qobba ">Hammamat El-Qobba </option>
                      <option value="Saray El-Qobba ">Saray El-Qobba </option>
                      <option value="Hadayeq El-Zaitoun ">Hadayeq El-Zaitoun </option>
                      <option value="Helmeyet El-Zaitoun ">Helmeyet El-Zaitoun </option>
                      <option value="El-Matareyya ">El-Matareyya </option>
                      <option value="Ain Shams ">Ain Shams </option>
                      <option value="Ezbet El-Nakhl ">Ezbet El-Nakhl </option>
                      <option value="El-Marg ">El-Marg </option>
                      <option value="New El-Marg ">New El-Marg </option>

                      <option value="El-Mounib">El-Mounib</option>
                      <option value="Sakiat Mekky">Sakiat Mekky</option>
                      <option value="Omm El-Masryeen">Omm El-Masryeen</option>
                      <option value="El Giza">El Giza</option>
                      <option value="Faisal">Faisal</option>
                      <option value="Cairo University">Cairo University  </option>
                      <option value="El Bohoth">El Bohoth</option>
                      <option value="Dokki">Dokki</option>
                      <option value="Opera">Opera</option>
                      <option value="Sadat">Sadat</option>
                      <option value="Mohamed Naguib">Mohamed Naguib</option>
                      <option value="Attaba">Attaba</option>
                      <option value="Al-Shohadaa">Al-Shohadaa</option>
                      <option value="Masarra">Masarra</option>
                      <option value="Road El-Farag">Road El-Farag</option>
                      <option value="St. Teresa">St. Teresa</option>
                      <option value="Khalafawy">Khalafawy</option>
                      <option value="Mezallat">Mezallat</option>
                      <option value="Kolleyyet El-Zeraa">Kolleyyet El-Zeraa</option>
                      <option value="Shubra El-Kheima">Shubra El-Kheima</option>

                      <option value="Adly Mansour">Adly Mansour</option>
                      <option value="El Haykestep">El Haykestep</option>
                      <option value="Omar Ibn El-Khattab">Omar Ibn El-Khattab</option>
                      <option value="Qobaa">Qobaa</option>
                      <option value="Hesham Barakat">Hesham Barakat</option>
                      <option value="El-Nozha">El-Nozha</option>
                      <option value="Nadi El-Shams">Nadi El-Shams</option>
                      <option value="Alf Maskan">Alf Maskan</option>
                      <option value="Heliopolis Square">Heliopolis Square</option>
                      <option value="Haroun">Haroun</option>
                      <option value="Al-Ahram">Al-Ahram</option>
                      <option value="Koleyet El-Banat">Koleyet El-Banat</option>
                      <option value="Stadium">Stadium</option>
                      <option value="Fair Zone">Fair Zone</option>
                      <option value="Abbassia">Abbassia</option>
                      <option value="Abdou Pasha">Abdou Pasha</option>
                      <option value="El Geish">El Geish</option>
                      <option value="Bab El Shaaria">Bab El Shaaria</option>
                      <option value="Attaba">Attaba</option>
                      <option value="Nasser">Nasser</option>
                      <option value="Maspero">Maspero</option>
                      <option value="Safaa Hegazy">Safaa Hegazy</option>
                      <option value="Kit Kat">Kit Kat</option>
                    </select>
                    <br>
                   <div class="ms-5">
                  <button for="submit" class="btnn rounded-pill" id="makeArequest" type="submit" name="request">Make a request</button>
                </div>
                </div>
            </form>
        </div>

    </div>

</div>
<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/master.js"></script>
</body>

</html>