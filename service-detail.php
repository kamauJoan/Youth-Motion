<?php 
include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

$SERVICEDATA = selectdatabyid('gard_services', $_GET['servid']); // Fetch service data from the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Youth Motion Kenya</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include_once('includes/css.php'); ?>
</head>
<body>
    <?php include_once('includes/header.php'); ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Events</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Service Start -->
    <div class="container-xxl py-5 ">
        <div class="container">
            <div class=" text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h4 class="display-5 mb-5">Our Event</h4>
            </div>
            <div class="row g-4">
                <div class="col-xl-12">
                    <!-- Display service image -->
                    <div class="service-img rounded">
                        <img class="img-fluid" src="admin/uploads/<?php echo $SERVICEDATA['image']; ?>" alt="">
                    </div>
                    <h2><?php echo $SERVICEDATA['name']; ?></h2>
                    <?php echo $SERVICEDATA['description']; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <?php include_once('includes/footer.php'); ?>
</body>
</html>
