<?php 

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

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
<style>
.hero{
    width: 70%;
    margin: 60px auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.item{
    box-shadow: 0 0 30px 0 rgba(0,0,0,0.7);
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: 30px;
    align-items: center;
    padding: 30px;
    cursor: pointer;
    border-radius: 5px;
}
h2{
    font-size: 24px;
    text-transform: capitalize;
}
.snum{
    font-size: 32px;
}
.icon{
    width: 24px;
    height: 24px;
    color:#f66335;
}
.inner-box{
    grid-column: 2/3;
    display: none;
}
.inner-box img {
    display: block; /* Make the image a block element */
    margin: 0 auto; /* Center the image horizontally */
    max-width: 100%; /* Ensure the image doesn't exceed its container's width */
    filter: brightness(120%); /* Adjust brightness for better visibility */
}
.inner-box p{
    line-height: 1.6;
    margin-bottom: 24px;
    font-size: 20px;
    letter-spacing: 0.5px;
    word-spacing: 2px;
}
.inner-box ul{
    display: flex;
    gap: 20px;
    flex-direction: column;
}
.inner-box ul li{
    margin-left: 16px;
    line-height: 1.5;
    font-size: 20px;
    letter-spacing: 0.5px;
    word-spacing: 3px;
}
.active .inner-box{
    display: block;
}
.active{
    position: relative;
}
.active::after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    border-top: 3px solid #f66335;
    animation: lineanim 1s linear;
}
@keyframes lineanim{
    0%{width: 0;}100%{width: 100%;}
}

</style>
<body>
    <?php include_once('includes/header.php'); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"> Our Programmes</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Programmes</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
        <div class="row g-5 align-items-center justify-content-center">
         <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <h2>Our three main programmes include:</h2> 
        <div class="hero">
            
        <div class="item">
            <p class="snum">01</p>
            <h2>AfCFTA KAZINI Caravan</h2>
            <div class="plus"><ion-icon class="icon" name="add-outline"></ion-icon></div>
           <div class="close"><ion-icon class="icon" name="close-outline"></ion-icon></div>
            <div class="inner-box">
                <img src="img/KAZINI CARAVAN.png" width="300px">
                <p>The AfCFTA KAZINI CARAVAN is an innovative mobile advocacy programme meant to celebrate and
popularize the coming into force of the African Continental Free Trade Area (AfCFTA) that seeks to consolidate
Africa as one market by promoting Intra African trade through free movement of people and goods. The specific
target group for this advocacy are students in higher institutions of learning and the youth of Africa at large to
emphasize on the importance of their involvement in the implementation of AfCFTA so as to benefit from the
opportunities that it brings forth. The maiden caravan took place in 2021 going through 5 Countries namely Kenya, Tanzania, Zambia, Botswana
and South
                </p>
                <p>In 2023, the caravan intends to cover over 20 Countries spread across East, Southern, Western and Northern Africa.</p>
                
            </div>
        </div>
        <div class="item ">
            <p class="snum">02</p>
            <h2>AGOA PROSPER AFRICA</h2>
            <div class="plus"><ion-icon class="icon" name="add-outline"></ion-icon></div>
           <div class="close"><ion-icon class="icon" name="close-outline"></ion-icon></div>
            <div class="inner-box">
            <img src="img/agoa.jpeg" width="300px">
                <p>This is an Export Business Skills Training to build capacity for Kenyan businesses to export from Kenya to the US market. It is implemented in partnership with the American Corner - Moi University Nairobi Campus.The programme involves a 6 months long course that is certified jointly by YOUTH MOTION Kenya and the American Corner Moi University- Nairobi Campus. 
                </p>
                <p>
                To express interest in the programme,, send email to <i>agoa@youthmotion.ke</i> or contact  <i>Maina- 0722707082</i>
                </p>
            </div>
        </div>
        <div class="item">
            <p class="snum">03</p>
            <h2> BOMA AFRIKA</h2>
            <div class="plus"><ion-icon class="icon" name="add-outline"></ion-icon></div>
           <div class="close"><ion-icon class="icon" name="close-outline"></ion-icon></div>
            <div class="inner-box">
            <img src="img/BOMA AFRICA.png" width="300px">
                <p>
                BOMA AFRIKA is an acronym for African Union Clubs that serve as communities of practice for championing Agenda 2063 and the General History of Africa (GHA) in learning institutions in Kenya.
                </p>
                <h1>Background</h1>
                <p>
                On the occasion of the 2nd Pan African Youth Conference 2019 held in Addis Ababa –Ethiopia, the take home message for Youth Motion Kenya was that African youth should be at the forefront of championing the Agenda 2063 at the local level, breathing life into it from a bottom up approach. Aspiration five (5) of the Agenda 2063 envisions an Africa with a strong cultural identity, common heritage, values and ethics. Further, it states that; <i>.....Pan African ideals will be fully embedded in all school curricula and the African creative arts will be celebrated throughout the continent and contribute significantly to self-awareness, well-being and prosperity.....</i> The African Union recommends such Clubs as the structured communities of practice for engaging learners on African affairs.
                </p>
            </div>
        </div>
        
    </div>

        </div>
    </div>

   
            </div>
        </div>
    
    <!-- About End -->
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
   <script>
    const item = document.getElementsByClassName('item');
const plusicon = document.getElementsByClassName('plus');
const closeicon = document.getElementsByClassName('close');

for(let i = 0; i < item.length; i++){
    closeicon[i].style.display = "none";
    item[i].addEventListener('click', () => {
     const showPlus = item[i].classList.toggle("active");
     if(showPlus){
         closeicon[i].style.display = "block";
         plusicon[i].style.display = "none";
     }else{
        closeicon[i].style.display = "none";
        plusicon[i].style.display = "block"; 
     }
    })
}
   </script>
<?php include_once('includes/footer.php'); ?>
</body>

</html>