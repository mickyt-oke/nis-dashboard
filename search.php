<?php
    $con= new mysqli('localhost','root','','nis_db')or die("Could not connect to mysql".mysqli_error($con));
?>

<!DOCTYPE html>
    <html lang="en" dir="ltr">
           <head>
                    <meta charset="utf-8">
                    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                    <meta content="Nigeria Immigration Foreign Diplomatic Missions Dashboard" name="description">
                    <meta content="MIckyT" name="author">
                    <!-- Title -->
                    <title>SEARCH | NIS DIPLOMATIC MISSIONS</title>
                    <!-- Favicon -->
                    <link href="assets/img/brand/favicon.ico" rel="icon" type="image/icon" />
                    <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
                    <!-- Icons -->
                    <link href="assets/css/icons.css" rel="stylesheet">
                    <!--Bootstrap.min css-->
                    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
                     <!-- plugin stylesheets -->
                    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
                    <!-- app style -->
                    <link rel="stylesheet" type="text/css" href="assets/css/style2.css" />
           </head>

     <body oncontextmenu="return false;">
     <?php
     if (isset($_POST['submit'])){
     if (isset($_GET['go'])){
     if (preg_match("/[A-Z | a-z | 0-9]+/", $_POST['search'])){
     $search = $_POST['search'];

     //query the database
     $sql = mysqli_query($con, "SELECT * FROM `tbl_directory` WHERE mission = '".$search."' OR country LIKE '%$search%'");
     if(mysqli_num_rows($sql) == 0) {
         echo "<h3 align=\"center\">Result Not Found! <a href=\"index.php\" style=\"color:red;\">Go back to Index Search</a></h3>";
     }
     else if ($r = mysqli_fetch_array($sql)) {

     ?>


     <div class="app-main" id="main">
         <div class="container-fluid">
     <div class="row">
         <div class="col-md-12 m-b-30">
     <div class="d-block d-sm-flex flex-nowrap align-items-center">
         <div class="page-title mb-2 mb-sm-0">
             <h1><?php echo $r['country']; ?> Mission Directory</h1>
         </div>
         <div class="ml-auto d-flex align-items-center">
             <nav>
                 <ol class="breadcrumb p-0 m-b-0">
                     <li class="breadcrumb-item">
                         <a href="#"><i class="fa fa-home"></i> </a>
                     </li>
                     <a href="index.php"><li class="breadcrumb-item active text-primary" aria-current="page">Back to Index</li></a>
                 </ol>
             </nav>
         </div>
     </div>
         </div>
     </div>

             <div class="row account-contant">
                         <div class="col-12">
                             <div class="card card-statistics">
                                 <div class="card-body p-0">
                                     <div class="row no-gutters">
                                         <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                             <div class="page-account-profil pt-5">
                                                 <div class="profile-img text-center rounded-circle">
                                                     <div class="pt-5">
                                                         <div class="bg-img m-auto">
                                                             <img src="<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $r['logo'] ).'"/>' ?>" class="img-fluid" alt="" />
                                                         </div>
                                                         <div class="profile pt-4">
                                                             <h3><?php echo $r['mission']; ?></h3>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                             <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                                                 <div class="page-account-form">
                                                     <div class="form-titel border-bottom p-3">
                                                         <h5 class="mb-0 py-2">Mission Address</h5>
                                                     </div>
                                                     <div class="p-4">
                                                         <h4><?php echo $r['address']; ?></h4>
                                                     </div>
                                                     <hr />
                                                     <div class="p-4">
                                                         <h4>Zipcode: <?php echo $r['zipcode']; ?></h4>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xl-4 col-md-6 border-t col-12">
                                                 <div class="page-account-form">
                                                     <div class="form-titel border-bottom p-3">
                                                         <h5 class="mb-0 py-2">Immigration Attache</h5>
                                                     </div>
                                                     <div class="p-4">
                                                         <p><?php echo $r['img_attache']; ?></p>
                                                         <p><?php echo $r['email']; ?></p>
                                                         <p><?php echo $r['contactno']; ?></p>
                                                     </div>
                                                     <hr />
                                                     <div class="p-4">
                                                         <p><?php echo $r['img_attache2']; ?></p>
                                                         <p><?php echo $r['email2']; ?></p>
                                                         <p><?php echo $r['contactno2']; ?></p>
                                                     </div>
                                                 </div>
                                             </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
             <?php      }
                 }
                     }
             }
         ?>
         </div>
     </div>
         <footer class="footer">
             <div class="row align-items-center justify-content-xl-between">
                 <div class="col-xl-6">
                     <div class="copyright text-center text-xl-left text-muted">
                         <p class="text-sm font-weight-500">© Non-copyright License 2019</p>
                     </div>
                 </div>
                 <div class="col-xl-6">
                     <p class="float-right text-sm font-weight-500"><a href="#">NIS Foreign Missions Dashboard</a></p>
                 </div>
             </div>
         </footer>

 </body>
</html>
