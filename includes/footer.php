<?php 
$SITESETTING= selectdatabyid('gard_sitesettings','1');
?>
<style>

    
    .our-clients {
	width: 100%;
	height: auto;
	text-align: center;
}

.our-clients ul {
	padding: 0;
	margin: 0;
}

.our-clients ul li {
	list-style: none;
	display: inline-block;
	width:180px;
	height:140px;
	position: relative;
	overflow: hidden;
	cursor:pointer;
	margin: 10px;
	box-shadow: 0px 0px 10px -7px #555;
	transition: .5s;
}

.our-clients ul li img {
	width: 100%;
	height: 100%;
     /*object-fit: cover;*/
}
.our-clients ul li img:nth-child(1) {
	transform: translateY(0);
	transition: .5s;
}
.our-clients ul li img:nth-child(2) {
	transform: translateY(0);
	transition: .5s;
}

/*Hover-Section*/


.our-clients ul li:hover img:nth-child(1) {
	transform: translateY(-100%);
	transition: .5s;
}
.our-clients ul li:hover img:nth-child(2) {
	transform: translateY(-100%);
	transition: .5s;
}


</style>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-4">
        <div class="our-clients">
            <h4 class="text-white mb-4">Our Partners</h4>
            <ul>
                <li> <img src="img/magical k.jpeg" alt=""> <img src="img/magical k.jpeg" alt=""> </li>
                <li> <img src="img/national youth council.jpeg" alt=""> <img src="img/national youth council.jpeg" alt=""> </li>
                <li> <img src="img/youth affairs.jpeg" alt=""> <img src="img/youth affairs.jpeg" alt=""> </li>
                <li> <img src="img/SANAAFYA_.png" alt=""> <img src="img/SANAAFYA_.png" alt=""> </li>
                <li> <img src="img/keproba.jpg" alt=""> <img src="img/keproba.jpg" alt=""> </li>
                <li> <img src="img/CoG.jpeg" alt=""> <img src="img/CoG.jpeg" alt=""> </li>
                <li> <img src="img/KIPI.jpeg" alt=""> <img src="img/KIPI.jpeg" alt=""> </li>
                <li> <img src="img/Kentrade.png" alt=""> <img src="img/Kentrade.png" alt=""> </li>
            </ul>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Contact Us</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sheriff Trade Centre, Bee Centre, Manyanja Road,1st Floor, Office F48,</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+254(0)202444414, +254(0)764444422,  +254(0)770697900</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i> youthmotionkenya@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://twitter.com/youthmotionke"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.facebook.com/YouthMotionKe/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.youtube.com/channel/UCQAxWONXIu-9NdWBuojuKpg"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.linkedin.com/in/youth-motion-kenya-22ba90235/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="programmes.php">Our Programmes</a>
                <a class="btn btn-link" href="service.php">Events</a>
                <a class="btn btn-link" href="project.php">Gallery</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Newsletter</h4>
                <p>Youth Motion Kenya is an inter-County youth forum for business networking on trade development and investment promotion in the 47 Counties of Kenya.</p>
                <div class="position-relative w-100">
                    <form action="footer.php" method="POST">
                        <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" name="email" type="email" placeholder="Your email" required>
                        <button type="submit" name="subscribe" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer End -->

    <!-- 
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Youth Motion Kenya</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://portfolio-website-plum-psi.vercel.app/">Joan Kamau</a> <!--/*** Distributed By <a href="https://themewagon.com">ThemeWagon</a>***/-->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>