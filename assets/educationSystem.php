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
    <title> Education system</title>
</head>
<body>
<div class="mainWrapperEdu">
    <!-- start sidebar  --> 
    <nav id="sidebar" class="sidebar toggled bgEdu">
        <div class="sidebar-brand bgEdu" >
            <img src="sassPract/css/img/adminIcons/istanbul-metro-logo.png" class="w-25" alt="" style="filter: invert();"> ETRO
        </div>
        <div class="sidebar-content bgEdu">
            <div class="sidebar-user bgEdu">
                <img src="sassPract/css/img/adminIcons/personal-information.png " class="w-25 img-fluid rounded-circle mb-2" alt="admin">
                <div class="fw-bold text-white">admin name</div>
                <p class="text-white">admin</p>
            </div>

            <ul class="sidebar-nav ">
                    <ul>
                        <li class="sidebar-item eduActive "><a class="sidebar-link text-white" href="#">Requsets</a></li>
                    </ul>
            </ul>
        </div>
    </nav>
    <!-- end side bar  -->
<!-- start main  -->
<!-- start  nav bar  -->
<div class="main d-flex  flex-column bg-light ">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light  p-3 sticky-top">
            <a class=" d-flex me-2 sidebar-toggle">
                <i class="fa-sharp fa-solid fa-bars fa-2x " style="color: white; cursor: pointer;"></i>
            </a>
            </div>
          
      </nav>        
      <!-- end nav bar                 -->
      <!-- start content  -->
   <div class="content d-flex mt-3 p-2">
    <div class="container-fluid">
<div class="header mt-5 mb-5
">
    <h1 class="header-title mb-3 ps-3 colorEdu">
        Education System
    </h1>
   <div class="reqTypeHolder d-flex">
<h3 class="allRequsets ms-3 text-black-50 reqActive" style="cursor: pointer;">Requsets</h3>
   </div>
   <h3 class="ms-3 mt-3">
    <form action="">
        <input type="search " placeholder="   search" class="rounded-pill reqSearch" name="" id="">
    </form>
</h3>
</div>
<div class="row d-flex ">
        <table class="table table-bordered ">
          <thead> <p class="fs-2 bgEdu colorEdu" >Requsets</p></thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>From</th>
              <th>To</th>
              <th>Status</th>
              <th>View</th>
              <th>Confirmation</th>
              <th>Rejection</th>
            </tr>
            <tr>
              <td>1920011</td>
              <td>Ahmed</td>
              <td>Giza</td>
              <td>helwan</td>
              <td>accepted</td>
              <td><button class="viewBtn eduBtnn rounded-pill ">View</button></td>
              <td> <button class="deleteBtn eduBtnn rounded-pill ">Confirm</button> </td>
              <td> <button class="deleteBtn eduBtnn rounded-pill ">Reject</button> </td>
            </tr>
            <tr>
              <td>1920011</td>
              <td>Ahmed</td>
              <td>Giza</td>
              <td>helwan</td>
              <td>accepted</td>
              <td><button  class="rounded-pill viewBtn eduBtnn "> View</button></td>
              <td> <button  class="deleteBtn eduBtnn rounded-pill ">Confirm</button> </td>
              <td> <button  class="deleteBtn eduBtnn rounded-pill ">reject</button> </td>
            </tr>
            <tr>
              <td>1920011</td>
              <td>Ahmed</td>
              <td>Giza</td>
              <td>helwan</td>
              <td>accepted</td>
              <td><button  class="viewBtn eduBtnn rounded-pill ">View</button></td>
              <td> <button  class="deleteBtn eduBtnn rounded-pill ">Confirm</button> </td>
              <td> <button  class="deleteBtn eduBtnn rounded-pill ">reject</button> </td>
            </tr>
       
          </table>
    </div>

</div>

    </div>
   </div>
        </div>
    </div>   
</div>



<!-- end main  -->


</div>

<script src="js/all.min.js"></script>
<script src="js/dashborad.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

    
</body>
</html>