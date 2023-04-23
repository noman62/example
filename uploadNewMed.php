<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $company= $_POST['company'];
    $disease = $_POST['disease'];
    $date = $_POST['date'];
    $description= $_POST['description'];

    $sql = "insert into `allMedicine` (name,weight,company,disease,date,description) 
    values('$name','$weight','$company','$disease','$date','$description')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data inserted successfully";
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Medicine</title>
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
        <a class="navbar-brand" href="index.php">Medicament</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active px-4">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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

    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-4">
                <h3 class="text-center">Upload New Medicine</h3>
            </div>
            <div class="col-sm-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">ওষুধের নাম:</label>
                        <input type="text" class="form-control" placeholder="ওষুধের নাম" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="weight">ওজন:</label>
                        <input type="text" class="form-control" name="weight" placeholder="10 মিলিগ্রাম/মিলি " id="weight">
                    </div>
                    <div class="form-group">
                        <label for="">ফার্মাসিউটিক্যালের নাম:</label>
                        <input type="text" class="form-control" name="company" placeholder="বেক্সিমকো ফার্মাসিউটিক্যালস লি." id="">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">রোগের নাম</label>
                                <input type="text" class="form-control" name="disease" placeholder="রোগের নাম" id="name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">মেয়াদোত্তীর্ণ তারিখ</label>
                                <input class="form-control form-control-sm" name="date" type="date" id="" name='date' />
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <div class="form-group">
                                <label for="">বর্ণনা</label>
                                <textarea  name="description" class="form-control" id="" cols="30" rows="2"></textarea>
                            </div>
                        </div>

                    </div>


                    <button type="submit" class="btn w-100 mb-4 btn-success" name="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>

    <form action="">

    </form>

    <!-- <div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h2>নাপা</h2>
            <p><small>10 মিলিগ্রাম/মিলি <br>
            বেক্সিমকো ফার্মাসিউটিক্যালস লি.</small></p>
        </div>
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">লক্ষণ</h5>
            <p><small>প্যারাসিটামল IV মৃদু থেকে মাঝারি ব্যথার ব্যবস্থাপনার জন্য নির্দেশিত হয়, মাঝারি থেকে গুরুতর ব্যথার অ্যাডজাঙ্কটিভ ওপিওড অ্যানালজেসিক দিয়ে, জ্বর কমানোর জন্য।</small></p>
        </div>
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">বর্ণনা</h5>
            <p><small>প্যারাসিটামল একটি নন-স্যালিসিলেট অ্যান্টিপাইরেটিক এবং নন-ওপিওড অ্যানালজেসিক এজেন্ট। প্যারাসিটামল IV ইনজেকশন হল একটি জীবাণুমুক্ত, পরিষ্কার, বর্ণহীন, নন-পাইরোজেনিক, প্যারাসিটামলের আইসোটোনিক ফর্মুলেশন যা ইন্ট্রাভেনাস ইনফিউশনের উদ্দেশ্যে।</small></p>

        </div>
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">বর্ণনা</h5>
            <p><small>প্যারাসিটামল একটি নন-স্যালিসিলেট অ্যান্টিপাইরেটিক এবং নন-ওপিওড অ্যানালজেসিক এজেন্ট। প্যারাসিটামল IV ইনজেকশন হল একটি জীবাণুমুক্ত, পরিষ্কার, বর্ণহীন, নন-পাইরোজেনিক, প্যারাসিটামলের আইসোটোনিক ফর্মুলেশন যা ইন্ট্রাভেনাস ইনফিউশনের উদ্দেশ্যে।</small></p>
            
        </div>
        
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">ফার্মাকোলজি</h5>
            <p><small>প্যারাসিটামল একটি নন-স্যালিসিলেট অ্যান্টিপাইরেটিক এবং নন-ওপিওড অ্যানালজেসিক এজেন্ট। প্যারাসিটামল IV ইনজেকশন হল একটি জীবাণুমুক্ত, পরিষ্কার, বর্ণহীন, নন-পাইরোজেনিক, প্যারাসিটামলের আইসোটোনিক ফর্মুলেশন যা ইন্ট্রাভেনাস ইনফিউশনের উদ্দেশ্যে।</small></p>
            
        </div>
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">ডোজ এবং প্রশাসন</h5>
            <p><small>প্যারাসিটামল একটি নন-স্যালিসিলেট অ্যান্টিপাইরেটিক এবং নন-ওপিওড অ্যানালজেসিক এজেন্ট। প্যারাসিটামল IV ইনজেকশন হল একটি জীবাণুমুক্ত, পরিষ্কার, বর্ণহীন, নন-পাইরোজেনিক, প্যারাসিটামলের আইসোটোনিক ফর্মুলেশন যা ইন্ট্রাভেনাস ইনফিউশনের উদ্দেশ্যে।</small></p>
            
        </div>
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">প্রতিলক্ষণ</h5>
            <p><small>প্যারাসিটামল একটি নন-স্যালিসিলেট অ্যান্টিপাইরেটিক এবং নন-ওপিওড অ্যানালজেসিক এজেন্ট। প্যারাসিটামল IV ইনজেকশন হল একটি জীবাণুমুক্ত, পরিষ্কার, বর্ণহীন, নন-পাইরোজেনিক, প্যারাসিটামলের আইসোটোনিক ফর্মুলেশন যা ইন্ট্রাভেনাস ইনফিউশনের উদ্দেশ্যে।</small></p>
            
        </div>
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">ক্ষতিকর দিক</h5>
            <p><small>প্যারাসিটামল একটি নন-স্যালিসিলেট অ্যান্টিপাইরেটিক এবং নন-ওপিওড অ্যানালজেসিক এজেন্ট। প্যারাসিটামল IV ইনজেকশন হল একটি জীবাণুমুক্ত, পরিষ্কার, বর্ণহীন, নন-পাইরোজেনিক, প্যারাসিটামলের আইসোটোনিক ফর্মুলেশন যা ইন্ট্রাভেনাস ইনফিউশনের উদ্দেশ্যে।</small></p>
            
        </div>
        
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">সতর্কতা</h5>
            <p><small>প্যারাসিটামল একটি নন-স্যালিসিলেট অ্যান্টিপাইরেটিক এবং নন-ওপিওড অ্যানালজেসিক এজেন্ট। প্যারাসিটামল IV ইনজেকশন হল একটি জীবাণুমুক্ত, পরিষ্কার, বর্ণহীন, নন-পাইরোজেনিক, প্যারাসিটামলের আইসোটোনিক ফর্মুলেশন যা ইন্ট্রাভেনাস ইনফিউশনের উদ্দেশ্যে।</small></p>
            
        </div>
        <div class="col-sm-12">
            <h5 class="bg-secondary text-light p-2">সংরক্ষণাগার শর্তাবলী</h5>
            <p><small>প্যারাসিটামল একটি নন-স্যালিসিলেট অ্যান্টিপাইরেটিক এবং নন-ওপিওড অ্যানালজেসিক এজেন্ট। প্যারাসিটামল IV ইনজেকশন হল একটি জীবাণুমুক্ত, পরিষ্কার, বর্ণহীন, নন-পাইরোজেনিক, প্যারাসিটামলের আইসোটোনিক ফর্মুলেশন যা ইন্ট্রাভেনাস ইনফিউশনের উদ্দেশ্যে।</small></p>
            
        </div>
    </div>
</div> -->


    <!-- Contact us -->




    <!-- <div class="med-contact">
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
</div> -->


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