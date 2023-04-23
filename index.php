<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicament</title>
    <!-- my style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap 4 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chicle&family=Courgette&family=Oleo+Script&display=swap" rel="stylesheet"> 
</head>
<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark med-nav ">
        <a class="navbar-brand" href="#">Medicament</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active px-4">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="allMedicine.php">All Medicine</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="contactUS.php">Contact us</a>
            </li>
            <li class="nav-item px-4 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>



      <!-- Hero Section -->
      <div class="">
        <div class="container med-hero">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500https://images.theconversation.com/files/256057/original/file-20190129-108364-17hlc1x.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip" alt="First slide">
                                <div class="carousel-caption text-dark d-none d-md-block">
                                    <h1>মেডিকামেন্ট</h1>
                                    <p>ঔষধ অনুসন্ধান করুন</p>
                                  </div>
                              </div>
                          
                          
                              <div class="carousel-item active">
                            
                                <img class="d-block w-100" src="https://images.theconversation.com/files/256057/original/file-20190129-108364-17hlc1x.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip" alt="First slide">
                           
                                <div class="carousel-caption text-dark d-none d-md-block">
                                  <h1>মেডিকামেন্ট</h1>
                                  <p>ঔষধ অনুসন্ধান করুন</p>
                              </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500https://images.theconversation.com/files/256057/original/file-20190129-108364-17hlc1x.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip" alt="First slide">
                            <div class="carousel-caption text-dark d-none d-md-block">
                              <h1>মেডিকামেন্ট</h1>
                              <p>ঔষধ অনুসন্ধান করুন</p>
                              </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.pexels.com/photos/139398/thermometer-headache-pain-pills-139398.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="First slide">
                            <div class="carousel-caption text-dark d-none d-md-block">
                                <h1>MEDICAMENT</h1>
                                <p>SEARCH YOUR MEDICINE</p>
                              </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
          </div>
      </div>
      

      <?php
      
      if(isset($_POST['search'])) {
        header("Location:http://localhost/medicament/singleMedPage.php");
        exit;
      }
    
  ?>



<!-- Search Section -->
<div>
    <div class="container med-search">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mt-5">
                    আপনার ঔষধ অনুসন্ধান করুন
                </h1>
                <form class="mx-5 mt-4 mb-5" action="" method="POST">
                    
                        <div class="form-row">
                          <div class="col-sm-9 p-1">
                            <input type="text" class="form-control" id="text" placeholder="মেডিসিনের নাম লিখুন" name="text">
                          </div>
                          <div class="col-sm-3 p-1">
                            <button type="submit" class="form-control btn btn-primary" id="myButton">অনুসন্ধান</button>
                          </div>
                        </div>
                      
                </form>
            </div>
        </div>
     </div>
</div>

<script>
    document.getElementById("myButton").onclick = function () {
        location.href = "singleMedPage.php";
    };
</script>

<!-- top Medicine -->
<div class="top-med">
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>শীর্ষ ঔষধ</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card m-4" >
                    <img src="https://diabetesstore.com.bd/image/cache/catalog/All%20medicine%20and%20Manufacturer/Beximco/Napa%20500%20Tablet-400x400.jpg" class="card-img-top" alt="Napa">
                    <div class="card-body">
                      <h5 class="card-title">নাপা</h5>
                      <p class="card-text"><small>প্যারাসিটামল জ্বর, সাধারণ সর্দি এবং ইনফ্লুয়েঞ্জা, মাথাব্যথা, দাঁতের  প্রদাহজনিত ব্যথা এবং শিশুদের টিকাদানের পরে ব্যথার জন্য নির্দেশিত।</small><p>
                      <a href="#" class="btn btn-primary">বিস্তারিত</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="card m-4" >
                    <img src="https://diabetesstore.com.bd/image/cache/catalog/All%20medicine%20and%20Manufacturer/Beximco/Napa%20500%20Tablet-400x400.jpg" class="card-img-top" alt="Napa">
                    <div class="card-body">
                      <h5 class="card-title">নাপা</h5>
                      <p class="card-text"><small>প্যারাসিটামল জ্বর, সাধারণ সর্দি এবং ইনফ্লুয়েঞ্জা, মাথাব্যথা, দাঁতের  প্রদাহজনিত ব্যথা এবং শিশুদের টিকাদানের পরে ব্যথার জন্য নির্দেশিত।</small><p>
                      <a href="#" class="btn btn-primary">বিস্তারিত</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="card m-4" >
                    <img src="https://diabetesstore.com.bd/image/cache/catalog/All%20medicine%20and%20Manufacturer/Beximco/Napa%20500%20Tablet-400x400.jpg" class="card-img-top" alt="Napa">
                    <div class="card-body">
                      <h5 class="card-title">নাপা</h5>
                      <p class="card-text"><small>প্যারাসিটামল জ্বর, সাধারণ সর্দি এবং ইনফ্লুয়েঞ্জা, মাথাব্যথা, দাঁতের  প্রদাহজনিত ব্যথা এবং শিশুদের টিকাদানের পরে ব্যথার জন্য নির্দেশিত।</small><p>
                      <a href="#" class="btn btn-primary">বিস্তারিত</a>
                    </div>
                  </div>
            </div>
           
            
        </div>
    </div>
</div>

<!-- Contact us -->

    


<div class="med-contact">
    <div class="container ">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mt-5">
                    যোগাযোগ করুন
                </h1>
                
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 my-5">
                <img class="w-100" src="https://media.istockphoto.com/photos/contact-us-medical-touchscreen-concept-picture-id1316848283?b=1&k=20&m=1316848283&s=170667a&w=0&h=OY2oSj5HuDjN4JGra55cj5xqmrSQZo3GWlHJ4kwRsQc=" alt="Contact us">
            </div>
            <div class="col-sm-6 my-auto">
                <form action="">
                    <input type="email" class="form-control my-3" placeholder="আপনার ইমেইল আইডি লিখুন">
                    <textarea name="" class="form-control my-3" id="" cols="30" placeholder="আপনার মতামত লিখুন" rows="5"></textarea>
                    <button type="submit" class="w-100 btn btn-success"> জমা দিন</button>
                </form>
            </div>
        </div>
     </div>
</div>


<!-- footer -->
<footer class="bg-dark text-light">
    <div class="container ">
        <div class="row">
            <div class="col-sm-6 pt-5">
                <h2 class="pb-3">Medicament</h2>

                 <p>
                    <span><b>Phone Number:</b> +8888888888</span>
                 </p>
                 <p>
                    <span><b>Email ID:</b> aaa@email.com</span>
                 </p>
                 <p>
                    <span><b>Skype ID:</b> dsdjnd23beee3</span>
                 </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                Copyright @Rupak
            </div>
        </div>
    </div>
</footer>














    <!-- my javascript -->
    <script src="js/script.js"></script>
    <!-- Bootstrap 4 Js cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>